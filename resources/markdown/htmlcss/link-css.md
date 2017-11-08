## 例題

### 問
`p { color:blue;} `と書かれた`style.css`というCSSファイルを作成し、linkタグを使って読み込んでください。
ただし、HTMLファイルとCSSファイルは同じディレクリに作成してください。

### 解答
style.css
```css
p {    
    color: blue;
}
```
index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
<!-- style.cssファイルを読み込む -->
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```

### 解説
#### CSSファイル
CSSだけが書かれたファイルをCSSファイルと呼びます。
例題の用に読み込むことでstyle.cssファイルに記述されたCSSを`<style></style>`タグで記述したように扱えます。
CSSファイルの名前はなんでも良いです。aaaa.cssでもsample.cssでも。

#### CSSの３種類の指定方法
HTMLにCSSを適応させるには３つの方法があります。
1. HTMLタグにstyle属性で記述
    * `<p style="color:blue;">おはよう</p>`
1. styleタグの内部に記述
    * `<style>p { color:blue; }</style>`
1. CSSファイルを作成してlinkタグで読み込む
    * `<link rel="stylesheet" type="text/css" href="style.css">`

#### どの方法が良いか
一般的に３番目のlinkタグで外部ファイルとして読み込む方法が使用されています。**文章を構成するHTMLファイル**と**装飾を制御するCSSファイル**とでファイルを分離することで**役割ごとにファイルを分離**します。

## 課題
### 問
`p { font-size: 30px;} `と書かれた`design.css`というCSSファイルを作成し、linkタグを使って読み込んでください。
ただし、HTMLファイルとCSSファイルは同じディレクリに作成してください。

### 解答
style.css
```css
/* cssを記述してください */
```
index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
<!-- default.cssファイルを読み込むように記述してください -->

</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```