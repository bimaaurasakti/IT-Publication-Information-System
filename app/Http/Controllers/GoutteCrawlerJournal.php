<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Goutte\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Link;
use Symfony\Component\HttpClient\HttpClient;

class GoutteCrawlerJournal extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        ini_set('max_execution_time', 300);
    }

    public function loopTableIndex()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://sinta.ristekbrin.go.id/journals?page=1&q=computer&search=1&sinta=&pub=&city=&pubid=&area=10');

        $journalData = [];
        $tablePageAmount = explode(' ', $crawler->filter('.uk-table caption')->text())[3];
        for($index = 1; $index <= $tablePageAmount; $index ++) {
            array_push($journalData, $this->getSourceUrl('https://sinta.ristekbrin.go.id/journals?page='. $index .'&q=computer&search=1&sinta=&pub=&city=&pubid=&area=10', $client));
        }
        $journals = array_reduce($journalData, 'array_merge', array());

        // delete all data from table
        // Journal::truncate();
        Journal::where('id', '>', 0)->delete();

        // insert to database
        foreach($journals as $journal) {
            Journal::create($journal);
        }

        dd($journals);
    }

    public function getSourceUrl($url, Client $client)
    {
        $crawler = $client->request('GET', $url);

        $anchor = [];
        $anchor = $crawler->filter('.uk-description-list-line dt a');


        // loop the source link
        $_this = $this;
        $journalData = $anchor->each(function ($node) use($_this, $client) {
            $anchorLink = $node->link();
            $impact = $node->closest('tr')->filter('td')->eq(2)->text();

            return $_this->getJournalData($anchorLink, $client, $impact);
        });

        return $journalData;
    }

    public function getJournalData(Link $link, Client $client, $impact)
    {
        $crawler = $client->click($link);

        $journalData = [];
        $journalData['title'] = $crawler->filter('.au-name')->text();
        $journalData['slug'] = Str::slug($crawler->filter('.au-name')->text(), '-');
        $journalData['area'] = str_replace(' ', ', ', $crawler->filter('.au-affil')->eq(1)->text());
        $journalData['score'] = $crawler->filter('.stat-num')->text();
        $journalData['impact'] = $impact;
        $journalData['institute'] = $crawler->filter('.au-department')->text();
        $journalData['publisher'] = ltrim(str_replace('Penerbit:', '', $crawler->filter('.uk-list li')->eq(0)->text()));
        $journalData['link_website'] = $crawler->filter('.uk-list li')->eq(1)->selectLink('Website')->link()->getUri();

        $address = explode('<br>', preg_replace("/\s+/", " ", $crawler->filter('.uk-list li')->eq(2)->html()));
        $journalData['address'] = str_replace(' <div class="desc-item-lbl">Address:</div> ', '', $address[0]);
        $journalData['district'] = trim($address[1]);
        $journalData['email'] = trim(str_replace('Email:', '', $crawler->filter('.uk-list li')->eq(3)->text()));
        $journalData['phone'] = trim(str_replace('Phone:', '', $crawler->filter('.uk-list li')->eq(4)->text()));
        $journalData['photo'] = $crawler->filter('.journal-cover-big')->image()->getUri();

        return $journalData;
    }

}
