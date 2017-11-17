## 課題

### 問
横350px、縦150px、背景色青色のdivを作成してください。  
そのdivの中に縦横100px、背景色が赤色と黄色と緑色３つのpを作成してください。  
ただし、div要素は画面全体に対して左右中央表示、  
p要素はdivの中で横並びにしてください。

### ヒント

#### 中央表示と横並びのあわせ技
一見複雑そうですが、過去にやった表現の合わせわ技で実現できます。
* [要素を画面の中央に寄せる](/htmlcss/css-elem-center)
* [要素を横並びにする display:inline-block編](/htmlcss/side-by-side-inline)

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
</div>

</body>
</html>
```

style.css

```css

```

<script language="heredocument" id="default_html"><!-- あなたの解答 -->
<div>
<p class="first"></p>
<p class="second"></p>
<p class="third"></p>
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