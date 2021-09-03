<?php test2
$uploadfile; // 图片的名字
if($_POST['uploadpic']=='上传'){
  $dest_folder   =  "D:/phpStudy/WWW/picture/";   //上传图片保存的路径 图片放在跟你upload.php同级的picture文件夹里
  $arr=array();   //定义一个数组存放上传图片的名称方便你以后会用的。
  $count=0;
  if(!file_exists($dest_folder)){
      mkdir($dest_folder,700); // 创建文件夹，并给予最高权限
    }
  $tp = array("image/gif","image/pjpeg","image/jpeg","image/png");    //检查上传文件是否在允许上传的类型
  foreach ($_FILES["uploads"]["error"] as $key => $error){
      if(!in_array($_FILES["uploads"]["type"][$key],$tp)){
            echo "<script language='javascript'>";
            echo "alert(\"文件类型错误!\");";
            echo "</script>";
              exit;
        }
      if($error == UPLOAD_ERR_OK){
        $tmp_name = $_FILES["uploads"]["tmp_name"][$key];
        $a=explode(".",$_FILES["uploads"]["name"][$key]);  //截取文件名跟后缀
          // $prename = substr($a[0],10);   //如果你到底的图片名称不是你所要的你可以用截取字符得到
        $prename = $a[0];
        $name = date('YmdHis').mt_rand(100,999).".".$a[1];  // 文件的重命名 （日期+随机数+后缀）
        $uploadfile = $dest_folder.$name;     // 文件的路径
        move_uploaded_file($tmp_name, $uploadfile);
        $arr[$count]=$uploadfile;
        $query="insert into product(name,tupian,pLike) values('$prename','$uploadfile','0')"; // 插入到数据库
        $res=mysql_query($query);
        if($res)
         echo $prename."chenggong<br/>";
         echo $uploadfile."<br />";
        $count++;
         }
        }
        echo "总共".$count."文件";
        }
