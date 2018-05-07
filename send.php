<?php
include('db.php');

if(
    isset($_POST['name']) &&
    !empty($_POST['name']) &&

    isset($_POST['uname']) &&
    !empty($_POST['uname']) &&

    isset($_POST['link']) &&
    !empty($_POST['link']) &&

    isset($_POST['mode']) &&
    !empty($_POST['mode']) &&
    ($_POST['mode'] != 0) &&

    isset($_POST['perspective']) &&
    !empty($_POST['perspective']) &&
    ($_POST['perspective'] != 0)

  ){
 $name = ($_POST['name']);
 $uname = ($_POST['uname']);
 $link = ($_POST['link']);
 $mode = ($_POST['mode']);
 $perspective = ($_POST['perspective']);
 $status = "1";
 $stmt = $conn->prepare("INSERT INTO
     features_pubg_team (name, uname, link, mode, perspective, status, created_at)
     VALUES (:name, :uname, :link, :mode, :perspective, :status, CURRENT_TIMESTAMP)");
 $stmt->bindParam(':name', $name);
 $stmt->bindParam(':uname', $uname);
 $stmt->bindParam(':link', $link);
 $stmt->bindParam(':mode', $mode);
 $stmt->bindParam(':perspective', $perspective);
 $stmt->bindParam(':status', $status);
 $sql = $stmt->execute();
 if (!$sql) {
    header("HTTP/1.0 422 Unprocessable Entity", true, 422);
    echo "خطا در سرور! لطفا مجددا تلاش کنید.";
    // echo "\nPDO::errorInfo():\n";
    // print_r($conn->errorInfo());
 }else {
    echo "ثبت نام با موفقیت انجام شد.";
 }
}else{
    header("HTTP/1.0 422 Unprocessable Entity", true, 422);
    echo "وارد کردن تمام فیلد ها اجباری است.";
}

 ?>
