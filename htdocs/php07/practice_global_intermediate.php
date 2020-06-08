<?php
$janken = array();
$choice = '';
$com = '';
$result = '';

if (isset($_POST['choice']) === TRUE) {
   $janken  = array('グー','チョキ','パー');
    $choice = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');
    $com = $janken[array_rand($janken)];

    if ($choice === 'グー' && $com === 'チョキ') {
        $result = '勝ち';
    } elseif ($choice === 'グー' && $com === 'グー') {
        $result = 'あいこ';
    } elseif ($choice === 'グー' && $com === 'パー') {
        $result = '負け';
    } elseif ($choice === 'チョキ' && $com === 'グー') {
        $result = '負け';

    } elseif ($choice === 'チョキ' && $com === 'チョキ') {
        $result = 'あいこ';
    } elseif ($choice === 'チョキ' && $com === 'パー') {
        $result = '勝ち';
    } elseif ($choice === 'パー' && $com === 'グー') {
        $result = '勝ち';
    } elseif ($choice === 'パー' && $com === 'チョキ') {
        $result = '負け';
    } elseif ($choice === 'パー' && $com === 'パー') {
        $result = 'あいこ';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>課題</title>
</head>
<body>
     <h2>じゃんけん勝負</h2>
         <p>自分:<?php print $choice; ?></p>
         <p>相手:
            <?php if($com !== ''): ?>
            <?php print $com; ?>
            <?php endif; ?>
          </p>
         <p>結果:<?php print $result; ?></p>
         <form method = "post">
          <p>
            <input type="radio" name="choice" value="グー">グー
            <input type="radio" name="choice" value="チョキ">チョキ
            <input type="radio" name="choice" value="パー">パー
        　</p>
            <input type="submit" value="勝負">
        </form>
</body>