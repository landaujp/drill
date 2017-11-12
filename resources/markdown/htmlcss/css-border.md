## 例題

### 問
divタグに対して横幅300px,高さは200pxを設定して、赤色の枠線（幅5px）を設定してください。

### 解答
style.css

```css
div {
	width: 300px;
	height: 200px;  
	border: 5px solid #FF0000;
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
<div>赤色の枠線</div>
</body>
</html>
```

<iframe width="100%" height="300" src="//jsfiddle.net/xuy78exu/4/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### border
CSSのプロパティの一つで要素に**枠線**を設定できます。  
borderプロパティの値の部分は↓の用に記述します。  
`border: [線の幅] [線のタイプ] [線の色]`

#### 線のタイプ？
ボーダーの線にはいくつかタイプがあります。  
<iframe width="100%" height="150" src="//jsfiddle.net/crjLzkfe/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

#### 線は上下左右個別で設定できます
`border-****`として`top,bottom,left,right`として一辺ずつ指定できます。

<iframe width="100%" height="200" src="//jsfiddle.net/wfmuaez5/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

---

## 課題

### 問
divタグに対して横幅300px,高さは200pxを設定して、青色で2重枠線（幅5px）を設定してください。  
ただし、下辺は線なしです。

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
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>上下右の3辺のボーダー</div>
</body>
</html>
```