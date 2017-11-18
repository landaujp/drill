## 例題

### 問
divタグに対して赤色の背景色を設定してください。

### 解答
style.css

```css
div {
    background-color: red;
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
<div>赤色の箱です</div>
</body>
</html>
```

### 解説

#### background-color
CSSのプロパティの一つで要素に背景色を設定できます。

#### 色の指定の仕方
これまでは色の指定として`red`や`blue`といった色の名前を使ってきました。
この他にも `#FF0000`のような形で指定することも出来ます。

## 課題
### 問
divタグに対して青色の背景色を設定してください。

### 解答

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
<div>青色の箱です</div>
</body>
</html>
```
style.css
```css
/* あなたの解答 */
```

<script language="heredocument" id="default_html"><!-- あなたの解答 -->
<div>青色の箱です</div>
</script>
<script>
var default_html = document.getElementById("default_html").text;
</script>

<script language="heredocument" id="default_css">/\* あなたの解答 \*/
div {
	
}
</script>
<script>
var default_css = document.getElementById("default_css").text;
</script>