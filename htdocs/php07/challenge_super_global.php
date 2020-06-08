<?php
if (isset($_POST['query']) === TRUE) {
    $query = htmlspecialchars($_POST['query'], ENT_QUOTES, 'UTF-8');
}
?>

<?php
if( isset( $_POST['my_name'] ) === TRUE && empty( $_POST['my_name'] ) === FALSE ) {
   print 'ここに入力したお名前を表示：' . htmlspecialchars($_POST['my_name'], ENT_QUOTES, 'UTF-8');
} 
?>

<?php
$gender = '';
if (isset($_POST['gender']) === TRUE) {
   $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8');
}
?>

<?php if ($gender === 'man' || $gender === 'woman') { ?>
   <p>ここに選択した性別を表示:<?php print $gender; ?></p>
<?php } ?>

<?php if (isset($_POST['mail']) === TRUE) {
print 'ここにメールを受け取るかを表示:OK';
}  ?>

<!-- チェックボックスのphpを教えてください -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題</title>
</head>
<body>
    <h1>課題</h1>
<form method="post">
    <label>お名前: <input type="text" name="my_name"></label><br>
    <label>性別:<input type="radio" name="gender" value="man">男
    <input type="radio" name="gender" value="woman">女</label><br>
    <input type="checkbox" name="mail" value="1">お知らせメールを受け取る<br>
    <input type="submit" value="送信">
   </form>
</body>