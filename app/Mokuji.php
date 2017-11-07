<?php

namespace App;

class Mokuji
{
    const MOKUJI = [
        'htmlcss' => [
            'title' => 'HTMLとCSSの基礎',
            'subjects' => [
                'welcome-to-html'     => 'タイトル未定',
                'html-local-file'     => 'タイトル未定',
                'various-html'        => 'タイトル未定',
                'a-tag'               => 'タイトル未定',
                'inline-style'        => 'タイトル未定',
                'style-tag'           => 'タイトル未定',
                'link-css'            => 'タイトル未定',
                'css-class'           => 'タイトル未定',
                'css-id'              => 'タイトル未定',
                'css-width-height'    => 'タイトル未定',
                'css-bg-color'        => 'タイトル未定',
                'css-bg-image'        => 'タイトル未定',
                'css-border'          => 'タイトル未定',
                'html-block-inline'   => 'タイトル未定',
                'css-padding'         => 'タイトル未定',
                'css-margin'          => 'タイトル未定',
                'css-elem-center'     => 'タイトル未定',
                'center-in-center'    => 'タイトル未定',
                'display-none'        => 'タイトル未定',
                'block-to-inline'     => 'タイトル未定',
                'inline-to-block'     => 'タイトル未定',
                'side-by-side-float'  => 'タイトル未定',
                'side-by-side-inline' => 'タイトル未定',
                'double-in-centerize' => 'タイトル未定',
                'triple-in-centerize' => 'タイトル未定',
                'layout-1'            => 'タイトル未定',
                'layout-2'            => 'タイトル未定',
                'layout-3'            => 'タイトル未定',
                'layout-4'            => 'タイトル未定',
            ],
        ],
        'php' => [
            'title' => 'PHPの基礎',
            'subjects' => [
                'welcome' => 'ブラウザ上にHello Worldを出力する',
                'welcome' => 'ブラウザ上にHello Worldを出力する',
            ],
        ]
    ];

    private $section;

    private $subject;

    public function __construct($section, $subject)
    {
        $this->section = $section;
        $this->subject = $subject;
    }

    public function getAllMokuji()
    {
        return self::MOKUJI;
    }

    public function getSectionTitle()
    {
        return array_get(self::MOKUJI, $this->section.'.title', null);
    }

    public function getSubjects()
    {
        return array_get(self::MOKUJI, $this->section.'.subjects', null);
    }

    public function getSubjectTitle()
    {
        return array_get(self::MOKUJI, $this->section.'.subjects.'.$this->subject, null);
    }
}
