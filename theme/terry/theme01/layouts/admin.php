<?php
$jsOptions = [ # js的配置部分
    [
        # js options ，来定义位置，条件等
        # 在当前options下的js文件
        'js' => [
            'js/jquery-3.3.1.min.js',
            'js/layout-admin.js',
            'js/echarts.min.js',
            'js/laydate.js',
            'js/getTime.js'
        ],
    ]

];
$cssOptions = [
    # css配置
    [
        'css'	=>[
            'css/app.css',
        ],
    ],
];
\Yii::$service->page->asset->jsOptions = $jsOptions;
\Yii::$service->page->asset->cssOptions = $cssOptions;
\Yii::$service->page->asset->register($this);


?>

<style>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        font-family: "微软雅黑";
    }

    html, body {
        width: 100%;
        height: 100%;
    }
    a{
        color: #000;
    }
    /*头部样式*/
    .header {
        width: calc(100% - 167px);
        height: 50px;
        position: fixed;
        top: 0;
        left:167px;
        z-index: 999;
        /*display: flex;*/
        background: #eaf6ff;
        /*justify-content: space-between;*/
    }

    .header ul {
        width: 636px;
        height: 100%;
        display: flex;
        float: left;
    }

    .header ul li {
        height: 100%;
        width: 110px;
        text-align: center;
        line-height: 50px;
        font-size: 14px;
        margin-right: 10px;
    }

    .header ul li a {
        color: #516676;
    }

    .header ul li:hover {
        cursor: pointer;
    }

    .header .header-right {
        height: 100%;
        display: flex;
      /*  position: absolute;
        top:0;
        right:0;*/
    }
    .shijianchuo{
        float: left;line-height: 48px; position: relative;
        margin-top:16px;

    }
    .header .header-right .adminname {
        width: 120px;
        height: 100%;
        margin-left: 10px;

    }

    .admin-img {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        margin-top: 8px;
        float: left;
        background: #fff;
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
        color: #41b2fc;
    }

    .clearimg {
        width: 17px;
        height: 19px;
        background: url("/public/adminimg/clear.png") center center/100% auto;
        margin-top: 15px;
        float: left;
        margin-left: 16px;
    }

    .out {
        width: 17px;
        height: 19px;
        background: url("/public/adminimg/out.png") center center/100% auto;
        margin-top: 15px;
        float: left;
        /* margin-left:10px;*/
    }

    /*侧边栏*/
    .aside {
        width: 167px;
        height: 100%;
        background: #1f262c;
        float: left;
        position: fixed;
        top: 0;
        left: 0;
        z-index:99999;
    }

    .aside .logo {
        width: 100%;
        height: 125px;
        background: url("/public/adminimg/logo.png") no-repeat center center/100% auto;
    }

    .aside-list li {
        width: 100%;
        height: 72px;
        line-height: 72px;
        position: relative;
        padding-left: 6px;
        box-sizing: border-box;
    }

    .col-box {
        width: 7px;
        height: 4px;
        border-radius: 1px;
        background: #44b5ff;
        position: absolute;
        top: 34px;
        right: 132px;
        z-index: 99;
    }

    .aside a {
        font-size: 14px;
        color: #fff;
        display: block;
        width: 156px;
        height: 100%;
        /* float:left;*/
        /*margin-left:40px;*/
        position: absolute;
        right: 0;
        top: 0;
    }

    .aside-list li:hover {
        background: #323f49;
    }

    .aside a span {
        margin-left: 40px;

    }

    .borderactive {
        border-left: 6px solid #37df72;
        background: #323f49;
    }

    .bacactive {
        background: #37df72;
    }

    /*主内容*/
    .main-content {
        width: calc(100% - 167px);
        /*min-height: 587px;*/
        background: #fff;
        float: left;
        color: #333;
        margin-top: 50px;
        margin-left: 167px;
    }

    /*用户管理-管理员管理*/
    .adminmannager {
        width: 1012px;
        margin:0 auto;
        padding: 27px 0 0 0;
        box-sizing: border-box;
        margin-bottom: 50px;
    }

    .adminmannager-title span {
        font-size: 14px;
        font-weight: bolder;
    }

    /* .adminmannager-title span:first-child {
         color: #516676;
     }*/

    .adminmannager-title span:last-child {
        color: #30d366;
    }

    .adminmannager-search {
        width: 100%;
        height: 48px;
        margin-top: 30px;
        /*background: #ff6700;*/
        /*padding-right: 100px;*/
        box-sizing: border-box;
    }

    .adminmannager-search span {
        color: #8d8d8d;
        font-size: 14px;
        font-weight: bolder;
        line-height: 48px;
        float: left;
    }

    .adminmannager-search .search-ID {
        margin-left: 10px;
    }

    /*搜索框*/
    .adminmannager-search input{
        width: 200px;
        height: 32px;
        border: 2px solid #ebf6ff;
        outline: none;
        border-radius: 18px;
        box-sizing: border-box;
        float: left;
        margin-top: 9px;
        margin-left: 24px;
        padding: 0 10px;
        box-sizing: border-box;
    }


    /*会员管理下拉框*/
    .adminmannager-search select {
        width: 150px;
        height: 32px;
        outline: none;
        border: 2px solid #ebf6ff;
        border-radius: 18px;
        box-sizing: border-box;
        float: left;
        margin-top: 9px;
        margin-left: 24px;
        padding-left: 8px;
        box-sizing: border-box;
        color: #8d8d8d;
        /*消除默认下拉样式*/
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        position: relative;
    }

    /*.adminmannager-search select:after {
        content: "";
        width: 14px;
        height: 8px;
        background: url("/public/adminimg/xiala.png") no-repeat center;
        position: absolute;
        right: 20px;
        top: 45%;
        pointer-events: none;
    }*/

    .adminmannager-search .search-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: url('/public/adminimg/search.png') no-repeat center center/60% 60%;
        margin:0;
        border:none;
        padding: 0;
    }
    .adminmannager-search .indexsearch{
        width:  40px;
        height: 40px;
        margin-left: 30px;
        margin-top: 5px;
        border-radius: 50%;
        float: left;
        background: #41b2fc
    }
    .search-img, .addadmin:hover {
        cursor: pointer;
    }


    .addadmin {
        width: 150px;
        height: 32px;
        border-radius: 18px;
        box-sizing: border-box;
        float: right;
        margin-top: 8px;
        background: #37df73;
        border: none;
        font-size: 14px;
        color: #fff;
        outline: none;
    }

    /*管理员列表*/
    .admin-table {
        /*padding-right: 100px;*/
        margin-top: 8px;
    }
    input{
        outline:none;
    }

    .admin-tablename {
        height: 80px;
        line-height: 80px;
        font-size: 18px;
        font-weight: bold;
    }

    .admin-tablename1 {
        float: left;
        color: #41b2fc;
        margin-left: 11px;
    }
    .admin-tablename1 a{
        color: #41b2fc;
    }

    .admin-tablename2 {
        float: left;
        color: #4f5b64;
    }

    .admin-tablenamebox {
        width: 7px;
        height: 4px;
        border-radius: 1px;
        background: #37e06f;
        float: left;
        margin-top: 39px;
    }

    .admin-tablelist {
        font-size: 14px;
        padding-left: 17px;
        margin-bottom: 20px;
        width: 100%;
    }

    .admin-tablelist tr {
        width: 100%;
        display: flex;
    }

    .admin-tablelist tr th {
        color: #67bcff;
        /*width: 300px;*/
        flex: 0.7;
        height: 40px;
        text-align: left;
        line-height: 40px;
    }

    .admin-tablelist tr th:last-child {
        flex: 1.3;
    }

    .admin-tablelist.active tr th {
        flex: 1;
    }

    .admin-tablelist tr td {
        /*width: 300px;*/
        flex: 0.7;
        height: 40px;
        text-align: left;
        line-height: 40px;
        position: relative;
    }

    .admin-tablelist tr td:last-child {
        flex: 1.3;
    }

    .admin-tablelist.active tr td {
        flex: 1;
    }

    .admin-tablelist tr td label {
        color: #eaebec;
    }

    .delete {
        display: inline-block;
        width: 14px;
        height: 16px;
        background: url("/public/adminimg/delete.png") no-repeat center center/100% 100%;
        position: absolute;
        left: 168px;
        /*bottom: 13px;*/
        top:0;
        bottom:0;
        margin:auto 0;
    }

    .adminpagination {
        width: 100%;
        border-top: 1px solid #eee;
        box-sizing: border-box;
        min-height: 120px;
        /*margin-top:15px;*/
    }

    .pagination {
        float: right;
        /*margin-top: 10px;*/
    }

    .firstpage-box {
        width: 70px;
        height: 28px;
        background: #edf8ff;
        border-radius: 14px;
        font-size: 14px;
        line-height: 28px;
        text-align: center;
        float: left;
        border: none;
        margin-top: 2px;
        color: #41b2fc;
    }

    .lastpage-box {
        width: 70px;
        height: 28px;
        background: #51b7fc;
        border-radius: 14px;
        font-size: 14px;
        line-height: 28px;
        text-align: center;
        float: left;
        border: none;
        margin-top: 2px;
        color: #fff;
    }

    button:hover {
        cursor: pointer;
    }

    .el-pagination {
        float: left;
    }

    .admincount {
        margin: 30px 0 20px 0;
        display: flex;
        justify-content: left;
        padding-left: 215px;
        font-size: 14px;
        font-weight: bold;
        color: #97a3ad;
    }

    .admincountall span:nth-child(3) {
        color: #41b2fc;
    }

    .admintotalpage {
        margin-left: 30px;
    }

    .admintotalpage span:nth-child(3) {
        color: #41b2fc;
    }

    .xiala {
        float: left;
        position: relative;
    }

    .xialaimg {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: url("/public/adminimg/xiala.png") no-repeat center center/100% 100%;
        position: absolute;
        right: 6px;
        top: 0;
        bottom: 0;
        margin: auto 0;
        /*给自定义图片添加下拉功能*/
        pointer-events: none;
    }

    .ShopMannager {
        width: 1012px;
        margin:0 auto;
        height: 100%;
        padding: 27px 0 0 0;
        box-sizing: border-box;
    }

    .ShopMannager-title {
        color: #516676;
        font-size: 16px;
    }

    .ShopMannager-search {
        width: 100%;
        height: 48px;
        margin-top: 20px;
        /*padding-right: 100px;*/
        box-sizing: border-box;
        line-height: 48px;
    }

    .ShopMannager-search span {
        color: #a4adb5;
        font-size: 14px;
        float:left;
    }
    .xiala select {
        width: 130px;
        height: 32px;
        line-height: 32px;
        outline: none;
        border: 2px solid #ebf6ff;
        border-radius: 18px;
        box-sizing: border-box;
        margin-top: 9px;
        color: #8d8d8d;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        position: relative;
        padding-left: 18px;
        margin-left: 6px;
    }

    .xiala .xialaimg1 {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: url("/public/adminimg/xiala.png") no-repeat center center/100% 100%;
        position: absolute;
        right: 5px;
        top: 12px;
        pointer-events: none;
    }

    .search {
        float: left;
        margin-top: 9px;
        line-height: 32px;
        margin-left: 20px;
    }

    .search input {
        width: 150px;
        height: 32px;
        border: 2px solid #ebf6ff;
        outline: none;
        border-radius: 18px;
        box-sizing: border-box;
        padding: 0 10px;
        margin-left:6px;
    }

    .ShopMannagersearch-img {
        width: 40px;
        height: 40px;
        margin-left: 40px;
        margin-top: 5px;
        border-radius: 50%;
        background: #3bacfe;
        float: left;
    }

    .ShopMannagersearch-img img {
        width: 20px;
        height: 20px;
        display: block;
        margin: 0 auto;
        margin-top: 10px;
    }

    .ShopMannager-table {
        margin-top: 8px;
    }

    .ShopMannager-tablelist {
        font-size: 14px;
        margin-bottom: 20px;
        width: 100%;
    }

    .ShopMannager-tablelist tr {
        width: 100%;
        display: flex;
    }

    .ShopMannager-tablelist tr th {
        color: #67bcff;
        flex: 0.2;
        height: 40px;
        text-align: left;
        line-height: 40px;
    }

    .ShopMannager-tablelist tr th:nth-child(3) {
        flex: 0.4;
    }

    .ShopMannager-tablelist tr th:nth-child(4) {
        flex: 0.5;
    }

    .ShopMannager-tablelist tr th:last-child {
        flex: 1.6;
    }

    .ShopMannager-tablelist tr td {
        flex: 0.2;
        height: 40px;
        text-align: left;
        line-height: 40px;
        position: relative;
        color: #82898e;
        font-size: 14px;
    }

    .ShopMannager-tablelist tr td:nth-child(3) {
        flex: 0.4;
    }

    .ShopMannager-tablelist tr td:nth-child(4) {
        flex: 0.5;
    }

    .ShopMannager-tablelist tr td:last-child {
        flex: 1.6;
    }

    #platdata {
        width: 1012px;
        min-height: 500px;
        padding: 27px 0 0 0;
        margin:0 auto;
    }

    #platdata button {
        width: 60px;
        height: 32px;
        float: left;
        border: 0;
        background: #30b5fe;
        line-height: 32px;
        font-size: 14px;
        color: #fff;
        border-radius: 18px;
        margin-top: 9px;
        margin-left: 20px;
        outline: 0;
    }

    .main-content {
        /*overflow: hidden;*/
        /*width: 1012px;*/
    }

    #platdata .tongji {
        width: 100%;
        height: 110px;
        margin-top: 30px;
    }

    #platdata .tongji ul {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: left;
    }

    #platdata .tongji li {
        width: 220px;
        height: 100%;
        margin-right: 20px;
        border-radius: 6px;
        position: relative;
    }

    #platdata .tongji li:first-child {
        background: #30a2fe;
    }

    #platdata .tongji li:nth-child(2) {
        background: #30d366;
    }

    #platdata .tongji li:nth-child(3) {
        background: #fdcb52;
    }

    #platdata .tongji li:last-child {
        margin-right: 0;
        background: #ff798b;
    }

    #platdata .tongji li .tongji-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 2px solid #fff;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        left: 20px;
    }

    #platdata .tongji li .tongji-number {
        width: 100px;
        height: 60px;
        overflow: hidden;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        right: 26px;
    }
    .tongji-number div:first-child span {
        font-size: 24px;
        font-weight: bolder;
        color: #fff;
    }

    .tongji-number div:last-child span {
        font-size: 10px;
        color: #fff;
    }

    .tongji-circle img {
        width: 25px;
        height: 26px;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        left: 18px;
    }
    .process{
        width: 100%;
        margin-top:20px;
    }
    .process div{
        width: 130px;
        height: 159px;
        float: left;
        background: red;
        margin-right:60px;
    }
    .process div:first-child{
        background: url('/public/adminimg/m1.png') no-repeat center center/100% auto;
    }
    .process div:nth-child(2){
        background: url('/public/adminimg/m2.png') no-repeat center center/100% auto;
    }
    .process div:nth-child(3){
        background: url('/public/adminimg/m3.png') no-repeat center center/100% auto;
    }
    .process div:nth-child(4){
        background: url('/public/adminimg/m4.png') no-repeat center center/100% auto;
    }
    .process div:nth-child(5){
        background: url('/public/adminimg/m5.png') no-repeat center center/100% auto;
    }
    .process div:nth-child(6){
        background: url('/public/adminimg/m6.png') no-repeat center center/100% auto;
    }
    .process div:nth-child(7){
        background: url('/public/adminimg/m7.png') no-repeat center center/100% auto;
        margin-right: 0;
    }
    .addofplatdata {
        width: 100%;
        min-height: 500px;
        margin-top: 30px;
        border-bottom: 1px solid #f5f5f6;
    }

    .platdata-header {
        width: 100%;
        height: 66px;
        line-height: 66px;
        padding-bottom: 4px;
        border-bottom: 1px solid #30a2fe;
        margin-bottom: 10px;
    }

    .platdata-headername {
        height: 100%;
        float: left;
        color: #30a2fe;
        font-size: 14px;
        font-weight: bold;
    }

    .platdata-headerright {
        float: right;
        height: 100%;
        padding-right: 20px;
    }

    .platdata-headerright ul {
        height: 100%;
        float: left;
        cursor: pointer;
    }

    .platdata-headerright ul li {
        float: left;
        font-size: 14px;
        color: #99cafe;
        width: 60px;
        text-align: center;
        background: #fff;
        box-sizing: border-box;
        cursor: pointer;
    }

    /*.platdata-headerright ul li:hover {
        border-bottom: 4px solid #30a2fe;
    }*/

    #mychart {
        width: 700px;
        height: 400px;
        float: left;
    }
    .chart-b{
        width: 100px;
        height: 318px;
        float: left;
        margin-top: 44px;
        position: relative;
    }
    .line-img{
        width: 100%;
        height: 14px;
        position: absolute;
        left:0;
        bottom:0;
        line-height: 14px;
    }
    .line-img img{
        width: 35px;
        height: 14px;
        float: left;
    }
    .line-img span{
        float:left;
        font-size: 14px;
        margin-left:6px;
    }
    .ProductorData {
        width: 100%;
        margin-top: 10px;
    }

    .ProductorData-tablelist {
        width: 100%;
    }

    .ProductorData-tablelist tr {
        width: 100%;
        height: 40px;
        line-height: 40px;
        font-size: 14px;
    }

    .ProductorData-tablelist tr th {
        color: #9ed3fd;
        text-align: left;
    }

    .ProductorData-tablelist tr th:first-child {
        width: 100px;
    }

    .ProductorData-tablelist tr th:nth-child(2) {
        width: 250px;
    }

    .ProductorData-tablelist tr th:nth-child(3) {
        width: 150px;
    }

    .ProductorData-tablelist tr th:nth-child(4) {
        width: 150px;
    }

    .ProductorData-tablelist tr th:nth-child(5) {
        width: 150px;
    }

    .ProductorData-tablelist tr th:last-child {
        width: 150px;
    }

    .ProductorData-tablelist tr td {
        color: #82898e;
        text-align: left;
    }

    .ProductorData-tablelist tr td:first-child {
        width: 100px;
    }

    .ProductorData-tablelist tr td:nth-child(2) {
        width: 250px;
    }

    .ProductorData-tablelist tr td:nth-child(3) {
        width: 150px;
    }

    .ProductorData-tablelist tr td:nth-child(4) {
        width: 150px;
    }

    .ProductorData-tablelist tr td:nth-child(5) {
        width: 150px;
    }

    .ProductorData-tablelist tr td:last-child {
        width: 150px;
    }

    #check {
        float: left;
        width: 14px;
        /*height: 100%;*/
    }

    #check .input_check {
        position: absolute;
        width: 12px;
        height: 12px;
        visibility: hidden;
        top: 0;
        left: 0;
    }

    #check span {
        position: relative;
    }

    #check .input_check + label {
        display: inline-block;
        width: 12px;
        height: 12px;
        box-sizing: border-box;
        border: 3px solid #36df6e;
        border-radius: 50%
    }

    #check .input_check:checked + label {
        border: 0;
        background: #36df6e
    }

    .wait-tablelist tr td:nth-child(5) {
        color: #ffc458;
    }
    .wait-tablelist tr td:last-child {
        position: relative;
    }
    .wait-tablelist tr td:last-child .delete{
        display: inline-block;
        width: 14px;
        height: 16px;
        background: url("/public/adminimg/delete.png") no-repeat center center/100% 100%;
        position: absolute;
        left: 40px;
        top:0;
        bottom:0;
        margin:auto 0;
    }
    #root{
        width: 330px;
        height: 34px;
        /* background: #00fff9;*/
        line-height: 30px;
        margin-top:30px;
    }
    .select-all{
        float: left;
        width: 14px;
        height: 100%;
        /*background: red;*/
        position: relative;
    }
    .select-all .checkbox{
        width: 14px;
        height: 14px;
        border-radius: 50%;
        box-sizing: border-box;
        border: 3px solid #36df6e;
        position:absolute;
        top:0;bottom:0;
        margin:auto 0;
        left:0;
    }
    .selectall{
        border: 0;
        background: #36df6e
    }
    #root span{
        font-size: 12px;
        color:#566168;
        float: left;
        margin-left:6px;
    }

    .system-header{
        width: 1012px;
        height: 40px;
        line-height: 40px;
        border-bottom:1px solid #30a2fe;
        margin-top:28px;
    }
    .system-header ul{
        width: 100%;
        height: 100%;
        padding-bottom: 2px;
        box-sizing: border-box;
    }
    .system-header ul li{
        /*width: 86px;*/
        height: 38px;
        float: left;
        font-size: 14px;
        color:#30a2fe;
        font-weight: bold;
        text-align: center;
        line-height: 38px;
        margin-right:38px;
    }
    /*.system-header ul li:hover{
        border-bottom: 2px solid #30a2fe;
    }*/
    .system-header ul li a{
        color:#30a2fe;
        display: block;
        width: 100%;
        height: 100%;
    }
    .system-content{
        margin-top:30px;
        width: 1012px;
        /*height: 370px;*/
        /*background: #ffb802;*/
    }
    .system-content .system-add{
        width: 110px;
        height:34px;
        background: #36de78;
        line-height: 32px;
        border:0;
        border-radius: 18px;
        color:#fff;
        font-size: 14px;
    }
    .table-list{
        width: 100%;
    }
    .table-list tr{
        width: 100%;
        height: 46px;
        line-height: 46px;
    }
    .table-list tr th{
        color:#9ed3fd;
        text-align: left;
    }
    .table-list tr td{
        text-align: left;
        color:#788186;
        font-size: 14px;
    }
    .table-list tr td:nth-child(6) input{
        width: 30px;
        height: 26px;
        border-radius: 18px;
        padding:0 6px;
        border:2px solid #ecf7ff;
        background: #f3faff;
        text-align: center;
        outline:none;
    }
    .table-list tr th:first-child{
        width: 140px;
        position: relative;
    }
    .table-list tr th:nth-child(2){
        width: 125px;
    }
    .table-list tr th:nth-child(3){
        width: 180px;
    }
    .table-list tr th:nth-child(4){
        width: 170px;
    }
    .table-list tr td:first-child{
        width: 140px;
        position: relative;
    }
    .table-list tr td:nth-child(2){
        width: 125px;
    }
    .table-list tr td:nth-child(3){
        width: 180px;
    }
    .table-list tr td:nth-child(4){
        width: 170px;
    }
    .table-list tr td:nth-child(5){
        width: 80px;
    }
    .table-list tr th:nth-child(5){
        width: 80px;
    }
    .table-list tr td:nth-child(6){
        width: 80px;
    }
    .table-list tr th:nth-child(6){
        width: 80px;
    }
    .table-list tr td:nth-child(7){
        width: 130px;
    }
    .table-list tr th:nth-child(7){
        width: 130px;
    }
    .table-list tr td:last-child{
        position: relative;
    }
    .table-list .delete{
        left:42px;
    }
    .system-box{
        width: 10px;
        height: 10px;
        border:1px solid #5ae588;
        float: left;
        position: absolute;
        top:0;
        bottom:0;
        margin:auto 0;
        left:0;
        box-sizing: border-box;
    }
    .banner-delete{
        width: 100px;
        height: 42px;
        float: left;
        margin-top:56px;
        position: relative;
    }
    .banner-delete span{
        color:#5ae588;
        float: left;
        margin-left:18px;
        margin-top:12px;
        font-size: 12px;
    }
    .money-box{
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border:2px solid #48adfe;
        box-sizing: border-box;
        float:left;
        margin-top:22px;
        margin-left:21px;
        position: relative;
    }
    .money-box1{
          background: url("/public/adminimg/dui.png") no-repeat center center;
    }
    .paihang{
        width: 100%;
        height: 513px;
    }
    .paihang table{
        width: 100%;
        /*height: 100%;*/
    }
    .paihang table tr th{
        height: 50px;
    }
    .paihang table tr td{
        height: 45px;
    }
    .paihang .money-list th{
        color:#b2b2b2
    }
    .paihang .money-list tr{
        border-bottom:1px solid #e5e5e5;box-sizing: border-box;
    }
    .paihang .money-list tr th:first-child{
        flex:0.4;
    }
    .paihang .money-list tr td:first-child{
        flex:0.4;
    }
    .paihang .money-list tr th:nth-child(2){
        flex:2;
    }
    .paihang .money-list tr td:nth-child(2){
        flex:2;
    }
    .paihang .money-list tr th:nth-child(3){
        flex:0.4;
    }
    .paihang .money-list tr td:nth-child(3){
        flex:0.4;
    }
    .paihang .money-list tr th:nth-child(4){
        flex:0.4;
    }
    .paihang .money-list tr td:nth-child(4){
        flex:0.4;
    }
    .paihang .money-list tr th:nth-child(5){
        flex:0.4;
    }
    .paihang .money-list tr td:nth-child(5){
        flex:0.4;
    }
    /*商家财务列表*/
    .admin-table .moneyproduct-list{
        width: 100%;
    }
    .admin-table .moneyproduct-list tr th{
        font-size: 14px;
        color:#9ed3fd;
        text-align: left;
        height: 32px;
        line-height: 32px;
    }
    .admin-table .moneyproduct-list tr td{
        font-size: 14px;
        text-align: left;
        height: 32px;
        line-height: 32px;
        color: #82898e;
    }
    .admin-table .moneyproduct-list tr th{
        width: 150px;
    }
    .admin-table .moneyproduct-list tr td{
        width: 150px;
    }
    .admin-table .moneyproduct-list tr th:nth-child(2){
        width: 234px;
    }
    .admin-table .moneyproduct-list tr td:nth-child(2){
        width: 234px;
    }
    .admin-table .moneyproduct-list tr th:nth-child(6){
        width: 88px;
    }
    .admin-table .moneyproduct-list tr td:nth-child(6){
        width: 88px;
    }
    .admin-table .moneyproduct-list tr th:nth-child(7){
        width: 88px;
    }
    .admin-table .moneyproduct-list tr td:nth-child(7){
        width: 88px;
    }
    .login-box{
        width: 441px;
        height: 332px;
        background: #fff;
        border-radius: 4px;
        position: relative;
        margin:0 auto;
        top:20%;
        overflow: hidden;
    }
    .login-logo{
        width: 100%;
        height: 82px;
        text-align: center;
        margin-top:17px;
    }
    .login-logo img{
        display: block;
        margin:0 auto;
    }
    .login-logo span{
        font-size: 14px;
        color: #4c545a;
    }
    .login-l{
        width: 100%;
        height: 80px;
        margin-top:20px;
    }
    .login-l ul{
        width: 100%;
        height: 100%;
    }
    .login-l ul li{
        width: 286px;
        height: 32px;
        border:2px solid #ebf6ff;
        box-sizing: border-box;
        border-radius: 16px;
        margin: 0 auto;
        background: #f3faff;
        position: relative;
        line-height: 32px;
    }
    .login-l ul li:last-child{
        margin-top:10px;
    }
    .login-l ul li img{
        display: block;
        width: 18px;
        height: 18px;
        position:absolute;
        left:10px;
        top:0;
        bottom:0;
        margin:auto 0;
    }
    .login-l ul li span{
        display: block;
        float: left;
        margin-left:40px;
        font-size: 14px;
        color: #516676;
    }
    .login-l ul li input{
        height: 100%;
        border:0;
        float: left;
        width: 200px;
        outline: none;
        padding-left:6px;
        background: #f3faff;
    }
    .forget{
        width: 286px;
        height: 32px;
        margin:0 auto;
    }
    .forget1{
        width: 128px;
        height: 100%;
        float: right;
        line-height: 32px;
    }
    .forget1 div{
        width: 12px;
        height: 12px;
        border:4px solid #37e06f;
        box-sizing: border-box;
        float: left;
        border-radius: 50%;
        margin-top:10px;
    }
    .forget1 span{
        float:left;
        margin-left:6px;
        font-size: 12px;
        color: #b4c2cc;
    }
    .forget1 a{
        float:left;
        margin-left:10px;
        font-size: 12px;
        color: #b4c2cc;
    }
    .submit{
        display: block;
        width: 208px;
        height: 33px;
        border:0;
        background: #36de76;
        text-align: center;
        line-height: 33px;
        color:#fff;
        margin:0 auto;
        border-radius:16px;
        outline: none;
    }
    .submit a{
        color:#fff;
    }
    input:-webkit-autofill{
        -webkit-box-shadow: 0 0 0px 1000px  #f3faff inset !important;
    }
    .login-2 ul li input{
        width: 230px;
        margin-left:30px;
        font-size: 14px;
        color:#9eabb5;
    }
    .getpwd{
        width: 290px;height: 34px;margin:0 auto;
        display: flex;
        justify-content: space-between;
        margin-top:33px;
    }
    .getpwd button{
        width: 139px;
        height: 32px;
        border-radius: 16px;
        border:0;
        color:#fff;
        line-height: 32px;
        text-align: center;
        outline: none;
    }
    .getpwd button a{
        color:#fff;
        display: block;
        width: 100%;
        height: 100%;
    }
    .getpwd button:first-child{
        background: #30bffe;
    }
    .getpwd button:last-child{
        background: #37e070;
    }
    .find-tip{
        width: 88px;
        height: 15px;
        margin:0 auto;
        text-align: center;
        line-height: 15px;
        font-size: 15px;
        color:#3eb8fe;
        position: relative;
    }
    .find-tip div{
        width: 8px;
        height: 4px;
        background: #34da87;
        border-radius: 2px;
        position: absolute;
        top:4px;

    }
    .find-tip1{
        left:0;
    }
    .find-tip2{
        right:0;
    }
    .mask{
        position: fixed;
        width: 100%;
        height: 100%;
        top:0;
        left:0;
        z-index: 999;
        display: none;
    }
    .re-mask{
        width: 446px;
        height: 307px;
        background: rgba(0,0,0,0.8);
        position: relative;
        margin: 0 auto;
        top:30%;
        overflow: hidden;
    }
    .maskactive{
        display: block;
    }
    .re-mask div{
        width: 133px;height: 55px;margin:0 auto;
        margin-top:130px;
        text-align: center;
        font-size: 16px;
        color:#fff;
    }
    .find-mask{
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        top:0;
        left:0;
        z-index: 999;
        display: none;
    }
    .money-mask.find-maskactive{
        display: block;
        z-index: 9999999999;
    }
    .coin-mask.find-maskactive{
        display: block;
        z-index: 9999999999;
    }
    .find-maskc{
        width: 667px;
        height: 531px;
        background: #fff;
        margin:0 auto;
        position: relative;
        top:5%;
        border-radius: 7px;
        overflow-y: auto;
    }
    .vipinfo{
        width: 100%;
        height: 605px;
    }
    .vipinfo-list{
        width: 533px;
        height: 100%;
        float: left;
    }
    .vipinfo-list table tr td{
        height: 46px;
        color: #a4adb5;
    }
    .vipinfo-list table tr td:first-child{
        width: 86px;
        text-align: right;
    }
    .vipinfo-list table tr td:last-child{
        width: 447px;
    }
    .vipinfo-list table tr td input[type='text']{
        width: 300px;
        height: 36px;
        border:2px solid #ebf6ff;
        background: #f3faff;
        padding: 0 20px;
        box-sizing: border-box;
        font-size: 14px;
        border-radius: 18px;
        outline: none;
        margin-left:10px;
        float: left;
    }
    .checkbox{
        width: 15px;
        height: 15px;
        float: left;
        border: 1px solid #ecf6ff;
        border-radius: 50%;
        margin-top:4px;
        margin-left:14px;
        pointer-events: none;
    }
    .vipinfo-list table tr td input[type='checkbox']{
        border:0;
        width: 15px;
        height: 15px;
        outline: none;
    }
    .vip-list tr td{
        flex:1;
    }
    .vip-list tr td:nth-child(3){
        flex:2;
    }
    .vip-list tr th{
        flex:1;
    }
    .vip-list tr th:nth-child(3){
        flex:2;
    }
    .vip-list tr td:last-child a{
        color:#ff0039;
    }
    .ppro tr td{
        height:40px;
    }
    .ppro tr td:first-child{
        width: 200px;
        text-align: right;
        font-size: 14px;
        color:#797979;
    }
    .ppro tr td:last-child{
        width: 615px;
        padding-left:20px;
        box-sizing:border-box;
        font-size: 14px;
        overflow: hidden;
    }
    .b-lisc{
        width: 570px;
        height: 395px;
        background: url("/public/adminimg/licence.png") no-repeat center center/100% 100%;
    }
    .Porderlist ul li{
        width: 120px;
    }
    .Porderlist ul li a{
        display: block;
        width: 100%;
        height: 100%;
        font-size: 14px;
        color:#30a2fe;
    }
    .producto{
        width: 100%;

    }
    .producto tr td{
        text-align: left;
        font-size: 14px;
        min-height: 40px;
    }
    .producto tr th{
        text-align: left;
        font-size: 14px;
        color:#30a2fe;
        height: 40px;
    }
    .producto tr th:first-child, .producto tr th:first-child{
        width: 96px;
    }
    .producto tr th:nth-child(2),.producto tr th:nth-child(2){
        width: 204px;
    }
    .producto tr th:nth-child(3),.producto tr th:nth-child(3){
        width: 60px;
    }
    .producto tr th:nth-child(4),.producto tr th:nth-child(4){
        width: 170px;
    }
    .producto tr th:nth-child(6),.producto tr th:nth-child(6){
        width: 182px;
    }
    .producto tr th:nth-child(7),.producto tr th:nth-child(7){
        width: 102px;
    }
    .producto tr th:nth-child(8),.producto tr th:nth-child(7){
        width: 108px;
    }
    .producto tr th:nth-child(9){
        position: relative;
    }
    .producto tr th:nth-child(9),.producto tr th:nth-child(9){
        width: 61px;
    }
    .b-number{
        float: left;
        font-size: 14px;
        color:#788186;
        margin-left:10px;
    }
    .producto span{
        color:#788186;
    }
    .b-number span:first-child{
        color:#babec1;
    }
    .p2 tr td:first-child{
        text-align: right;
    }
    .p2 tr td{
        color:#babec1;
    }
    .p2 tr td span{
        margin-left:4px;
    }
    .pinfoorder{
        width: 100%;
        margin-top:50px;
    }
    .list2 tr td{
        text-align: left;
        height: 60px;
        font-size: 14px;
    }
    .list2 tr th{
        text-align: left;
        color:#30a2fe;
        height: 36px;
        font-size: 14px;
    }
    .list2{
        border-bottom: 1px solid #eee;
    }
    .pinpai1{
        width: 57px;
        height: 57px;
        background: #d8eaf3;
        border-radius: 4px;
        float: left;
    }
    .pingjialist{
        width: 100%;
    }
    .pingjialist tr th{
        text-align: left;
        color:#30a2fe;
        font-size: 14px;
    }
    .pingjialist tr td{
        text-align: left;
        font-size: 14px;
    }
    .find-maskc p{
        line-height: 20px;
        font-size: 14px;
    }
    .wait-list tr th{
        text-align: left;
        font-size: 14px;
        color:#30a2fe;
    }
    .wait-list tr td{
        text-align: left;
        font-size: 14px;
        line-height: 14px;
    }
    .pmannagerl tr td{
        font-size: 14px;
    }
    .pmannagerl table{
        width: 100%;
    }
    .pmannagerl table tr td:nth-child(2){
        color:#000;
        padding-left:25px;
    }
    .pmannagerl .pmimg{
        width: 223px;
        height: 152px;
        background: #d6e6f2;
        float: left;
        margin-right:29px;
    }
    .pmannagerl .pmimg:last-child{
        margin:0;
    }
    .coupan tr th{
        line-height: 30px;
    }
    .coupan tr td{
        line-height: 30px;
    }
    .category-b .el-button.is-round{
        background: #eaf6ff;
        border:1px solid #d2ebff;
        box-sizing: border-box;
        color: #748a99;
    }
    .settle{
        width: 1300px;
        margin:0 auto;
    }
    .settle header{
        width: 100%;
        height: 81px;
        background: #1f262c;
    }
    .header-logo{
        width: 244px;
        height: 100%;
        position: relative;
    }
    .header-logo img{
        width: 63px;
        height: 53px;
        position: absolute;
        margin:auto 20px;
        top:0;
        bottom:0;
    }
    .header-logo span{
        color:#fff;
        line-height: 81px;
        float: left;
        margin-left:100px;
    }
    .settle-content{
        width: 100%;
        height: 540px;
        background: url("/public/adminimg/settle.png") no-repeat center center/100% 100%;
        position:relative;
    }
    .content2{
        width: 10px;
        height: 100%;
        float: left;
        position: relative;
    }
    .content3{
        width: 230px;
        height: 100%;
        float:left;
    }
    .content1{
        width: 240px;
        height: 250px;
        position: absolute;
        margin:auto 80px;
        top:0;
        bottom:0;
        font-size: 14px;
    }
    .cp1{
        margin-top:10px;
        color: #7c848b;
    }
    .cp1 p{
        line-height: 24px;
    }
    .circle{
        width: 6px;
        height: 6px;
        border-radius: 50%;
        border:1px solid #fff;
        background: #33a4fe;
        box-sizing: border-box;
        position: absolute;
        left:0;
    }
    .circle1{
        top:36px;
    }
    .circle2{
        top:94px;
    }
    .content3 .el-button.is-round{
        width: 115px;
        height: 33px;
        margin-top: 50px;
    }
    .settle-p{
        width: 100%;
        /* height: 200px;*/
        margin: 0 auto;
        margin-top: 79px;
    }
    .sp1{
        width: 104px;
        height: 109px;
        float:left;
    }
    .sp1 img{
        width: 73px;
        height: 73px;
        display:block;
        margin: 0 auto;
        border-radius: 50%;
    }
    .sp1{
        color:#fff;
        text-align: center;
    }
    .sp1 span{
        font-size: 14px;
        color:#30a3fe;
        margin-top:10px;
    }
    .jiantou{
        width: 26px;
        height: 13px;
        background: url("/public/adminimg/jiantou.png");
        float: left;
        margin:45px 80px 0 80px;
    }
    .settle-p ul{
        width: 100%;
        height: 60px;
        background: #eaf6ff;
        display: flex;
        border-radius: 4px;
    }
    .settle-p ul li{
        flex:1;
        line-height: 60px;
        font-size: 14px;
        color:#9aa9b5;
        text-align:center;
        border-radius: 4px;
    }
    .settle-p ul li a{
        color:#9aa9b5;
    }
    .settle-p ul li.active a{
        color:#fff;
    }
    .settle-p ul li.active{
        background: #30a3fe;
    }
    .ruzhuname1{
        font-size: 15px;
        color: #516676;
    }
    .ruzhuname2{
        font-size: 14px;
        color: #7f8c97;
        padding-left:16px;
        box-sizing: border-box;
    }
    .ruzhuname2 p{
        line-height: 30px;
    }
    #index1{
        width: 100%;
        overflow:hidden ;
    }
    #index1 header{
        width:1012px;
        height: 139px;
        margin-top:30px;
        display: flex;
        justify-content: space-between;
    }

    .index1-logo{
        height: 100%;
        width: 250px;
        text-align: center;
        padding-top:20px;
        box-sizing: border-box;
    }
    .index1-logo h1{
        font-size: 14px;
        color:#94979a;
    }
    .index2-content{
        width: 100%;
        overflow: hidden;
    }
    .index2-content1{
        width: 1008px;
        margin:0 auto;
    }
    .index2{
        width: 100%;
        /*height: 2799px;*/
    }
    .index2-list{
        width: 1031px;
        height: 100%;
        /*float:right;*/
        /*margin-right:58px;*/
        margin:0 auto;
    }
    .index-change{
        display: block;
        width: 21px;
        height: 21px;
        border-radius: 50%;
        background: #f2f4f5;
        border:1px solid #e3e6e6;
        box-sizing: border-box;
        float:left;
    }

    .index-change.sp{
        background: #37e06f;
        border:0;
        color:#fff;
        line-height: 21px;
        text-align: center;
    }
    .index2-change span{
        float: left;
        font-size: 14px;
    }
    .index2-change{
        width: 100%;
        height: 30px;
        border-bottom: #eee;
    }
    .index2-tip{
        width: 100%;
        height:39px;
        border-top:1px solid #eee;
        border-bottom:1px solid #eee;
    }
    .index2-tip p{
        font-size: 14px;
        line-height: 39px;
        color:#ff7149;
    }
    .index2-shui{
        width: 100%;
        margin-top: 40px;
    }
    .el-input__inner{
        width: 279px;
    }
    .el-input .el-input__inner{
        border-radius: 20px;
    }
    .el-form-item__content{
        margin-left:175px !important;
    }
    .el-form-item__label{
        width:168px !important;

    }
    .el-form-item{
        line-height: 40px !important;
    }
    .el-upload--picture-card{
        width: 273px;
        height: 162px;
        background: #f3faff;
        float:left;
        margin-right:50px;
    }
    .index2-shui img{
        display: block;
        width: 273px;
        height: 162px;
        float:left;
        /*  margin-left:50px;*/
    }
    .file{
        width: 100%;
        height:100%;
        background: #f3faff;
        opacity: 0;
    }

    .index2-shui form:nth-child(3),.index2-shui form:nth-child(4),.index2-shui form:nth-child(5),.index2-shui form:nth-child(6),.index2-shui form:nth-child(7){
        margin-top:30px;
        padding-top: 30px;
        border-top:1px solid #eee;
    }
    .index4{
        width: 560px;
        height: 250px;
        /*background: red;*/
        margin:0 auto;
        margin-top:50px;
    }
    .index4 img{
        display: block;
        margin:0 auto;
    }
    .index4 h1{
        font-size: 32px;
        text-align: center;
        color:#30a3fe;
    }
    .timer{
        float:left;
        margin-left:10px;
    }
    .timer .el-input--suffix .el-input__inner{
        width:200px !important;
    }
    .wait-list span{
        line-height: 30px;
        font-size: 14px;
    }
    .esave{
        width: 80px;
        height: 32px;
        background: #ff7149;
        border-radius: 18px;
        border:0;
        margin-top:20px;
        color:#fff;
    }
    .vipr tr th:nth-child(4){
        width: 320px;
    }
    .vipr tr td:nth-child(4){
        width: 320px;
    }
    .levelbox{
        width: 4px;
        height: 12px;
    }
    .vipruler form span{
        font-size: 14px;
        color: #7f8c97;
    }
    .specialbox{
        width: 13px;
        height: 13px;
        border:2px solid #37e06f;
        box-sizing: border-box;
        background: #fff;
        /*float: left;*/
        display: inline-block;
        margin-top:13px;
        margin-right:6px;
        position: relative;
    }
    .specialactive{
        width: 7px;
        height: 7px;
        position: absolute;
        top:1px;
        left:1px;
        background: #37e06f;
    }
    .recharge{
        display: flex;
    }
    .recharge1 , .recharge2{
        flex:1;
    }
    .rechargetable{
        margin-bottom: 20px;
    }
    .rechargetable tr td{
        height: 40px;
        font-size: 14px;
        color: gray;
    }
    .systemmask{
        width: 100%;height: 100%;background: rgba(0,0,0,0.6);position:fixed;top:0;left:0; z-index: 9999;
        overflow: hidden;
    }
    .systembb{
        width: 800px;background: #fff;z-index: 100000;
        position: absolute;left:0;right:0;margin:0 auto;top:80px;
        margin-bottom:80px;padding-bottom: 40px;
    }
    .systembb1{
        width: 100%;
        padding:0 80px;
        margin-top:40px;
    }
    .systembb1 tr td{
        text-align: center;
    }
    .systembb1 tr td:first-child{
        width: 80px;
    }
    .systembb1 tr td:last-child{
        width: 556px;
    }
    .systembb1 tr td span{
        font-size: 14px;
        color:gray;
    }
    .systembb1 tr td input{
        width: 556px;
        height: 32px;
        background: #eaf6ff;
        border:1px solid skyblue;
        box-sizing: border-box;
    }
    .systembb1 tr td .w-e-text-container{
        height: 800px !important;
    }
    .w-e-toolbar{
        flex-wrap: wrap;
    }
    .maskactive{
        display: none;
    }
    #platdata .ptongji li{
        box-shadow: 2px 2px 5px rgba(51,51,51,0.3);
    }
    .ptongji .tongji-number div:first-child span{
        color:#30a3fe;
    }
    .ptongji .tongji-number div:last-child span{
        color:#003313;
        font-size: 14px;
    }
    .ppaihang .money-list tr{
        border:0;
    }
    .ppaihang .money-list tr th{
        color:#9ed3fd;
    }
    .ppaihang .money-list tr th:nth-child(2){
        flex:0.4;
    }
    .ppaihang .money-list tr td:nth-child(2){
        flex:0.4;
    }
    .ppaihang .money-list tr th:nth-child(3){
        flex:2;
    }
    .ppaihang .money-list tr td:nth-child(3){
        flex:2;
    }
    .ppaihang .money-list tr th:last-child{
        flex:0.4;
    }
    .ppaihang .money-list tr td:last-child{
        flex:0.4;
    }
    .ppaihang{
        height: auto;
    }
    .pcontentp .el-pager{
        margin-top:11px;
        float: left;
    }
    .pcontent-circle{
        position: relative;
    }
    .pcontent-circle img{
        width: 100%;
        height: 100%;
        border-radius: 0;
        display: block;
        position: absolute;
        top:0;
        left:0;
    }
    .sPorderlist{
        border-bottom:1px solid #eee;
        margin-top:10px;
    }
    .sPorderlist ul{
        display: flex;
        justify-content: left;
        height: 100%;
    }
    .sPorderlist ul li{
        height: 100%;
        line-height: 60px;
        margin-right:10px;
        padding:0 10px;
        cursor: pointer;
    }
    .sPorderlist ul li:hover{
        background: #30a3fe;
    }
    .sPorderlist ul li:hover > a{
        color:#fff;
    }
    .sPorderlist ul li a{
        color:#30a3fe;
        font-size: 14px;
    }
    .b-number span{
        line-height: 14px;
    }
    .b-number p{
        line-height: 20px;font-size: 14px;
    }
    .repair tr{
        display: flex;
    }
    .repair tr th:first-child, .repair tr td:first-child{
        flex:0.3;
    }
    .repair tr th:nth-child(2), .repair tr td:nth-child(2),.repair tr th:nth-child(4), .repair tr td:nth-child(4){
        flex:0.3;
    }
    .repair tr th:nth-child(3), .repair tr td:nth-child(3){
        flex:0.2;
    }
    .repair tr th:nth-child(5), .repair tr td:nth-child(5){
        flex:0.5;
    }
    .repair tr th:nth-child(6), .repair tr td:nth-child(6){
        flex:0.8;
    }
    .repair tr th:nth-child(7), .repair tr td:nth-child(7), .repair tr th:nth-child(8), .repair tr td:nth-child(8), .repair tr th:nth-child(9), .repair tr td:nth-child(9), .repair tr th:nth-child(10), .repair tr td:nth-child(10){
        flex:0.3;
    }
    .jine span:nth-of-type(odd){
        color: gray;
    }
    .jine span:nth-of-type(even){
        color: #000;
    }
    .fightorder{
        width: 100%;
    }
    .fightorder tr{
        display: flex;
    }
    .fightorder tr th{
        height: 30px;
        line-height: 30px;
    }
    .fightorder tr th:first-child,.fightorder tr td:first-child,.fightorder tr th:nth-child(2),.fightorder tr td:nth-child(2){
        flex:0.4;
    }
    .fightorder tr th:nth-child(3),.fightorder tr td:nth-child(3){
        flex:0.3;
    }
    .fightorder tr th:nth-child(4),.fightorder tr td:nth-child(4),.fightorder tr th:nth-child(5),.fightorder tr td:nth-child(5),.fightorder tr th:nth-child(6),.fightorder tr td:nth-child(6){
        flex:0.6;
    }
    .fightorder tr th:nth-child(7),.fightorder tr td:nth-child(7),.fightorder tr th:nth-child(9),.fightorder tr td:nth-child(9),.fightorder tr th:nth-child(8),.fightorder tr td:nth-child(8),.fightorder tr th:nth-child(10),.fightorder tr td:nth-child(10){
        flex:0.3;
    }
    .scheck-list tr{
        display: flex;
    }
    .scheck-list tr td:first-child{
        text-align:right;
        flex: 0.5;
        color: gray;
    }
    .scheck-list tr td:last-child{
        flex: 1.5;
        padding-left:10px;
    }
    .scheck-btn{
        width: 100px;
        height: 30px;
        border-radius: 20px;
        border:0;
        line-height: 30px;
        color:#fff;
        text-align: center;
    }
    .scheck-btn1{
        background: #30a3fe;
    }
    .scheck-btn2{
        background: #26ff00;
    }
    .scheck-btn3{
        background: #ffb802;
    }
    .aside-list li.active {
        border-left: 6px solid #37df72;
        background: #323f49;
        box-sizing: border-box;
    }
    .header ul li.active {
        background: #3CACFE;
        color: #fff;
    }
    .header ul li a{
        width: 100%;
        height: 100%;
        display: block;
    }
    .header ul li.active a {
        color: #fff;
    }
    .add{
        width: 100%;
        height: 400px;
        margin-top:50px;
        border-radius: 6px;
    }
    .add form{
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }
    .add form>div{
        height: 50px;
        line-height: 50px;
    }
    .add form>div span{
        font-size: 20px;
        color:#333;
    }
    .add form>div label{
        font-size: 14px;
    }
    .add form>div input{
        height: 30px;
        background: rgba(0,213,223,0.2);
        border-radius: 10px;
        border:none;
        outline: none;
        width: 200px;
        padding:0 10px;
        box-sizing: border-box;
    }
    .add form input[type="submit"]{
        width:200px;
        height: 36px;
        border-radius: 18px;
        border:none;
        outline: none;
        text-align: center;
        line-height: 30px;
        background:deepskyblue;
        display:block;
        /*margin-left:150px;*/
        margin-top:50px;
        color:#fff;
        float: left;
        cursor:pointer;
    }
    .wreview-check{
        height: 40px;
        width: 100%;
        line-height: 40px;
        font-size: 14px;
    }
    .wreview-check textarea{
        width: 900px;
        height: 400px;
    }
    .admincount span{
        font-size: 14px;
    }
    .admin-table table tr:hover{
        background: rgba(0, 0, 0, 0.02);
    }
    .system-content table tr:hover{
        background: rgba(0, 0, 0, 0.02);
    }
    .ShopMannager-table table tr:hover{
        background: rgba(0, 0, 0, 0.02);
    }
    .wait-list table tr:hover{
        background: rgba(0, 0, 0, 0.02);
    }

    .table-list1{
        margin-top:40px;
    }
    .table-list1 tr th{font-size: 14px;}
    .admin-tablelist1{
        padding:0;
    }
    .awreview{
        width: 400px;
        height: 30px;
        /*border: 1px solid #797979;*/
        /*text-align:center;*/
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        cursor:pointer;
        padding:0 10px;
    }
    /*.awreview:hover{
        border: 1px solid #41b2fc;
        background: rgba(65,178,252,0.2);
    }*/
    .shop_btn{
        border:none;
        width: 40px;
        height: 40px;
        border-radius:50%;
        background: url("/public/adminimg/search.png") no-repeat center center/60% 60%;
        position:relative;
    }

    .content {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding-top: 8px;
    }

    .content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .content .shuaixuan {
        height: 46px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
    }

    .content .item {
        width: 100%;
        margin-top: 10px;
    }

    .content .red {
        height: 35px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0px 8px #FD5E4E;
    }

    .content .green {
        height: 35px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
        margin-right: 20px;
    }
    .content {
        padding-top: 27px!important;
    }
    .el-input__inner{
        font-size: 14px !important;
    }
    .demo-input{
        display: block;
        width: 100%;
        height: 100%;
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
    .pagination li.first a{
        color: #51b7fc;
    }
    .pagination li.last a{
        color: #fff;
    }
    .pagination li a {
        color: #000;
        font-weight: bold;
    }

    .pagination li.active a {
        color: #409EFF;
        cursor: default;
    }
    .apagination{font-size: 12px; position: absolute; bottom: 0; right: 0; display: flex; justify-content: space-between;}
    .paginationbox{width: 100%; position: relative;height: 50px;}
    button{outline: none!important;}
    .jianju{margin:0 5px;}
</style>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <title>晋彤管理员管理系统</title>
        <?= Yii::$service->page->widget->render('head', $this); ?>
        <?= Yii::$service->page->widget->render('beforeContent', $this); ?>
        <?php $this->beginBody() ?>

        <meta charset="UTF-8">
    </head>
    <body>
    <div class="">
        <div class="aside"></div>
        <div class="header">
            <div style="width:1012px;margin:0 auto;    display: flex;">
            <ul>
                <li id="index">
                    <a href="/admin/index/aindex">
                        用户管理
                    </a>
                </li>
                <li id="shuju">
                    <a href="/admin/shuju/index">
                        数据中心
                    </a>
                </li>
                <li id="shop">
                    <a href="/admin/shop/classlist">
                        店铺管理
                    </a>
                </li>
                <li id="review">
                    <a href="/admin/review/index">
                        审核管理
                    </a>
                </li>
                <li id="system">
                    <a href="/admin/system/index">
                        系统管理
                    </a>
                </li>
                <li id="money">
                    <a href="/admin/money/index">
                        财务管理
                    </a>
                </li>
            </ul>
            <div class="header-right" style="width: 416px;float: right;">
                <div class="adminname">
                    <div class="admin-img"></div>
                    <span class="name1"><?=$_SESSION['message_name']?></span>
                </div>
                <div class="adminname">
                    <div class="clearimg"></div>
                    <span class="name2">清除缓存</span>
                </div>
                <div class="adminname">
                    <a href="/admin/login/out" title="退出页面">
                        <div class="out"></div>
                        <span class="name3">退出</span>
                    </a>
                </div>
            </div>
            </div>
        </div>
        <?php $this->endBody() ?>
        <div class="right">
            <?= $content ?>
        </div>
    </div>
    </body>
    <script>


        $(function(){
            // 筛选顶部菜单
            var url = location.href.split("/");

            document.querySelector("#" + url[4]).classList.add("active");

            // 筛选左侧菜单

            let asd=document.querySelectorAll(".aside-list li");

            // let str1=url[5];
            // let arr1=str1.split("?");

            let arr1="<?php echo $_SESSION['pagess'];?>";


            for (let i=0; i <asd.length ;i++) {
                let url12=asd[i].getAttribute('href1');

                // let n = url12.search('/'+arr1[0]);
                let n = url12.search('/'+arr1);

                if (n>=1) {
                    asd[i].className='active';
                };
            };

            let urls = "<?php echo $_SERVER['SERVER_NAME'];?>";

        })
    </script>
    </html>
<?php $this->endPage() ?>