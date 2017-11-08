## 例題

### 問
HTMLファイルがあるディレクトリに`css`というディレクトリを作り、その中に`style.css`を作成してください。
そしてそのCSSファイルを読み込んで下さい。

ディレクトリの図
```
ディレクトリA
 ├ index.html
 └ cssディレクトリ
    └ style.css
```

### 解答
css/style.css
```css
p {    
    color: blue;
}
```
index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
<!-- cssディレクトリの中のstyle.cssファイルを読み込む -->
<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```

### 解説

#### 違うディレクトリの指定の仕方
例題ではディレクトリAにindex.htmlとcssディレクトリがあります。
index.htmlから見た場合、style.cssは**自分と同じディレクトリにあるにcssディレクトリの下にあるという位置関係**になります。
linkタグに`href="css/style.css"`と記述することで`[index.htmlがあるディレクトリ]/css/style.css`という意味になります。



## 課題1

### 問
HTMLファイルがあるディレクトリに`style`というディレクトリを作り、その中に`design.css`を作成してください。
そしてそのCSSファイルを読み込んで下さい。

### 解答
css/style.css
```css
p {    
    color: blue;
}
```
index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
<!-- styleディレクトリの中のdesign.cssファイルを読み込むように記述してください -->
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```

## 課題2

### 問
HTMLファイルがあるディレクトリに`file`というディレクトリを作り、その中にさらに`css`というディレクトリをつくりその中に`style.css`を作成してください。
そしてそのCSSファイルを読み込んで下さい。

ディレクトリの図
```
ディレクトリA
 ├ index.html
 └ fileディレクトリ
    └ cssディレクトリ
      └ style.css
```

### 解答
file/css/style.css
```css
p {    
    color: blue;
}
```
index.html
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
<!-- fileディレクトリの中のcssディレクトリの中のstyle.cssファイルを読み込むように記述してください -->
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```