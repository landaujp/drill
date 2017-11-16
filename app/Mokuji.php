<?php

namespace App;

class Mokuji
{
    const MOKUJI = [
        'htmlcss' => [
            'title' => 'HTMLとCSSの基礎',
            'subjects' => [
                'welcome-to-html'      => '自分でhtmlファイルを作り簡単なHTMLをブラウザで表示',
                'dl-html-file'         => 'WebサイトのHTMLをDLしてローカルでブラウザで表示',
                'various-html'         => 'h1,table,ul,li,div,p,a,img,span,brを使ってHTML書く',
                'a-tag'                => 'リンクを別タブで開く',
                'inline-style'         => 'style属性で文字の色と大きさを変更してみる',
                'style-tag'            => 'styleタグでCSSを記述',
                'link-css'             => 'linkでCSSファイルを外部から読み込む',
                'include-from-lower'   => '下層のディレクトリのファイルを読み込む',
                'include-from-heigher' => '上層のディレクトリのファイルを読み込む',
                'css-class'            => 'classを使ってcssとhtmlを対応させる',
                'css-id'               => 'idを使ってcssとhtmlを対応させる',
                'css-width-height'     => 'widthとheightで幅と高さを指定',
                'css-bg-color'         => 'background-colorで背景色を表現',
                'css-bg-image'         => 'background-imageで背景画像を表現',
                'css-border'           => 'borderで枠線を表現',
                'html-block-inline'    => 'ブロック要素とインライン要素',
                'css-padding'          => 'divの中をテキストで埋めて余白をpaddingを表現',
                'css-margin'           => 'divの下にdivを作ってmargingを表現',
                'css-elem-center'      => 'div一つを画面の中央に寄せる',
                'center-in-center'     => '中央寄せの大きいdivの中に中央寄せの小さいdivを表現',
                'display-none'         => 'display:noneで要素を非表示にする',
                'block-to-inline'      => 'ブロック要素をinline化して表現が変わることを確認する',
                'inline-to-block'      => 'インライン要素をblock化して表現が変わることを確認する',
                'side-by-side-float'   => 'floatでdiv２つを横並びにする',
                'side-by-side-inline'  => 'display:inlineで要素を横並びにする',
                'double-in-centerbox'  => '中央に寄せた要素の中に横並びの要素２つを表現',
                'triple-in-centerbox'  => '中央に寄せた要素の中に横並びの要素３つを表現',
                'layout-1'             => 'ヘッダー＋中央寄せコンテンツ＋フッター',
                'layout-2'             => 'ヘッダー＋コンテンツ（メインカラム＋サイドカラム）＋フッター',
                'layout-3'             => 'ヘッダー（ロゴ＋ナビ）＋コンテンツ（メインカラム＋サイドカラム）＋フッター',
                'layout-4'             => 'レイアウト実践4',
            ],
        ],
        'php' => [
            'title' => 'PHPの基礎',
            'subjects' => [
                'welcome'    => 'ブラウザ上にHello Worldを出力する',
                'variable'   => '変数',
                'data-type'  => '型',
                'strlink'    => '文字列連結',
                'arithmetic' => '四則演算',
                'increment'  => '加算子/減算子',
                'array'      => '配列',
                'convert'    => '型変換',
                'boolean'    => '論理値を理解する',
                'for'        => 'for',
                'while'      => 'while',
                'foreach'    => 'foreach',
                'if'         => 'if',
            ],
        ],
    ];

    public function getSectionTitle($section)
    {
        return array_get(self::MOKUJI, $section.'.title', null);
    }

    public function getSubjects($section)
    {
        return array_get(self::MOKUJI, $section.'.subjects', null);
    }

    public function getSubjectTitle($section, $subject)
    {
        return array_get(self::MOKUJI, $section.'.subjects.'.$subject, null);
    }

    public function getNextSectionAndSubjec($section, $subject)
    {
        $hit = null;
        foreach (self::MOKUJI as $sec => $val) {
            if (is_null($hit) && $sec !== $section) {
                continue;
            }

            foreach ($val['subjects'] as $sub => $sub_title) {
                if (is_null($hit) && $sub !== $subject) {
                    continue;
                }

                if (!is_null($hit)) {
                    return [$sec,$sub];
                }
                $hit = true;
            }
        }
        return null;
    }

    public function getPrevSectionAndSubjec($section, $subject)
    {
        $hit = null;
        foreach (self::MOKUJI as $sec => $val) {
            foreach ($val['subjects'] as $sub => $sub_title) {
                if ($sub !== $subject) {
                    $hit = [$sec,$sub];
                } else {
                    break 2;
                }
            }
        }
        return $hit;
    }
}
