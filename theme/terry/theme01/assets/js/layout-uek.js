    var arrs = {
        goods: [
            {"name":"商品列表","url":"/shop/goods/index"},
            // {"name":"分类管理","url":"/sh op/goods/categorylist"},
            {"name":"用户评价","url":"/shop/goods/commentlist"}
        ],
        orders: [
            {"name":"订单列表","url":"/shop/orders/index"},
            {"name":"纠纷列表","url":""},
            // {"name":"取件单列表","url":""}
        ],
        store: [
            {"name":"店铺信息","url":"/shop/store/index"},
            {"name":"店铺图片设置","url":"/shop/store/setimg"},
<<<<<<< HEAD
            {"name":"优惠卷管理","url":"/shop/store/couponindex"}
=======
<<<<<<< HEAD
            {"name":"优惠卷管理","url":"/shop/store/couponindex"}
=======

            {"name":"优惠卷管理","url":"/shop/store/couponindex"}

>>>>>>> 8c4dc7842343819ae926d6eeb4f15720563c6535
>>>>>>> 8cc6af68143fb990e29b1e23fed1656bca8444bd
        ],
        account: [
            {"name":"实名认证","url":"/shop/account/realname"},
            {"name":"账单列表","url":"/shop/account/index"},
            {"name":"资金列表","url":"/shop/account/money"},
            {"name":"账户解冻","url":"/shop/account/thawing"}
        ],
        datas: [

            {"name":"订单统计","url":"/shop/datas/index"},
            {"name":"销售统计","url":"/shop/datas/sale"}
        ]
    };
    var url = location.href.split("/");

    var arr = arrs[url[4]];

    var str = `<div class="logo"></div><ul class=\"aside-list\">`;
    arr.forEach(function (val,index) {
        str+=`<li href1="${val.url}">
                <div class="col-box"></div> 
                <a href="${val.url}" class="router-link-exact-active router-link-active">${val.name}</a>
            </li> `;
    });
    str+="</ul>"
    document.querySelector(".aside").innerHTML=str;
