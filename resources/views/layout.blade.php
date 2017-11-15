<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Webプログラミングドリル</title>
	<meta name="format-detection" content="telephone=no">
	<meta name="Keywords" content="">
	<meta name="description" content="">
	<meta name="referrer" content="unsafe-url">
	<meta http-equiv="content-language" content="ja">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/css/reset.css" rel="stylesheet"></link>
	<link href="/css/github-markdown.css" rel="stylesheet"></link>
	<!-- <link href="/css/hightlightstyles/agate.css" rel="stylesheet"></link> -->
	<!-- <link href="/css/hightlightstyles/dracula.css" rel="stylesheet"></link> -->
	<!-- <link href="/css/hightlightstyles/gruvbox-dark.css" rel="stylesheet"></link> -->
	<link href="/css/hightlightstyles/monokai.css" rel="stylesheet"></link>
	<link href="/css/style.css" rel="stylesheet"></link>
	<!-- <script src="/js/syntaxhighlighter.js"></script> -->


	<link href="/css/codemirror.css" rel="stylesheet"></link>
	<script src="/js/codemirror/lib/codemirror.js"></script>
	<script src="/js/codemirror/lib/codemirror-emmet.js"></script>

	<script src="/js/codemirror/addon/hint/show-hint.js"></script>
	<script src="/js/codemirror/addon/hint/xml-hint.js"></script>
	<script src="/js/codemirror/addon/hint/html-hint.js"></script>
	<script src="/js/codemirror/addon/hint/css-hint.js"></script>
	<script src="/js/codemirror/addon/edit/matchbrackets.js"></script>
	<script src="/js/codemirror/addon/edit/closetag.js"></script>
	<script src="/js/codemirror/addon/fold/xml-fold.js"></script>

	<script src="/js/codemirror/mode/xml/xml.js"></script>
	<script src="/js/codemirror/mode/javascript/javascript.js"></script>
	<script src="/js/codemirror/mode/css/css.js"></script>
	<script src="/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
	<div class="container-fulid">
		<div class="row">
			<div id="side-menu" class="col-sm-4 col-md-3">
				<p class="link-top"><a href="/">TOP</a></p>
				<ul class="chapers">
					@foreach ($sections as $section_key => $section)
						<li>
							<p class="chaper">{{$loop->iteration}}.{{$section['title']}}</p>
							<ul class="titles">
								@foreach ($section['subjects'] as $subject_key => $subject)
									<li><a class="arrow ku-arrow" href="/{{$section_key}}/{{$subject_key}}">{{$loop->parent->iteration}}-{{$loop->iteration}}. {{$subject}}</a></li>
								@endforeach
							</ul>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="content col-sm-8 col-md-9">
				<h1>{{ $h1 or 'Webプログラミングドリル'}}</h1>
				{!! $content !!}
			</div>
		</div>
	</div>
	<footer>

	</footer>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
