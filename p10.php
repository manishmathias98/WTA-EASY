<html>
    <head>
        <title>selection sort</title>
        <style>
            table,tr,td,th {
                border:2px solid black;
                border-collapse: collapse;
                background-color: lightblue;
                padding: 5px;
            }
            table{
                margin:auto;
            }
        </style>
    </head>
    <body>
        <?php
        $conn=mysqli_connect('localhost','root','','weblab');
        if(!$conn)
        echo 'couldnot connect to database';
        else{
            $sql='SELECT * FROM student';
            $q=mysqli_query($conn,$sql);
            echo '<table><caption>BEFORE SORTING</caption><tr><th>USN</th><th>NAME</th><th>MARKS</th></tr>';
            $usn=[];
            while($data=mysqli_fetch_assoc($q)){
                echo '<tr><td>'.$data['usn'].'</td><td>'.$data['name'].'</td><td>'.$data['marks'].'</td></tr>';
                $usn[]=$data['usn'];
            }
            echo '</table>';
            for($i=0;$i<sizeof($usn)-1;$i++){
                $pos=$i;
                for($j=$i+1;$j<sizeof($usn);$j++){
                    if($usn[$i]<$usn[$j]){
                        $pos=$j;
                    }
                }
                if($pos!=$i){
                    $temp=$usn[$i];
                    $usn[$i]=$usn[$pos];
                    $usn[$pos]=$temp;
                }
            }
            $name=[];
            $marks=[];
            echo '<table><caption>BEFORE SORTING</caption><tr><th>USN</th><th>NAME</th><th>MARKS</th></tr>';
            $q1=mysqli_query($conn,$sql);
            while($data1=mysqli_fetch_assoc($q1)){
                for($i=0;$i<sizeof($usn);$i++){
                    if($usn[$i]==$data1['usn']){
                        $name[]=$data1['name'];
                        $marks[]=$data1['marks'];
                    }
                }
            }

            for($j=0;$j<sizeof($usn);$j++){
                echo '<tr><td>'.$usn[$j].'</td><td>'.$name[$j].'</td><td>'.$marks[$j].'</td></tr>';
            }
            echo '</table>';
        }
        ?>
    </body>
</html>