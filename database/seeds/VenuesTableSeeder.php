<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            'name' => 'Zepp Sapporo',
            'address' => '〒064-0809　北海道札幌市中央区南9条西4-4',
            'venue_site_url' => 'https://www.zepp.co.jp/hall/sapporo/',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5831.229748885076!2d141.353324!3d43.049534!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5708be51b3df583b!2sZepp%20Sapporo!5e0!3m2!1sja!2sjp!4v1580033589179!5m2!1sja!2sjp',
        ]);
        DB::table('venues')->insert([
            'name' => 'Zepp Tokyo',
            'address' => '〒135-0064　東京都江東区青海1-3-11',
            'venue_site_url' => 'https://www.zepp.co.jp/hall/tokyo/',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25944.571615092365!2d139.782247!3d35.625965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889fad85f0899%3A0x4330654e612dc429!2z44CSMTM1LTAwNjQg5p2x5Lqs6YO95rGf5p2x5Yy66Z2S5rW377yR5LiB55uu77yT4oiS77yR77yR!5e0!3m2!1sja!2sjp!4v1580659174753!5m2!1sja!2sjp',
        ]);
        DB::table('venues')->insert([
            'name' => 'Zepp DiverCity',
            'address' => '〒135-0064　東京都江東区青海 1-1-10 ダイバーシティ東京プラザ',
            'venue_site_url' => 'https://www.zepp.co.jp/hall/divercity/',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25944.79291985006!2d139.775555!3d35.625283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67f4219bfa09db77!2z44OA44Kk44OQ44O844K344OG44Kj5p2x5LqsIOODl-ODqeOCtg!5e0!3m2!1sja!2sjp!4v1580659277803!5m2!1sja!2sjp',
        ]);
        DB::table('venues')->insert([
            'name' => 'Zepp Nagoya',
            'address' => '〒453-0872　愛知県名古屋市中村区平池町4-60-7',
            'venue_site_url' => 'https://www.zepp.co.jp/hall/nagoya/',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6523.4633594986535!2d136.88470000524592!3d35.16331196816044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe15edf97c3c77d3d!2sZepp%20Nagoya!5e0!3m2!1sja!2sjp!4v1580659400465!5m2!1sja!2sjp',
        ]);
        DB::table('venues')->insert([
            'name' => 'Zepp Namba',
            'address' => '〒556-0012　大阪府大阪市浪速区敷津東 2-1-39',
            'venue_site_url' => 'https://www.zepp.co.jp/hall/namba/',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6563.785610345353!2d135.501278!3d34.65741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e765f8c3a669%3A0xcf329d7e60858874!2z44CSNTU2LTAwMTIg5aSn6Ziq5bqc5aSn6Ziq5biC5rWq6YCf5Yy65pW35rSl5p2x77yS5LiB55uu77yR4oiS77yT77yZ!5e0!3m2!1sja!2sjp!4v1580659472169!5m2!1sja!2sjp',
        ]);
        DB::table('venues')->insert([
            'name' => 'Zepp OsakaBayside',
            'address' => '〒554-0031　大阪府大阪市此花区桜島1-1-61',
            'venue_site_url' => 'https://www.zepp.co.jp/hall/osakabayside/',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d52507.45130098191!2d135.434799!3d34.661882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e88df20037ef%3A0xbc1ab321ef0ddc45!2z44CSNTU0LTAwMzEg5aSn6Ziq5bqc5aSn6Ziq5biC5q2k6Iqx5Yy65qGc5bO277yR5LiB55uu77yR4oiS77yW77yR!5e0!3m2!1sja!2sjp!4v1580659580913!5m2!1sja!2sjp',
        ]);
        DB::table('venues')->insert([
            'name' => 'Zepp Fukuoka',
            'address' => '〒810-0065　福岡県福岡市中央区地行浜2-2-1',
            'venue_site_url' => 'https://www.zepp.co.jp/hall/fukuoka/',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6646.981204304627!2d130.363507!3d33.592573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541924cc5a1da6d%3A0xc687f7d2edb37f5a!2z44CSODEwLTAwNjUg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65Zyw6KGM5rWc77yS5LiB55uu77yS4oiS77yR!5e0!3m2!1sja!2sjp!4v1580659651796!5m2!1sja!2sjp',
        ]);
    }
}
