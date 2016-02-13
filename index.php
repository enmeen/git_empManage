<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<frameset rows="90px,*" frameborder="0" border="0">
    <frame src="top.php?name=<?php $_GET['name']?>"  framespacing="0" scrlling="no" noresize="noresize" />
    <frameset cols="180px,*" frameborder="0" border="0">
        <frame src="left.php"  framespacing="0" scrlling="no" noresize="noresize" />
        <frame src="main_homepage.php?name=<?php echo  $_GET['name']?>"  framespacing="0" scrlling="no" noresize="noresize" name="main"  />
    </frameset>
</frameset>

</html>
