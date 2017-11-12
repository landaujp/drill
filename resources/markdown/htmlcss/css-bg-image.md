## 例題

### 問
divタグに対して([この青色の小さい画像](/img/1/bg.jpg))を背景画像として設定してください。
![](/img/1/bg.jpg)

### 解答
style.css

```css
div {    
    background-image: url(bg.jpg);
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
<div>背景画像が設定されています</div>
</body>
</html>
```

### 解説

#### background-image
CSSのプロパティの一つで要素に背景画像を設定できます。

#### background-repeat
例題のCSSだと背景画像が繰り返されて要素の大きさを満たします。
`background-repeat`というプロパティは背景画像が繰り返れるか１回だけかを設定できます。  
デフォルトは`repeat`なので何も指定しないと繰り返されます。  
以下のように記述すると背景画像は１回だけ表示されます。

```css
div {
	background-image: url(bg.jpg);
	background-repeat: no-repeat;
}
```
---

## 課題
### 問
pタグに対して[この画像](/img/1/autumn.jpg)の背景色を設定してください。  
![この画像](/img/1/autumn.jpg)

ただし、pタグの横幅300px,高さは200px,背景画像の繰り返しは**無し**です。

### 解答
style.css
```css
/* cssを記述してください */
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
<p>紅葉の季節</p>
</body>
</html>
```