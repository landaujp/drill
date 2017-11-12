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
// 別タブでyahoo.co.jpが開くようなリンクを表示してください
</body>
</html>
```

<style>
	#edit-wrapper {
		overflow:hidden;
	}
    .heding {
      margin: 5px 0;
      font-size: 15px;
    }
    iframe {
      width: 50%;
      height: 100%;
      border:1px solid #ccc;
      box-sizing: border-box;
      min-height: 500px;
    }
    #edit-box {
      width: 50%;
      float: left;
    }
    #edit-box textarea {
    	width: 100%;
    }
  </style>
<div id="edit-wrapper">
<div id="edit-box">
<div class="textarea">
<div id="editor_html">
<p class="heding">HTML</p>
<textarea id="textarea_html" rows="30" cols="100"></textarea>
</div>
<div id="editor_css">
<p class="heding">CSS</p>
<textarea id="textarea_css" rows="30" cols="100"></textarea>
</div>
</div>
</div>
<iframe id="view" srcdoc="<h1>default</h1>" frameborder="0"></iframe>
</div>
<script>
var html,css;
var html_dom = document.getElementById('textarea_html');
var defaultHtml = "<h1>default</h1>"
html_dom.value = defaultHtml;
var editor_html = CodeMirror.fromTextArea(html_dom, {
mode : "xml",
htmlMode: true,
lineNumbers: true,
smartIndent: true,
autoCloseTags: true,
indentUnit: 4,
extraKeys: {"Ctrl-g": "autocomplete"},
});
editor_html.on('change',function(){
render();
});
emmetCodeMirror(editor_html);
var editor_css = CodeMirror.fromTextArea(document.getElementById('textarea_css'), {
mode : "css",
// htmlMode: true,
lineNumbers: true,
smartIndent: true,
autoCloseTags: true,
indentUnit: 4,
extraKeys: {"Ctrl-g": "autocomplete"},
});
editor_css.on('change',function(){
render();
});
emmetCodeMirror(editor_css);
function render(){
editor_html.save();
editor_css.save();
html = $('#textarea_html').val();
css = $('#textarea_css').val();
var update = "<style>"+css+"</style>"+html;
$('#view').attr('srcdoc',update);
}
$(function(){
render();
})
</script>