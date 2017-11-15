## aタグのtarget属性
aタグにはhref属性の他にtarget属性があります。
target属性に`_blank`を指定すると、そのリンク先のページをブラウザが新しいタブを開いてそこで表示されます。

---

## 課題

### 問
別タブでyahoo.co.jpが開くようなリンクを表示してください

### 回答例

```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>はじめてのHTML</title>
<meta charset="utf-8">
</head>
<body>
<!-- 別タブでyahoo.co.jpが開くようなリンクを表示してください -->
</body>
</html>
```


<script language="heredocument" id="default_html">
<div>
  <p>hoge</p>
</div>
</script>
<script>
var default_html = document.getElementById("default_html").text;
</script>

<script language="heredocument" id="default_css">
a {
  border:1px solid red;
}
</script>
<script>
var default_css = document.getElementById("default_css").text;
</script>