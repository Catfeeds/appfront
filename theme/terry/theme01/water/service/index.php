<style>
    .content {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding-top: 8px;
    }

    .content .biaoti {
        height: 52px;
        font-size: 20px;
        line-height: 52px;
        font-weight: bolder;
    }

    .content .shuaixuan {
        height: 46px;
        width:100%;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
        color: #a4adb5;
        font-size: 12px;
    }
    .content .shuaixuan li{
        margin:0px 10px;
    }
    .content .shuaixuan .xiala {
        padding-left: 10px;
        width: 150px;
        outline: none;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        color:#9eabb5;
        font-size: 14px;
        cursor: pointer;
    }

    .shuaixuan .el-select:hover {
        border-color: #c0c4cc;
    }
    .shuaixuan .el-select:focus {
        border-color: #3CACFE;
    }

    .content .shuaixuan .input1 {
        width: 200px;
        height: 24px;
        outline: none;
        font-size: 12px;
        text-align: center;
    }

    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("../../../assets/img/sousuo.png") no-repeat center center/100% auto;
    }

    .content .item {
        width: 100%;
        height: 50px;
    }

    .content .red {
        height: 33px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0 8px #FD5E4E;
        padding-top: 10px;
    }

    .content .green {
        height: 33px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
        padding-top: 10px;
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

<div data-v-39fe08f0="" class="main-content">
    <div data-v-39fe08f0="" style="width: 1012px; margin: 0px auto;">
        <div data-v-91dd4202="" data-v-39fe08f0="">
            <div data-v-91dd4202="" class="content">
                <div data-v-91dd4202="" class="biaoti">
                    <div data-v-91dd4202="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                                data-v-91dd4202="" class="el-breadcrumb__item"><span role="link"
                                                                                     class="el-breadcrumb__inner is-link">维修服务</span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                                data-v-91dd4202="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                         class="el-breadcrumb__inner"><span
                                        data-v-91dd4202=""
                                        style="color: rgb(48, 211, 102); font-weight: bolder;">维修列表</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span></div>
                </div>
                <ul data-v-91dd4202="" class="shuaixuan">
                    <li>维修服务名称
                        <select name="" id="" class="el-select xiala">
                            <option value="" style="display: none">请选择</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </li>
                    <li>审核状态
                        <select name="" id="" class="el-select xiala">
                            <option value="" style="display: none">请选择</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </li>
                    <li data-v-91dd4202="">
                        维修编号
                        <div data-v-91dd4202="" class="input1 el-input"><!----><input type="text" autocomplete="off"
                                                                                      placeholder="请输入订单号"
                                                                                      class="el-input__inner"><!---->
                            <!----><!----></div>
                    </li>
                    <li data-v-91dd4202="">
                        <div data-v-91dd4202="" class="sousuo"></div>
                    </li>
                    <li data-v-91dd4202=""><a data-v-91dd4202="" href="#/ServiceListAdd" class="">
                            <button data-v-91dd4202="" type="button"
                                    class="el-button green el-button--success is-round"><!----><!----><span>
                        添加维修服务
                    </span></button>
                        </a></li>
                </ul>
                <div data-v-91dd4202="" class="item">
                    <div data-v-91dd4202=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div data-v-91dd4202=""></div>
                            <div data-v-91dd4202=""></div>
                            <div data-v-91dd4202=""></div>
                            <div data-v-91dd4202=""></div>
                            <div data-v-91dd4202=""></div>
                            <div data-v-91dd4202=""></div>
                            <div data-v-91dd4202=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 1012px;">
                                <colgroup>
                                    <col name="el-table_36_column_328" width="55">
                                    <col name="el-table_36_column_329" width="100">
                                    <col name="el-table_36_column_330" width="300">
                                    <col name="el-table_36_column_331" width="120">
                                    <col name="el-table_36_column_332" width="120">
                                    <col name="el-table_36_column_333" width="150">
                                    <col name="el-table_36_column_334" width="167">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1"
                                        class="el-table_36_column_328   el-table-column--selection  is-leaf">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_36_column_329     is-leaf">
                                        <div class="cell">编号</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_36_column_330     is-leaf">
                                        <div class="cell">维修服务名称</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_36_column_331     is-leaf">
                                        <div class="cell">定金</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_36_column_332     is-leaf">
                                        <div class="cell">服务费</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_36_column_333     is-leaf">
                                        <div class="cell">发布时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_36_column_334     is-leaf">
                                        <div class="cell">操作</div>
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
                                    <col name="el-table_36_column_328" width="55">
                                    <col name="el-table_36_column_329" width="100">
                                    <col name="el-table_36_column_330" width="300">
                                    <col name="el-table_36_column_331" width="120">
                                    <col name="el-table_36_column_332" width="120">
                                    <col name="el-table_36_column_333" width="150">
                                    <col name="el-table_36_column_334" width="167">
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e">
                                <tr class="el-table__row">
                                    <td class="el-table_36_column_328  el-table-column--selection">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </td>
                                    <td class="el-table_36_column_329  ">
                                        <div class="cell el-tooltip">HD001</div>
                                    </td>
                                    <td class="el-table_36_column_330  ">
                                        <div class="cell el-tooltip" style="width: 299px;">水管维修/水龙头维修/水池维修水管维修/水龙头维修/水池维修</div>
                                    </td>
                                    <td class="el-table_36_column_331  ">
                                        <div class="cell el-tooltip" style="width: 162px;">30.00</div>
                                    </td>
                                    <td class="el-table_36_column_332  ">
                                        <div class="cell el-tooltip" style="width: 162px;">120.00</div>
                                    </td>
                                    <td class="el-table_36_column_333  ">
                                        <div class="cell el-tooltip" style="width: 162px;">2018-06-01 18:25</div>
                                    </td>
                                    <td class="el-table_36_column_334  ">
                                        <div class="cell el-tooltip" style="width: 99px;"><a data-v-91dd4202=""
                                                                                             href="#/ServiceListEdit"
                                                                                             class="">
                                                <button data-v-91dd4202="" type="button"
                                                        class="el-button el-button--text el-button--small"><!---->
                                                    <!----><span>修改</span></button>
                                            </a> <span data-v-91dd4202="" style="color: rgb(234, 235, 236);">|</span>
                                            <button data-v-91dd4202="" type="button"
                                                    class="el-button el-button--text el-button--small"><!---->
                                                <!----><span><i data-v-91dd4202="" class="el-icon-delete"
                                                                style="color: rgb(255, 143, 113);"></i></span></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_36_column_328  el-table-column--selection">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </td>
                                    <td class="el-table_36_column_329  ">
                                        <div class="cell">HD001</div>
                                    </td>
                                    <td class="el-table_36_column_330  ">
                                        <div class="cell el-tooltip" style="width: 299px;">水管维修/水龙头维修/水池维修</div>
                                    </td>
                                    <td class="el-table_36_column_331  ">
                                        <div class="cell el-tooltip" style="width: 162px;">30.00</div>
                                    </td>
                                    <td class="el-table_36_column_332  ">
                                        <div class="cell el-tooltip" style="width: 162px;">120.00</div>
                                    </td>
                                    <td class="el-table_36_column_333  ">
                                        <div class="cell el-tooltip" style="width: 162px;">2018-06-01 18:25</div>
                                    </td>
                                    <td class="el-table_36_column_334  ">
                                        <div class="cell el-tooltip" style="width: 99px;"><a data-v-91dd4202=""
                                                                                             href="#/ServiceListEdit"
                                                                                             class="">
                                                <button data-v-91dd4202="" type="button"
                                                        class="el-button el-button--text el-button--small"><!---->
                                                    <!----><span>修改</span></button>
                                            </a> <span data-v-91dd4202="" style="color: rgb(234, 235, 236);">|</span>
                                            <button data-v-91dd4202="" type="button"
                                                    class="el-button el-button--text el-button--small"><!---->
                                                <!----><span><i data-v-91dd4202="" class="el-icon-delete"
                                                                style="color: rgb(255, 143, 113);"></i></span></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_36_column_328  el-table-column--selection">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </td>
                                    <td class="el-table_36_column_329  ">
                                        <div class="cell">HD001</div>
                                    </td>
                                    <td class="el-table_36_column_330  ">
                                        <div class="cell el-tooltip" style="width: 299px;">水管维修/水龙头维修/水池维修</div>
                                    </td>
                                    <td class="el-table_36_column_331  ">
                                        <div class="cell el-tooltip" style="width: 162px;">30.00</div>
                                    </td>
                                    <td class="el-table_36_column_332  ">
                                        <div class="cell el-tooltip" style="width: 162px;">120.00</div>
                                    </td>
                                    <td class="el-table_36_column_333  ">
                                        <div class="cell el-tooltip" style="width: 162px;">2018-06-01 18:25</div>
                                    </td>
                                    <td class="el-table_36_column_334  ">
                                        <div class="cell el-tooltip" style="width: 99px;"><a data-v-91dd4202=""
                                                                                             href="#/ServiceListEdit"
                                                                                             class="">
                                                <button data-v-91dd4202="" type="button"
                                                        class="el-button el-button--text el-button--small"><!---->
                                                    <!----><span>修改</span></button>
                                            </a> <span data-v-91dd4202="" style="color: rgb(234, 235, 236);">|</span>
                                            <button data-v-91dd4202="" type="button"
                                                    class="el-button el-button--text el-button--small"><!---->
                                                <!----><span><i data-v-91dd4202="" class="el-icon-delete"
                                                                style="color: rgb(255, 143, 113);"></i></span></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_36_column_328  el-table-column--selection">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </td>
                                    <td class="el-table_36_column_329  ">
                                        <div class="cell">HD001</div>
                                    </td>
                                    <td class="el-table_36_column_330  ">
                                        <div class="cell el-tooltip" style="width: 299px;">水管维修/水龙头维修/水池维修</div>
                                    </td>
                                    <td class="el-table_36_column_331  ">
                                        <div class="cell el-tooltip" style="width: 162px;">30.00</div>
                                    </td>
                                    <td class="el-table_36_column_332  ">
                                        <div class="cell el-tooltip" style="width: 162px;">120.00</div>
                                    </td>
                                    <td class="el-table_36_column_333  ">
                                        <div class="cell el-tooltip" style="width: 162px;">2018-06-01 18:25</div>
                                    </td>
                                    <td class="el-table_36_column_334  ">
                                        <div class="cell el-tooltip" style="width: 99px;"><a data-v-91dd4202=""
                                                                                             href="#/ServiceListEdit"
                                                                                             class="">
                                                <button data-v-91dd4202="" type="button"
                                                        class="el-button el-button--text el-button--small"><!---->
                                                    <!----><span>修改</span></button>
                                            </a> <span data-v-91dd4202="" style="color: rgb(234, 235, 236);">|</span>
                                            <button data-v-91dd4202="" type="button"
                                                    class="el-button el-button--text el-button--small"><!---->
                                                <!----><span><i data-v-91dd4202="" class="el-icon-delete"
                                                                style="color: rgb(255, 143, 113);"></i></span></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_36_column_328  el-table-column--selection">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </td>
                                    <td class="el-table_36_column_329  ">
                                        <div class="cell">HD001</div>
                                    </td>
                                    <td class="el-table_36_column_330  ">
                                        <div class="cell el-tooltip" style="width: 299px;">水管维修/水龙头维修/水池维修</div>
                                    </td>
                                    <td class="el-table_36_column_331  ">
                                        <div class="cell el-tooltip" style="width: 162px;">30.00</div>
                                    </td>
                                    <td class="el-table_36_column_332  ">
                                        <div class="cell el-tooltip" style="width: 162px;">120.00</div>
                                    </td>
                                    <td class="el-table_36_column_333  ">
                                        <div class="cell el-tooltip" style="width: 162px;">2018-06-01 18:25</div>
                                    </td>
                                    <td class="el-table_36_column_334  ">
                                        <div class="cell el-tooltip" style="width: 99px;"><a data-v-91dd4202=""
                                                                                             href="#/ServiceListEdit"
                                                                                             class="">
                                                <button data-v-91dd4202="" type="button"
                                                        class="el-button el-button--text el-button--small"><!---->
                                                    <!----><span>修改</span></button>
                                            </a> <span data-v-91dd4202="" style="color: rgb(234, 235, 236);">|</span>
                                            <button data-v-91dd4202="" type="button"
                                                    class="el-button el-button--text el-button--small"><!---->
                                                <!----><span><i data-v-91dd4202="" class="el-icon-delete"
                                                                style="color: rgb(255, 143, 113);"></i></span></button>
                                        </div>
                                    </td>
                                </tr><!----></tbody>
                            </table><!----><!----></div><!----><!----><!----><!---->
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                    <div data-v-91dd4202="" style="position: relative;">
                        <div data-v-91dd4202=""
                             style="width:200px; position: absolute; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
                            <div data-v-91dd4202="" style="display: flex;">
                                <div data-v-91dd4202="" class="dian"></div>
                                总计<span data-v-91dd4202=""
                                        style="color: rgb(61, 176, 255); font-weight: bolder;margin:0 5px;">206</span>记录
                            </div>
                            <div data-v-91dd4202="" style="display: flex;">
                                <div data-v-91dd4202="" class="dian" style="background: rgb(41, 201, 154);"></div>
                                分<span data-v-91dd4202=""
                                       style="font-weight: bolder; color: rgb(41, 201, 154);margin:0 5px;">82</span>页
                            </div>
                        </div>
                        <div data-v-91dd4202="" style="margin-top: 40px;">
                            <button data-v-91dd4202="" type="button" class="el-button el-button--default"><!----><!----><span>全选</span>
                            </button>
                            <button data-v-91dd4202="" type="button" class="el-button red el-button--danger is-round">
                                <!----><!----><span>批量删除</span></button>
                        </div>
                    </div>
                    <div data-v-91dd4202="" style="width: 100%; position: relative;">
                        <div data-v-91dd4202=""
                             style="font-size: 12px; position: absolute; bottom: 0px; right: 0px; display: flex; justify-content: space-between;">
                            <div data-v-91dd4202="" class="button_left">首页</div>
                            <div data-v-91dd4202="" class="el-pagination">
                                <button type="button" disabled="disabled" class="btn-prev"><i
                                            class="el-icon el-icon-arrow-left"></i></button>
                                <ul class="el-pager">
                                    <li class="number active">1</li><!---->
                                    <li class="number">2</li>
                                    <li class="number">3</li>
                                    <li class="number">4</li><!---->
                                    <li class="number">5</li>
                                </ul>
                                <button type="button" class="btn-next"><i class="el-icon el-icon-arrow-right"></i>
                                </button>
                            </div>
                            <div data-v-91dd4202="" class="button_right">末页</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>