## 例題

### 問
div要素の中にp要素を２つ作成して、**float**を使ってp要素を横並びにしてください。  
ただし、p要素は縦横150pxで片方は背景色赤色、もう片方は背景色黄色にしてください。  
また、親要素のdivはpadding:10px、枠線青色をして下さい。

### 解答
style.css
```css
div {
	padding: 10px;
	border: 1px solid blue;
	overflow: hidden;　/* 横並びにする要素の親要素にはoverflow:hiddenを指定 */
}
p {
	width: 150px; /* 横並びにする要素にはwidthを指定 */
	height: 150px;
	float: left; /* 横並びにする要素にはfloatを指定 */
}
p.first {
	background-color: red;
}
p.second {
	background-color: yellow;
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

<div>
	<p class="first">左</p><p class="second">右</p>
</div>

</body>
</html>
```

<iframe width="100%" height="280" src="//jsfiddle.net/nL8rp5jv/2/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### float
要素を横並びにする方法の一つにCSSの`float`を使います。  
floatで横並びを表現するのに重要なポイントは４つです。
1. 横並びにしたい要素に`float:left`を指定する。（例題のp要素）
1. 横並びにしたい要素に横幅を指定する。（例題のp要素）
1. 横並びにしたい要素の横幅の合計が親要素の横幅を超えていない。
1. **横並びにしたい要素の親要素**に`overflow:hidden`を指定する（例題のdiv要素）

これらを満たさないと上手く横並びが表現できず、見た目が崩れてしまします。  
よく見る上手く行かないパターンは`float`は指定しているのに残りの２〜４番が指定されていないので横並びができないというパターンです。

#### overflow: hidden
親要素に`overflow: hidden`が指定されていないと、その親要素の高さが消えてしまいます。  
↓ overflow:hiddenを指定していないため親要素divが子要素pの高さを認識できず、htightがゼロになっている例です。
<iframe width="100%" height="300" src="//jsfiddle.net/nL8rp5jv/5/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

子要素に`float`を指定するとその要素が浮いたようになり、親要素はその子要素の高さを認識できなくなります。  
親要素に`overflow:hidden`を指定することで子要素の高さを認識できるようになります。

#### floatで横並びめっちゃ重要
めちゃくちゃ重要なので必ずマスターしてください。

---

## 課題

### 問
div要素の中にp要素を4つ作成して、p要素を横並びにしてください。  
ただし、p要素は縦横100pxで背景色を左から赤、黄、緑、青にしてください。  
また、親要素のdivはpadding:10px、枠線青色をして下さい。

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
<div>
	<p class="first"></p>
	<p class="second"></p>
	<p class="third"></p>
	<p class="fourth"></p>
</div>

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
<div>
<p class="first"></p>
<p class="second"></p>
<p class="third"></p>
<p class="fourth"></p>
</div>
</script>
<script>
var default_html = document.getElementById("default_html").text;
</script>

<script language="heredocument" id="default_css">/\* あなたの解答 \*/
</script>
<script>
var default_css = document.getElementById("default_css").text;
</script>