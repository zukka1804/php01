<!-- データ表示を行う -->
<?php

//POSTで送られてきたデータは$_POST['目印名'];で取得
// name='text' → $_POST['text'];

$name = $_GET['name'];
$zipcode = $_GET['zipcode'];
$address1 = $_GET['address1'];
$address2 = $_GET['address2'];
$address3 = $_GET['address3'];
$address4 = $_GET['address4'];
$year = $_GET['year'];
$month = $_GET['month'];
$day = $_GET['day'];
$sex = $_GET['sex'];
$address = $_GET['address'];
$number = $_GET['number'];
$mail = $_GET['mail'];

?>



<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>会員情報ページ</title>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='style2.css'>
</head>
<body>
<h3 class="name"><?= $name; ?>　様</h3>
<p class="zipcode">郵便番号：<?= $zipcode; ?> </p>
<p class="address">住所：<?= $address1.$address2.$address3.$address4; ?> </p>
<p class="birthday">生年月日：<?= $year.'年'.$month.'月'.$day.'日'; ?> </p>
<p class="sex">性別：<?= $sex; ?></p>
<p class="number">要介護度：<?= $number; ?></p>
<p class="mail">メールアドレス：<?= $mail; ?></p>



  </div>
</body>
</html>





