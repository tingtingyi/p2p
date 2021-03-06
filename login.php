<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷-用户登录</title>
    <!-- 引入bootstrap样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
    <!-- 引入bootstrapValidator样式 -->
    <link rel="stylesheet" href="lib/bootstrapValidator/css/bootstrapValidator.min.css"> 
</head>

<body>
    <!-- 网页头部 导航 -->
    <?php
        require_once("regloginheader.php");
    ?>
    <!-- 主导航 -->
    <nav class="navbar navbar-default"> 
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="">
                </a>
            </div>
            <p>用户登录</p>
        </div>
    <!-- /.container-fluid -->
    </nav>
    <!-- 登录 -->
    <div class="container loginform">
        <div class="panel panel-default">
            <div class="panel-heading">用户登录</div>
            <div class="panel-body">
                <form class="form-horizontal registerform" id="loginform">
                    <p class="h4">请输入用户名和密码</p>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">用户名称：</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">密&emsp;&emsp;码：</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-12">
                            <button type="submit" class="btn btn-success mybtn">登录</button>
                            <a href="register.php">新用户，马上注册</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

 
    <!-- 引入页脚 -->
    <?php
        require_once("footer.php");
    ?>

     <!-- 蒙层的html结构 -->
     <div class="modal fade" id="ShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="ShowTitle">标题</h4>
        </div>
        <div class="modal-body" id="ShowContent">
            内容
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
        </div>
        </div>
    </div>
    </div>
</body>
<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
<!-- 引入bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 引入bootstrapValidator验证插件 -->
<script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
<!-- 引入注册js -->
<script src="./dist/js/register.min.js"></script>
</html>