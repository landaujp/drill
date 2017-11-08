# 数値の演算を行う

## 例題
### 問
1 + 1、15 - 8、12 x 54、32 ÷ 8の結果を演算して出力せよ。

### 解答
```php
<?php

$add = 1 + 1;
echo $add;
echo '<br>';

$sub = 15 - 8;
echo $sub;
echo '<br>';

$multi = 12 * 54;
echo $multi;
echo '<br>';

$div = 32 / 8;
echo $div;
echo '<br>';

```

### 解説
#### 代数演算子
小学校で習う四則演算（足し算、引き算、かけ算、割り算）をPHPで計算できます。  
それぞれ、`$a + $b`、`$a - $b`、`$a * $b`、`$a / $b`、で計算できます。  
ドル記号で始まるのはPHPの**変数**です。  
変数には文字列や数値を格納し、後でまた使うことができます。

## 課題
### 問
1から10の和を求め、出力しましょう。  
(23413 + 9234) x (543 / 9) - (6634 - 90)を求め、出力しましょう。

### 解答
```php
<?php

$a = 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10;
echo $a;

$b = (23413 + 9234) * (543 / 9) - (6634 - 90);
echo $b;

```