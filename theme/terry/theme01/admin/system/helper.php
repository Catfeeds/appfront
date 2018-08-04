<style>

    .main-content .green {
        width: 112px;
        height: 33px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
        padding-top: 10px;
    }

    .main-content .red {
        width: 112px;
        height: 33px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0 8px #FD5E4E;
        padding-top: 10px;
    }
    input.el-input__inner {
        width:50px;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }
</style>
<div class="main-content">
    <div class="adminmannager">
        <div class="adminmannager-title">
            <span>系统设置</span>&nbsp;
            <span>·&nbsp;帮助</span>
        </div>
        <div class="system-content">
            <div class="admin-tablename" style="height: 40px;line-height: 40px;">
                <a href="<?= Yii::$service->url->geturl('admin/system/addhelper') ?>">
                    <button type="button" class="el-button green el-button--success is-round">
                        <span> 添加 </span>
                    </button>
                </a>
            </div>
            <div class="el-tabs__content">
                <div role="tabpanel" id="pane-first" aria-labelledby="tab-first" class="el-tab-pane">
                    <div class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 1012px;">
                                <colgroup>
                                    <col name="el-table_2_column_7" width="60"/>
                                    <col name="el-table_2_column_8" width="150"/>
                                    <col name="el-table_2_column_9" width="300"/>
                                    <col name="el-table_2_column_10" width="200"/>
                                    <col name="el-table_2_column_11" width="122"/>
<!--                                    <col name="el-table_2_column_12" width="110"/>-->
                                    <col name="el-table_2_column_13" width="180"/>
                                    <col name="gutter" width="0"/>
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1"
                                        class="el-table_2_column_7   el-table-column--selection  is-leaf">
                                        <div class="cell">
                                            <label role="checkbox" class="el-checkbox">
                                    <span class="el-checkbox__input">
                                        <span class="el-checkbox__inner"></span>
                                        <input type="checkbox" class="el-checkbox__original" value=""/>
                                    </span>
                                            </label>
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_8     is-leaf">
                                        <div class="cell">
                                            编号
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_9     is-leaf">
                                        <div class="cell">
                                            标题
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_10     is-leaf">
                                        <div class="cell">
                                            上传时间
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_11     is-leaf">
                                        <div class="cell">
                                            排序
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_13     is-leaf">
                                        <div class="cell">
                                            操作
                                        </div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width: 1012px;">
                                <colgroup>
                                    <col name="el-table_2_column_7" width="60"/>
                                    <col name="el-table_2_column_8" width="150"/>
                                    <col name="el-table_2_column_9" width="300"/>
                                    <col name="el-table_2_column_10" width="200"/>
                                    <col name="el-table_2_column_11" width="122"/>
<!--                                    <col name="el-table_2_column_12" width="110"/>-->
                                    <col name="el-table_2_column_13" width="180"/>
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e">
                                <?php foreach ($help as $v) {?>

                                <tr class="el-table__row">
                                    <td class="el-table_2_column_7  el-table-column--selection">
                                        <div class="cell el-tooltip">
                                            <label role="checkbox" class="el-checkbox">
                                            <span class="el-checkbox__input">
                                        <span class="el-checkbox__inner"></span>
                                        <input type="checkbox" class="el-checkbox__original" value=""/>
                                    </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_8">
                                        <div class="cell el-tooltip" title="">
                                            <?= $v['id'] ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_9">
                                        <div class="cell el-tooltip">
                                            <?= $v['title']?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_10">
                                        <div class="cell el-tooltip">
                                            <?php echo date("Y-m-d H:i:s",$v['created_at'])?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_11">
                                        <div class="cell el-tooltip">
                                            <input type="text" onchange="sort(this,'<?=$v[id]?>')" value="<?=$v['sort']?>" class="el-input__inner">
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_13">
                                        <div class="cell el-tooltip">
                                            <button data-v-6045fa9c="" type="button"
                                                    class="el-button el-button--text el-button--small">
                                                <a href="<?= Yii::$service->url->geturl('admin/system/edithelper', array('id' => $v[id])) ?>"
                                                   style="color: #2dacff">编辑</a>
                                            </button>
                                            <span data-v-6045fa9c="" style="color: rgb(234, 235, 236);">|</span>
                                            <button data-v-6045fa9c="" type="button"
                                                    class="el-button el-button--text el-button--small">
                                                <a href="javascript:0" onclick="del(<?= $v[id] ?>)">
                                                    <i class="el-icon-delete" style="color: #ff5932"></i>
                                                </a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div style="margin-top: 40px;">
                <button type="button" class="el-button el-button--default">
                    <span>全选</span></button>
                <button type="button" class="el-button red el-button--danger is-round">
                    <span>批量删除</span></button>
            </div>
        </div>
    </div>
</div>
<script>
    function sort(obj,id){

        // 获取数据的
        let val=$(obj).val();

        // 发送ajax请求
        $.get("<?= Yii::$service->url->getUrl('admin/system/acticlesort')?>",{id:id,sort:val},function(){
            location.reload();
        });
    }
    function del(id) {
        var id = id;
        $.get('<?= Yii::$service->url->geturl('admin/system/delhelper')?>', {id: id}, function (data) {
            if (data == 1) {
                alert('删除成功');
                location.reload();
            }
        })
    }
</script>




