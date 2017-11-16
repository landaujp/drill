## 例題

### 問
縦横100px、枠線赤色のdiv要素を２作って下さい。
そのdivに上下左右masrginを20px設定してください。

### 解答
style.css
```css
div {
	width: 100px;
	height: 100px;
	border: 1px solid red;
	margin: 20px;
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

<iframe width="100%" height="300" src="//jsfiddle.net/59k88zzh/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### margin
CSSのプロパティの一つで要素の「外側」に**スペース**を設定できます。

#### 上下左右別々に設定できます
`margin:10px`だと全方向10pxのスペースができますが、それぞれ個別に設定できます。

```css
p {
	margin-top: 10px; /* 上のみ設定 */
	margin-right: 10px; /*　右のみ設定　*/
	margin-bottom: 10px; /* 下のみ設定 */
	margin-left: 10px; /* 左のみ設定 */
}
```

#### margin,padding,border,width,heightそれぞれの関係
![](/img/1/1-4-1.png)

## 課題

### 問
縦横100px、背景色が赤色のdiv要素を２作って下さい。
そのdivに上下30px、左右10pxのmarginを設定してください。

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

<!-- あなたの解答-->
<div></div><div></div>

</body>
</html>
```

style.css

```css
div {

}

```

<script language="heredocument" id="default_html">
<!-- あなたの解答-->
<div></div><div></div>
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