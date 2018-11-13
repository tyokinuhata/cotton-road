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
            'description' => 'スプレー式の傷薬。にんげん１人のHPを２０だけ回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'いいキズぐすり',
            'price' => 700,
            'product_img' => '',
            'description' => 'スプレー式の傷薬。にんげん１匹のHPを５０だけ回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'すごいキズぐすり',
            'price' => 1200,
            'product_img' => '',
            'description' => 'スプレー式の傷薬。にんげん１匹のＨＰを全て回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);
        Product::create([
            'product_name' => 'まんたんのくすり',
            'price' => 2500,
            'product_img' => '',
            'description' => 'スプレー式の傷薬。にんげん１匹のＨＰを全て回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かいふくのくすり',
            'price' => 3000,
            'product_img' => '',
            'description' => 'にんげん１匹の状態異常を全て治し、HPも全て回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'げんきのかけら',
            'price' => 1500,
            'product_img' => '',
            'description' => '瀕死になってしまったにんげん１匹のHPを半分まで回復する。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'げんきのかたまり',
            'price' => 8000,
            'product_img' => '',
            'description' => '瀕死になってしまったにんげん１匹のHPを全て回復する。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おいしいみず',
            'price' => 200,
            'product_img' => '',
            'description' => 'ミネラルたっぷりの水。にんげん１匹のＨＰを５０だけ回復する。',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'サイコソーダ',
            'price' => 300,
            'product_img' => '',
            'description' => 'シュワっとはじけるソーダ。にんげん１匹のＨＰを６０だけ回復する。',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ミックスオレ',
            'price' => 350,
            'product_img' => '',
            'description' => 'とても甘いジュース。にんげん１匹のＨＰを８０だけ回復する。',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'モーモーミルク',
            'price' => 500,
            'product_img' => '',
            'description' => '栄養満点のミルク。にんげん１匹のＨＰを１００だけ回復する。',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きのみジュース',
            'price' => 8000,
            'product_img' => '',
            'description' => '１００％回復するジュース。にんげん１匹のＨＰを２０だけ回復する。',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'こおりなおし',
            'price' => 250,
            'product_img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の凍り状態を回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'どくけし',
            'price' =>  100,
            'product_img' => '',
            'description' => 'にんげん１匹の毒状態を回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ねむけざまし',
            'price' => 8000,
            'product_img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の眠り状態を回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'まひなおし',
            'price' => 200,
            'product_img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の麻痺状態を回復する',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'やけどなおし',
            'price' => 250,
            'product_img' => '',
            'description' => 'スプレー式の薬。にんげん１匹のやけど状態を回復する。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'なんでもなおし',
            'price' => 600,
            'product_img' => '',
            'description' => 'スプレー式の薬。にんげん１匹の状態上をすべて治す。',
            'category_id' => 6,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'フェンせんべい',
            'price' => 200,
            'product_img' => '',
            'description' => 'フェン名物のせんべい。にんげん１匹の状態異常をすべて治す。',
            'category_id' => 3,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーエイダー',
            'price' => 0,
            'product_img' => '',
            'description' => '各技のＰＰを１０回復',
            'category_id' => 5,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーエイダー',
            'price' => 0,
            'product_img' => '',
            'description' => '１つの技のＰＰを１０回復',
            'category_id' => 5,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーリカバー',
            'price' => 0,
            'product_img' => '',
            'description' => '１つの技のＰＰを全回復',
            'category_id' => 5,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピーピーマックス',
            'price' => 0,
            'product_img' => '',
            'description' => '各技のＰＰを全回復',
            'category_id' => 5,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'スピーダー',
            'price' => 350,
            'product_img' => '',
            'description' => '戦闘中１匹の素早さを上げる。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'スペシャルアップ',
            'price' => 350,
            'product_img' => '',
            'description' => '戦闘中１匹の特攻を上げる。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'プラスパワー',
            'price' => 500,
            'product_img' => '',
            'description' => '戦闘中１匹の攻撃を上げる。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ディフェンダー',
            'price' => 550,
            'product_img' => '',
            'description' => '戦闘中１匹の防御を上げる。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'クリティカッター',
            'price' => 650,
            'product_img' => '',
            'description' => '戦闘中急所に当たりやすくなる。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'エフェクトガード',
            'price' => 700,
            'product_img' => '',
            'description' => '戦闘中能力を下げられない。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ヨクアタール',
            'price' => 900,
            'product_img' => '',
            'description' => '戦闘中１匹の命中率を上げる。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'タウリン',
            'price' => 9800,
            'product_img' => '',
            'description' => '攻撃の最大値を上げる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'プロムヘキシン',
            'price' => 9800,
            'product_img' => '',
            'description' => '防御の最大値を上げる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'キトサン',
            'price' => 9800,
            'product_img' => '',
            'description' => '特防の最大値を上げる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'インドメタシン',
            'price' => 9800,
            'product_img' => '',
            'description' => '素早さの最大値を上げる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'リゾチウム',
            'price' => 9800,
            'product_img' => '',
            'description' => '特攻の最大値を上げる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ポイントアップ',
            'price' => 4900,
            'product_img' => '',
            'description' => '１つの技のＰＰを上げる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'マックスアップ',
            'price' => 9800,
            'product_img' => '',
            'description' => 'ＨＰの最大値をあげる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ポイントマックス',
            'price' => 4900,
            'product_img' => '',
            'description' => '一つの技のＰＰを最大値まであげる',
            'category_id' => 4,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ふしぎなアメ',
            'price' => 0,
            'product_img' => '',
            'description' => 'エネルギーのつまったアメ。与えるとにんげんの１ひきのレベルが１だけ上がる。',
            'category_id' => 7,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'まがったスプーン',
            'price' => 0,
            'product_img' => '',
            'description' => 'エスパータイプに持たせると？',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ラッキーパンチ',
            'price' => 0,
            'product_img' => '',
            'description' => 'にんげんの攻撃力が上がる',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かみなりのいし',
            'price' => 2100,
            'product_img' => '',
            'description' => 'ある特定のにんげんを進化させる不思議な石。いなずまの模様がある。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ほのおのいし',
            'price' => 2100,
            'product_img' => '',
            'description' => 'ある特定のにんげんを進化させる不思議な石。橙色をしている。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'みずのいし',
            'price' => 2100,
            'product_img' => '',
            'description' => 'ある特定のにんげんを進化させる不思議な石。澄んだ青色をしている。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'リーフのいし',
            'price' => 2100,
            'product_img' => '',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。葉っぱの模様がある。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'つきのいし',
            'price' => 0,
            'product_img' => '',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'たいようのいし',
            'price' => 0,
            'product_img' => '',
            'description' => 'ある特定のにんげんを進化させるふしぎな石。',
            'category_id' => 2,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きんのたま',
            'price' => 0,
            'product_img' => '',
            'description' => 'キラキラと金色に光る純金製の玉。ショップで高く売れる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'あなぬけのひも',
            'price' => 0,
            'product_img' => '',
            'description' => '長くて丈夫な紐。洞窟やダンジョンから抜け出すことができる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かわいいにんぎょう',
            'price' => 0,
            'product_img' => '',
            'description' => '敵の気を引いて野生のにんげんとの戦闘から必ず逃げられる。',
            'category_id' => 8,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ほしのかけら',
            'price' => 0,
            'product_img' => '',
            'description' => 'キラキラと光る綺麗な宝石のかけら。高く売れる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ほしのすな',
            'price' => 0,
            'product_img' => '',
            'description' => '手触りがサラサラの赤くて綺麗な砂。高く売れる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'しんじゅ',
            'price' => 0,
            'product_img' => '',
            'description' => '綺麗な銀色に光る、少し小さめの真珠。ショップで高く売れる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おおきなしんじゅ',
            'price' => 0,
            'product_img' => '',
            'description' => '綺麗な銀色に光るかなり大粒の真珠。ショップで高く売れる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'むしよけスプレー',
            'price' => 350,
            'product_img' => '',
            'description' => '１００歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'シルバースプレー',
            'price' => 500,
            'product_img' => '',
            'description' => '２００歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ゴールドスプレー',
            'price' => 700,
            'product_img' => '',
            'description' => '２５０歩進む間、弱い野生のにんげんが全く出てこなくなる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'こだわりはちまき',
            'price' => 0,
            'product_img' => '',
            'description' => 'にんげんに持たせると、同じ技しか出せなくなるが威力が大きくなる。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ピントレンズ',
            'price' => 0,
            'product_img' => '',
            'description' => '持たせると技が急所に当たりやすくなる。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'やすらぎのすず',
            'price' => 0,
            'product_img' => '',
            'description' => 'にんげんに持たせるとなつきやすくなる。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きょうせいギブス',
            'price' => 0,
            'product_img' => '',
            'description' => 'にんげんに持たせると、素早さが下がるが普通より強く育つ。',
            'category_id' => 8,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'たべのこし',
            'price' => 0,
            'product_img' => '',
            'description' => '毎日必ず体力を少し回復する。',
            'category_id' => 8,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'メタルコート',
            'price' => 0,
            'product_img' => '',
            'description' => '持たせると鋼タイプの技の威力が上がる。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'メタルパウダー',
            'price' => 0,
            'product_img' => '',
            'description' => '特定のにんげんの防御力を上げる効果がある。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'しあわせタマゴ',
            'price' => 0,
            'product_img' => '',
            'description' => '持たせると手に入る経験値が少し増える。',
            'category_id' => 8,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ちいさなきのこ',
            'price' => 0,
            'product_img' => '',
            'description' => '小さめなめずらしいキノコ。一部のマニアで人気',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おおきなきのこ',
            'price' => 0,
            'product_img' => '',
            'description' => '大きめなめずしいキノコ。一部のマニアで人気',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => '竜のうろこ',
            'price' => 0,
            'product_img' => '',
            'description' => 'ある特定のにんげんに持たせて通信交換すると進化する。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きよめのおふだ',
            'price' => 0,
            'product_img' => '',
            'description' => '先頭のにんげんに持たせておくと野生のにんげんに遭遇しにくくなる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'せんせいのツメ',
            'price' => 0,
            'product_img' => '',
            'description' => '持たせると相手より先に行動できることがある。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かいがらのすず',
            'price' => 0,
            'product_img' => '',
            'description' => '持たせたにんげんが相手にダメージを与えたとき、体力が少し回復する。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おうじゃのしるし',
            'price' => 0,
            'product_img' => '',
            'description' => 'ある特定のにんげんを進化させるのに必要。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かわらずのいし',
            'price' => 0,
            'product_img' => '',
            'description' => 'にんげんに持たせている間、そのにんげんは進化しなくなる。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'アップグレード',
            'price' => 0,
            'product_img' => '',
            'description' => 'いろんな情報が詰まった透明な機械、特定のにんげんを進化させるのに必要',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'がくしゅうそうち',
            'price' => 0,
            'product_img' => '',
            'description' => '持たせていると戦闘にでていないにんげんも経験値をわけてもらえる。',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おまもりこばん',
            'price' => 0,
            'product_img' => '',
            'description' => '持たせた人にんげんが戦闘に参加すると賞金がいつもの２倍もらえる',
            'category_id' => 9,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'タウンマップ',
            'price' => 0,
            'product_img' => '',
            'description' => '手軽に見ることができる便利な地図。自分の場所もわかる',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ポケモンのふえ',
            'price' => 0,
            'product_img' => '',
            'description' => '吹けばどんなにんげんも飛び起きるという笛、綺麗な音色を奏でる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'じてんしゃ',
            'price' => 0,
            'product_img' => '',
            'description' => 'ランニングシューズより速く走ることができる折りたたみの自転車',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ボロのつりざお',
            'price' => 0,
            'product_img' => '',
            'description' => '古くてボロい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'いいつりざお',
            'price' => 0,
            'product_img' => '',
            'description' => '新しくていい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'すごいつりざお',
            'price' => 0,
            'product_img' => '',
            'description' => '最新のすごい釣り竿。水のある場所で使うとにんげんが釣れる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'コインケース',
            'price' => 0,
            'product_img' => '',
            'description' => 'ゲームコーナーで手に入れたコインを９９９９枚まで入れることができるケース。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ダウジングマシン',
            'price' => 0,
            'product_img' => '',
            'description' => '使ったときに近くに見えない道具があれば反応して教えてくれる。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'おしえテレビ',
            'price' => 0,
            'product_img' => '',
            'description' => '初心者のトレーナーに役に立つ番組を見ることができるテレビ。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ランニングシューズ',
            'price' => 0,
            'product_img' => '',
            'description' => '',
            'category_id' => 10,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ボイステェッカー',
            'price' => 0,
            'product_img' => '',
            'description' => '有名な人物について、見たり聞いたりしたことを見直すことができる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'バトルサ－チャー',
            'price' => 0,
            'product_img' => '',
            'description' => '戦いたいトレーナーを教えてくれる機会。歩くと電池がたまる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'きのみぶくろ',
            'price' => 0,
            'product_img' => '',
            'description' => '木の実を入れる袋。',
            'category_id' => 10,
            'user_id' => 'test',
        ]);


        Product::create([
            'product_name' => 'きんのいれば',
            'price' => 0,
            'product_img' => '',
            'description' => '秘伝マシン４と交換できる。',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ひきかえけん',
            'price' => 0,
            'product_img' => '',
            'description' => '自転車と交換できる',
            'category_id' => 11,
            'user_id' => 'test',
        ]);


        Product::create([
            'product_name' => 'ふねのチケット',
            'price' => 0,
            'product_img' => '',
            'description' => '船に乗れる',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'シルフスコープ',
            'price' => 0,
            'product_img' => '',
            'description' => '人の目に見えないものを見ることができるスコープ。シルフカンパニー製',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ルビー',
            'price' => 0,
            'product_img' => '',
            'description' => '',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'サファイア',
            'price' => 0,
            'product_img' => '',
            'description' => '',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'かいのかせき',
            'price' => 0,
            'product_img' => '',
            'description' => 'オムライスをＧＥＴするのに必要',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'こうらのかせき',
            'price' => 0,
            'product_img' => '',
            'description' => 'カブトムシをＧＥＴするのに必要',
            'category_id' => 11,
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => 'ひみつのこはく',
            'price' => 0,
            'product_img' => '',
            'description' => 'テンプラをＧＥＴするのに必要',
            'category_id' => 11,
            'user_id' => 'test',
        ]);
    }
}

//Product::create([
//    'product_name' => '',
//    'price' => 0,
//    'product_img' => '',
//    'description' => '',
//　　'category_id' => ,
//    'user_id' => 'test',
//]);