<form action="hesab.php" method="post">
<?php 
//header('Content-Type: text/html; charset=utf-8');
$junior=new mysqli("localhost","root","","work");
$junior->query("SET NAMES 'utf8'");
  $array=array();
	  do
	  {
	  	  $r=(rand(1,25));
		  array_push($array,$r);
		  for($i=(count($array)-1);$i>=0;$i--)
		  {
		  	if(($i-1)>0 || ($i-1)==0)
		  	{
		  		for($y=1;$y<=(count($array)-1);$y++)
		  		{
                if($array[$i]==$array[$i-$y])
                {
                	array_pop($array);
                }
                }           
		  	}
		  }
	  }
	  while(count($array)<25);




	    $arraycomp=array();
	  do
	  {
	  	  $rw=(rand(1,5));
		  array_push($arraycomp,$rw);
		  for($i=(count($arraycomp)-1);$i>=0;$i--)
		  {
		  	if(($i-1)>0 || ($i-1)==0)
		  	{
		  		for($y=1;$y<=(count($arraycomp)-1);$y++)
		  		{
                if($arraycomp[$i]==$arraycomp[$i-$y])
                {
                	array_pop($arraycomp);
                }
                }           
		  	}
		  }
	  }
	  while(count($arraycomp)<5);
	  
	  

      for($i=0;$i<25;$i++)
	  {
	  	$sual=$junior->query("SELECT * FROM block1 WHERE asd='$array[$i]'");
	   	$hosual=$sual->fetch_assoc();
	   	$xuy=$hosual['sual'];
	   	$vbne=$i;
	   	$vbne++;
	   	echo "<br>".$vbne.".   ".str_replace($xuy[0].$xuy[1].$xuy[2].$xuy[3]," ",$xuy)."<br>";
	   	for($t=0;$t<5;$t++)
	   	{
	   		$suca='cvb'.$arraycomp[$t];
	   		$die=$hosual[$suca];
	   		echo '<input type="radio" name="kaka'.$i.'" id="kaka'.$i.$t.'" value="'.$die[0].'"><label for="kaka'.$i.$t.'">'.str_replace($die[0]." :"," ",$die).'</label><br>';
	   	}
	   	$qrut=array();
	   	for($t=0;$t<4;$t++)
	   	{
	   		if($xuy[$t]=='.') break;
	   		array_push($qrut,$xuy[$t]);
	   	}
	   	echo '<input type="text" name="'.$i.'" value="'.$qrut[0].$qrut[1].$qrut[2].$qrut[3].'" style="position:absolute;visibility:hidden;">';
	 }

 ?>
 <input type="submit" value="hesab">
 </form>