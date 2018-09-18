<!-- 网页头部  顶部导航 -->
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-phone-alt"></span>
                <i>028-86261949</i>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="homepage">
                    <a href="index.php">首页</a>
                </li>
                <li>
                    <a href="#">帮助</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<script src="./lib/jquery/jquery.min.js"></script>
<script>
    $.get("./api/checkstate.php",function(data){
        console.log(data)
        if(data.isSuccess){
            var htmlstr=`
            <li><a href="">${data.username}</a></li>
            <li><a href="login.php">赶快充值</a></li>
            <li><a href="api/loginout.php">注销</a></li>`;
            $("#homepage").after(htmlstr);
        }else{
            var htmlstr=`
            <li><a href="login.php">登录</a></li>
            <li><a href="register.php">快速注册</a></li>`;
            $("#homepage").after(htmlstr);
        }
    },"json")
    
</script>
