<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/20
 * Time: 19:55
 */
header("Content-type: text/html; charset=utf-8");
header("Content-type: text/html; charset=utf-8");
if(isset($_GET['username'])&&$_GET['email']){//如果有值且不为空
  echo 'Hello '.$_GET['username'];
}else{
  echo 'Please input username';
}
date_default_timezone_set("PRC");
//设置时区
    if(isset($_POST["username"])){
        $con=mysql_connect("localhost:3306","root","root","znl") or die("连接失败");
        //链接数据库          端口号                  用户名              密码              连接名
        mysql_query("set usernames utf8",$con);
        mysql_query("set usernames 'utf8'");
        //数据库输出的编码 应与你的数据库编码一致 建议用utf-8
        $time=date("Y-m-d H:i:s");
        //时间格式
        mysql_select_db("znl");
        //打开数据库
        $sql="insert into znl(username,email,date) value ('$_POST[username]','$_POST[email]','$time')";
        mysql_query($sql,$con);
        mysql_close($con);
        header("Location:index.html");
    }
    ?>