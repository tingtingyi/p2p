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
 
</script>
</html>