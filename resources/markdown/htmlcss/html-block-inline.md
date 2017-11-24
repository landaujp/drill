## 例題

### 問
div要素を5個、span要素を5個表示して要素の表示のされかたの違いを確認してください。
ただし、divは横幅50px,高さ50px,背景色赤色で、spanは背景色黄色にしてください。

### 解答
style.css

```css
div {
	width: 50px;
	height: 50px;
	background-color: red;
}
span {
	background-color: yellow;
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
<div>div</div><div>div</div><div>div</div><div>div</div><div>div</div>
<span>span</span><span>span</span><span>span</span><span>span</span><span>span</span>
</body>
</html>
```

<iframe width="100%" height="350" src="//jsfiddle.net/7sf1fvkz/2/embedded/result,html,css/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

### 解説

#### 並びの違い
HTMLタグは**ブロック要素**と**インライン要素**にグループ分けできます。  
例題ではdivとspanを繰り返しましたが並び型が違いました。  
これはdivがブロック要素、spanがインライン要素に属するためです。

#### ブロック要素
このような特徴があります。
* 画面上は要素ごとに改行しているように表示される→横ではなく縦に並ぶ
* 横幅は親要素と同じ（指定しない限り）
* 縦幅は内部の要素による（指定しない限り）→中身が空のブロック要素なら高さはゼロ
* `width`と`height`を指定して**内部の要素とは関係なく大きさを決める**ことができる**

主なタグは`h1~h6`,`div`,`p`,`table`,`form`

#### インライン要素
このような特徴があります。
* テキストの様に横に連なって表示される。
* 横幅は要素自体の横幅になる（指定しない限り）
* 高さは`line-height`で指定する**（`height`ではない）**
	* むしろ`height`は効かない
* 親要素いっぱいの横幅まで連続すると改行されて次の行から始まる

主なタグは`a`,`img`,`span`

--- 
