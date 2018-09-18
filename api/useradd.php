<?php
    // 接收前端发送过来的数据
    $username=$_POST["username"];
    $password=md5($_POST["password"]);
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    // 连接数据库
    require_once("conn.php");
    // 构造sql语句
    $sql="insert into userinfo(username,pwd,mobile,email) values('".$username."','".$password."','".$mobile."','".$email."')";
    // 执行sql语句
    $result=mysqli_query($link,$sql);
    // 根据执行结果判断并返回相应的信息给前端
    if($result){
        $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功"];
        echo json_encode($rsArray);
    }else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败"];
        echo json_encode($rsArray);
    };
?>