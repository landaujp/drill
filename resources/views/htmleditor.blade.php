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
<iframe id="view" srcdoc="" frameborder="0"></iframe>
</div>
<script>
var html,css,defaultHtml = '',defaultCss = '';
var html_dom = document.getElementById('textarea_html');
if (typeof(default_html) != "undefined") {
	defaultHtml += default_html
}
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
var css_dom = document.getElementById('textarea_css');
if ( typeof(default_css) != "undefined") {
	defaultCss += default_css;
}
css_dom.value = defaultCss
var editor_css = CodeMirror.fromTextArea(css_dom, {
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
$(function(){render();})
</script>