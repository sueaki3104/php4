<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．
// セッションの開始
session_start();
$old_session_id = session_id();

// var_dump($old_session_id);
// exit();

// 再生成 session_regenerate_id(true) の true が大切！！
// true を設定することで古い id を無効にすることができる．
session_regenerate_id(true);
$new_session_id = session_id();

// 新旧のidを画面に表示して更新されていることを確認
echo "<p>旧id: {$old_session_id}</p>";
echo "<p>新id: {$new_session_id}</p>";
exit();

?>
