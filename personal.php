<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>p2p金融借贷-账户信息</title>
  <!-- 引入bootstrap样式 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
  <!-- 引入个人中心样式 -->
  <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
  <!-- 引入jquery -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./dist/js/usercheck.min.js"></script>
</head>

<body>
  <!-- 网页头部 导航 -->
  <?php
        require_once("regloginheader.php");
        require_once("header.php");
    ?>
  <!-- 个人中心 -->
  <div class="container personal" id="personal">
    <div class=" row">
    <?php
        require_once("menu.php");
    ?>

      <div class="col-sm-9 col-xs-12 means" id="rightcontent">
      <button type="button" class="btn btn-primary btn-xs" id="btn">隐藏菜单</button>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row userinfo">
              <div class="col-sm-2 img">
                <img class="img-responsive" src="./images/head_icon.jpg" alt="">
              </div>
              <div class="col-sm-10">
                <p>昵 称：源代码教育</p>
                <p>用户名：小强</p>
                <p>最后登录时间：2016-10-25 15:30:10</p>
              </div>
            </div>
            <div class="row h4">
              <div class="col-sm-4 col-xs-12 pa">总金额：
                <span class="text-primary">10000元</span>
              </div>
              <div class="col-sm-4 col-xs-12 pa">可用金额：
                <span class="text-primary">8000元</span>
              </div>
              <div class="col-sm-4 col-xs-12 pa">冻结金额：
                <span class="text-primary">2000元</span>
              </div>
            </div>
            <div class="user">
              <a href="" class="btn btn-primary btn-lg">账户充值</a>
              <a href="" class="btn btn-danger btn-lg">账户提现</a>
            </div>
            <!-- 实名认证 -->
            <div class="msg">
              <div class="row">
                <div class="col-sm-4 col-xs-12">
                  <div class="pull-left">
                    <img src="./images/shiming.png" alt="">
                  </div>
                  <div class="pull-left pfont">
                    <p class="titl">实名认证</p>
                    <p>
                      <span>未认证</span>&ensp;
                      <a href="">马上认证</a>
                    </p>
                  </div>
                  <div class="clearfix"></div>
                  <p class="margin">实名认证之后才能在平台投资</p>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <div class="pull-left">
                    <img src="./images/shouji.jpg" alt="">
                  </div>
                  <div class="pull-left pfont">
                    <p class="titl">手机认证</p>
                    <p>
                      <span>已认证</span>&ensp;
                      <a href="">查看</a>
                    </p>
                  </div>
                  <div class="clearfix"></div>
                  <p class="margin">可以收到系统操作信息,并增加使用安全性</p>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <div class="pull-left">
                    <img src="./images/youxiang.jpg" alt="">
                  </div>
                  <div class="pull-left pfont">
                    <p class="titl">邮箱认证</p>
                    <p>
                      <span>已认证</span>&ensp;
                      <a href="">查看</a>
                    </p>
                  </div>
                  <div class="clearfix"></div>
                  <p class="margin">您可以设置邮箱来接收重要信息</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4 col-xs-12">
                  <div class="pull-left">
                    <img src="./images/baozhan.jpg" alt="">
                  </div>
                  <div class="pull-left pfont">
                    <p class="titl">VIP会员</p>
                    <p>
                      <span>普通用户</span>&ensp;
                      <a href="">查看</a>
                    </p>
                  </div>
                  <div class="clearfix"></div>
                  <p class="margin">VIP会员，让你更快捷的投资</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 引入页脚 -->
  <?php
        require_once("footer.php");
    ?>
</body>

<!-- 引入bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script>
  $("#btn").on("click",function(){
    $("#personal").toggleClass("active");
    if($("#personal").hasClass("active")){
      $(this).text("显示菜单");
    }else{
      $(this).text("隐藏菜单");
    }
  })
   // 定义全局变量保存触碰时的起点坐标
   var x1,y1;
  $(window).on("touchstart",function(e){
      x1=e.originalEvent.changedTouches[0].clientX;
      y1=e.originalEvent.changedTouches[0].clientY;
  })
  $(window).on("touchend",function(e){
      var x2=e.originalEvent.changedTouches[0].clientX;
      var y2=e.originalEvent.changedTouches[0].clientY;
      // 计算滑动的距离
      var dx=x2-x1;
      var dy=y2-y1;
      // 判断滑动距离大于100后生效
      if(Math.abs(dx)>=100){
        $("#btn").trigger("click");
      }
  })

</script>
</html>