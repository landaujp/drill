<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
	public function article($section,$subject)
	{
		$section  = urldecode($section);
		$subject    = urldecode($subject);
		$md_file  = resource_path()."/markdown/{$section}/{$subject}.md";
		if ( !is_file($md_file)) throw new NotFoundHttpException("404 Not Found");
		$markdown = file_get_contents($md_file);
		$parser   = new \cebe\markdown\GithubMarkdown();
		$parser->html5 = true;
		$html     = $parser->parse($markdown);
		return view('layout')->with('content', $html);
	}
}