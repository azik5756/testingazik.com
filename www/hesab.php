<?php 
$g=0;
$fg='kaka';
$junior=new mysqli("localhost","root","","work");
$junior->query("SET NAMES 'utf8'");
for($i=0;$i<50;$i++)
{
    $a=$_POST[$fg.$i];
    $b=$_POST[$i];
    $roboto=$junior->query("SELECT * FROM block1 WHERE asd='$b' AND cvb='$a'");
    $hosual=$roboto->fetch_assoc();
    if($roboto->num_rows>0)
    {
        $g++;
    }
    else
    {
    	$roboto=$junior->query("SELECT * FROM block1 WHERE asd='$b'");
        $hosual=$roboto->fetch_assoc();
       	echo '<br>'.$hosual['sual'];
        echo '<br>'.$hosual['cvb1'];
       	echo '<br>'.$hosual['cvb2'];
       	echo '<br>'.$hosual['cvb3'];
       	echo '<br>'.$hosual['cvb4'];
       	echo '<br>'.$hosual['cvb5'];
       	echo '<br>'.$hosual['cvb'];
    }
}
echo '<br>Duzgun cevab sayisi:'.$g;
?>