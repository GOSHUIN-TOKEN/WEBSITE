<?php

// リダイレクト先のURLへ転送する
$url = 'https://twitter.com/goshuin_in';
header('Location: ' . $url, true, 301);

// すべての出力を終了
exit;

?>