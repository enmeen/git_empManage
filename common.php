<?php
  function getLastTime(){
      //date_default_timezone_set("Asia/Chongqing");时区设置
      //php.ini,查询timezone
      if(!empty($_COOKIE['lastVisit'])){
          echo $_COOKIE['lastVisit'];
          //更新时间
          setcookie('lastVisit',date("y-m-d H:i:s"),time()+24*3600*30);
      }else{
          
          //说明用户是第一次登录;
          //更新时间
          setcookie('lastVisit',date("y-m-d H:i:s"),time()+24*3600*30);
      }
  }
      function getCookieVal($key){
          if(empty($_COOKIE[$key])){
              return "";
          }else{
            return $_COOKIE[$key];
          }
      }
  //把验证用户是否合法封装函数
  function checkUserValidate(){
      session_start();
      if(empty($_SESSION['loginuser'])){
          header("Location:login.php?errno=1");
      }
  }
?>