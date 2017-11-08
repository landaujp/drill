## 例題

### 問

クラス名`red-text`を使って赤色を指示するCSSとpタグを対応させてください。
CSSはstyle.cssを作成して読み込んでください

### 解答例
style.css
```css
.red-text {    
    color: red;
}
```

index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>

<!-- pタグにclass属性で「red-text」を指定 -->
<p class="red-text">style属性で文字の色と大きさを変更してみる</p>

</body>
</html>
```

### 解説
#### classとは
htmlタグに設定できる**ラベル**のようなものです。
classがないと`p`や`div`といったHTMLに直接CSSを設定するしかありませんが、
classでラベリングすることで同じpでも違ったCSSを適応できます。

#### HTMLタグにclassの設定の仕方
HTMLタグのclass属性に好きなクラス名を記述します。ただし、クラス名は数字から始めることはできません。

#### CSSでclassの設定の仕方
`.(ドット)クラス名 { color: blue; }`という風に、クラス名の前に「.(ドット)」をつけます。
HTMLタグ名のところをドット＋クラス名に入れ替えただけです。

```css
/* pタグ */
p {    
    color: red;
}
/* タグ名をクラス名に置き換えただけ */
.sample {    
    color: red;
}
```


## 課題

### 問
クラス名`blue-text`を使って青色を指示するCSSとpタグを対応させてください。
CSSはstyle.cssを作成して読み込んでください

### 解答

style.css
```css
/* blue-textクラスの記述 */
 
```

index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
</head>
<body>

<!-- pタグにクラスを付与してください -->
<p>style属性で文字の色と大きさを変更してみる</p>

</body>
</html>
```