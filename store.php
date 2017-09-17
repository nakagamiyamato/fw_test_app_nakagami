<?php

require('functions.php');
create($_POST);
checkReferer();
header('location: ./index.php');
$res = checkReferer();
if($res != 'back'){ // 追記
  header('location: ./index.php');  // 追記
}elseif($res == 'index'){
  header('location: ./index.php');
}else{
  header('location: '.$_SERVER['HTTP_REFERER'].'');
}

 ?>
