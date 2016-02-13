<?php
require_once 'EmpService.class.php';
//接收用户要删除的用户id
//创建了EmpService对象实例
$empService= new EmpService();
//接收
//先看看用户要分页还是删除某个用户
if(!empty($_REQUEST['flag'])){
    $flag=$_REQUEST['flag'];
    //如果$flag="del",说明用户要执行删除工作
    if($flag=="del"){
    //这是我们指定要删除的用户
    $id=$_REQUEST['id'];
    //echo "你希望删除的用户id=$id";
    if($empService->delEmpById($id)==1){
        //成功！
        header("Location:ok.php");
        exit();
    }else{
        header("Location:error.php");
        exit();
        
    }
    }else if($flag=="addemp"){
        //说明用户希望执行添加用户
        //接收数据
        $id=$_POST['id'];
        $name=$_POST['name'];
        $grade=$_POST['grade'];
        $email=$_POST['email'];
        //完成添加->数据
       $res= $empService->addEmp($id,$name, $grade, $email);
       if($res==1){
           
       //成功！
        header("Location:ok.php");
        exit();
    }else{
        header("Location:error.php");
        exit();
        
    }
    }//处理修改请求
    else if($flag=="updateemp"){
        //说明用户希望执行修改用户
        //接收数据$name=$_POST['name'];
        $id=$_POST['id'];
        $name=$_POST['name'];
        $grade=$_POST['grade'];
        $email=$_POST['email'];
        //完成修改->数据库
        $res= $empService->updateEmp($id, $name, $grade, $email);
        if($res==1){
             
            //成功！
            header("Location:ok.php");
            exit();
        }else{
            header("Location:error.php");
            exit();
        
        }
    }
    else if($flag=="addEmp"){
        //说明用户希望执行修改用户
        //接收数据$name=$_POST['name'];
        $id=$_POST['id'];
        $name=$_POST['name'];
        $grade=$_POST['grade'];
        $email=$_POST['email'];
        //完成修改->数据库
        $res= $empService->addEmp($id, $name, $grade, $email);
        if($res==1){
             
            //成功！
            header("Location:ok.php");
            exit();
        }else{
            header("Location:error.php");
            exit();
    
        }
    }
    else if($flag=="addemp1"){
        //说明用户希望执行添加用户
        //接收数据
        $name=$_POST['name'];
        $grade=$_POST['grade'];
        $email=$_POST['email'];
        //完成添加->数据
        $res= $empService->addEmp1($name,$grade,$email);
        if($res==1){
             
            //成功！
            header("Location:ok.php");
            exit();
        }else{
            header("Location:error.php");
            exit();
    
        }
    }
    else if($flag=="Useraddemp"){
        //说明用户希望执行添加用户
        //接收数据
        $id=$_POST['id'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        //完成添加->数据
        $res= $empService->Useraddemp($id,$name,$password);
        if($res==1){
             
            //成功！
            header("Location:ok.php");
            exit();
        }else{
            header("Location:error.php");
            exit();
    
        }
    }
}
?>