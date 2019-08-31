<?php
$myfile=$_FILES['file'];
        $tmp=$myfile['tmp_name'];
        $name = $_POST['fileName'];
        $index = $_POST['index'];
        $tota_temp = $_POST['tota_temp'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        //上传全都接收过来了，但是没用完，调试时候用的

        $path='upload/'.$index;
        
        $data['f_video']=$path;
        //移动临时文件到指定目录，并判断有没有成功。
        if(!move_uploaded_file($tmp,$path)){
                $json['src'] = $myfile;
                echo json_encode($json);
        } else{
                
                //合并文件file_put_contents，file_get_contents两个函数
                file_put_contents('upload/'.$name,file_get_contents($path),FILE_APPEND);
                unlink($path);//删除合并过的文件
                $json['temp'] = 0;
                $json['tmp'] = $tmp;
                echo json_encode($json,true);
        } 
