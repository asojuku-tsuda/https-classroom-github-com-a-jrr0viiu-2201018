<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php

// $indata = filter_input(INPUT_GET,'^[0-9]+$');
$indata = '';
if(mb_ereg('^[0-9]+$', $indata)==false)
{
  die("数値を入力してください");
}else{
  echo "入力された数字は： " . $indata;
}
// if(isset($_GET[0-9])==false)
// {
//   die("数値を入力してください");
// }

?>
    </h2>
    </div>
  </body>
</html>
