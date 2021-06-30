<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $journals = [
            [
                'title' => 'International Journal of Electrical and Computer Engineering',
                'slug' => 'international-journal-of-electrical-and-computer-engineering',
                'area' => 'Science, Engineering',
                'score' => 'S1',
                'impact' => 6.28,
                'institute' => 'Institute of Advanced Engineering and Science (IAES)',
                'publisher' => 'Institute of Advanced Engineering and Science (IAES)',
                'link_website' => 'http://ijece.iaescore.com/index.php/IJECE',
                'address' => 'C5 JEC Residence, Banguntapan, Bantul, Yogyakarta 55198, Indonesia',
                'district' => 'Yogyakarta',
                'email' => 'ijece@iaescore.com',
                'photo' => 'https://scholar.googleusercontent.com/citations?view_op=medium_photo&user=tUzllxsAAAAJ&citpid=2',
            ], [
                'title' => 'International Journal of Power Electronics and Drive Systems',
                'slug' => 'international-journal-of-power-electronics-and-drive-systems',
                'area' => 'Engineering',
                'score' => 'S1',
                'impact' => 5.78,
                'institute' => 'Institute of Advanced Engineering and Science (IAES)',
                'publisher' => 'Universitas Ahmad Dahlan (UAD) bekerjasama dengan Institute of Advanced Engineering and Science (IAES)',
                'link_website' => 'http://ijpeds.iaescore.com/index.php/IJPEDS',
                'address' => '1. Department of Electrical Engineering, Faculty of Industrial Technology, Universitas Ahmad Dahlan, 4th Campus, Jl. Ringroad Selatan, Kragilan, Tamanan, Banguntapan, Bantul, Yogyakarta 2. D2 Griya Ngoto Asri, Bangunharjo, Sewon, Bantul, Yogyaka',
                'district' => 'Yogyakarta',
                'email' => 'ijpeds@iaesjournal.com',
                'photo' => 'https://scholar.googleusercontent.com/citations?view_op=medium_photo&user=SYIGlnMAAAAJ&citpid=2',
            ], [
                'title' => 'TELKOMNIKA (Telecommunication Computing Electronics and Control)',
                'slug' => 'telekomnika-telecommunication-computing-electronics-and-control)',
                'area' => 'Science, Engineering',
                'score' => 'S1',
                'impact' => 5.34,
                'institute' => 'Universitas Ahmad Dahlan',
                'publisher' => 'Universitas Ahmad Dahlan (UAD) in collaboration with Institute of Advanced Engineering and Science (IAES)',
                'link_website' => 'http://journal.uad.ac.id/index.php/telkomnika',
                'address' => 'Kampus 4 UAD, Jln. Ringroad Selatan, Tamanan, Yogyakarta 55191',
                'district' => 'Yogyakarta',
                'email' => 'telkomnika@ee.uad.ac.id',
                'phone' => '0274-563515, 511830, 379418, 371120 psw 3208',
                'photo' => 'https://scholar.google.com/citations?view_op=medium_photo&user=THg5KOgAAAAJ&citpid=2',
            ], [
                'title' => 'Indonesian Journal of Electrical Engineering and Computer Science',
                'slug' => 'indonesian-journal-of-electrical-engineering-and-computer-science',
                'area' => 'Science, Engineering',
                'score' => 'S1',
                'impact' => 3.72,
                'institute' => 'Institute of Advanced Engineering and Science (IAES)',
                'link_website' => 'http://ijeecs.iaescore.com/index.php/IJEECS',
                'address' => '1. UAD Insitute of Scientific Publication and Press (LPPI), 9th Floor, 4th Campus of Universitas Ahmad Dahlan, Tamanan, Banguntapan, Bantul, Yogyakarta 55191 2. C5 JEC Residence, Plumbon, Banguntapa, Yogyakarta 55198',
                'district' => 'Yogyakarta',
                'email' => 'ijeecs.iaes@gmail.com',
                'phone' => '',
                'photo' => 'https://scholar.googleusercontent.com/citations?view_op=medium_photo&user=zjG_ufEAAAAJ&citpid=2',
            ], [
                'title' => 'Journal of Educational Science and Technology',
                'slug' => 'journal-of-educational-science-and-technology',
                'area' => 'Education, Engineering',
                'score' => 'S2',
                'impact' => 3.18,
                'institute' => 'Universitas Negeri Makassar',
                'link_website' => 'http://ojs.unm.ac.id/index.php/JEST/index',
                'photo' => 'https://scholar.google.com/citations?view_op=medium_photo&user=yuFpmZQAAAAJ&citpid=2',
            ], [
                'title' => 'Journal of Applied Agricultural Science and Technology',
                'slug' => 'journal-of-applied-agricultural-science-and-technology',
                'area' => 'Agricultur, Social, Engineering',
                'score' => 'S3',
                'impact' => 1.62,
                'institute' => 'Politeknik Pertanian Negeri Payakumbuh',
                'publisher' => 'Politeknik Pertanian Negeri Payakumbuh',
                'link_website' => 'http://kinfopolitani.com/index.php/JAAST',
                'address' => 'Politeknik Pertanian Negeri Payakumbuh Jl. Raya Negara Km.7 Tanjung Pati 26271 Kec. Harau Kab Limapuluh Kota Sumatera Barat',
                'district' => 'Payakumbuh',
                'email' => 'jaastpolitani@gmail.com',
                'phone' => '+6282382238163',
                'photo' => 'https://scholar.google.com/citations?view_op=medium_photo&user=Qb4QkK8AAAAJ&citpid=2',
            ], [
                'title' => 'J-ENSITEC (Journal of Engineering and Sustainable Technology)',
                'slug' => 'jensitec-journal-of-engineering-and-sustainable-technology',
                'area' => 'Science, Engineering',
                'score' => 'S5',
                'impact' => 1.49,
                'institute' => 'Universitas Majalengka',
                'publisher' => 'Fakultas Teknik Universitas Majalengka',
                'link_website' => 'http://jurnal.unma.ac.id/index.php/JE',
                'address' => 'Jl. Universitas Majalengka No. 1, Majalengka - Jawa Barat',
                'district' => 'Majalengka',
                'email' => 'j_ensitec@yahoo.co.id',
            ],
        ];
        foreach($journals as $journal) {
            Journal::create($journal);
        }
    }
}
