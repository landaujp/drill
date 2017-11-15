## 例題

### 問
テキストを含んだpタグの要素に上下左右10pxのpaddingを設定してください。
ただし、横幅が100pxと赤色の枠線を追加して下さい。
また、paddingが無いpも作ってみて違いを確認してください。

### 解答
style.css
```css
p {
	width: 100px;
	border: 1px solid red;
}
.style1 {
	
	padding: 10px;
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

<p class="style1">テキストがたっぷり入ってます。テキストがたっぷり入ってます。テキストがたっぷり入ってます。テキストがたっぷり入ってます。</p>
<p class="style2">テキストがたっぷり入ってます。テキストがたっぷり入ってます。テキストがたっぷり入ってます。テキストがたっぷり入ってます。</p>

</body>
</html>
```

<iframe width="100%" height="600" src="//jsfiddle.net/dnyektca/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### padding
CSSのプロパティの一つで要素の「内側」に**スペース**を設定できます。

#### 上下左右別々に設定できます
`padding:10px`だと全方向10pxのスペースができますが、それぞれ個別に設定できます。

```css
p {
	padding-top: 10px; /* 上のみ設定 */
	padding-right: 10px; /*　右のみ設定　*/
	padding-bottom: 10px; /* 下のみ設定 */
	padding-left: 10px; /* 左のみ設定 */
}
```

## 課題

### 問
テキストを含んだdivタグ要素に**上下10px、左右20px**のpaddingを設定してください。
ただし、divタグに横幅が300pxと赤色の枠線を追加して下さい。

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
<div>テキストでいっぱいです。テキストでいっぱいです。テキストでいっぱいです。テキストでいっぱいです。テキストでいっぱいです。</div>

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
<div>テキストでいっぱいです。テキストでいっぱいです。テキストでいっぱいです。テキストでいっぱいです。テキストでいっぱいです。</div>
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