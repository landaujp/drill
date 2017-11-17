## 例題
### 問
`Hello`と`World`を連結して`HelloWorld`と出力しましょう。

### 解答
```php
<?php

echo 'Hello'.'World';

```

### 解説
#### 文字列の連結
PHPではドット「.」を使って文字列をつなげることができます。
もちろん、文字列型の変数も連結できます。

```php
<?php

$a = 'Hello';
$b = 'World';

echo $a.$b;

```

## 課題
### 問
`Hello`と`World`と自分の名前を変数で定義し、連結して出力しましょう。
