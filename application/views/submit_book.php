<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/1
 * Time: 9:58
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>填写订单</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/submit_book.css">
</head>
<body>
    <div class="wrapper">
        <div id="book">
            <div id="book-mune">
<!--                <img src="assets/img/book_mune.png" alt="">-->
                <div>
                    <span>填写订单</span>
                    <span>确认订单</span>
                    <span>支付定金</span>
                    <span>支付成功</span>
                </div>
            </div>
            <div id="check-in">
                <h3>入住信息</h3>
                <p>房源信息：<span></span></p>
                <p>入住信息：<span><input type="text"><input type="text"></span>共25晚</p>
            </div>
            <div id="user-information">
                <h3 id="user-title">入住人信息</h3>
                <p><span>真实姓名：</span><span>说说说</span><span>手机号：</span><span>18846433845</span></p>
            </div>
            <div id="book-information">
                <h3>订单费用详情</h3>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>日均价</th>
                            <th>预定套数</th>
                            <th>月数</th>
                            <th>总价</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>房租</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="rent">在线收取押金：200元</h4>
                <h4>订单总金额：<span><strong>￥450</strong>&nbsp;元</span></h4>
            </div>
    </div>
</body>
</html>
