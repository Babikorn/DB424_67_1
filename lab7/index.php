<?php
session_start(); //เป็นการเชื่อมให้ทำงานร่วมกัน ต้องใส่บรรทัดแรก
if (!isset($_SESSION['user'])){
    header('location: signin.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ยินดีต้อนรับนะครับไอ้ต้าว</h1>
    <?php
    echo $_SESSION['user']['firstName'].' '.
         $_SESSION['user']['lastName']; 
    ?>
    <br>
    <button onclick="signout()">ออกจากระบบ</button>

    <script>
        function signout() {
            location = 'signout.php';
            // assign('signout.php');
        }
    </script>
</body>
</html>