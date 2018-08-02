<style>
    .add{
        width: 120px;
        height: 32px;
        border:0;
        float: right;
        margin-top:1px;
        background: #36DD7A;
        border-radius: 18px;
        text-align: center;
        line-height: 32px;
        color: #fff;
    }
</style>
<div class="main-content">
    <div class="adminmannager">
        <div class="adminmannager-title">
            <span>系统设置</span>&nbsp;
            <span>·&nbsp;VIP规则</span>
        </div>
        <div class="system-content">
            <div class="admin-tablename" style="height: 40px;line-height: 40px;">
                <div class="admin-tablenamebox" style="margin-top:18px;"></div>
                <span class="admin-tablename2" style="margin-left:6px;font-size: 14px;">特权列表</span>
                <a href="<?= Yii::$service->url->geturl('admin/system/addruler')?>">
                    <button class="add">添加</button>
                </a>
            </div>
            <table border="0" class="table-list vipr">
                <tr>
                    <th>
                        <div class="system-box"></div>
                        <span style="margin-left:18px">编号</span>
                    </th>
                    <th>特权图标</th>
                    <th>特权名称</th>
                    <th>特权介绍</th>
                    <th>操作</th>
                </tr>
                <?php foreach ($ruler as $v){?>
                <tr>
                    <td>
                        <span><div class="system-box"></div>
                        <span style="margin-left:18px"><?= $v['id']?></span>
                    </span>
                    </td>
                    <td><img src="http://img.uekuek.com/images/<?= $v[img] ?>"/></td>
                    <td><?= $v['name']?></td>
                    <td><span><?= $v["info"]?></span></td>
                    <td>
                        <a href="<?= Yii::$service->url->geturl('admin/system/editruler',array('id'=>$v[id]))?>" style="color: #2dacff">编辑</a>
                        <label>|</label>&nbsp;
                        <a href="javascript:0" class="delete" onclick="del(<?=$v[id]?>)"></a>
                    </td>
                </tr>
                <?php }?>
            </table>
            <!--分页-->
            <!--<div class="adminpagination" style="width: 98%">
                <div class="banner-delete">
                    <div class="system-box"></div>
                    <span>删除</span>
                    <span style="color:#ff5932">确定</span>
                </div>
                <div class="pagination">
                    <div class="block">
                        <div class="admincount">
                            <div class="admincountall">
                                <span style="color: #3db0ff">·</span>&nbsp;<span>总计</span><span>206</span><span>记录</span>
                            </div>
                            <div class="admintotalpage">
                                <span style="color: #29c99a">·</span>&nbsp;<span>分</span><span style="color: #29c99a">82</span><span>页</span>
                            </div>
                        </div>
                        <div>
                            <button class="firstpage-box">首页</button>
                            <el-pagination
                                    layout="prev, pager, next"
                                    :total="50">
                            </el-pagination>
                            <button class="lastpage-box">末页</button>
                        </div>
                    </div>

                </div>
            </div>-->
        </div>
        <!--会员-->
        <form method="get" action="<?= Yii::$service->url->geturl('admin/system/addmember')?>">
        <?php foreach ($member as $m){?>
            <div class="vipruler" style="margin-bottom: 50px;">
                <div class="admin-tablename" style="height: 40px;line-height: 40px;">
                    <div class="admin-tablenamebox levelbox" style="margin-top:14px;"></div>
                    <span class="admin-tablename2" style="margin-left:6px;font-size: 14px;">
                        <span style="color:#30a3fe"><?= $m['name']?></span><span>会员</span>
                    </span>
                </div>
                <div style="height: 41px;line-height: 41px;">
                    <span>要求：</span>
                    <span style="margin-left:6px;">累计充值</span>
                    <input type="text" value="<?= $m['recharge']?>" style="text-align:center;color:red;width: 66px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px; box-sizing: border-box" name="<?= $m[id]?>[money]">
                    <span>元</span>
                </div>
                <div style="height: 41px;line-height: 41px;">
                    <span style="float: left">特权：</span>
                    <div style="height: 100%;line-height: 40px;float: left;margin-left:10px;">
                        <?php 
                            foreach ($ruler as $key => $value) {
                                $a = '';
                                for ($i=1; $i <=count($m[rule][pid]) ; $i++) { 
                                    if($i == $value['id']){
                                        $a = checked;
                                    }
                                }
                                echo "<input type='checkbox' name='$m[id][pid][$value[id]]' value='$value[id]' $a>";
                                echo "<span>$value[name]</span>";
                                if($value['type']==2){
                                    echo "<input type='text' name='$m[id][value][$value[id]]' value='".$m[rule][value][$value[id]]."' style='margin-left:10px;text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px; box-sizing: border-box'>";
                                }
                                echo "<div style='margin-left:10px;width: 13px;height: 13px;display: inline-block;margin-top: 13px;margin-right: 6px;position: relative;'></div>";
                            }
                         ?>
                    </div>
                </div>

            </div>
        <?php }?>
        <button style="width: 120px;height: 32px;border:0;float: left;margin-top:1px;margin-left:40px; background: #fc5e4a;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;margin-bottom: 50px;" type="submit">确定
        </button>
        </form>
    </div>

</div>
<script>
    function del(id){
        var id = id;
        $.get('<?= Yii::$service->url->geturl('admin/system/delruler')?>',{id:id},function(data){
            if(data==1){
                alert('删除成功');
                location.reload();
            }
        })
    }
</script>


</div>
<style>
    .vipruler_btn{width: 120px;height: 32px;border:0;float: left;margin-top:1px;
        background: #fc5e4a;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;margin-bottom: 50px;}
</style>

