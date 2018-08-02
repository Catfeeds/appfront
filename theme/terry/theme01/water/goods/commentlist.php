<?php
    use yii\widgets\LinkPager;
    use yii\helpers\Html;
    use yii\helpers\Url;
?>
<div class="main-content">
   <div style="width: 1012px; margin: 0px auto;">
    <div >
     <div class="content">
      <div class="biaoti">
       <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb" style="display: inline-block; line-height: 52px;">
        <span class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner is-link">商品管理</span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
        <span class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span style="color: rgb(48, 211, 102); font-weight: bolder;">用户评价</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
       </div>
      </div>
      <div class="shuaixuan">
        <form action="<?php echo  Yii::$app->request->getHostInfo().Yii::$app->request->url;?>" method="get">
       <ul style="width: 400px; display: flex; justify-content: space-between;">
        <li>
            <select name="class" id="" class="el-select xiala" style="">
               <option value="0" >全部分类</option>
                <?php
                    foreach ($class as $key => $value) {
                        echo "<option disabled>".$value['name']['name_zh']."</option>";
                        foreach ($value['zi'] as $k => $v) {
                            if ($_GET['class'] == $v[_id] ) {
                                echo "<option selected value='$v[_id]'>".$value['name']['name_zh'].'/'.$v['name']['name_zh']."</option>";
                            }else{
                                echo "<option value='$v[_id]'>".$value['name']['name_zh'].'/'.$v['name']['name_zh']."</option>";
                            }
                        }
                    }
                ?>
            </select>
        <li>
          <div class="el-input" style="width: 200px;">
            <input type="text" name="name" value="<?=$_GET['name']?>" placeholder="请输入关键词搜索" class="el-input__inner" />
          </div>
        </li>
        <li>
          <!-- <div class="sousuo"></div> -->
          <button class="sousuo" style="border:0px;"></button>
        </li>
      </ul>
      </form>
      </div>
      <div class="item">
       <div class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition" style="width: 100%;">
        <div class="hidden-columns">
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
        </div>
        <div class="el-table__header-wrapper">
         <table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 1012px;">
          <colgroup>
           <col name="el-table_3_column_15" width="52"/>
           <col name="el-table_3_column_16" width="100"/>
           <col name="el-table_3_column_17" width="100"/>
           <col name="el-table_3_column_18" width="100" />
           <col name="el-table_3_column_19" width="110" />
           <col name="el-table_3_column_20" width="100" />
           <col name="el-table_3_column_21" width="150" />
           <col name="el-table_3_column_22" width="150" />
           <col name="el-table_3_column_23" width="150" />
           <col name="gutter" width="0" />
          </colgroup>
          <thead class="has-gutter">
           <tr style="font-size: 14px;color: #B1DBFE;">
            <th colspan="1" rowspan="1" class="el-table_3_column_15   el-table-column--selection  is-leaf">
             <div class="cell">
              <label role="checkbox" class="el-checkbox"><span  class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox"  class="el-checkbox__original" value="" /></span>
     </label>
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_16     is-leaf">
             <div class="cell">
              编号
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_17     is-leaf">
             <div class="cell">
              用户名
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_18     is-leaf">
             <div class="cell">
              商品货号
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_19     is-leaf">
             <div class="cell">
              商品名
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_20     is-leaf">
             <div class="cell">
              评价标题
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_21     is-leaf">
             <div class="cell">
              评论内容
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_22     is-leaf">
             <div class="cell">
              创建时间
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_3_column_23     is-leaf">
             <div class="cell">
              评价状态
             </div></th>

            <th class="gutter" style="width: 0px; display: none;"></th>
           </tr>
          </thead>
         </table>
        </div>
        <div class="el-table__body-wrapper is-scrolling-none">
         <table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 1012px;">
          <colgroup>
           <col name="el-table_3_column_15" width="52"/>
           <col name="el-table_3_column_16" width="100"/>
           <col name="el-table_3_column_17" width="100"/>
           <col name="el-table_3_column_18" width="100"/>
           <col name="el-table_3_column_19" width="110"/>
           <col name="el-table_3_column_20" width="100"/>
           <col name="el-table_3_column_21" width="150"/>
           <col name="el-table_3_column_22" width="150"/>
           <col name="el-table_3_column_23" width="150"/>
          </colgroup>
          <tbody style="font-size: 12px;color:#82898e">

            <?php foreach($data as $key=>$value){ ?>
           <tr class="el-table__row">
            <td class="el-table_3_column_15  el-table-column--selection">
             <div class="cell el-tooltip">
              <label role="checkbox" class="el-checkbox"><span  class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox"  class="el-checkbox__original" value="" /></span>
     </label>
             </div></td>
            <td class="el-table_3_column_16">
             <div class="cell el-tooltip">
              <?=$value['_id']?>
             </div></td>
            <td class="el-table_3_column_17">
             <div class="cell el-tooltip">
              <?=$value['username']?>
             </div></td>
            <td class="el-table_3_column_18">
             <div class="cell el-tooltip">
              <?=$value['product_spu']?>
             </div></td>
            <td class="el-table_3_column_19">
             <div class="cell el-tooltip" title="<?=$value['goodsname']?>">
              <?=$value['goodsname']?>
             </div></td>
            <td class="el-table_3_column_20">
             <div class="cell el-tooltip" title="<?=$value['summary']?>">
              <?=$value['summary']?>
             </div></td>
            <td class="el-table_3_column_21">
             <div class="cell el-tooltip"  title="<?=$value['review_content']?>">
              <?=$value['review_content']?>
             </div></td>
            <td class="el-table_3_column_22">
             <div class="cell el-tooltip">
              <?php echo date("Y-m-d H:i:s",$value['review_date']);?>
             </div></td>
            <td class="el-table_3_column_23">
             <div class="cell el-tooltip">
              <select name="" id="" onchange="saveStatus(this,'<?=$value['_id']?>')" class="xiala">
                <?php
                  switch ($value['status']) {
                    case '10':
                      # code...
                        echo "<option value='10' selected>未审核</option>";
                        echo "<option value='1'>审核通过</option>";
                        echo "<option value='2'>审核不通过</option>";
                      break;

                    case '1':
                      # code...
                        echo "<option value='10' >未审核</option>";
                        echo "<option value='1' selected>审核通过</option>";
                        echo "<option value='2'>审核不通过</option>";
                      break;
                    case '2':
                      # code...
                        echo "<option value='10' >未审核</option>";
                        echo "<option value='1'>审核通过</option>";
                        echo "<option value='2' selected>审核不通过</option>";
                      break;
                    default:
                      # code...
                      break;
                  }

                ?>
              </select>
             </div></td>
            <!-- <td class="el-table_3_column_24  ">
             <div class="cell el-tooltip" style="width: 100px;">
              <button type="button" class="el-button el-button--text el-button--small">

                <span>查看</span></button>
             </div></td> -->
           </tr>

           <?php } ?>

          </tbody>
         </table>
        </div>
        <div class="el-table__column-resize-proxy" style="display: none;"></div>
       </div>
      </div>
      <div style="position: relative;">
       <div style="width: 180px; position: absolute; top: 20px; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
        <div style="display: flex;">
         <div class="dian"></div> 总计
         <span style="color: rgb(61, 176, 255); font-weight: bolder;margin:0 5px;"><?=$tot ?></span>记录
        </div>
        <div style="display: flex;">
         <div class="dian" style="background: rgb(41, 201, 154);"></div> 分
         <span style="font-weight: bolder; color: rgb(41, 201, 154);margin:0 5px"><?=$pages ?></span>页
        </div>
       </div>
      </div>
      <div style="width: 100%; position: relative;">
       <div style="font-size: 12px; position: absolute; bottom: 0px; top: 50px; right: 0px; display: flex; justify-content: space-between;">
          <?php
          echo LinkPager::widget([
                 'pagination' => $pagination,
                 'firstPageLabel' => '首页',
                 'lastPageLabel' => '尾页',

                 'nextPageLabel' => '>',
                 'prevPageLabel' => '<',
               ]);
           ?>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
<script>
  function saveStatus(obj,id){
    // 获取修改的状态信息
    let status=$(obj).val();
    // 获取修改的状态

    $.get("<?= Yii::$service->url->getUrl('shop/goods/ajaxcommentstatus') ?>",{id:id,status:status},function(data){
      console.log(data);
    })

  }

</script>
<style>
    .content {
        width:100%;
        height: 100%;
        box-sizing: border-box;
        padding-top: 8px;
    }

    .content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
        margin-bottom: 20px;
    }

    .content .shuaixuan {
        height: 46px;
        line-height: 46px;
        font-size: 12px;
    }
    .content .xiala {
        padding-left: 10px;
        width: 100px;
        outline: none;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        font-size: 14px;
        color:#9eabb5
    }
    .shuaixuan .el-select:hover {
        border-color: #c0c4cc;
    }
    .shuaixuan .el-select:focus {
        border-color: #3CACFE;
    }
    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
    }

    .content .item {
        width: 100%;
    }
    .content .button_left {
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

    .content .button_right {
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

    .content .dian {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #3db0ff;
        box-shadow: 0 0 2px #3db0ff;
        margin-top: 10px;
        margin-right: 5px;
    }

</style>