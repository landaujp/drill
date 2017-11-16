<?php

namespace App\Http\Controllers;

use App\Mokuji;
use cebe\markdown\GithubMarkdown;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ExerciseController extends Controller
{
    public function article($section, $subject)
    {
        $section  = urldecode($section);
        $subject  = urldecode($subject);

        $mokuji        = new Mokuji();
        $section_title = $mokuji->getSectionTitle($section);
        $subject_title = $mokuji->getSubjectTitle($section, $subject);
        if (is_null($subject_title)) {
            throw new NotFoundHttpException("404 Not Found");
        }

        $md_file = resource_path()."/markdown/{$section}/{$subject}.md";
        if (!is_file($md_file)) {
            $md_file = resource_path().'/markdown/now_writing.md';
        }

        $markdown      = file_get_contents($md_file);
        $parser        = new GithubMarkdown();
        $parser->html5 = true;
        $html          = $parser->parse($markdown);

        list($prev_section, $prev_subject) = $mokuji->getPrevSectionAndSubjec($section, $subject);
        $prev_url   = !is_null($prev_subject) ? "/$prev_section/$prev_subject/" : null;
        $prev_title = $mokuji->getSubjectTitle($prev_section, $prev_subject);
        list($next_section, $next_subject) = $mokuji->getNextSectionAndSubjec($section, $subject);
        $next_url   = !is_null($next_subject) ? "/$next_section/$next_subject/" : null;
        $next_title = $mokuji->getSubjectTitle($next_section, $next_subject);

        $editor = null;
        if ($section == 'htmlcss') {
            $editor = view('htmleditor');
        }
        return view('layout')
            ->with('h1', $subject_title)
            ->with('sections', Mokuji::MOKUJI)
            ->with('current_section', $section)
            ->with('current_subject', $subject)
            ->with('content', $html)
            ->with('content', $html)
            ->with('content', view('article')
                ->with('article', $html)
                ->with('editor', $editor)
                ->with('prev_url', $prev_url)
                ->with('prev_title', $prev_title)
                ->with('next_url', $next_url)
                ->with('next_title', $next_title)
            );
    }
}
