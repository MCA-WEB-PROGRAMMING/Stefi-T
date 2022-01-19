<html>
<body>
<?php
$student=array("Virat","Dhoni","Pant","Rohit","Jadeja","Rahul","Hardik",
                "Shreyas","Ashwin","Rahane");
echo "<table border='1'><tr><th>NO.</th><th>PLAYERS</th></tr>";
foreach($student as $key=>$value)
            {
                echo"<tr><td>". $key+1 ."</th><th>$value</th></tr>";
            }
echo "</table>";
?>
</body>
</html>