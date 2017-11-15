## 例題
### 問
以下の変数を論理型に変換した場合、全てtrueになることを型変換して確認しましょう。

* 'abc'
* '123'
* 'true'
* 0
* 1
* -1
* 0.0


### 解答
```php
<?php

$a = 'abc';
$b = '123';
$c = 'true';
$e = 1;
$f = -1;

var_dump((bool) $a); // true
var_dump((bool) $b); // true
var_dump((bool) $c); // true
var_dump((bool) $e); // true
var_dump((bool) $f); // true
var_dump((bool) $g); // true

```

### 解説
#### 型変換でtrueになるもの
全ての変数は論理値への型変換で`true`か`false`になります。  
特にfalseになるものが重要で、

* '' （空文字）
* 0 （整数の0）
* 0.0 （浮動小数点数の0.0）
* NULL

が論理値に直すと`false`になります。それ以外は基本`true`になります。


## 課題
### 問
論理型に変換してfalseになる変数を以下の変数を4種類定義し、  
型変換して確認しましょう。

### 解答
```php
<?php

$a = '';
$b = 0;
$c = 0.0;
$d = NULL;

var_dump((bool) $a);
var_dump((bool) $b);
var_dump((bool) $c);
var_dump((bool) $d);

```
