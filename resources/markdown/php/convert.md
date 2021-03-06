### 問
文字列`'123'`と文字列`'456'`の足し算をするプログラムを書き、答えを求めましょう。

### 解答
```php
<?php

$a = '123';
$b = '456';
$c =  $a + $b;

echo $c;

```

### 解説
#### 動的型付け言語
PHPは動的型付け言語と呼ばれる種類の言語です。
変数の型は実行される場面によって言語が自動で決定します。
例えば、例題で最初に定義される`$a`と`$b`は前回やったようにクォテーションで囲まれているので、  
これらの変数は文字列型になっています。

しかし、`+`というのは数値と数値を足し算するもので、結果も数値になります。  
PHPは文字列の`123`を足し算する際に整数の`123`だと解釈し、演算を行います。
他にも、関数や構文を使う上で、ここにはこの型の変数が使われると決まっているものがいくつかあり、  
その都度PHPは型を自動で変換して実行してくれます。  
便利な反面、意図したのと違う動きをすることがあるので気をつけましょう。

#### 変数の型変換
上で述べたようにPHPは実行時に自動で型を変換しますが、  
プログラムする段階で意図的に型を変換することができます。
変換する際にはその変数の前に以下にで書くように型を明示的に書いてやります。
```php
<?php

$a = '123';
$b = (int) $a;     // 整数への型変換
$c = (integer) $a; // 整数への型変換
$d = (float) $a;   // 浮動小数点数への型変換
$e = (double) $a;  // 浮動小数点数への型変換
$f = (real) $a;    // 浮動小数点数への型変換
$g = (bool) $a;    // 論理値への型変換
$h = (boolean) $a; // 論理値への型変換
$i = (string) $a;  // 文字列への型変換

```

この型変換はその場で変換されるだけで、次のようにしても型は変換されません。
`gettype`は変数の型を調べる関数です。

```php
<?php

$a = '123';
(int) $a;

echo gettype($a); // string

```

## 課題
### 問
文字列の`'0.0'`を整数、浮動小数点数、論理値に型変換し、どうなるか確認しましょう。
