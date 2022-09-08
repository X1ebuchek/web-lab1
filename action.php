<?php
session_start();
//echo "booba";
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = array();
}

$y = (float)$_GET["Y"];
$x = (int)$_GET["x_value"];
$r = (int)$_GET["r_value"];
$shot = "false";
$currTime = microtime(true) * 1000;
$currDate = date("d-m-y H:i:s");
$time1 = microtime(true);
if ($x==0 && $y<=$r/2 && $y>=-$r){
    $shot = "true";
    $time2 = microtime(true);
} elseif ($y==0 && $x<=$r && $x>=-$r){
    $shot = "true";
    $time2 = microtime(true);
} elseif ($x<0 && $y>0){
    if($x>=-$r && $y<=$r/2){
        $shot = "true";
    }
    $time2 = microtime(true);
}elseif ($x<0 && $y<0){
    if ($y>=(-2)*$x-$r){
        $shot = "true";
    }
    $time2 = microtime(true);
}elseif ($x>0 && $y<0){
    if (sqrt($x*$x+$y*$y)<=$r){
        $shot = "true";
    }
    $time2 = microtime(true);
}else{
    $time2 = microtime(true);
}
$leadTime = microtime(true) * 1000-$currTime;

print ("попадание: ".$shot);
print (" время выполнения: ".$leadTime);
print (" текущее время: ".$currTime);

$result = array(
    'X' => $x,
    'Y' => $y,
    'R' => $r,
    'Shot' => $shot,
    'Current time' => date("H:i:s d-m-Y"),
    'Lead time' => $leadTime
);
$_SESSION['attempts'][] = $result;

header('Location: /web-lab1/index.php');

exit();
?>

