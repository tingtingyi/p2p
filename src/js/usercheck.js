// 发ajax请求验证是否登录
$.get("./api/checkstate.php",function (data) {
    console.log("验证的结果",data);
    //处理前端的业务逻辑
    if(!data.isSuccess){
        alert(data.msg);
        location.href="login.php";
    }
},"json");