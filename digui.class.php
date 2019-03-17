<?php
class Digui{
	// 处理分类数据为树形结构
	public function getTree($data,$id=0,$level=1){
		static $arr=[];
		foreach ($data as $key => $value) {
			if($value['pid']==$id){
				$arr[$key]['id']=$value['id'];
				$arr[$key]['name']=str_repeat('--', $level).$value['name'];
				$this->getTree($data,$value['id'],$level+1);
			}
		}
		return $arr;
	}

	// 获取当前ID的子分类ID
	public function getIds($data,$id=0){
		static $arr=[];
		foreach ($data as $key => $value) {
			if($value['pid']==$id){
				$arr[]=$value['id'];
				$this->getIds($data,$value['id']);
			}
		}
		return $arr;
	}
}