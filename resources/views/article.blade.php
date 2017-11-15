<article>
	{!! $article !!}
	@if (isset($editor))
{!! $editor !!}
	@endif
</article>
<div class="content-footer">
	@if (!is_null($prev_url))
	<p class="prev"><a href="{{ $prev_url }}">&laquo; {{ $prev_title }}</a></p>
	@endif
	@if (!is_null($next_url))
	<p class="next"><a href="{{ $next_url }}">{{ $next_title }} &raquo;</a></p>
	@endif
</div>
