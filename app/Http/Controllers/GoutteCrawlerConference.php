<?php

namespace App\Http\Controllers;

use Goutte\Client;
use App\Models\Conference;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\DomCrawler\Link;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;


class GoutteCrawlerConference extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        ini_set('max_execution_time', 60);
    }

    public function passLoginEdas()
    {
        $client = new Client(HttpClient::create([
            'max_redirects' => 5,
        ]));
        $crawler = $client->request('GET', 'https://www.edas.info/listConferencesSubmit.php?_qf__listConferencesSubmit=&name=computer&action=Search');

        // login Edas
        $form = $crawler->selectButton('Log on')->form();
        $form['username'] = 'bimaaurasakti2001@it.student.pens.ac.id';
        $form['password'] = 'Bima2001';
        $crawler = $client->submit($form);

        $form = $crawler->selectButton('Search')->form();
        $form['name'] = 'Computer';
        $crawler = $client->submit($form);

        $conferenceData = $this->getConferenceData($client, $crawler);

        // delete all data from table
        // Conference::truncate();
        Conference::where('id', '>', 0)->delete();

        // insert to database
        foreach($conferenceData as $conference) {
            Conference::create($conference);
        }

        dd($conferenceData);
    }

    public function getConferenceData($client, $crawler)
    {

        $tableRow = [];
        $tableRow = $crawler->filter('tbody tr');

        // loop the source link
        $_this = $this;
        $conferenceData = $tableRow->each(function ($node) use($_this, $client) {
            $tableColumn = $node->filter('td');

            $journalData = [];
            $journalData['area'] = $_this->changeDataParentheses($tableColumn->eq(0));
            $journalData['name'] = $tableColumn->eq(1)->text();
            $journalData['slug'] = Str::slug($journalData['name'], '-');
            $journalData['long_name'] = $tableColumn->eq(2)->text();
            $journalData['link_website'] = $tableColumn->eq(3)->filter('a')->eq(0)->link()->getUri();
            $journalData['location'] = $tableColumn->eq(4)->filter('div')->eq(0)->text();
            $journalData['date'] = $tableColumn->eq(4)->filter('div')->eq(1)->text();

            return $journalData;
        });

        return $conferenceData;
    }

    public function changeDataParentheses($node)
    {
        if(str_contains($node->filter('td')->eq(0)->text(), ' (')){
            $openBracket = explode(' (', $node->filter('td')->eq(0)->text());
            $closeBracket = explode('), ', $openBracket[1]);
            $closeBracket[0] = '(' . str_replace(' ', '', $closeBracket[0]) . '),';
            array_unshift($closeBracket, $openBracket[0]);
            return implode(" ", $closeBracket);
        }
        else {
            return $node->filter('td')->eq(0)->text();
        }
    }

}
