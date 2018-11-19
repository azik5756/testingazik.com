<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$fiewe=$_POST['myfile'];
$k=1;
$document=file_get_contents($fiewe);
$lines=explode("\n",$document);
$junior=new mysqli("localhost","root","","work");
$junior->query("SET NAMES 'utf8'");
$junior->query("DELETE FROM block1");
$ncv=2; 
$relax=0;
for($i=0;$i<(sizeof($lines)-4);$i++)
{
		$a=$lines[$i];
if($a[0]!='B' && $a[0]!='A' && $a[0]!='C' && $a[0]!='D' && $a[0]!='E' && strlen($lines[$i])>5)
     {
     	$cvb1=$i+2;
     	$cvb2=$i+3;
     	$cvb3=$i+4;
     	$cvb4=$i+5;
     	$cvb5=$i+6;
     	$cvb=$i+7;
     	$relax++;
		 $riko=$lines[$cvb];
		 var_dump($riko[9]);
        $junior->query("INSERT INTO block1(asd,sual,cvb1,cvb2,cvb3,cvb4,cvb5,cvb) VALUES('$relax','$lines[$i]','$lines[$cvb1]','$lines[$cvb2]','$lines[$cvb3]','$lines[$cvb4]','$lines[$cvb5]','$riko[9]')");
     }
 }
?>

<form action="kukuw.php" method="post">
		 <input type="submit" value="test" name="test">
	</form>
	<script>
		 
	</script>
</body>
</html>