<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>
<!--    <div id="nav">-->
<!--        <div class="wrapper">-->
<!--            <div class="nav-logo">-->
<!--                LOGO.COM-->
<!--            </div>-->
<!--            <ul class="nav-menu">-->
<!--                <li><a href="">首页</a></li>-->
<!--                <li><a href="">房源中心</a></li>-->
<!--                <li><a href="">个人中心</a></li>-->
<!--                <li><a href="">关于悦居</a></li>-->
<!--                <li><a href="">登录/注册</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<?php include "header.php"?>
    <div id="banner">
        <div class="search">
            <div class="address">
                南岗区
                <span class="caret"></span>
            </div>
            <input type="text" name="search" placeholder="输入想要搜索的结果..." class="search-ipt">
            <div class="search-info">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;搜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;索
                <span class="search-icon"></span>
            </div>
        </div>
    </div>
    <div id="recommended-housing">
        <div class="wrapper">
            <div class="housing-title">
                <h3>推荐房源</h3>
                <h5>选择一个您合适的短租生活</h5>
            </div>
            <div class="house-detail">
                <div class="house-detail1">
                    <img src="assets/img/home/house-detail1.png">
                    <h4>精装修电梯房</h4>
                    <h5>南岗区</h5>
                    <h6>毗邻哈西万达广场，交通方便设施齐全，水电齐全，独立卫浴</h6>
                </div>
                <div class="house-detail2">
                    <img src="assets/img/home/house-detail2.png">
                    <h4>精装修电梯房</h4>
                    <h5>南岗区</h5>
                    <h6>毗邻哈西万达广场，交通方便设施齐全，水电齐全，独立卫浴</h6>
                </div>
                <div class="house-detail3">
                    <img src="assets/img/home/house-detail3.png">
                    <h4>精装修电梯房</h4>
                    <h5>南岗区</h5>
                    <h6>毗邻哈西万达广场，交通方便设施齐全，水电齐全，独立卫浴</h6>
                </div>
            </div>
        </div>
    </div>
    <div id="security">
        <div class="wrapper">
            <div class="security-title">
                <h3>悦居便利你的生活</h3>
                <h5>便利你的家居生活</h5>
            </div>
            <div class="security-content">
                <div class="security1">
                    <div class="security1-pic"></div>
                    <span>安全交易</span>
                </div>
                <div class="security2">
                    <div class="security2-pic"></div>
                    <span>国企认证</span>
                </div>
                <div class="security3">
                    <div class="security3-pic"></div>
                    <span>其他认证</span>
                </div>
                <div class="security4">
                    <div class="security4-pic"></div>
                    <span>生活便捷</span>
                </div>
                <div class="security5">
                    <div class="security5-pic"></div>
                    <span>其他什么</span>
                </div>
            </div>
        </div>
    </div>
    <div id="media">
        <div class="wrapper">
            <div class="media-content">
                <div class="introduce-media">
                    <video width="650" height="404" border-radius="5px" controls poster="assets/img/home/video.png">
                        <!-- source的src是加视频连接，poster是覆盖视频上的图片 -->
                        <source src="assets/img/home/01.mp4">
                        <object>实现flash插件的播放，如果屏蔽IE9以下则不需要</object>
                    </video>
                </div>
                <div class="introduce-pic">
                    <div class="introduce-pic1">
                        <img src="assets/img/home/introduce1.png">
                    </div>
                    <div class="introduce-pic2">
                        <img src="assets/img/home/introduce2.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="footer-logo">
            <span>LOGO</span>
        </div>
        <div class="footer-pic">
    
        </div>
        <ul class="footer-menu">
            <li><a href="">首页</a></li>
            <li><a href="">房源中心</a></li>
            <li><a href="">个人中心</a></li>
            <li><a href="">关于悦居</a></li>
        </ul>
        <div class="scan-code">
            <span>扫描此二维码</span>
            <div class="QR-code"></div>
        </div>
    </div>

</body>
</html>