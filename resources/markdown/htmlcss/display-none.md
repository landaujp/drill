## 例題

### 問
テキストを含んだp要素を２つ作り、片方を`display:none`を使って非表示にしてください。

### 解答
style.css
```css
.first {
	display: none;
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

<p class="first">表示テキスト</p>
<p>非表示テキスト</p>

</body>
</html>
```

<iframe width="100%" height="200" src="//jsfiddle.net/mnkhajg6/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### displayプロパティ
displayはHTMLタグが元々持っている表示のされ方を変更するCSSプロパティです。  
ブロック要素とインライン要素では要素の並び方が違いましたが`display`を使うことでそういったものも変更できます。

#### display:none
例題ではHTMLではテキストを含むpタグが２つありますが、１つしか表示されていません。  
`display:none`で要素を非表示にできます。

--- 

## 課題

### 問
１〜５の数字をそれぞれpタグで囲い、４番めの要素を非表示にしてください。

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
<p>1</p>
<p>2</p>
<p>3</p>
<p>4</p>
<p>5</p>

</body>
</html>
```

style.css

```css
/* あなたの解答 */

```

<script language="heredocument" id="default_html"><!-- あなたの解答 -->
<p>1</p>
<p>2</p>
<p>3</p>
<p>4</p>
<p>5</p>
</script>
<script>
var default_html = document.getElementById("default_html").text;
</script>

<script language="heredocument" id="default_css">/\* あなたの解答 \*/
</script>
<script>
var default_css = document.getElementById("default_css").text;
</script>