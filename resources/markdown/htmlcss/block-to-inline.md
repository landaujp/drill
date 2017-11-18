## 例題

### 問
テキストを含んだdiv要素を５つ作成してそれらをインライン要素化してください。  
divは縦横50px、背景色は赤色にしてください

### 解答
style.css
```css
div {
	width: 50px; /* インライン要素化されるので無効 */
	height: 50px; /* インライン要素化されるので無効 */
	background-color: red;
	display: inline;
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

<div>ブロック</div>
<div>ブロック</div>
<div>ブロック</div>
<div>ブロック</div>
<div>ブロック</div>

</body>
</html>
```

<iframe width="100%" height="180" src="//jsfiddle.net/syt946vw/1/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### displayプロパティ
displayはHTMLタグが元々持っている表示のされ方を変更するCSSプロパティでした。

#### display:inline
本来div要素は縦に改行されて並びますが、`display:inline`によって**表示のされ方がインライン要素化**しました。

例題ではwidthとheightを指定していますが、インライン要素化されたdivには反映されていません。  
これはインライン要素の中にはwidthとheightの指定が効かないタグがあって（spanなど）、  
`display:inline`でインライン要素化されたものも同じ挙動となります。

#### display:inline-blockも
インライン要素化させるものとして`display:inline-block`もあります。  
これは要素の並び方はインライン要素と同じだけど、要素単体でみるとブロック要素と同じという両方の性質を合わせ持たせることができます。  
このプロパティの効果的な使い方は後のページで説明します。



--- 

## 課題

### 問
１〜５の数字をそれぞれpタグで囲い、２番めと４番目をインライン要素化してください

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