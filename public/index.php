<?php
///////////////////////////////////////////
// ルーティングの基本
///////////////////////////////////////////

/* リクエストを取得 */
//var_dump(getallheaders());
//var_dump($_SERVER);

/* リクエストURIを取得 */
//echo $_SERVER["REQUEST_URI"];

/**
 *リクエストURIを受けてPHPで処理する
 * foo bar baz qux quux corge grault garply waldo fred plugh xyzzy thud
 * http://www.rfc-editor.org/rfc/rfc3092.txt
 */
if ($_SERVER["REQUEST_URI"] == "/foo") {
    echo "foo is a surrogate character useful for programmers.";
} elseif ($_SERVER["REQUEST_URI"] == "/bar") {
    echo "There is no Japanese applicable to the translation of bar.";
} elseif ($_SERVER["REQUEST_URI"] == "/baz") {
    echo "The second metasyntactic variable, after foo and before baz.";
} else {
    echo "foo bar baz qux quux corge grault garply waldo fred plugh xyzzy thud";
}

/*

/foo, /bar, /bazでアクセスをすると所定の文字列（レスポンス）を返します。
リクエストURIを受けて、どんな処理をするのか決定します。
if文自身がルーティングと呼ばれている作業です。
if文の中身がMVCの最も単純化された形です。
    C: echoがコントローラ
    V: ""(ダブルクォートが)view
    M: 文字列がモデル
ということになります。
この動作をClassを使ってより精巧にしたものが最もポピュラーなFrameworkの動作になります。
*/