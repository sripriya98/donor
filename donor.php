<head>
<title>donor</title>
<form name="f" action="donor.php" method="POST">
dname<input type='text' name='txt1'></br>
age<input type='text' name='txt2'></br>
add<input type='text' name='txt3'></br>
mail<input type='text' name='txt4'></br>
mobile<input type='text' name='txt5'></br>
bloodg<input type='text' name='txt6'></br>
gender<input type='text' name='txt7'></br>
<input type='text' name='s'></br>
</form>
<?php
if(isset($_POST['s']))
{
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("griet",$con);
mysql_query("create table bbank(dname varchar(30),age integer,add varchar(30),mail varchar(30),mobile integer,bloodg varchar(5),gender varchar(30))",$con);
mysql_query("insert into bbank values(.$_POST['txt1'].","."'".$_POST['txt2']."'".","."'".$_POST['txt3']."'".",".$_POST['txt4'].","."'"..$_POST['txt5'].","."'"$_POST['txt6'].","."'".$_POST['txt7']."'".")");
$query=mysql_query("select *from bbank order by mail",$con);
$_rows=mysql_num_rows($query);
echo "<table><tr><th>dname</th><th>age</th><th>add</th><th>mail</th><th>mobile</th><th>bloodg</th><th>gender</th></tr>";
for($j=0;$j<$_rows;$j++)
{
$row=mysql_fetch_row($query);
echo "<tr>";
for($k=0;$k<6;$k++)
echo "<td>$row[$k]</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>




