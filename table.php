<?php
//session_start();
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = array();
}
$arr = $_SESSION['attempts'];
$len = count($arr);
echo ("<table border='1' cellpadding='0' cellspacing='0' width='50%'>");
echo "
<tr>
    <th>X</th>
    <th>Y</th>
    <th>R</th>
    <th>Shot</th>
    <th>Current time</th>
    <th>Lead time</th>
</tr>";

foreach ($_SESSION['attempts'] as $iterator){
    echo "<tr>";
    foreach ($iterator as $val){
        echo "<th>";
        echo $val;
        echo "</th>";
    }
    echo "</tr>";
}

echo ("</table>");