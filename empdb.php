<html>
<head>
<style>
.container 
{
  float: left;
  background-color: pink;
  width: 500px;
  padding: 100px;
  margin: 50px;
}
</style>
</head>
<body>
<div class="container">
<form name="f1" method="POST">
    <h3 align="center"><u>EMPLOYEE DETAILS</u></h3>
  <table align="center">
<tr>
  <td>Emp ID:</td>
  <td><input type="number" name="emid" value=""/></td>
</tr>
<tr>
<td>Name:</td>
<td><input type="text" name="emp" value=""></td>
</tr>
<tr>
<td>Job name:</td>
<td><input type="text" name="jname" value=""></td>
</tr>
<tr>
<td>Manager ID:</td>
<td><input type="number" name="mid" value=""></td>
</tr>
<tr>
<td>Salary:</td>
<td><input type="number" name="salary" value=""></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</div>
<?php


if(isset($_POST['submit']))
{
    $emid=$_POST['emid'];
    $emp=$_POST['emp'];
    $jname=$_POST['jname'];
    $mid=$_POST['mid'];
    $salary=$_POST['salary'];
    $conn=mysqli_connect("localhost","root","","EMPLOYEE");
    if($conn)
    {
        echo("Successfully connected");
        echo "<br>";
    }
    else
    {
        echo("connection error");
    }
    $query="INSERT INTO emp_tbl(ID,Name,Jobname,Managerid,Salary)VALUES('{$emid}','{$emp}','{$jname}','{$mid}','{$salary}')";
  
if(mysqli_query($conn,$query))
{
    echo("successfully inserted");
    echo "<br>";
}
else
{
    echo("insertion failed");
}

    ?>
    <h2>Employees with salary greater than 35000</h2>
<table border="1">
<tr>
<th>Employee Name</th>
<th>Salary</th>
</tr>
<?php
$s="SELECT Name,Salary FROM emp_tbl WHERE Salary>35000";
$data=mysqli_query($conn,$s);
while($res=mysqli_fetch_assoc($data))
{
    ?>
   <tr>
    <td><?php echo $res['Name'];?></td>
    <td><?php echo $res['Salary'];?></td>
</tr>
<?php

}
}
?>
</table>
</body>
</html>

