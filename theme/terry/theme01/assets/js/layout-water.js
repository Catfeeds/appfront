    var arrs = {
        goods: [
            {"name":"商品列表","url":"/water/goods/index"},
            {"name":"用户评价","url":"/water/goods/commentlist"}
        ],
        orders: [
            {"name":"维修服务订单","url":"/water/orders/index"},
            {"name":"商品订单","url":"/water/orders/shop"},
            {"name":"纠纷列表","url":"/water/orders/dispute"},
            {"name":"缺货登记","url":"/water/orders/lack"},
        ],
        store: [
            {"name":"店铺信息","url":"/water/store/index"},
            {"name":"店铺图片设置","url":"/water/store/setimg"},
            {"name":"优惠券管理","url":"/water/store/couponindex"},
        ],
        account: [
            {"name":"实名认证","url":"/water/account/realname"},
            {"name":"账单列表","url":"/water/account/index"},
            // {"name":"资金列表","url":"/water/account/money"},
            // {"name":"账户解冻","url":"/water/account/thawing"}
        ],
        datas: [

            {"name":"订单统计","url":"/water/datas/index"},
            {"name":"销售统计","url":"/water/datas/sale"}
        ],
        service:[
            {"name":"维系服务列表","url":"/water/service/index"},
            {"name":"服务评价","url":"/water/service/evaluate"}
        ],
        index:[

        ]
    };
    var url = location.href.split("/");

    var arr = arrs[url[4]];


    var str = `<div class="logo"></div><ul class="aside-list">`;
    arr.forEach(function (val,index) {
        str+=`<li href1="${val.url}">
                <div class="col-box"></div> 
                <a href="${val.url}" class="router-link-exact-active router-link-active">${val.name}</a>
            </li> `;
    });
    str+="</ul>"
    document.querySelector(".aside").innerHTML=str;
