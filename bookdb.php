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
    <h3 align="center"><u>BOOK INFORMATION</u></h3>
  <table align="center">
<tr>
  <td>Accession Number:</td>
  <td><input type="number" name="number" value=""/></td>
</tr>
<tr>
<td>Title:</td>
<td><input type="text" name="title" value=""></td>
</tr>
<tr>
<td>Authors:</td>
<td><input type="text" name="authors" value=""></td>
</tr>
<tr>
<td>Edition:</td>
<td><input type="number" name="edition" value=""></td>
</tr>
<tr>
<td>Publisher:</td>
<td><input type="text" name="publisher" value=""></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</div>
<div class="container">
<form name="f2" method="POST">
    <h3 align="center"><u>Search a Book</u></h3>
  <table align="center">
<tr>
  <td>Enter the Title:</td>
  <td><input type="text" name="titles"/></td>
</tr>
<tr>
<td><input type="submit" name="search" value="Search"></td>
</tr>
</table>
</form>
</span>
</div>
<?php


if(isset($_POST['submit']))
{
    $number=$_POST['number'];
    $title=$_POST['title'];
    $authors=$_POST['authors'];
    $edition=$_POST['edition'];
    $publisher=$_POST['publisher'];
    $conn=mysqli_connect("localhost","root","","BOOK");
    if($conn)
    {
        echo("Successfully connected");
        echo "<br>";
    }
    else
    {
        echo("connection error");
    }
    $query="INSERT INTO book_tbl(Accessionnumber,Title,Authors,Edition,Publisher)VALUES('{$number}','{$title}','{$authors}','{$edition}','{$publisher}')";
  
if(mysqli_query($conn,$query))
{
    echo("successfully inserted");
    echo "<br>";
}
else
{
    echo("insertion failed");
}
}
if(isset($_POST['search']))
 {
  $conn=mysqli_connect("localhost","root","","BOOK");
  $titles=$_POST['titles'];
    ?>
<table border="1" align="left">
<tr>
<th>Accession Number</th>
<th>Title</th>
<th>Authors</th>
<th>Edition</th>
<th>Publisher</th>
</tr>
<?php
$s="SELECT * FROM book_tbl WHERE Title LIKE '%$titles%'";
$data=mysqli_query($conn,$s);
while($res=mysqli_fetch_assoc($data))
{
    ?>
   <tr>
    <td><?php echo $res['Accessionnumber'];?></td>
    <td><?php echo $res['Title'];?></td>
    <td><?php echo $res['Authors'];?></td>
    <td><?php echo $res['Edition'];?></td>
    <td><?php echo $res['Publisher'];?></td>
</tr>
<?php

}
}
?>
</table>
</body>
</html>

