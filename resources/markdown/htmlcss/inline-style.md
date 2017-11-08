## 例題

### 問
pタグで囲まれたテキストの文字の色を青色、大きさを15pxに変更して下さい

### 解答
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
</head>
<body>
<!-- 元のpタグ-->
<p>style属性で文字の色と大きさを変更してみる</p>

<!-- 解答例 -->
<p style="color:blue;font-size:15px;">style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```

### 解説
#### CSSとは
ページの内容や構成を表現する**HTML**に対して、文章の装飾を表現する**CSS**というものがあります。
CSSは [プロパティ]:[値]; という形をしています。
上の例でも`color : blue;`や`font-size:15px;`となっています。

プロパティが変更する種別で、値が変更する量やタイプになります。
color (文字の色を) : blue (青に) ;
font-size (文字の大きさを) : 15px (15pxに) ;
と言った具合です。

一つのプロパティ+値の組の最後には必ず「;(セミコロン)」をつけます。

#### style属性
htmlタグにはstyle属性をつけることができ、値にCSSを記述できます。CSSの記述は「”(ダブルクォーテーション)」で囲みます。
`<p style="[CSSの記述]">テキスト</p>`

## 課題
### 問
以下のpタグのテキストの文字の色を赤に、文字の大きさを30pxにしてください。

### 解答
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
</head>
<body>
<!-- 元のpタグ-->
<p>style属性で文字の色と大きさを変更してみる</p>

<!-- あなたの解答-->


</body>
</html>
```