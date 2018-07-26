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
                <tr>
                    <td>
                                <span>
                        <div class="system-box"></div>
                        <span style="margin-left:18px">01</span>
                    </span>
                    </td>
                    <td>小明</td>
                    <td>会员折扣</td>
                    <td>
                                <span>
                                    享受商品和服务的优惠折扣，不同等级会员可享受折扣不同
                                </span>
                    </td>
                    <td>
                        <router-link to="" style="color: #2dacff">编辑</router-link>
                        <label>|</label>&nbsp;
                        <a href="javascript:0" class="delete"></a>
                    </td>
                </tr>
            </table>
            <!--分页-->
            <div class="adminpagination" style="width: 98%">
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
            </div>
        </div>
        <!--白金会员-->
        <div class="vipruler" style="margin-bottom: 50px;">
            <div class="admin-tablename" style="height: 40px;line-height: 40px;">
                <div class="admin-tablenamebox levelbox" style="margin-top:14px;"></div>
                <span class="admin-tablename2" style="margin-left:6px;font-size: 14px;">
                            <span style="color:#30a3fe">白银</span><span>会员</span>
                        </span>
            </div>
            <form>
                <div style="height: 41px;line-height: 41px;">
                    <span>要求：</span>
                    <span style="margin-left:6px;">累计充值</span>
                    <input type="text" value="300"
                           style="text-align:center;color:red;width: 66px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                    <span>元</span>
                </div>
                <div style="height: 41px;line-height: 41px;">
                    <span style="float: left">特权：</span>
                    <div style="height: 100%;line-height: 40px;float: left;margin-left:10px;">
                        <div class="specialbox">
                            <div class="specialactive"></div>
                        </div>
                        <span>会员折扣</span>
                        <input type="text" value="9.5"
                               style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                        <span>折</span>
                        <div class="specialbox" style="margin-left:10px;">

                        </div>
                        <span>新服务尝鲜</span>
                        <div class="specialbox" style="margin-left:10px;">
                        </div>
                        <span>VIP快速服务</span>
                    </div>
                </div>
            </form>
        </div>
        <!--黄金会员-->
        <div class="vipruler" style="margin-bottom: 50px;">
            <div class="admin-tablename" style="height: 40px;line-height: 40px;">
                <div class="admin-tablenamebox levelbox" style="margin-top:14px;"></div>
                <span class="admin-tablename2" style="margin-left:6px;font-size: 14px;">
                            <span style="color:#30a3fe">黄金</span><span>会员</span>
                        </span>
            </div>
            <form>
                <div style="height: 41px;line-height: 41px;">
                    <span>要求：</span>
                    <span style="margin-left:6px;">累计充值</span>
                    <input type="text" value="300"
                           style="text-align:center;color:red;width: 66px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                    <span>元</span>
                </div>
                <div style="height: 41px;line-height: 41px;">
                    <span style="float: left">特权：</span>
                    <div style="height: 100%;line-height: 40px;float: left;margin-left:10px;">
                        <div class="specialbox">
                            <div class="specialactive"></div>
                        </div>
                        <span>会员折扣</span>
                        <input type="text" value="9.5"
                               style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                        <span>折</span>
                        <div class="specialbox" style="margin-left:10px;">
                            <div class="specialactive"></div>
                        </div>
                        <span>新服务尝鲜</span>
                        <div class="specialbox" style="margin-left:10px;">
                        </div>
                        <span>VIP快速服务</span>
                    </div>
                </div>
            </form>
        </div>
        <button style="width: 120px;height: 32px;border:0;float: left;margin-top:1px;margin-left:40px;
background: #fc5e4a;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;">
            确定
        </button>
    </div>

</div>