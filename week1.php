<?php 
	header("content-type:text/html;charset=utf-8");
		class Week1{


				public $n;
				//求和1
				function getSum1(){
					$sum=0;
					for($i=1;$i<=100;$i++){
						$sum+=$i;
					}
					return $sum;
				}
				//求和2
				function getSum2(){
					$sum=(1+100)*100/2;
					return $sum;
				}
				//求和3
				function getSum3(){
					$sum=0;
					$i=1;
					while($i<=100){
						$sum+=$i;
						$i++;
					}
					return $sum;
				}
				//递归阶乘
				function demo($n){

					if($n==1||$n==2){
						return $n;
					}else{
						return $n*$this->demo($n-1);
					}
				}
				//循环阶乘
				function demo2($n){
					$sum=1;
					for($i=1;$i<=$n;$i++){
						if($i==1||$i==2){
							$sum=$i;
						}else{
							$sum*=$i;
						}
					}
					return $sum;

				}
				//回文字符串验证
				function hw($str){
					$str1=strrev($str);
					if($str1==$str){
						return $str."是回文字符串";
					}else{
						return $str."不是回文字符串";
					}
				}

		}

		$db=new Week1();
		
		// echo $db->hw('abcba')."<br/>";
		// echo $db->hw('12')."<br/>";




 ?>