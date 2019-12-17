<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'artist' => 'UVERworld',
            'profile' => '滋賀県出身の6人組バンド。バンド名は「自分たちの世界を超えて広がる」ということからドイツ語を変形させたUVER（ウーバー）とworldから名づけられた。2005年のデビュー以来リリースした作品はいずれもオリコン上位にランクイン。2010年11月には初の東京ドームライブを敢行。2014年3月サポートメンバーだった誠果(Manipulator/Sax)がメンバーとして加入し、7月には初の京セラドーム公演を大成功に納める。その独自のサウンドとTAKUYA∞の紡ぐ歌詞だけでなく、彼らの生き様、人間力が今を生きる若者に届いており、絶大な支持を得続けている。',
            'artist_site_url' => 'https://www.uverworld.com/s/n4/',
            'video_url' => 'https://www.youtube.com/embed/4ig8G97jXDU',
        ]);

        DB::table('artists')->insert([
            'artist' => 'ONE OK ROCK',
            'profile' => '2005年にバンド結成。エモ、ロックを軸にしたサウンドとアグレッシブなライブパフォーマンスが若い世代に支持されてきた。日本のみならず海外レーベルとの契約をし、アルバム発売を経てアメリカ、ヨーロッパ、アジアでのワールドツアーを 成功させるなど世界基準のバンドになってきている。2019年2月にはニューアルバム「Eye of the Storm」を全世界で同時リリースが決定。',
            'artist_site_url' => 'http://www.oneokrock.com',
            'video_url' => 'https://www.youtube.com/embed/ha6Fy_LeWtI',
        ]);

        DB::table('artists')->insert([
            'artist' => 'SUPER BEAVER',
            'profile' => '2005年結成の東京出身の4人組ロックバンド「SUPER BEAVER」メジャーデビューから自主レーベル設立まで様々な経験をしつつも、2016年6月1日にリリースしたフルアルバム「27」は、オリコン初登場10位を記録。タイトル曲「27」は、坂口健太郎・miwa主演の映画「君と100回目の恋」の挿入歌に起用。バンド自体も、「主人公が憧れるバンド」として映画に登場する。10月11日 初のLIVE DVD『未来の続けかた』をリリース。Vo.渋谷書き下ろしの小説「都会のラクダ」も付属のDVD+BOOKという珍しい形態でのリリースで話題を呼ぶ。さらに、10月24日付のオリコン週間音楽DVDチャートでは、１位を獲得。2017年に入り「ROCK IN JAPAN FES」「RIZING SUN ROCK FESTIVAL」「SWEET LOVE SHOWER」等10本以上の夏フェスにも出演。',
            'artist_site_url' => 'http://super-beaver.com/',
            'video_url' => 'https://www.youtube.com/embed/XnYwwyXPt70',
        ]);

        DB::table('artists')->insert([
            'artist' => 'Survive Said The Prophet',
            'profile' => 'Survive Said The Prophet 通称「サバプロ」は2011年、東京にて結成。ネイティブな英語を操るバイリンガルのボーカリストYoshの圧倒的な歌唱力とカリスマ性を筆頭に、確かなスキル、ミュージシャンシップ、そして個性的なキャラクターを持った５人のメンバーからなる奇跡のインターナショナル・ロック・バンド。その異彩を放つ音楽性はロックに限らず、ポップ、エレクトロ、ヒップホップ、R&Bまで幅広いバックグラウンドをベースに、既存のシーンの枠に収まらないダイバーシティを武器に様々なフィールドを活動の場とし、日々進化し続けている。',
            'artist_site_url' => 'http://survivesaidtheprophet.com/',
            'video_url' => 'https://www.youtube.com/embed/VrOOigt76K0',
        ]);
    }
}
