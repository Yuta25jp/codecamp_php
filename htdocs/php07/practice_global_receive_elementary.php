<?php
if( isset( $_GET['my_name'] ) === TRUE && $_GET['my_name'] !== '' ) {
   print 'ようこそ ' . htmlspecialchars($_GET['my_name'] . 'さん', ENT_QUOTES, 'UTF-8');
} else {
   print '名前を入力してください';
}
?>