<?php

// リダイレクト先のURLへ転送する
$url = 'https://github.com/GOSHUIN-TOKEN';
header('Location: ' . $url, true, 301);

// すべての出力を終了
exit;

?>