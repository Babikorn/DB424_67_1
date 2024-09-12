<?php
echo 'Hello World' ;
echo '<br>';
$boolean1 = true;
$boolean2 = True;
//ชื่อตัวแปลทั้งหมดของphp ขึ้นต้นด้วย $ ตัวพิมพ์เล็กพิมพ์ใหญ่ต้องตรงกัน
//unset(%float) ลบตัวแปล
$int = 12;
$float = 3.1415926;
unset($float);  // Delete variable

$str1 = "How are you?";
$str2 = 'Fine, thanks';
echo $str2;
echo '<br>';

//ให้เรากับหนดค่า echo $... ด้วยไม่งั้นจะไม่มีคำพูดเด้งขึ้นมา

//$a = null คือค่าที่เปิดไว้ก่อนไม่มีอะไรเลย  อยากเช็คว่าเป็นค่าnullมั้ยให้ใช้ echo is_null($...); 
//ถ้าเราใช้ . จะเป็นการเอาข้อความมาต่อเช่น 
// echo 'eiei';
//$url = "IS@DPU";
// echo 'eiei' . $url;

?>

<?php
echo 'this is a simple string';
echo '<br>' ;
$url = "IS@DPU";
echo "I'm learning PHP at $url<br>";
//สามารถใส่""เพื่อรวมคำสั่งได้เลยจะได้ไม่ใช้หลายบรรทัด

// Concatenate strings
echo "I'm learning PHP at " . $url;

$hello = "Hello, ";
$hello .= "World!<br>"; # $hello = $hello . "World!";
echo $hello;   # => Hello, World!
?>


<?php
$s = "Hello Phper";
//เป็นการนับว่าในตัวแปลมีกี่ตัว
echo strlen($s);       # => 11

echo substr($s, 0, 3); # => Hel
//จากสติกS เอาตัวแปลเริ่มตั้งแต่อินเด็ก1
echo substr($s, 1);    # => ello Phper
//อันนี้เป็นการตัดตัวออกไปเช่น ในที่นี่1เป็นการ-ตัวแรกทิ้ง
echo substr($s, -4, 3);# => hpe

echo strtoupper($s);   # => HELLO PHPER
echo strtolower($s);   # => hello phper

echo strpos($s, "l");      # => 2
//เป็นการหาตำแหน่งของตัวอักษรว่ามีตัวซ้กี่ตัว
echo strpos($s, "l<br>", 3);   # => 3

var_dump(strpos($s, "L")); # => false

echo str_replace("Phper", "hi<br><br>", $s); // outputs Hello world
//เป็นการแทนที่คำ หาจากไหน > เปลี่ยนเป็นอะไร > ที่สติงอะไร
?>

<?php
$int1 = 28;    # => 28
$int2 = -32;   # => -32
$int3 = 012;   # => 10 (octal)
//จะกลายเป็นเลขฐาน8
$int4 = 0x0F;  # => 15 (hex)
$int5 = 0b101; # => 5  (binary)
//เลขฐาน2

# => 2000100000 (decimal, PHP 7.4.0)
$int6 = 2_000_100_000;
//ใช้_แทนสัญลักษณ์ , 
echo "$int1<br>";
echo "$int2<br>";
echo "$int3<br>";
echo "$int4<br>";
echo "$int5<br>";
echo "$int6<br>";
?>

<?php
$float1 = 1.234;
$float2 = 1.2e7;
$float3 = 7E-10; # 0.0000000007
//ถ้าใส่Eคือทำให้เป็นเลขยกกำลัง10 เล่น7E ใส่0ไป 7 ตัว

$float4 = 1_234.567;  // as of PHP 7.4.0
var_dump($float4);    // float(1234.567)

$float5 = 1 + "10.5";   # => 11.5
//เอาเลขมาบวกกันเท่านั้น
$float6 = 1 + "-1.3e3"; # => -1299
?>

<?php
// Cast float to int
echo '<br>';
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
//บังคับปัดเลขทศนิยม คือไม่เอาเลขทศนิยม
?>

<?php
echo(pi()); // returns 3.1415926535898

echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

echo(abs(-6.7));  // returns 6.7

echo(sqrt(64));  // returns 8

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

echo(rand());
echo(rand(10, 100));
//การสุ่มตัวเลข ()สุ่ม (1 , 9)สุ่ม1ใน9 (ได้ใช้บ่อย)
?>

<?php
try {
    // Do something
} catch (Exception $e) {
    // Handle exception
} finally {
    echo "Always print!";
}
?>

<?php
function add($num1, $num2 = 1) {
    return $num1 + $num2;
    //การตั้งชื่อต้องไม่ขึ้นต้นด้วย$
}
echo add(10);    # => 11
echo add(10, 5); # => 15


<?php
$arr = array(5 => 1, 12 => 2);
$arr[] = 56;      // Append คือต่อท้าย
$arr["x"] = 42;   // Add with key เพิ่มคีย์ ถ้ามีอยู่แล้วเอาไปเติมของเก่า
sort($arr);       // Sort
unset($arr[5]);   // Remove ลบแค่บางตัวใน arr เช่น unset()
unset($arr);      // Remove all ลบทั้งตัว arr

$array = array('a', 'b', 'c');
$count = count($array); //การนับตัวแปลว่ามีกี่ตัว

for ($i = 0; $i < $count; $i++) {
    echo "i:{$i}, v:{$array[$i]}\n"; //คำสั่งของการนับตัวแปล ถ้าiมีค่าน้อยกว่าตัวแปลให้+1ไปเรื่อยๆ$colors = array('red', 'blue', 'green');

foreach ($colors as $color) {
    echo "Do you like $color?\n";
}
}

$colors = array('red', 'blue', 'green'); //ตั้ง array ว่ามี red blue green

foreach ($colors as $color) {
    echo "Do you like $color?\n"; //และเอา color มาใส่แทนในคำพูด $color
}

?>