<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        Product::create([
            'product_name' => 'キズぐすり',
            'price' => 300,
            'product_img' => '',
            'description' => 'スプレー式の傷薬。人間一人のHPを２０だけ回復する。',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'いいキズぐすり',
            'price' => 700,
            'product_img' => '',
            'description' => 'スプレー式の傷薬。ポケモン１匹のHPを５０だけ回復する。　',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'すごいキズぐすり',
            'price' => 1200,
            'product_img' => '',
            'user_id' => 'test',
        ]);
        Product::create([
            'product_name' => 'まんたんのくすり',
            'price' => 2500,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かいふくのくすり',
            'price' => 3000,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'げんきのかけら',
            'price' => 1500,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'げんきのかたまり',
            'price' => 8000,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おいしいみず',
            'price' => 200,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'サイコソーダ',
            'price' => 300,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ミックスオレ',
            'price' => 350,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'モーモーミルク',
            'price' => 500,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きのみジュース',
            'price' => 8000,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'こおりなおし',
            'price' => 250,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'どくけし',
            'price' =>  100,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ねむけざまし',
            'price' => 8000,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'まひなおし',
            'price' => 200,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'やけどなおし',
            'price' => 250,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'なんでもなおし',
            'price' => 600,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'フェンせんべい',
            'price' => 200,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーエイダー',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーエイダー',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーリカバー',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーマックス',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'スピーダー',
            'price' => 350,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'スペシャルアップ',
            'price' => 350,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'プラスパワー',
            'price' => 500,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ディフェンダー',
            'price' => 550,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'クリティカッター',
            'price' => 650,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'エフェクトガード',
            'price' => 700,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ヨクアタール',
            'price' => 900,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'タウリン',
            'price' => 9800,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'プロムヘキシン',
            'price' => 9800,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'キトサン',
            'price' => 9800,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'インドメタシン',
            'price' => 9800,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'リゾチウム',
            'price' => 9800,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ポイントアップ',
            'price' => 4900,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'マックスアップ',
            'price' => 9800,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ポイントマックス',
            'price' => 4900,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ふしぎなアメ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'まがったスプーン',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ラッキーパンチ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かみなりのいし',
            'price' => 2100,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ほのおのいし',
            'price' => 2100,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'みずのいし',
            'price' => 2100,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'リーフのいし',
            'price' => 2100,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'つきのいし',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'たいようのいし',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きんのたま',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'あなぬけのひも',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピッピにんぎょう',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ほしのかけら',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ほしのすな',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'しんじゅ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おおきなしんじゅ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'むしよけスプレー',
            'price' => 350,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'シルバースプレー',
            'price' => 500,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ゴールドスプレー',
            'price' => 700,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'こだわりはちまき',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピントレンズ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'やすらぎのすず',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きょうせいギブス',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'たべのこし',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'メタルコート',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'メタルパウダー',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'しあわせタマゴ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ちいさなきのこ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おおきなきのこ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => '竜のうろこ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きよめのおふだ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'せんせいのツメ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かいがらのすず',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おうじゃのしるし',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かわらずのいし',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'アップグレード',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'がくしゅうそうち',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おまもりこばん',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'タウンマップ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ポケモンのふえ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'じてんしゃ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ボロのつりざお',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'いいつりざお',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'すごいつりざお',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'コインケース',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ダウジングマシン',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おしえテレビ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ランニングシューズ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ボイステェッカー',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'バトルサ－チャー',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きのみぶくろ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'レインボーパス',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きんのいれば',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ひきかえけん',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'トライパス',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ふねのチケット',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ひみつのかぎ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'シルフスコープ',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ルビー',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'サファイア',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かいのかせき',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'こうらのかせき',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ひみつのこはく',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);
    }
}
