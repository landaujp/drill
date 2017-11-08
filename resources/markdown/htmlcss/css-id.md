## 例題

### 問

id名`title`を使って**文字の大きさ30px**を指示するCSSとpタグを対応させてください。
CSSはstyle.cssを作成して読み込んでください

### 解答例
style.css

```css

 #title {
    font-size:30px;
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

<!-- pタグにid属性で「title」を指定 -->
<p id="title">おはようございます。今日はいい天気ですね</p>

</body>
</html>
```

### 解説

#### idとは
htmlタグに設定できる**ラベル**のようなものです。
classと同じようにidを通じてCSSをHTMLに対応させることができます。


#### HTMLタグにclassの設定の仕方
HTMLタグのid属性に好きなid名を記述します。ただし、id名は数字から始めることはできません。

#### CSSでidの設定の仕方
`#(シャープ)id名 { font-size: 30px; }`という風に、id名の前に「.(ドット)」をつけます。
HTMLタグ名のところをドット＋id名に入れ替えただけです。


```css
/* pタグ */
p {    
    font-size: 30px;
}
/* タグ名をid名に置き換えただけ */
.sample {    
    font-size: 30px;
}
```

#### classとの違いは？
| |class|id|
| --- | --- | --- |
| HTMLでの指定 | class属性 `<p class="sample">` | id属性 `<p id="sample">` |
| 制限 | 同じclass名を複数のHTMLタグに使用可能 | 同じid名は一つのHTMLタグにしか使用できない  |
 

## 課題

### 問
id名`subject`を使って**文字の大きさ20px**を指示するCSSとpタグを対応させてください。
CSSはstyle.cssを作成して読み込んでください

### 解答

style.css
```css
/* subject idの記述 */
 
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

<!-- pタグにidを付与してCSSを適応してください -->
<p>style属性で文字の色と大きさを変更してみる</p>

</body>
</html>
```