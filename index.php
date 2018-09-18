<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷首页</title>
    <!-- 引入bootstrap样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>

<body>
     <!-- 网页头部 导航 -->
        <?php
            require_once("regloginheader.php");
            require_once("header.php");
        ?>
    <!-- banner -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./images/banner01.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="./images/banner02.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- 三大特色 -->
    <div class="container feature">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <h4>投资理财</h4>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <h4>投资理财</h4>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <h4>投资理财</h4>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
        </div>
    </div>
    <!-- 进行中借款 -->
    <div class="container information">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3 class="pull-left">进行中借款</h3>
                <p class="pull-right">
                    <a href="#">进入投资列表</a>
                </p>
            </div>
            <!-- <div class="panel-body"> -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>借款人</th>
                        <th class="hidetitle">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th class="hidetitle">还款方式</th>
                        <th>进度</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>张三</td>
                        <td class="hidetitle">给我2000度过难关</td>
                        <td>10.00%</td>
                        <td>2,000.00</td>
                        <td class="hidetitle">按月分期还款</td>
                        <td>78.00%</td>
                        <td>
                            <a type="button" class="btn btn-danger btn-sm">查看</a>
                        </td>
                    </tr>
                    <tr>
                        <td>张三</td>
                        <td class="hidetitle">给我2000度过难关</td>
                        <td>10.00%</td>
                        <td>2,000.00</td>
                        <td class="hidetitle">按月分期还款</td>
                        <td>78.00%</td>
                        <td>
                            <a type="button" class="btn btn-danger btn-sm">查看</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- </div> -->
        </div>
    </div>
    <!-- 新闻咨询 -->
    <div class="container new">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">企业最新咨讯</h3>
                        <p class="pull-right">
                            <a href="#">更多咨讯</a>
                        </p>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">用户反馈</h3>
                        <p class="pull-right">
                            <a href="#">更多咨讯</a>
                        </p>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">理财经验</h3>
                        <p class="pull-right">
                            <a href="#">更多咨讯</a>
                        </p>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">活动分享</h3>
                        <p class="pull-right">
                            <a href="#">更多咨讯</a>
                        </p>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                            <li class="clearfix">
                                <p class="pull-left">
                                    <a>央视力挺互联网金融</a>
                                </p>
                                <p class="pull-right">
                                    <a>发表日期：2015-03-23</a>
                                </p>
                            </li>
                        </ul>
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