## 例題

### 問
テキストを含んだspan要素を５つ作成してそれらをブロック要素化してください。  
spanは縦横50px、背景色は赤色にしてください

### 解答
style.css
```css
span {
	width: 50px; /* インライン要素化されるので無効 */
	height: 50px; /* インライン要素化されるので無効 */
	background-color: red;
	display: block;
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

<span>インライン</span>
<span>インライン</span>
<span>インライン</span>
<span>インライン</span>
<span>インライン</span>

</body>
</html>
```

<iframe width="100%" height="300" src="//jsfiddle.net/Lvk7dqjh/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### displayプロパティ
displayはHTMLタグが元々持っている表示のされ方を変更するCSSプロパティでした。

#### display:block
本来span要素はインライン要素なので横に並びますが、`display:block`によって**表示のされ方がブロック要素化**しました。

またspan要素は元々widthとheightは効きませんがブロック要素化されたことで有効となっていることが例題で確認できます。


--- 

## 課題

### 問
１〜５の数字をそれぞれspanタグで囲い、２番めと４番目をブロック要素化してください。  
spanは縦横50px、背景色は赤色にしてください。

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
<span>1</span>
<span>2</span>
<span>3</span>
<span>4</span>
<span>5</span>

</body>
</html>
```

style.css

```css
/* あなたの解答 */

```

<script language="heredocument" id="default_html"><!-- あなたの解答 -->
<span>1</span>
<span>2</span>
<span>3</span>
<span>4</span>
<span>5</span>
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