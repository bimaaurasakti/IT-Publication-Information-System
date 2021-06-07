<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conferences = [
            [
                'name' => 'IWMTS 2021',
                'long_name' => '2021 Fourth International Workshop on Mobile Terahertz Systems (IWMTS)',
                'slug' => '2021-fourth-international-workshop-on-mobile-serahertzsystems-iwmts',
                'area' => 'Antennas, Communication theory, Electrical and computer engineering, Sensors, Wireless communications',
                'link_website' => 'http://www.iwmts.org/',
                'location' => 'Essen, Germany',
                'date' => 'Jul 5, 2021',
            ], [
                'name' => 'ScalCom 2021',
                'long_name' => 'The 21th IEEE International Conference on Scalable Computing and Communications',
                'slug' => 'the-21th-ieee-international-conference-on-scalable-computing-and-communications',
                'area' => 'Communications, Computer architecture, Computing & Communications',
                'link_website' => 'http://ieeesmartworld.org/scalcom/',
                'location' => 'Atlanta*, USA',
                'date' => 'Oct 17, 2021',
            ], [
                'name' => 'INCoS-2021',
                'long_name' => 'The 13-th International Conference on Intelligent Networking and Collaborative Systems (INCoS-2021)',
                'slug' => 'the-13-th-international-conference-on-intelligent-networking-and-collaborative-systems-incos-2021',
                'area' => 'Artificial intelligence, Computer networks - peer-to-peer, Computing & Communications, Data Mining, E-Commputing (e-learning, e-government, e-commerce, etc.)',
                'link_website' => 'http://voyager.ce.fit.ac.jp/conf/incos/2021/',
                'location' => 'Asia University, Taichung, Taiwan',
                'date' => 'Sep 1, 2021',
            ], [
                'name' => '	NBiS-2021',
                'long_name' => 'the-24-th-international-conference-on-network-based-information-systems-nbis-2021',
                'slug' => 'the-13-th-international-conference-on-intelligent-networking-and-collaborative-systems-incos-2021',
                'area' => 'Computer networks',
                'link_website' => 'http://voyager.ce.fit.ac.jp/conf/nbis/2021/',
                'location' => 'Asis University, Taichung, Taiwan',
                'date' => 'Sep 1, 2021',
            ], [
                'name' => '	APNOMS 2021',
                'long_name' => 'The 22nd Asia-Pacific Network Operations and Management Symposium)',
                'slug' => 'the-22nd-asia-pacific-network-operations-and-management-symposium',
                'area' => 'Computer networks - management',
                'link_website' => 'http://voyager.ce.fit.ac.jp/conf/nbis/2021/',
                'location' => 'Asis University, Taichung, Taiwan',
                'date' => 'Sep 1, 2021',
            ], [
                'name' => '	iSemantic 2021',
                'long_name' => '2021 International Seminar on Application for Technology of Information and Communication (iSemantic)',
                'slug' => '2021-international-seminar-on-application-for-technology-of-information-and-communication-isemantic',
                'area' => 'Electrical and computer engineering',
                'link_website' => 'http://isemantic.dinus.ac.id/2021/',
                'location' => 'virtual*, Indonesia',
                'date' => 'Sep 18, 2021',
            ],
        ];
        foreach($conferences as $conference) {
            Conference::create($conference);
        }
    }
}
