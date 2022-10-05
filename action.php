<?php
session_start();

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = array();
}

$y = (float)$_GET["y_field"];
$x = (int)$_GET["x_value"];
$r = (int)$_GET["r_value"];
$time = (int)$_GET["time"];
$shot = "false";
$currTime = microtime(true) * 1000000;
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
$leadTime = microtime(true) * 1000000-$currTime;
$leadTime = number_format($leadTime,0);

//print ("попадание: ".$shot);
//print (" время выполнения: ".$leadTime);
//print (" текущее время: ".$currTime);

$result = array(
    'X' => $x,
    'Y' => $y,
    'R' => $r,
    'Shot' => $shot,
    'Current time' => date("H:i:s d-m-Y",time()+$time*3600),
    'Lead time' => $leadTime
);
$_SESSION['attempts'][] = $result;

//echo ("<table id='lol' border='1' cellpadding='0' cellspacing='0' width='50%'>");
//echo "
//<tr>
//    <th>X</th>
//    <th>Y</th>
//    <th>R</th>
//    <th>Shot</th>
//    <th>Current time</th>
//    <th>Lead time</th>
//</tr>";

foreach ($_SESSION['attempts'] as $iterator){
    echo "<tr>";
    foreach ($iterator as $val){
        echo "<th>";
        echo $val;
        echo "</th>";
    }
    echo "</tr>";
}

//echo ("</table>");

//print($result);
//echo  $result;
//return $result;

//header('Location: /web-lab1/index.php');

exit();
?>

