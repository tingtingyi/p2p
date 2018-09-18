<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>p2p金融借贷-个人资料</title>
  <!-- 引入bootstrap样式 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
  <!-- 引入个人中心样式 -->
  <link rel="stylesheet" href="./dist/css/minCss/userInfo.min.css">
</head>

<body>
  <!-- 网页头部 导航 -->
  <?php
        require_once("header.php");
    ?>
  <!-- 个人中心 -->
  <div class="container personal">
    <div class=" row">
      <div class="col-sm-3 col-xs-12">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  投资项目
                </a>
              </h4>

            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  借款项目
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <ul>
                  <li>
                    <a href="">借款项目</a>
                  </li>
                  <li>
                    <a href="">借款项目</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  我的账户
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <ul>
                  <li>
                    <a href="">账户信息</a>
                  </li>
                  <li>
                    <a href="">实名认证</a>
                  </li>
                  <li>
                    <a href="">银行卡管理</a>
                  </li>
                  <li>
                    <a href="">登录记录</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                  aria-controls="collapseFour">
                  资产详情
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <ul>
                  <li>
                    <a href="">账户流水</a>
                  </li>
                  <li>
                    <a href="">充值明细</a>
                  </li>
                  <li>
                    <a href="">提现记录</a>
                  </li>
                  <li>
                    <a href="">收款明细</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  个人资料
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                Anim pariatur cliche
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-9 col-xs-12">
        <div class="panel panel-default personaldata">
          <div class="panel-heading">个人资料</div>
          <div class="panel-body">
            <form class="form-horizontal">
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">用户名</label>
                <div class="col-sm-8">
                 <p class="form-control-static">xiaoqiang</p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">真实姓名</label>
                <div class="col-sm-8">
                  <p class="form-control-static">小强</p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">证件号码</label>
                <div class="col-sm-8">
                  <p class="form-control-static">510***********7723</p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">手机号码</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" style="width:250px;">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">联系电话</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" style="width:250px;">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">个人学历</label>
                <div class="col-sm-8">
                  <select class="form-control" style="width:180px">
                    <option>初中</option>
                    <option>高中</option>
                    <option>专科</option>
                    <option>本科</option>
                    <option>硕士研究生</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">个人收入</label>
                <div class="col-sm-8">
                  <select class="form-control" style="width:180px">
                    <option>1000元以下</option>
                    <option>1000~1999元</option>
                    <option>2000~2999元</option>
                    <option>3000~4000元</option>
                    <option>10000以上</option>
                  </select>
                </div>
              </div>

               <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">联系地址</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control">
                </div>
              </div>
  
             
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary col-sm-offset-3">保存数据</button>
                </div>
              </div>
            </form>
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
<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
<!-- 引入bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./dist/js/index.min.js"></script>

</html>