<?php 

	header("content-type:text/html;charset=utf-8");
	//定义一个person类
	class Person{


			public $name;
			public $age;	


	}
	//定义一个接口类
	interface Walk{

		public function run();
	}

	//定义一个student类继承person和walk
	class Student extends Person implements Walk{
	    function run(){

	   }
	}

	$obj1=new Student(['张三1'=>18]);
	$obj2=new Student(['张三2'=>15]);
	$obj3=new Student(['张三3'=>28]);
	$obj4=new Student(['张三4'=>8]);
	$obj5=new Student(['张三5'=>58]);
	$obj6=new Student(['张三6'=>6]);
	$obj7=new Student(['张三7'=>20]);
	$obj8=new Student(['张三8'=>19]);

	function demo($n){

		for($i=1;$i<=$n;$i++){
			$c="obj".$i;
			global $$c;
		}

		$max=1;

		for($i=1;$i<=$n;$i++){
			$a="obj".$i;
			
			$b="obj".$max;
			
			if($$a->age>$$b->age){
				$b="obj".$i;
				
			}
		}
		var_dump($b);die;
		$c=$$b;
		return $c;
	}

	var_dump(demo(8));



 ?>