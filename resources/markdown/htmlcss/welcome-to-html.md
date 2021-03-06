
## Webブラウザが何をしているか

### Webブラウザとは「ブラウザ」の一種
「ブラウザ」という言葉は色々なファイルを見るソフト全般のことを言います。
インターネットを閲覧するものに限りません。
Windowsであればエクスプローラー、MacであればFinderもそうです。

そしてインターネットを閲覧するときに使うアプリケーションもブラウザです。
代表的なものとして、

* Internet Explorer
* Google Chrome
* Firefox
* Safari

などがあります。

ただしほとんどの場合、「ブラウザ」という言葉はWebブラウザを指します。
この後の説明でブラウザという場合はWebブラウザの意味で使用します。

### ブラウザは（主に）Webサイトに問い合わせて、HTMLという指示書を取り寄せている
[絵]
ブラウザが行っていることはWebサイトに対しての問い合わせです。

すでに御存知の通り、アドレスバーにURLを打ち込んだり、リンクを辿ったり、ブックマークを開くことで見たいサイトを閲覧できます。
例えば`https://twitter.com/`にアクセスすると**twitter**のサイトを見ることが出来ます。

これはブラウザがtwitterのサイトに対して**「ページを見せて下さい」と問い合わせしている**と言い換える事ができます。
問い合わせたサイトからブラウザが表示すべき指示書である**HTMLファイル**をもらいます。
[絵：ブラウザがtwitterに問い合わせて　htmlファイルを送り返す図]

### ブラウザはHTMLというテキストを人に見やすく加工している
HTMLファイル（＝指示書）はただの文字が書いてあるファイルです。
試しに**twitter**のHTMLファイルを見てみましょう。

* `https://twitter.com/`にアクセス
* 右クリック→「ページのソースを表示」をクリック

とても長い文字列のページが表示されたと思います。これがHTMLファイルです。
先程のtwitterのトップページとはまったく見た目が違います。
ですがブラウザはtwitterにアクセスした結果、twitterのサイトにこのHTMLファイルを送ってもらったのです。
そしてこのただの文字列であるHTMLファイルを人間が見やすいように加工して`https://twitter.com/`の様な見た目を表現しています。

[絵:ソースをブラウザに食べさせるとtwitterの見た目になる図]


## 簡単なHTMLを書いてみる
簡単なHTMLファイルを作ってブラウザで見てみましょう。
適当なディレクトリに `index.html`というファイルを作って以下のコードを貼り付けてください。

```html
<!DOCTYPE html>
<html lang="ja">
<head>
<title>はじめてのHTML</title>
<meta charset="utf-8">
</head>
<body>
これはHTMLファイルです。
</body>
</html>
```

先程のディレクトリを開いて`index.html`をダブルクリックしてください。下図のように表示されるはずです。

![file](/img/1/1-1-1.png)

では次にこのページでHTMLソースを表示してみましょう。
* 右クリック→「ページのソースを表示」をクリック

![file](/img/1/1-1-2.png)

自分で書いたHTMLが見れました。一般にこのHTMLの文字列のことをHTMLソースファイルとよく呼びます。
twitterのHTMLソースとは程遠いですがどちらも同じHTMLソースファイルです。

## 逆に言うとWebサイトがやっていることはブラウザに対してHTMLを送っているだけ
WebサービスやWebシステムというととても難しいものに聞こえますが、基本的にやっていることはこれだけです。

1. ブラウザはWebサイトに対して問い合わせを送る
1. Webサイトはブラウザに対してHTMLファイルを送り返す
1. ブラウザは送られたHTMLファイルを加工して画面に表示する


これからプログラミング学習を通して自由自在なHTMLファイルをブラウザに対して送り返せるようになります 🍏


## ところで"file://〜〜"とは？
先程、自分のパソコンの中のファイルをダブルクリックしてブラウザでHTMLファイルを開きました。
その時アドレスバーは`file://~~`となっていました。
通常Webサイトを見る場合は`http://~~`または`https://~~`になっています。

この`file://`とは**自身のパソコン内のファイルを開く**という意味です。
さて自身のパソコン内にあるHTMLをファイルを開いてもページが表示されましたが、
インターネットのWebサイトを開いてページが表示される仕組みも同じです。

どちらもブラウザを通してHTMLファイルを閲覧しているだけです。
違うのはそのファイルが自身のパソコンにあるのか、どこか遠くの（Webサイト提供者の）パソコンにあるのかの違いです。
