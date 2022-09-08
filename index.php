<?php
   session_start();
?>
<html>
<head>
    <title>Моя лаба</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script defer src="validation.js"></script>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <th class="header" colspan="4">
            <p>Вагаев Артем P32312<p>
            Вариант 3002
        </th>
    </tr>
    <tr>
        <td width="50%" style="text-align:center" colspan="4">
            <img width="300px" height="300px" src="diagramm.png">
        </td>
    </tr>
    <tr>
        <td>

                <table class="XButtons">
                    <tbody>
                    <tr>
                        <td colspan="3">
                            <h3 style="text-align:center; margin:auto;">X</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <!--<button value="-3" name="x" type="button" onclick="setX(this)">-3</button>-->
                            <button  value="-3" name="x" type="button" id="button1" onclick="setX(this)">-3</button>

                        </td>
                        <td>
                            <button  value="-2" name="x" type="button" onclick="setX(this)">-2</button>
                        </td>
                        <td>
                            <button  value="-1" name="x" type="button" onclick="setX(this)">-1</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button  value="0" name="x" type="button" onclick="setX(this)">0</button>
                        </td>
                        <td>
                            <button  value="1" name="x" type="button" onclick="setX(this)">1</button>
                        </td>
                        <td>
                            <button  value="2" name="x" type="button" onclick="setX(this)">2</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button  value="3" name="x" type="button" onclick="setX(this)">3</button>
                        </td>
                        <td>
                            <button  value="4" name="x" type="button" onclick="setX(this)">4</button>
                        </td>
                        <td>
                            <button  value="5" name="x" type="button" onclick="setX(this)">5</button>
                        </td>
                    </tr>
                    <script>
                        var curr_x;
                        function setX(button){
                            console.log(curr_x);
                            let arr;
                            arr = document.getElementsByName("x");
                            for (let i = 0;i<arr.length;i++){
                                arr[i].style.background = 'white';
                            }
                            button.style.background = 'orange';
                            document.getElementById("x_value").value = button.value;
                            //console.log(button.textContent)
                            curr_x = button.textContent;
                            //console.log(curr_x);
                        }
                    </script>
                </tbody>
            </table>

        </td>
    <form id="kekw" action="action.php" method="get">
        <input type="hidden" id="x_value" name="x_value" value="-3">
        <input type="hidden" id="r_value" name="r_value" value="1">
        <td class="y_block" align="middle">
            <h3>Y (от -5 до 5)</h3>
            <input type="text" name="Y" id="y_field" required maxlength="8">
        </td>
    </form>
        <td>
                <table class="RButtons">
                    <tbody>
                    <tr>
                        <td colspan="3">
                            <h3 style="text-align:center; margin:auto;">R</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button  value="1" name="r" type="button" id="button2" onclick="setR(this)">1</button>
                            <script defer>
                                document.getElementById("button1").style.background = 'orange';
                                document.getElementById("x_value").value = document.getElementById("button1").value;
                                document.getElementById("button2").style.background = 'orange';
                                document.getElementById("r_value").value = document.getElementById("button2").value;
                            </script>
                        </td>
                        <td>
                            <button  value="2" name="r" type="button" onclick="setR(this)">2</button>
                        </td>
                        <td>
                            <button  value="3" name="r" type="button" onclick="setR(this)">3</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button  value="4" name="r" type="button" onclick="setR(this)">4</button>
                        </td>
                        <td>
                            <button  value="5" name="r" type="button" onclick="setR(this)">5</button>
                        </td>
                    </tr>
                    <script>
                        var curr_r;
                        function setR(button){
                            console.log(curr_r);
                            let arr;
                            arr = document.getElementsByName("r");
                            for (let i = 0;i<arr.length;i++){
                                arr[i].style.background = 'white';
                            }
                            button.style.background = 'orange';
                            document.getElementById("r_value").value = button.value;
                            //console.log(button.textContent)
                            curr_r = button.textContent;
                            //console.log(curr_x);
                        }
                    </script>
                    </tbody>
                </table>

        </td>
    </tr>
    <tr>
        <td align="middle" colspan="4">
                <button form="kekw" id="submitButton" type="submit">submit</button>
                <button type="submit" form="clear">clear</button>
            <form id="clear" action="clear.php"></form>


            <script>
                document.getElementById("submitButton").disabled = true;
            </script>
        </td>
    </tr>
    <tr>
        <td align="middle" colspan="4">
<!--        <table class="tabl" border="1" cellpadding="0" cellspacing="0" width="50%">-->
            <table id="tabl">
                <?php include 'table.php';?>
            </table>
<!--            <tr>-->
<!--                <th>-->
<!--                    <h4>X</h4>-->
<!--                </th>-->
<!--                <th>-->
<!--                    <h4>Y</h4>-->
<!--                </th>-->
<!--                <th>-->
<!--                    <h4>R</h4>-->
<!--                </th>-->
<!--                <th>-->
<!--                    <h4>Shot</h4>-->
<!--                </th>-->
<!--                <th>-->
<!--                    <h4>Current time</h4>-->
<!--                </th>-->
<!--                <th>-->
<!--                    <h4>Lead time</h4>-->
<!--                </th>-->
<!--            </tr>-->
<!--            <div class="tabl">-->
<!--                -->
<!--            </div>-->
<!--        </table>-->
        </td>
    </tr>
</table>
</body>
</html>