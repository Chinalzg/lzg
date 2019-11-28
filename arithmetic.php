<?php
function halt($data, $content)  //输出专用
{	
	echo "<center>☆☆☆".$content."☆☆☆</center>";echo "<br/>";
	if (is_numeric($data) || is_string($data)) echo $data;
	if (is_array($data) || is_object($data)) {
		echo "<pre>";
		print_r($data);
	}
	echo "<hr>";
}
// 1、九九乘法表 
function multiplication()
{	
	for ($j = 1; $j <= 9; $j++) {
		for ($i = 1;$i <= $j; $i++) {
			echo $i.'X'.$j.'='.$i*$j;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		echo "<br/>";
	}
}
//2、 递归阶乘
function factorial_dg($n, $sum=1)
{	
	if ($n<1) return '这老哥有毛病';
	if ($n == 1 || $n == 2) return $n;
	return $n * factorial_dg($n-1, $sum);
}
//3、循环阶乘
function factorial_dg_xh($n)
{
	if ($n<1) return '这老哥有毛病';
	$sum = 1;
	if ($n == 1) return $n;
	for ($i=$n; $i >= 2; $i--) { 
		$sum*=$i;
	}
	return $sum;
}
//4、冒泡排序
function bubbling(array $data)
{
	if (count($data) <= 1) return $data;
	for ($i=0; $i < count($data); $i++) { 
		for ($j=$i+1; $j < count($data); $j++) { 
			if ($data[$i] > $data[$j]) {
				$temp = $data[$i];
				$data[$i] = $data[$j];
				$data[$j] = $temp;
			}
		}
	}
	return $data;
}
//5、快排
function quicksort(array $data)
{
	if (count($data)<=1) return $data;
	$left = $right = [];
	for ($i = 1; $i < count($data); $i++) {
		if ($data[$i] > $data[0]) {
			$right[] = $data[$i];
		} else {
			$left[] = $data[$i];
		}
	}
	$left = quicksort($left);
	$right = quicksort($right);
	return array_merge($left, [$data[0]], $right);
}
//6、递归斐波那契
function fibonacci_dg(int $n)
{
	if ($n == 1 || $n == 2) return 1;
	return fibonacci_dg($n-1)+fibonacci_dg($n-2);
}
//7、循环斐波那契
function fibonacci_xh(int $n)
{	
	$arr = [1,1];
	for ($i=2; $i < $n; $i++) { 
		$arr[] = $arr[$i-1]+$arr[$i-2];
	}
	return $arr[$n-1];
}
//8、折半查找
function dichotomy(array $data, $num)
{	
	if (count($data) < 1) return '有毛病';
	$low = 0;
	$high = count($data) - 1;
	while ($low <= $high) {
		$middle = intval(($low+$high)/2);
		if ($data[$middle] == $num) return $middle+1;
		elseif ($data[$middle] > $num) $high = $middle-1;
		else $low = $middle+1;
	}

	return '没找到';
}
//9、获取上个月第一天和最后一天
function getDay()
{
	//获取上个月第一天

    echo "第一天".date('Y-m-01',strtotime('-1 month'));echo "<br/>";
    //获取上个月最后一天
    echo "最后一天".date('Y-m-t',strtotime('-1 month'));
}
//10、查询整数中有多少个1
function getOneNum($num)
{
	$sum = 0;
	while($num) {
		$sum += $num%10 == 1?1:0;
		$num/=10;
	}
	return $sum;
}
//11、猴子游戏
function king($n, $m){                                                    //n=5

    $monkeys = range(1, $n);         //创建1到n数组                        [1,2,3,4,5]

    $i=0;																	//i=0

    while (count($monkeys)>1) {   //循环条件为猴子数量大于1 

        if(($i+1)%$m==0) {   //$i为数组下标;$i+1为猴子标号

            unset($monkeys[$i]);    //余数等于0表示正好第m个，删除，用unset删除保持下标关系

        } else {

            array_push($monkeys,$monkeys[$i]);     //如果余数不等于0，则把数组下标为$i的放最后，形成一个圆形结构

            unset($monkeys[$i]);

        }

            $i++;//$i 循环+1，不断把猴子删除，或 push到数组 

    }

    return current($monkeys);   //猴子数量等于1时输出猴子标号，得出猴王
}
halt(multiplication(), '九九乘法表');  //九九乘法表
halt(factorial_dg(6), '递归阶乘'); //递归阶乘
halt(factorial_dg_xh(6), '循环阶乘');//循环阶乘
halt(bubbling([11,2,5,3,0,-1,5,7,10,8]), '冒泡排序');//冒泡排序
halt(quicksort([11,2,5,3,0,-1,5,7,10,8]), '快排');//快排
halt(fibonacci_dg(6), '递归斐波那契');//递归斐波那契
halt(fibonacci_xh(6), '循环斐波那契');//递归斐波那契
halt(dichotomy([1,2,3,4,5,6,7,8,9], 1), '折半查找'); //折半查找
halt(getDay(), '获取上个月第一天和最后一天'); //获取上个月第一天和最后一天
halt(getOneNum(1011111112), '查询1的个数'); //查询1的个数




?>
