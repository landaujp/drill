<?php

namespace App\Http\Controllers;

use App\Mokuji;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function article($section, $subject)
    {
        $section  = urldecode($section);
        $subject  = urldecode($subject);

        $mokuji        = new Mokuji($section, $subject);
        $section_title = $mokuji->getSectionTitle();
        $subject_title = $mokuji->getSubjectTitle();
        if (is_null($subject_title)) {
            throw new NotFoundHttpException("404 Not Found");
        }

        $md_file = resource_path()."/markdown/{$section}/{$subject}.md";
        if (!is_file($md_file)) {
            $md_file = resource_path().'/markdown/now_writing.md';
        }

        $markdown      = file_get_contents($md_file);
        $parser        = new \cebe\markdown\GithubMarkdown();
        $parser->html5 = true;
        $html          = $parser->parse($markdown);

        return view('layout')->with('content', $html);
    }
}