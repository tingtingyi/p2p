
<!-- 主导航 -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
        <ul class="nav navbar-nav" id="menu">
            <li class="active">
                <a href="/index.php?meid=1"> 首页
                    <!-- <span class="sr-only">(current)</span> -->
                </a>
            </li>
            <li>
                <a href="/invest.php?meid=2">我要投资</a>
            </li>
            <li>
                <a href="/borrow.php?meid=3">我要借款</a>
            </li>
            <li>
                <a href="/personal.php?meid=4">个人中心</a>
            </li>
            <li>
                <a href="#">新手指引</a>
            </li>
            <li>
                <a href="#">关于我们</a>
            </li>
        </ul>

        <!-- </div> -->
    </div>
    <!-- /.container-fluid -->
</nav>
<script src="./lib/jquery/jquery.min.js"></script>
<script>
    var resurl=location.href;
    var menuid=resurl.split("=")[1];
    $("#menu li").eq(menuid-1).addClass("active").siblings("li").removeClass("active");
</script>