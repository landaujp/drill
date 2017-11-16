## 例題

### 問
縦横100pxのdivを画面の左右中央に表示されるように記述してください。  
divの背景色は赤色です。

### 解答
style.css
```css
div {
	width: 100px;
	height: 100px;
	background-color: red;
	margin: 0 auto;
}
```

```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
</head>
<body>

<div></div>

</body>
</html>
```

<iframe width="100%" height="250" src="//jsfiddle.net/t2cubzmq/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### margin を auto にする
左右中央表示に必要なものは左右の`margin`を`auto`という値にするだけです。
```css
div {
	margin-left: auto;
	margin-right: auto;
}
```
**要素を左右中央に表示するテクニックはレイアウトの中で最重要項目の一つです**。  


#### margin: 0 auto とは
例題では`margin:0 auto`と指定しています。これは以下と同じ意味です。

```css
div {
	margin-top: 0;
	margin-bottom: 0;
	margin-right: auto;
	margin-left: auto;
}

/* 上と下は同じ！ */

div {
	margin:0 auto;
}
```
`margin`には上下左右を一度に指定する方法があります。  

* `margin:10px;`・・・上下左右10px
* `margin:10px 20px;`・・・上下が10px、左右が20px
* `margin:10px 20px 5px`・・・上が10px、左右が20px、下が5px
* `margin:5px 10px 15px 20px`・・・上が5px、右が10px、下が15px、左が20px

例題ではこの２番めのパターンを使用しています。
```css
div {
	margin: 0[上下がゼロ] auto[左右がauto];
}
```


## 課題

### 問
横300px、縦30pxのpを画面の左右中央に表示されるように記述してください。  
divの背景色は赤色です。

### 解答

index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
</head>
<body>

<!-- あなたの解答 -->
<div></div>

</body>
</html>
```

style.css

```css
div {

}

```

<script language="heredocument" id="default_html"><!-- あなたの解答 -->
<div></div>
</script>
<script>
var default_html = document.getElementById("default_html").text;
</script>

<script language="heredocument" id="default_css">
div {

}
</script>
<script>
var default_css = document.getElementById("default_css").text;
</script>