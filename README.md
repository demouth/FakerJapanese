FakerJapanese
=============

Fake Data Generator in PHP.  
日本用のダミーデータ作成ライブラリ。キラキラした名前を生成します。


# Usage

```php
require_once 'vendor/Faker/Japanese.php';
$user = new Faker_Japanese();
var_dump($user)
/*
object(Faker_Japanese)#1 (7) {
  ["name"]=>
  string(65) "前田 沙利菜愛利江留（まえだ さりなありえる）"
  ["lastName"]=>
  string(6) "前田"
  ["firstName"]=>
  string(21) "沙利菜愛利江留"
  ["lastNameYomi"]=>
  string(9) "まえだ"
  ["firstNameYomi"]=>
  string(21) "さりなありえる"
  ["lastNameYomiKatakana"]=>
  string(9) "マエダ"
  ["firstNameYomiKatakana"]=>
  string(21) "サリナアリエル"
}
*/
```

例
```
阿部 泡姫（あべ ありえる）
伊藤 歩木鈴（いとう ぽこりん）
一言 振門体（ひとこと ふるもんてぃ）
池田 ハム太郎（いけだ はむたろう）
```

# License

Faker is released under the MIT Licence. See the bundled LICENSE file for details.
