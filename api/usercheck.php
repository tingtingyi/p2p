<?php
// 接收前端发送过来的数据
$username=$_POST["username"];
$password=md5($_POST["password"]);;

// 连接数据库
require_once("conn.php");
// 构造sql语句
$sql="select * from  userinfo where username='".$username."' and pwd='".$password."'";
// 执行sql语句
$result=mysqli_query($link,$sql);
// 获取查询结果
$rs=mysqli_fetch_assoc($result);
// 根据执行结果判断并返回相应的信息给前端
if($rs!=null){
    // 登录成功后创建session
    session_start();
    $_SESSION["username"]=$rs["username"];
    $_SESSION["userid"]=$rs["userid"]; 
    // var_dump($_SESSION["username"]);
    $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功"];
    echo json_encode($rsArray);
}else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败"];
    echo json_encode($rsArray);
};
//释放内存
require_once('./freeclose.php')
?>