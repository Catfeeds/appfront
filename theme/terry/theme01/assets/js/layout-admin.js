    var arrs = {
        index: [
            {"name":"管理员管理","url":"/admin/index/index"},
            {"name":"会员管理","url":"/admin/index/member"},
            {"name":"店铺管理","url":"/admin/index/shop"}
        ],
        shuju: [
            {"name":"平台数据","url":"/admin/shuju/index"},
            {"name":"商家数据","url":"/admin/shuju/shop"},
            {"name":"水司数据","url":"/admin/shuju/water"}
        ],
        shop: [
            {"name":"分类管理","url":"/admin/shop/index"},
            {"name":"商家","url":"/admin/shop/index"},
            {"name":"水司","url":"/admin/shop/water"}
        ],
        review: [
            {"name":"待审核","url":"/admin/review/index"},
            {"name":"已通过","url":"/admin/review/pass"},
            {"name":"未通过","url":"/admin/review/nopass"}
        ],
        system: [

            {"name":"平台信息","url":"/admin/system/index"},
            {"name":"VIP规则","url":"/admin/system/vipruler"},
            {"name":"充值设置","url":"/admin/system/recharge"},
            {"name":"帮助","url":"/admin/system/helper"}
        ],
        money: [

            {"name":"平台财务","url":"/admin/money/index"},
            {"name":"商家财务","url":"/admin/money/shop"},
            {"name":"水司财务","url":"/admin/money/water"}
        ]
    };
    var url = location.href.split("/");

    var arr = arrs[url[4]];

    var str = `<div class="logo"></div><ul class=\"aside-list\">`;
    arr.forEach(function (val,index) {
        str+=`<li>
                <div class="col-box"></div> 
                <a href="${val.url}" class="router-link-exact-active router-link-active"><span>${val.name}</span></a>
            </li> `;
    });
    str+="</ul>"
    document.querySelector(".aside").innerHTML=str;
