## 例題

### 問
縦横300px、枠線赤色のdiv要素を２作って下さい。
そのdivに上下左右masrginを20px設定してください。

### 解答
style.css
```css
div {
	width: 300px;
	height: 300px;
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