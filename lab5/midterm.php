<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <form>
    <label for="category">
      <select name="category" id="category">
        
      <?php

      // ทำข้อสอบหลังจาก comment ของแต่ละข้อ
// 1. (2 คะแนน) เขียนคำสั่ง php เพื่อติดต่อฐานข้อมูล northwind
$server = 'db403-mysql';
$username = 'root';
$password = 'P@ssw0rd';
$db = 'northwind';
$conn = new mysqli($server, $username , $password , $db);
if ($conn->connect_errno) {
    die($conn->connect_error);
}
?>
<?php
// 2. (3 คะแนน) เขียนคำสั่ง php เพื่อดึงข้อมูล CategoryName และ CategoryID จากตาราง categories
$query = "SELECT CategoryName , CategoryID FROM categories";
$result = $conn->query($query);
 ?>

<?php
// 3. (5 คะแนน) เพิ่ม element option ใน element select เพื่อแสดงตัวเลือกเป็น CategoryName และค่าที่ได้เป็น CategoryID
// ตัวอย่างการเพิ่ม element options
// <option value="CategoryID">CategoryName</option>
 foreach($result as $results)?>
 <option value="">-Choose-</option>
 <?php foreach($result as $results){?>
    <option value="<?php echo $results["CategoryName"];?>">
      <?php echo $results["CategoryName"];} ?>
      </option>
      </select>
    </label>
    <input type="submit" value="Search" name="submit">
  </form>
</body>
</html>