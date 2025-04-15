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
if(mb_ereg('^[ぁ-んァ-ヶ一-龠々]{1,20}$', $_GET['username'])==false)
  {
    die("20文字以内の日本語で入力してください");
  }else{
    echo "あなたが入力した値<br>";
    echo "名前：" . $_GET['username'] . "<br>";
  }

if(mb_ereg('^[ぁ-んァ-ヶ一-龠々]{1,50}$', $_GET['useraddress'])==false)
  {
    die("50文字以内の日本語で入力してください");
  }else{
    echo "住所：" . $_GET['useraddress']. "<br>";
  }

  if(mb_ereg('^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}{1,100}$', $_GET['usermail'])==false)
  {
    die("100文字以内の正しい形式で入力してください");
  }else{
    echo "メールアドレス：" . $_GET['usermail'];
  }
?>
    </h2>
    </div>
  </body>
</html>
