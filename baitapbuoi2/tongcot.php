<form method="post">
    <input type="number" name="number">
    <input type="submit" value="submit">
</form>
<?php
$arr = array(array(3,42,5,9),
    array(5,6,7,8),
    array(1,2,3,4),
    array(46,9,0,9));
$sum = 0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number = $_POST["number"];
    if($number >=0 && $number <4 ){
        for($i =0; $i<count($arr);$i++){
            $sum += $arr[$i][$number];
        }
        echo "tong  ".$number." la ".$sum;
    } else {
        echo "Nhap so tu 0 den 3";
    }
}
