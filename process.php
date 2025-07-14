<?php
// 入力があれば受け取る
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

// 名前が入力されていなければデフォルト値を設定
if (!$username) {
    $username = 'ゲスト';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>送信結果ページ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>送信結果</h2>
        <p>こんにちは、<strong><?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?></strong>さん！</p>
        <a href="index.html">戻る</a>
    </div>
</body>
</html>
