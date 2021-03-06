<?php
$jsOptions = [ # js的配置部分
    [
        # js options ，来定义位置，条件等
        # 在当前options下的js文件
        'js' => [
            'js/layout-water.js',
            'js/jquery-3.3.1.min.js',
            'js/laydate.js',
            'js/echarts.min.js',
            'js/getTime.js'
        ],
    ]

];
$cssOptions = [
    # css配置
    [
        'css' => [
            'css/app.css',
        ],
    ],
];
\Yii::$service->page->asset->jsOptions = $jsOptions;
\Yii::$service->page->asset->cssOptions = $cssOptions;
\Yii::$service->page->asset->register($this);

?>
    <style>
        .pagination {
            white-space: nowrap;
            padding: 2px 5px;
            color: #303133;
            font-weight: 700;
        }

        .pagination li {
            padding: 0 4px;
            background: #fff;
            font-size: 13px;
            min-width: 35.5px;
            height: 28px;
            line-height: 28px;
            box-sizing: border-box;
            display: inline-block;
        }

        .pagination li.first {
            width: 54px;
            height: 20px;
            background: #edf8ff;
            border: 2px solid #e8f6ff;
            border-radius: 10px;
            color: #41b2fc;
            line-height: 18px;
            text-align: center;
            margin-top: 8px;
        }

        .pagination li.last {

            width: 54px;
            height: 20px;
            background: #51b7fc;
            border: 2px solid #51b7fc;
            border-radius: 10px;
            color: #fff;
            line-height: 18px;
            text-align: center;
            margin-top: 8px;
        }

        .pagination li a {
            color: #000;
            font-weight: bold;
        }

        .pagination li.active a {
            color: #409EFF;
            cursor: default;
        }
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            font-family: 微软雅黑;
        }

        /*头部样式*/
        .header {
            width: 100%;
            height: 54px;
            position: fixed;
            top: 0;
            right: 0;
            z-index: 99;
            background: #eaf6ff;

        }

        .header ul {
            width: 674px;
            height: 100%;
            display: flex;
            justify-content: space-around;
        }

        .header ul li {
            height: 100%;
            width: 110px;
            text-align: center;
            line-height: 54px;
            font-size: 14px;
            margin-right: 10px;
        }

        .header ul li.active {
            background: #3CACFE;
            color: #fff;
        }

        .header ul li.active a {
            color: #fff;
        }

        .header ul li a {
            display: block;
            width: 100%;
            height: 100%;
            color: #516676;
        }

        .header ul li:hover {
            cursor: pointer;
        }

        .header .header-right {
            height: 100%;
            width: 339px;
            display: flex;
            justify-content: space-around;
        }

        .header .header-right .adminname {
            width: 120px;
            height: 100%;
            /*background: forestgreen;*/
            float: left;
            margin-left: 10px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .admin-img {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            margin-top: 8px;
            float: left;
            overflow: hidden;
        }

        .adminname span {
            line-height: 50px;
            font-size: 14px;
            margin-left: 10px;
        }

        .adminname .name1 {
            color: #9aa9b5;
        }

        .adminname .name2 {
            color: #32d796;
        }

        .adminname .name3 {
            cursor: pointer;
            color: #41b2fc;
        }

        .clearimg {
            width: 17px;
            height: 19px;
            background: url("/public/img/clear.png") no-repeat center center/100% auto;
            margin-top: 15px;
            float: left;
            margin-left: 16px;
        }

        .out {
            width: 17px;
            height: 19px;
            background: url("/public/img/out.png") no-repeat center center/100% auto;
            margin-top: 15px;
            float: left;
        }

        /*侧边栏*/
        .aside {
            width: 167px;
            position: fixed !important;
            top: 0;
            bottom: 0;
            z-index: 999;
            background: #1f262c;
        }

        .aside .logo {
            width: 100%;
            height: 125px;
            background: url("/public/img/logowater.png") no-repeat center center/100% auto;
        }

        .aside-list li {
            width: 100%;
            height: 72px;
            line-height: 72px;
        }

        .aside-list li.active{
            border-left: 6px solid #37df72;
            background: #323f49;
            box-sizing:border-box;
        }

        .aside-list li.active .col-box{
            background: #37df72;
        }
        .col-box {
            width: 7px;
            height: 4px;
            border-radius: 1px;
            background: #44b5ff;
            float: left;
            margin-top: 34px;
            margin-left: 34px;
        }

        .aside a {
            font-size: 14px;
            color: #fff;
            margin-left: 7px;
        }

        /*主内容*/
        .main-content {
            position: absolute;
            width: calc(100% - 167px);
            top: 80px;
            left: 167px;

        }
        .el-input--suffix .el-input__inner {
            height: 30px;
            border-radius: 15px;
            background: #f3faff;
            border: 2px solid #e5eff8;
        }

        input.el-input__inner {
            height: 30px;
            border-radius: 15px;
            background: #f3faff;
            border: 2px solid #e5eff8;
        }

        .box {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            padding-top: 54px;
            background: white;
            font-family: Microsoft YaHei;
        }

        .main-content .button_left {
            width: 54px;
            height: 20px;
            background: #edf8ff;
            border: 2px solid #e8f6ff;
            border-radius: 10px;
            color: #41b2fc;
            line-height: 18px;
            text-align: center;
            margin-top: 8px;
        }

        .main-content .button_right {
            width: 54px;
            height: 20px;
            background: #51b7fc;
            border: 2px solid #51b7fc;
            border-radius: 10px;
            color: #fff;
            line-height: 18px;
            text-align: center;
            margin-top: 8px;
        }

        .main-content .dian {
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #3db0ff;
            box-shadow: 0 0 2px #3db0ff;
            margin-top: 10px;
            margin-right: 5px;
        }

        .el-icon-delete {
            color: #ff8f71;
        }

        .content .col-box {
            width: 12px;
            height: 7px;
            border-radius: 5px;
            margin-left: 10px;
            margin-top: 17px;
            margin-right: 7px;
            background: #37e06f;
            box-shadow: 0 0 2px #37e06f;
        }

        .el-date-editor .el-range-separator {
            line-height: 20px;
        }

        .el-date-editor .el-range__icon {
            line-height: 20px;
        }

        .el-date-editor .el-range-input {
            background: #F3FAFF;
        }

        .pagination {
            white-space: nowrap;
            padding: 2px 5px;
            color: #303133;
            font-weight: 700;
        }

        .pagination li {
            padding: 0 4px;
            background: #fff;
            font-size: 13px;
            min-width: 35.5px;
            height: 28px;
            line-height: 28px;
            box-sizing: border-box;
            display: inline-block;
        }

        .pagination li.first {
            width: 54px;
            height: 20px;
            background: #edf8ff;
            border: 2px solid #e8f6ff;
            border-radius: 10px;
            color: #41b2fc;
            line-height: 18px;
            text-align: center;
            margin-top: 8px;
        }

        .pagination li.last {

            width: 54px;
            height: 20px;
            background: #51b7fc;
            border: 2px solid #51b7fc;
            border-radius: 10px;
            color: #fff;
            line-height: 18px;
            text-align: center;
            margin-top: 8px;
        }

        .pagination li a {
            color: #000;
            font-weight: bold;
        }

        .pagination li.active a {
            color: #409EFF;
            cursor: default;
        }
        .chat{
            width: 320px;
            height: 0;
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 999999999999;
        }
        .chat iframe{
            width: 100%;
            height: 100%;
            border: none;
        }
        .chat .line-box{
            position: absolute;
            width: 20px;
            height: 45px;
            right: 10px;
            top: 0;
            cursor: pointer;
        }
        .chat .line{
            display: inline-block;
            width: 20px;
            background: #fff;
            height: 2px;
            margin-top: 22px;
        }
        .zx-btn{
            position: fixed;
            bottom: 0;
            right: 0;
            box-sizing: border-box;
            padding:10px 15px;
            z-index: 9999;
            background: #3CACFE;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .twinkle{
            animation: ani 0.5s infinite;
        }
        @keyframes ani{
            from{
                background: #3CACFE;
            }
            to{
                background: orange;
            }
        }
    </style>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <title>晋彤水司管理系统</title>
        <?= Yii::$service->page->widget->render('head', $this); ?>
        <?= Yii::$service->page->widget->render('beforeContent', $this); ?>
        <?php $this->beginBody() ?>

        <meta charset="UTF-8">
    </head>
    <body>
    <div class="">
        <div class="aside"></div>
        <div class="header">
            <div style="margin-left:167px;">
                <div style="width: 1012px;margin:0 auto;display: flex">
                    <ul>
                        <li id="index"><a href="<?= Yii::$service->url->getUrl('water/index/index') ?>"
                                          class="router-link-exact-active router-link-active">
                                首页
                            </a></li>
                        <li id="service"><a href="<?= Yii::$service->url->getUrl('water/service/index') ?>" class="">
                                维修服务
                            </a></li>
                        <li id="goods"><a href="<?= Yii::$service->url->getUrl('water/goods/index') ?>" class="">
                                商品管理
                            </a></li>
                        <li id="orders"><a href="<?= Yii::$service->url->getUrl('water/orders/index') ?>" class="">
                                订单管理
                            </a></li>
                        <li id="store"><a href="<?= Yii::$service->url->getUrl('water/store/index') ?>" class="">
                                店铺管理
                            </a></li>
                        <li id="account"><a href="<?= Yii::$service->url->getUrl('water/account/index') ?>" class="">
                                账户管理
                            </a></li>
                        <li id="datas"><a href="<?= Yii::$service->url->getUrl('water/datas/index') ?>" class="">
                                数据统计
                            </a></li>
                    </ul>
                    <div class="header-right">
                        <div class="adminname">
                            <div class="admin-img" style="background: url('<?= Yii::$app->params[img]."/images/".$_SESSION[shop_logo]?>')no-repeat center center /cover"></div>
                            <span class="name1"><?=$_SESSION['shop_name']?></span></div>
                        <div class="adminname" style="width: 110px;cursor:pointer;">
                            <div class="clearimg" ></div>
                            <span class="name2" onclick="alert('清除缓存成功')">清除缓存</span></div>
                        <div class="adminname" style="width: 80px;cursor:pointer;">
                            <a href="<?= Yii::$service->url->getUrl("/water/login/out") ?>">
                                <div class="out"></div>
                                <span class="name3 tuichu">退出</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endBody() ?>
        <div class="right" style="margin-top: 54px;">
            <?= $content ?>
        </div>
        <div class="chat">
            <div class="line-box">
                <span class="line"></span>                
            </div>
            <iframe src="" id="iframe"></iframe>
        </div>
        <div class="zx-btn">
            点击打开客服窗口
        </div>
        <script>
            var iframe = document.querySelector("#iframe");
            var chat = document.querySelector(".chat");
            var zx = document.querySelector(".zx-btn");

            iframe.src = `http://www.chengzhanghao.com:1701/#/totaltab/wechat?userNum=<?= $_SESSION['userNum'] ?>&userId=<?= $_SESSION["userId"]?>&userName=<?= $_SESSION["userName"] ?>`;
            document.querySelector(".chat .line-box").onclick=function(){
                chat.style.height = 0;
                zx.style.display = "block"; 
                zx.classList.remove("twinkle");
            }
            zx.onclick = function(){
                chat.style.height = "500px";
                zx.style.display = "none"; 
                zx.classList.remove("twinkle");
            }
            window.addEventListener('message',function(event){
                document.querySelector(".zx-btn").classList.add("twinkle");
            })
        </script>
    </div>
    </body>
    <script>
        // 筛选顶部菜单
        var url = location.href.split("/");

        document.querySelector("#" + url[4]).classList.add("active");

        // 筛选左侧菜单
        let asd=document.querySelectorAll(".aside li");

        let arr1="<?php echo $_SESSION['pagess'];?>";


        for (let i=0; i <asd.length ;i++) {
            let url12=asd[i].getAttribute('href1');

            let n = url12.search('/'+arr1);

            if (n>=1) {
                asd[i].className='active';
            };
        };

        let urls = "<?php echo $_SERVER['SERVER_NAME'];?>";
    </script>
    </html>
<?php $this->endPage() ?>