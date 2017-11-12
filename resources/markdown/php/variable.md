### 問
`Hello World`という文字列を変数に代入してから表示しましょう。

### 解答
```php
<?php

$a = 'Hello World';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<?php echo $a; ?>
</body>
</html>

```

### 解説
#### PHPとHTMLの共存
PHPはHTMLと共存できるプログラム言語です。  
PHPはHTMLの中はもちろん、HTMLが始まる前に必要な変数を定義しておいたり、必要な処理を書いたりすることができます。  
事前に処理した内容はHTMLの途中で使用でき、HTMLの記述が終わった後にはPHPの後処理を書くこともできます。

#### 変数
PHPの変数はドル記号の後に変数名が続く形式で表されます。  
変数には`=`を使って`$a =`のように値を代入します。  
代入した値はその変数を呼び出すことで何度も使うことができます。  
また、変数は再度代入を行うことで代入されている値を上書きするこができます。

```php
<?php

$a = 'hello';
echo $a; // hello

$a = 'world';
echo $a; // world

```
## 課題
### 問
`Hello World`を代入した変数`$a`と自分の名前を代入すた変数`$b`を定義し、HTMLの中に埋め込んで表示しましょう。

### 解答
```php
<?php

$a = 'Hello World';
$b = 'レフ・ダヴィドヴィッチ・ランダウ';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<?php echo $a; ?>
<?php echo $b; ?>
</body>
</html>

```
