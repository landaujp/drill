### 解説
#### 変数の型
変数は型と呼ばれるタイプに分類されます。  
型には、

* 文字列（string）
* 整数（integer）
* 浮動小数点数（float）
* 論理値（boolean）
* NULL（null）

があります。

**文字列**はこれまでも出てきましたが、

```php

$string = 'Hello World';
$string = "Hello World";

```

のようにシングルクォーテーションかダブルクォーテーションで囲んで定義します。
シングルクォーテーションとダブルクォーテーションで挙動が少し違うのですが、
それはまたおいおい。

**整数**は

```php

$int = 12345;

```

のように定義します。クォテーションを使わずに数字だけで定義します。  
整数型の変数は四則演算などに使用できます。

**浮動小数点数**は小数のことです。  
整数型と同じく四則演算ができますが、整数では割り算は整数になってしまうのが、  
浮動小数点数型だとちゃんと小数になります。

```php

$float = 123.45;

```

のような小数点を含む数値です。

**論理値**は正しいか間違っているかという値です。  
正しいもの、間違っているものはそれぞれ**真（しん）**、**偽（ぎ）**と呼び、  
PHP上ではそれは**true**、**false**と表現されます。

```php

$bool = true;
$bool = false;

```

**NULL**は変数が値を持たないことを表しています。  
変数を定義はしたが何も値を代入していない場合か、`NULL`を代入した場合はその変数は`NULL`になります。

#### var_dump
`var_dump`は`echo`と同じで変数などの中身を表示するPHPの関数です。  
使ってみれば分かるのですが`echo`は文字列や数値しか表示できません。  
ブラウザ上に表示したいものは`echo`を使います。  
一方、`var_dump`はプログラミングをしている最中に使用します。
`var_dump`を使用してみましょう。
以下のプログラムを`var_dump.php`というファイルにコピー＆ペーストしてサーバーにアップロードしてみましょう。


```php
<?php

$a = 'Hello World';
var_dump($a); // string(11) "Hello World"

$b = "Hello World";
var_dump($b); // string(11) "Hello World"

$c = 12345;
var_dump($c); // int(12345)

$d = 123.45;
var_dump($d); // float(123.45)

$e = true;
var_dump($e); // bool(true)

$f = false;
var_dump($f); // bool(false)

$g = NULL;
var_dump($g); // NULL

```

`var_dump`は変数の内容と一緒に型の名前、文字列の場合は長さも表示してくれます。
また、論理値のfalseとNULLに関しては`echo`では表示されません。


## 課題
### 問1
文字列型の変数を3種類定義して`var_dump`で出力して型を確認してみましょう。

### 問2
整数型の変数を3種類定義して`var_dump`で出力して型を確認してみましょう。

### 問3
浮動小数点数型の変数を3種類定義して`var_dump`で出力して型を確認してみましょう。

### 問4
論理値型の変数を2種類定義して`var_dump`で出力して型を確認してみましょう。

### 問5
NULL型の変数を1種類定義して`var_dump`で出力して型を確認してみましょう。
