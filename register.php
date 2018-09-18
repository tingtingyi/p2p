<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷-用户注册</title>
  
    <!-- 引入bootstrap样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/register.min.css">
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
            <p>用户注册</p>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- 注册 -->
    <div class="container regform">
        <div class="panel panel-default">
            <div class="panel-heading">用户注册</div>
            <div class="panel-body">
                <form class="form-horizontal registerform" id="registerform" method="post">
                    <p>请填写注册信息，点击“提交注册”即可完成注册！</p>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">用户名称：</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">密&emsp;&emsp;码：</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">确认密码：</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="checkpwd" placeholder="请再次输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">电话号码：</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" placeholder="请输入电话号码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">邮&emsp;&emsp;箱：</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" placeholder="请输入电子邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">同意协议并注册</button>
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
</body>
<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
<!-- 引入bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 引入注册js -->
<script src="./dist/js/register.min.js"></script>
<!-- 引入bootstrapValidator验证插件 -->
<script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>

</html>