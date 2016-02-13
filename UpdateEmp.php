<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>用户信息修改</title>
</head>
<body>
<?php 
require_once 'EmpService.class.php';
$id=$_GET['id'];
$empService=new EmpService();
//$arr=$empService->getEmpById($id);
$emp=$empService->getEmpById($id);
?>
<h1>修改用户</h1>
<form action="empProcess.php" method="post">
<table>
<tr><td>id号</td><td><input readonly="readonly" type="text" name="id" value="<?php echo $emp->getId();?>"/></td></tr>
<tr><td>用户名</td><td><input type="text" name="name" value="<?php echo $emp->getName(); ?>"/></td></tr>
<tr><td>级别</td><td><input type="text" name="grade" value="<?php echo $emp->getGrade();?>"/> </td></tr>
<tr><td>邮箱</td><td><input type="text" name="email" value="<?php echo $emp->getEmail();?>"/></td></tr>
<input type="hidden" name="flag" value="updateemp"/>
<tr>
<td><input type="submit" value="修改"/></td>
<td><input type="reset" value="取消"/></td>
</tr>
</table>
</form>

</body>
</html>
