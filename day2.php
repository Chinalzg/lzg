<?php 
 	header("content-type:text/html;charset=utf-8");
	$min=isset($_GET['min'])?$_GET['min']:'';
	$max=isset($_GET['max'])?$_GET['max']:'';

	if($min&&$max){
		sxh($min,$max);
	}

	function sxh($min,$max){
		echo $min."到".$max."之间的水仙花有:";
		for($i=$min;$i<=$max;$i++){

			$g=$i%10;//取个位数
			$s=floor($i/10)%10;//取十位数
			$b=floor($i/100);//取百位数
			
			if($g*$g*$g+$s*$s*$s+$b*$b*$b==$i){
				
				echo $i.",";
			}



		}
		echo "。";


	}

 ?>
 <form action="?">
	请输入范围：<input type="text" name="min">~<input type="text" name="max"><input type="submit" value="查询">

 </form>