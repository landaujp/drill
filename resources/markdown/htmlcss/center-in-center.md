## 例題

### 問
縦横300px、背景色赤のdivを作成してください。  
そのdivの中に縦横100px、背景色黄色のpを作成してください。  
ただし、pはdivの中で左右中央になるように記述してください。

### 解答
style.css
```css
div {
	width: 300px;
	height: 300px;
	background-color: red;
}
p {
	width: 100px;
	height: 100px;
	background-color: yellow;
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

<div><p></p></div>

</body>
</html>
```

<iframe width="100%" height="380" src="//jsfiddle.net/mkh95x65/1/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### 親要素、子要素
HTMLでは要素の中に要素を作り、そのまた要素の中に要素を作りという風に**入れ子構造**で記述していきます。  
そのときある要素の一つ外側を要素を**親要素**と呼びます。  
また逆に親からみて自分の内側にある要素を**子要素**と呼びます。

#### 子要素の左右中央寄せ
例題はブラウザの画面全体ではなく横幅300pxの親要素の内部での左右中央表示でした。  
このように子要素で`margin:0 auto;`を指定した場合、**親に対しての中央を意味します**。

--- 

## 課題

### 問
縦横300px、背景色赤のdivを作成してください。  
そのdivの中に縦横100px、背景色黄色のpを作成してください。  
**ただし、divは画面全体に足して左右中央になるように記述してください。**  
また、pはdivの中で左右中央になるように記述してください。

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
<div><p></p></div>

</body>
</html>
```

style.css

```css
div {

}
p {

}

```

<script language="heredocument" id="default_html"><!-- あなたの解答 -->
<div><p></p></div>
</script>
<script>
var default_html = document.getElementById("default_html").text;
</script>

<script language="heredocument" id="default_css">/\* あなたの解答 \*/
div {
}
p {
}
</script>
<script>
var default_css = document.getElementById("default_css").text;
</script>