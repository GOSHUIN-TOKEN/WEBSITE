<?php

// リダイレクト先のURLへ転送する
$url = 'https://discord.gg/8q7svbg';
header('Location: ' . $url, true, 301);

// すべての出力を終了
exit;

?>