<style>
    .table-list1{
       width: 100%;
    }
    .table-list1 tr{
        width: 100%;
        height: 46px;
        line-height: 46px;
    }
    .table-list1 tr th{
        color:#9ed3fd;
        text-align: left;
    }
    .table-list1 tr td{
        text-align: left;
        color:#788186;
        font-size: 14px;
    }
    .delete1{
        display: inline-block;
        width: 14px;
        height: 16px;
        background: url(/public/adminimg/delete.png) no-repeat center center/100% 100%;
        margin: auto 0;
    }
    .table-list1 tr td{
       text-align: left;
       color:#788186;
       font-size: 14px;
    }
    .table-list1 tr td input{
        width:50px;
        height:30px;
        text-align: center;
        outline: 0px;
    }
</style>

<div class="main-content">
    <div class="adminmannager">
        <div class="adminmannager-title">
            <span>系统设置</span>&nbsp;
            <span>·&nbsp;平台信息</span>
        </div>
        <!--选项卡头部-->
        <div class="system-header">
            <ul>
                <li>
                    <a href="">Banner管理</a>
                </li>
                <li>
                    <a href="">客户自动回复</a>
                </li>
                <li>
                    <a href="">咨询列表</a>
                </li>
            </ul>
        </div>
        <!--选项卡内容-->
        <div class="system-content">
            <a href="/admin/system/banneradd" title="添加banner图" class="system-add" style="display:block;text-align:center;">添加</a>
            <table border="0" class="table-list1">
                <tr>
                    <th>
                        <div class="system-box"></div>
                        <span style="margin-left:18px">编号</span>
                    </th>
                    <th>Banner名称</th>
                    <th>跳转地址</th>
                    <th>Banner图片</th>
                    <th>操作时间</th>
                    <th>位置</th>
                    <th style=" padding-left:7px;">排序</th>
                    <th>点击次数</th>
                    <th>操作</th>
                </tr>
                <?php 
                    foreach($data as $key=>$value){
                 ?>
                <tr>
                    <td>
                    <span>
                        <div class="system-box"></div>
                        <span style="margin-left:18px"><?=$value['id']?></span>
                    </span>
                    </td>
                    <td><?=$value['title']?></td>
                    <td><?=$value['url']?></td>
                    <td><img style="width:90px;margin:5px;" src="http://img.uekuek.com/media/<?=$value[img]?>" alt=""></td>
                    <td><?php echo date("Y-m-d H:i:s",$value['create_time'])?></td>
                    <td>
                        <?php 
                            if ($value['type'] == 1) {
                                echo "首页";
                            }else{
                                echo "其他";
                            }
                        ?>
                    </td>
                    <td>
                        <input type="text" onchange="sort(this,'<?=$value[id]?>')" value="<?=$value['sort']?>">
                    </td>
                    <td>
                        <span><?=$value['num']?></span>
                    </td>
 
                    <td>
                        <a href="<?= Yii::$service->url->getUrl('admin/system/bannerfind', array('id' => $value['id'])) ?>" style="color: #2dacff">编辑</a>
                        <label>|</label>
                        <a href="<?= Yii::$service->url->getUrl('admin/system/bannerdel', array('id' => $value['id'])) ?>" class="delete1"></a>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </table>

            <div class="adminpagination" style="width: 98%">
                <div class="banner-delete">
                    <div class="system-box"></div>
                    <span>删除</span>
                    <span style="color:#ff5932">确定</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function sort(obj,id){

        // 获取数据的
        let val=$(obj).val();

        // 发送ajax请求
        $.get("<?= Yii::$service->url->getUrl('admin/system/bannersort')?>",{id:id,sort:val},function(){
            location.reload();
        });
    }
</script>