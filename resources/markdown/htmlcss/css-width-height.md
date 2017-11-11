## 例題

### 問
横幅300px、高さ300px、背景色赤色のdivを作成してください

### 解答
style.css

```css
div {
    width: 300px;
    height: 300px;
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
<div>横幅300px、高さ300px、背景色赤色の箱</div>
</body>
</html>
```

### 解説

#### widthとheight

![](/img/1/htmlcss-5.png)

widthは要素の横幅、heightは要素の高さを指定するCSSプロパティです。
それぞれウィズ、ハイトと読みます。

#### CSSプロパティは何個でもOK
例題ではwidth,height,background-colorの３つのCSSプロパティを一度に指定しています。プロパティは何個でも指定できます。
同じプロパティを記述した場合は、下にある方が有効となります。

```css
div {
    color:red; /* 無効 */
    color:blue; /* 有効 */
}
```

## 課題

### 問
横幅200px、高さ500px、背景色が青色のdivを作成してください

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
<div>横幅200px、高さ500px、背景色が青色の箱</div>
</body>
</html>
```