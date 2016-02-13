
<?php
require_once 'AdminService.class.php';
// //接收用户的数据
// //1.id
$id=$_POST['id'];
// //2.密码
$password=$_POST['password'];
$captch_code=$_POST['yzm'];
session_start();
if($captch_code!=$_SESSION['yzm']){
    header("Location:login.php?errno=2");
    exit();
}
//3.获取用户是否选中保存id
if(empty($_POST['keep'])){
   if(!empty($_COOKIE['id'])){
       setcookie("id",$id,time()-100);
   }
}else {
    setcookie("id",$id,time()+7*2*24*3600);
   
}
//实例一个adminService方法
$adminService=new  AdminService();
$name=$adminService->chekcAdimn($id, $password);
if($name!=""){
    //合法
   // header("Location:empManage.php?name=$name");
   session_start();
   $_SESSION['loginuser']=$name;
 header("Location:index.php?name=$name");
  //header("Location:top.php?name=$name");
 
    exit();
}else{ 
    //非法
    header("Location:login.php?errno=1");
    exit();
}


?>