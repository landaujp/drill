function reverseMd() {
  var arr = arguments[1].split(/\r?\n/);
  arr.pop();
  arr = arr.map(function(elem,index,array){
    return "\t" + elem + "\n";
  });
  arr = arr.join("");
  return "\n"+arr
    .replace(/(&lt;)/g, '<')
    .replace(/(&gt;)/g, '>')
    .replace(/(&quot;)/g, '"')
    .replace(/(&#39;)/g, "'")
    .replace(/(&amp;)/g, '&');
}
$( function() {
  $('#side-menu p.chapter').click(function(){
    $(this).next().toggleClass("active");
  });

  // codemirror
  var html,css,defaultHtml = '',defaultCss = '';
  var html_dom = document.getElementById('textarea_html');
  if (typeof(default_html) != "undefined") {
    defaultHtml += default_html.replace(/<\/p>\r?\n<p>/g,"\n\n");
    defaultHtml = defaultHtml.replace(/<\/p>\r?\n<pre><code>((.|\r?\n)*?)<\/code><\/pre>\r?\n<p>/g,reverseMd);
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
  
  emmetCodeMirror(editor_html);
  var css_dom = document.getElementById('textarea_css');
  if ( typeof(default_css) != "undefined") {
    defaultCss += default_css.replace(/<\/p>\r?\n<p>/g,"\n\n");
    defaultCss = defaultCss.replace(/<\/p>\r?\n<pre><code>((.|\r?\n)*?)<\/code><\/pre>\r?\n<p>/g,reverseMd);
  }
  css_dom.value = defaultCss;
  var editor_css = CodeMirror.fromTextArea(css_dom, {
    mode : "css",
    // htmlMode: true,
    lineNumbers: true,
    smartIndent: true,
    autoCloseTags: true,
    indentUnit: 4,
    extraKeys: {"Ctrl-g": "autocomplete"},
  });
  // localstrageから読み込み
  var local_html_key = (location.pathname + "_html").replace(/\//g,"_");
  var local_css_key  = (location.pathname + "_css").replace(/\//g,"_");
  if ( localStorage[local_html_key] === undefined ) {
    localStorage.setItem(local_html_key,defaultHtml);
  }
  if ( localStorage[local_css_key] === undefined ) {
    localStorage.setItem(local_css_key,defaultCss);
  }
  editor_html.getDoc().setValue(localStorage[local_html_key]);
  editor_css .getDoc().setValue(localStorage[local_css_key]);

  editor_html.on('change',function(){
    render();
  });
  editor_css.on('change',function(){
    render();
  });
  emmetCodeMirror(editor_css);

  function render(){
    html = editor_html.getDoc().getValue();
    css  = editor_css.getDoc().getValue();
    var update = "<style>"+css+"</style>"+html;
    $('#view').attr('srcdoc',update);
    localStorage.setItem(local_html_key, html);
    localStorage.setItem(local_css_key, css);
  }
  render();
  $('.reset-html').click(function(){
    if ( window.confirm('htmlをリセットしますか？')) {
      editor_html.getDoc().setValue(defaultHtml);
    }
  });
  $('.reset-css').click(function(){
    if ( window.confirm('cssをリセットしますか？')) {
      editor_css.getDoc().setValue(defaultCss);
    }
  });
});