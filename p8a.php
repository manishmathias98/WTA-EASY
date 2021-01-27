<html>
    <head>
        <title>SIMPLE CALUCLATOR</title>
        <style>
            table,td,th,tr {
                border:2px solid black;
                border-collapse: collapse;
                background-color: silver;
                padding:5px;
            }
            table{
                margin:auto;
            }
        </style>
    </head>
    <body>
        <table>
            <tr><th colspan="4">SIMPLE CALUCLATOR</th></tr>
            <tr>
                <form method="post" action="p8a.php">
                <td colspan="2">Value 1:<input type="text" name="val1"></td>
                <td rowspan="2" colspan="2"><button type="submit" name="submit">caluclate</button></td></tr>
                <tr><td colspan="2">Value 2:<input type="text" name="val2"></td>
        </form>
            </tr>
            <?php
            if(isset($_POST['submit'])){
            $val1=$_POST['val1'];
            $val2=$_POST['val2'];
            if(is_numeric($val1) and is_numeric($val2))
            {
                echo '<tr><td colspan="3">Addition</td><td colspan="1">'.($val1+$val2).'</td></tr>';
                echo '<tr><td colspan="3">Subtraction</td><td colspan="1">'.($val1-$val2).'</td></tr>';
                echo '<tr><td colspan="3">Multiplication</td><td colspan="1">'.($val1*$val2).'</td></tr>';
                echo '<tr><td colspan="3">Division</td><td colspan="1">'.($val1/$val2).'</td></tr>';
            }
            else{
                echo '<script>alert("please provide numeric data");</script>';
            }
            }
            ?>
    </body>
</html>