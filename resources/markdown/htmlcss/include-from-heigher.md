## 例題

### 問
以下のようなディレクトリ構成を作成し、style.cssを読み込んでください

ディレクトリの図
```
ディレクトリA
 ├ fileディレクトリ
 │  └ index.html
 └ style.css
```

### 解答
style.css
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
<!-- 1つ上のディレクトリの中のstyle.cssファイルを読み込む -->
<link rel="stylesheet" type="text/css" href="../style.css"> 
</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```

### 解説

#### 自分より上の階層のファイルを読み込む
自分より上の階層を指し示すには「`../`」を使います。
例題では`href="../style.css"`とありますが、これは`index.htmlがあるディレクトリの一つ上のstyle.css`を示します。

#### ２つ上は？
1つ上が`../`なので2つ上は`.../`と思いきや、`../../`が正解です。`.../`という表現はありません。


## 課題1

### 問
以下のようなディレクトリ構成を作成し、design.cssを読み込んでください

ディレクトリの図
```
ディレクトリA
 ├ htmlディレクトリ
 │  └ index.html
 └ design.css
```

### 解答
design.css
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
<!-- 1つ上のディレクトリの中のstyle.cssファイルを読み込む -->
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```

## 課題2

### 問
以下のようなディレクトリ構成を作成し、design.cssを読み込んでください

ディレクトリの図
```
ディレクトリA
 ├ srcディレクトリ
 │  └ htmlディレクトリ
 │       └ index.html
 └ design.css
```

### 解答
design.css
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
<!-- 2つ上のディレクトリの中のstyle.cssファイルを読み込む -->
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<p>style属性で文字の色と大きさを変更してみる</p>
</body>
</html>
```