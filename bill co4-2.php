<html>
<body>
    
    <form method="POST">
        <table>
            <tr>
                <td>Enter the meter number:</td>
                <td><input type="number" name="num"/>
</tr>
<tr>
    <td>Enter the number of units:</td>
    <td><input type="number" name="unit"/>
</td>
</tr>
<tr>
    <td>Enter the category:</td>
    <td><select name="tariff">
        <option value="rural">Rural</option>
        <option value="residential">Residential</option>
        <option value="commercial">Commercial</option>
</td>
</tr>
<tr>
<td><input type="submit" value="submit" name="submit"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php


if(isset($_POST['submit']))
{
    
    $num=$_POST['num'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=='rural')
    {
        if($unit>0&&$unit<=50)
        {
        $ex=20;
        $price=(($unit*.25)+$ex);
        }
    else if ($unit>50&&$unit<=100)
    {
        $ex=20;
        $price=(($unit*.35)+$ex);
    }
    else if ($unit>100&&$unit<=250)
    {
        $ex=25;
        $price=(($unit*.45)+$ex);
    }
    else if ($unit>250&&$unit<=400)
    {
        $ex=30;
        $price=(($unit*.2)+$ex);
    }
    else if ($unit>400)
    {
        $ex=30;
        $price=(($unit*2.5)+$ex);
       
    }

    }

if($tariff=='residential')
{
    if($unit>0&&$unit<=50)
    {
    $ex=35;
    $price=(($unit*1.25)+$ex);
    
    }
else if ($unit>50&&$unit<=100)
{
    $ex=35;
    $price=(($unit*2.35)+$ex);
}
else if ($unit>100&&$unit<=250)
{
    $ex=40;
    $price=(($unit*2.45)+$ex);
}
else if ($unit>250&&$unit<=400)
{
    $ex=40;
    $price=(($unit*3)+$ex);
}
else if ($unit>400)
{
    $ex=50;
    $price=(($unit*3.5)+$ex);
   
}

}

if($tariff=='commercial')
{
    if($unit>0&&$unit<=50)
    {
    $ex=60;
    $price=(($unit*5.25)+$ex);
    echo "$price";
    }
else if ($unit>50&&$unit<=100)
{
    $ex=60;
    $price=(($unit*5.35)+$ex);
}
else if ($unit>100&&$unit<=250)
{
    $ex=65;
    $price=(($unit*6)+$ex);
}
else if ($unit>250&&$unit<=400)
{
    $ex=70;
    $price=(($unit*6)+$ex);
}
else if ($unit>400)
{
    $ex=70;
    $price=(($unit*6.5)+$ex);
   
}
}
echo "********BILL********";
echo "<br>";
echo "Your Meter Number is:".$num;
echo "<br>";
echo "Category:".$tariff;
echo "<br>";
echo "Units are:".$unit;
echo "<br>";
echo "Extra Charge:".$ex;
echo "<br>";
echo "Total  Charge:.$price";
echo "<br>";
}
?>


