## 例題

### 問
pタグで囲まれたテキストの文字の色を青色、大きさを15pxに変更してください。
ただしhtmlタグのstyle属性は使わずに、styleタグ内にCSSを記述してください。

### 解答例
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
</head>
<body>
<style>
    p {
        color:blue;
        font-size:15px;
    }
</style>

<p>style属性で文字の色と大きさを変更してみる</p>

</body>
</html>
```

### 解説
#### styleタグとは
styleタグとは内部にCSSを記述することができます。
htmlテキストの好きな場所にstyleタグを記述できます。
styleタグで囲まれた内容自体はブラウザに表示されません。

#### htmlタグとの対応
htmlタグのstyle属性（前ページ参照）の場合は、タグに直接CSSを記述していました。
styleタグで記述する場合は、htmlタグとCSSが離れてしまいます。
対応させるには例題のように`タグ名 { [CSSの記述] }`となります。

```css
p {        
    color:blue;
}
```

一つのCSSプロパティと値の組をセミコロンで区切ることでいくつでも記述できます。
```css
p {        
    color:blue;    
    font-size:15px;
}
```


## 課題
### 問
以下のpタグのテキストの文字の色を赤に、文字の大きさを30pxにしてください。
ただしhtmlタグのstyle属性は使わずに、styleタグ内にCSSを記述してください。

### 解答
```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>タイトル</title>
<meta charset="utf-8">
</head>
<body>
<style>
    <!-- あなたの解答 -->

</style>

<p>style属性で文字の色と大きさを変更してみる</p>

</body>
</html>
```