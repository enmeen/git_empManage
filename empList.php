<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>用户信息列表</title>
<script type="text/javascript">
function confirmDele(val){
    return	window.confirm("是否要删除id="+val+"的用户");
}
</script>
</head>
<?php
require_once 'EmpService.class.php';
require_once 'FenyePage.class.php';
require_once 'common.php';
checkUserValidate();
//创建了EmpService对象实例
$empService= new EmpService();
$fenyePage= new FenyePage;
$fenyePage->pageNow=1;
$fenyePage->pageSize=5;
$fenyePage->gotoUrl="empList.php";



//这里我们需要根据用户的点击来修改$pageNow这个值
//这里我们需要判断是否有这个$pageNow发送，有使用
//如果没有，则默认显示第一页
if(!empty($_GET['pageNow'])){
   $fenyePage->pageNow=$_GET['pageNow'];
}
//创建了EmpService对象实例
$empService->getFenyePage($fenyePage);
echo"<table border='1' bordercolor='blue' cellspacing='0' width='700px'>";
echo "<tr><th>id</th><th>name</th><th>grade</th><th>email</th><th>删除用户</th><th>修改用户</th></tr>";

//通过数组取
for($i=0;$i<count($fenyePage->res_array);$i++){
    $row=$fenyePage->res_array[$i];
    echo "<tr><td>{$row['id']}</td><td>{$row["name"]}</td><td>{$row["grade"]}</td><td>{$row["email"]}</td><td><a onclick='return confirmDele({$row['id']})' href='empProcess.php?flag=del&id={$row['id']}'>删除</a></td><td><a href='UpdateEmp.php?id={$row['id']}'>修改</a></td></tr>";
}
echo "<h1>雇员信息列表</h1>";
echo "</table>";

//显示上一页和下一页
echo $fenyePage->navigate;

?>
<form action="empList.php">
跳转到：<input type="text" name="pageNow" />
<input type="submit" value="GO" />
</form>
</html>
