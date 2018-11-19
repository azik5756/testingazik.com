<?php 
 $array=array();
	  do
	  {
	  	  $r=(rand(1,15));
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
	  while(count($array)<15);
	  echo $array[4];
 ?>