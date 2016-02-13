<?php
require_once 'SqlHelper.class.php';
require_once 'Emp.class.php';
//一个函数可以获取共有多少页
class EmpService{
    function updateEmp($id,$name,$grade,$email){
        $sql="update emp set name='$name' , grade=$grade ,email='$email' where id=$id";
        $sqlHelper=new SqlHelper();
        $res=$sqlHelper->execute_dml($sql);
        $sqlHelper->close_connect();
        return $res;
    }
    //根据一个id号获取一个用户信息
    function  getEmpById($id){
        $sql="select * from emp where id=$id";
        $sqlHelper=new SqlHelper();
        $arr=$sqlHelper->execute_dql2($sql);
        $sqlHelper->close_connect();
        //二次封装.$arr->Emp对象实例
        //创建Emp对象实例
        $emp=new Emp();
        $emp->setId($arr[0]['id']);
        $emp->setName($arr[0]['name']);
        $emp->setGrade($arr[0]['grade']);
        $emp->setEmail($arr[0]['email']);
        return $emp;
        
    }
    //添加一个方法
    function addEmp($name,$grade,$email){
        //做一个$sql语句
        $sql="insert into emp (name,grade,email) values('$name','$grade','$email')";
        //同sqlHelper完成添加
        $sqlHelper=new SqlHelper();
        $res=$sqlHelper->execute_dml($sql);
        $sqlHelper->close_connect();
        return $res;
    }
    //一个函数可以获取共有多少页
    function getPageCount ($pageSize){
    //需要查询$rowCount
    
    $sql="select count(id) from emp";
    $sqlHelper=new SqlHelper();
    $res=$sqlHelper->execute_dql($sql);
    
    //这样就可以计算$pageCount
    if($row=mysql_fetch_row($res)){
        $pageCount=ceil($row[0]/$pageSize);
    }
    //释放资源关闭链接
    mysql_fetch_row($res);
    $sqlHelper->close_connect();
    return $pageCount;
}
      function getEmpListByPage($pageNow,$pageSize){
    $sql="select * from emp limit ".($pageNow-1)*$pageSize.",$pageSize";
    $sqlHelper=new SqlHelper();
    $res=$sqlHelper->execute_dql2($sql);
    $sqlHelper->close_connect();
    return $res;
}

//第二种使用封装的方式完成的分页
function getFenyePage($fenyePage){
    //创建一个sqlHelper对象实例
    $sqlHelper=new SqlHelper();
    $sql1="select * from emp  limit ".($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize."";
    //如何排错
    $sql2="select count(id) from emp";
    $sqlHelper->exectue_dql_fenye($sql1,$sql2,$fenyePage);    
    $sqlHelper->close_connect();
}
   //根据输入id删除某个用户
   function  delEmpById($id){
       $sql="delete from emp where id=$id";
       //创建sqlHelper对象实例
       $sqlHelper=new SqlHelper();
       return  $sqlHelper->execute_dml($sql);
   }
   
   function addEmp1($name,$grade,$email){
       //做一个$sql语句
       $sql="insert into emp (name,grade,email) values('$name','$grade','$email')";
       //同sqlHelper完成添加
       $sqlHelper=new SqlHelper();
       $res=$sqlHelper->execute_dml($sql);
       $sqlHelper->close_connect();
       return $res;
   }
   function Useraddemp($id,$name,$password){
       //做一个$sql语句
       $sql="insert into admin (id,name,password) values('$id','$name',md5('$password'))";
       //同sqlHelper完成添加
       $sqlHelper=new SqlHelper();
       $res=$sqlHelper->execute_dml($sql);
       $sqlHelper->close_connect();
       return $res;
   }
}
?>