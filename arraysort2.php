<html>
<body>
<?php
$student=array("Anoop","Lekshmi","Manya","Anu","Abina","Gopika","Ashly");
echo "Array:";
print_r($student);
echo "<br>"."Array in ascending order:";
asort($student);
print_r($student);
echo "<br>"."Array in descending order:";;
arsort($student);
print_r($student);
?>
</body>
</html>