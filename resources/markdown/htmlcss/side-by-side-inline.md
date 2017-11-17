## 例題

### 問
div要素の中にp要素を２つ作成して、**inline-block**を使ってp要素を横並びにしてください。  
ただし、p要素は縦横150pxで片方は背景色赤色、もう片方は背景色黄色にしてください。  
また、親要素のdivはpadding:10px、枠線青色をして下さい。

### 解答
style.css
```css
div {
	padding: 10px;
	border: 1px solid blue;
}
p {
	width: 150px; /* 横並びにする要素にはwidthを指定 */
	height: 150px;
	display: inline-block; /* 横並びにする要素にはinline-blockを指定 */
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

<iframe width="100%" height="300" src="//jsfiddle.net/1mg31gdz/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### display:inline-block
要素を横並びにする方法の一つにCSSの`display:inline-block`を使います。  
以前の回で、HTMLタグにはブロック要素とインライン要素というグループに別れていて、それぞれ連続したときの挙動が違うことを確認しました。  
`display:inline-block`は**ブロック要素に対して並び方をインライン要素のように振る舞わせる**効果があるCSSです。  
インライン要素は元々横に並んでいくので、これによって要素を横並びにすることができます。

#### display:inlineではだめ？
`display:inline`によってブロック要素をインライン要素に変更できます。  
インライン要素も横に並びますがインライン要素には`height`プロパティが効きません。タグによっては`width`プロパティも効きません。  
ですので**ブロック要素を横並びにする**という目的で使用する多くの状況では`inline-block`の方が適しているでしょう。  
↓例題で`display:inline-block`の代わりに`display:inline`を使用した例です。
<iframe width="100%" height="200" src="//jsfiddle.net/hm0fztke/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

---

## 課題

### 問
div要素の中にp要素を4つ作成して、`display:inline-block`を使ってp要素を横並びにしてください。  
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