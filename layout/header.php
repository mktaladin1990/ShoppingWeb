<?php
include_once "./model/connection.php";
    $stmt = $conn->prepare("SELECT * FROM cart");
    $stmt->execute();
    $result = $stmt->get_result();
?>
<!DOCTYPE html>
<html>

<head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# product:http://ogp.me/ns/product#">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mike.com.vn</title>

    <!--<base href="#">-->
    <base href=".">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:image" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hệ thống mike VN
Chuyên phân phối sản phẩm chính hãng Converse - Vans - Palladium - K-Swiss - SUPRA trên toàn Việt Nam">
    <meta name="keywords" content="Converse, Vans, Palladium, K-Swiss, SUPRA, Giày chính hãng, Converse giá rẻ, Vans giá rẻ, Palladium giá rẻ, K-Swiss giá rẻ, SUPRA giá rẻ">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <link rel="alternate" href="#" hreflang="vi">
    <link rel="alternate" href="#" hreflang="x-default">
    <link href="#image/catalog/icon-1.png" rel="icon">
    <link rel="stylesheet" href="./share/bootstrap.min.css">
    <link rel="stylesheet" href="./share/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./share/lib.css">
    <link rel="stylesheet" href="./share/ie9-and-up.css">
    <link rel="stylesheet" href="./share/search.css">
    <link rel="stylesheet" href="./share/glytus.css">
    <link rel="stylesheet" href="./share/owl.carousel.css">
    <link rel="stylesheet" href="./share/owl.transitions.css">
    <link rel="stylesheet" href="./share/shortcodes.css">
    <link rel="stylesheet" href="./share/animate.css">
    <link rel="stylesheet" href="./share/owl.carousel(1).css">
    <link rel="stylesheet" href="./share/style_render_291.css">
    <link rel="stylesheet" href="./share/style.css">
    <link rel="stylesheet" href="./share/style(1).css">
    <link rel="stylesheet" href="./share/so_megamenu.css">
    <link rel="stylesheet" href="./share/wide-grid.css">
    <link rel="stylesheet" href="./share/style_render_249.css">
    <link rel="stylesheet" href="./share/so_searchpro.css">
    <link rel="stylesheet" href="./share/custom.css">
    <link rel="stylesheet" href="./share/red.css">
    <link rel="stylesheet" href="./share/responsive.css">
    <script src="./share/sdk.js.download" async="" crossorigin="anonymous"></script>
    <script async="" src="./share/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="./share/fbevents.js.download"></script>
    <script async="" src="./share/analytics.js.download"></script>
    <script id="facebook-jssdk" src="./share/sdk.js(1).download"></script>
    <script src="./share/jquery-2.1.1.min.js.download"></script>
    <script src="./share/bootstrap.min.js.download"></script>
    <script src="./share/libs.js.download"></script>
    <script src="./share/so.system.js.download"></script>
    <script src="./share/so.custom.js.download"></script>
    <script src="./share/custom.js.download"></script>
    <script src="./share/jquery.matchHeight-min.js.download"></script>
    <script src="./share/classie.js.download"></script>
    <script src="./share/common.js.download"></script>
    <script src="./share/owl.carousel.min.js.download"></script>
    <script src="./share/jquery.countdown.min.js.download"></script>
    <script src="./share/shortcodes.js.download"></script>
    <script src="./share/owl.carousel.js.download"></script>
    <script src="./share/section.js.download"></script>
    <script src="./share/swfobject.js.download"></script>
    <script src="./share/so_megamenu.js.download"></script>
    <script src="./share/cpanel.js.download"></script>
    <script src="./share/custorm.js"></script>
    <link href="./share/css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            font-family: Roboto, sans-serif
        }
    </style>
    <style type="text/css">
        @keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }
            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }
        
        @-moz-keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }
            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }
        
        @-webkit-keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }
            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }
        
        #RHO4Xgq-1574151290012 {
            outline: none!important;
            visibility: visible!important;
            resize: none!important;
            box-shadow: none!important;
            overflow: visible!important;
            background: none!important;
            opacity: 1!important;
            filter: alpha(opacity=100)!important;
            -ms-filter: progid: DXImageTransform.Microsoft.Alpha(Opacity1)!important;
            -moz-opacity: 1!important;
            -khtml-opacity: 1!important;
            top: auto!important;
            right: 10px!important;
            bottom: 0px!important;
            left: auto!important;
            position: fixed!important;
            border: 0!important;
            min-height: 0!important;
            min-width: 0!important;
            max-height: none!important;
            max-width: none!important;
            padding: 0!important;
            margin: 0!important;
            -moz-transition-property: none!important;
            -webkit-transition-property: none!important;
            -o-transition-property: none!important;
            transition-property: none!important;
            transform: none!important;
            -webkit-transform: none!important;
            -ms-transform: none!important;
            width: auto!important;
            height: auto!important;
            display: none!important;
            z-index: 2000000000!important;
            background-color: transparent!important;
            cursor: auto!important;
            float: none!important;
            border-radius: unset!important;
            pointer-events: auto!important
        }
        
        #KXNAcCG-1574151290013.open {
            animation: tawkMaxOpen .25s ease!important;
        }
    </style>
    <style type="text/css">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }
        
        .fb_reposition {
            overflow: hidden;
            position: relative
        }
        
        .fb_invisible {
            display: none
        }
        
        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }
        
        .fb_reset>div {
            overflow: hidden
        }
        
        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }
            to {
                opacity: 1;
                transform: scale(1)
            }
        }
        
        .fb_animate {
            animation: fb_transform .3s forwards
        }
        
        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }
        
        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }
        
        .fb_dialog_content {
            background: #fff;
            color: #373737
        }
        
        .fb_dialog_close_icon {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }
        
        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }
        
        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }
        
        .fb_dialog_close_icon:hover {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }
        
        .fb_dialog_close_icon:active {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }
        
        .fb_dialog_iframe {
            line-height: 0
        }
        
        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }
        
        .fb_dialog_content .dialog_title>span {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }
        
        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }
        
        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }
        
        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }
        
        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }
        
        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }
        
        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }
        
        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }
        
        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }
        
        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }
        
        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }
        
        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #043b87;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }
        
        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }
        
        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }
        
        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }
        
        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }
        
        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }
        
        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }
        
        .fb_dialog_content .dialog_content {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }
        
        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }
        
        #fb_dialog_loader_close {
            float: left
        }
        
        .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }
        
        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }
        
        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }
        
        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }
        
        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }
        
        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }
        
        .fb_iframe_widget iframe {
            position: absolute
        }
        
        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }
        
        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }
        
        .fb_iframe_widget_lift {
            z-index: 1
        }
        
        .fb_iframe_widget_fluid {
            display: inline
        }
        
        .fb_iframe_widget_fluid span {
            width: 100%
        }
    </style>
</head>

<body class="common-home ltr res layout-1   loaded">
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div>
                <iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="./share/xd_arbiter.html" style="border: none;"></iframe>
            </div>
            <div></div>
        </div>
    </div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <style type="text/css"></style>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-104369809-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '690764604680205');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=690764604680205&ev=PageView&noscript=1" /></noscript>

    <header id="header" class="hfixed">

        <div class="header-top compact-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-sm hidden-xs header-top-left">
                    </div>
                    <div class="col-md-6 col-sm-12 header-top-right">
                        <ul class="list-inline pull-right">
                            <li class="navbar-phone">Hotline: <a href="tel:1800.0080">1800.0080 </a></li>
                            <li><a href="#account/register"><i class="fa fa-lock"></i> Đăng Ký</a></li>
                            <li><a href="#account/login"><i class="fa fa-user"></i> Đăng Nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-center compact-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <div class="logo">
                            <a href="index.php"><img src="https://image.ibb.co/cCPdBU/logo.png" alt="logo" border="0" style="height: 80px"></a>
                        </div>
                    </div>
                    <div class="col-sm-3 text-right">
                        <!-- <a href="#account/wishlist" id="wishlist-total" title="Danh sách Yêu thích"><i class="fas fa-heart-o"></i></a> -->
                        <div id="cart" class="btn-shopping-cart" onclick="location.href='cart.php'">
                            <i class="fas fa-shopping-cart"></i>
                            <a href="" id="cart-shop" data-loading-text="Đang Xử lý..." class="btn-group  dropdown-toggle" data-toggle="dropdown">
                            <?php
                            
                                $numberCart = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key => $value) {
                                        $numberCart ++ ;
                                    }
                                } 
                            ?>
                                <div class="shopcart">                                   
                                    <span class=""><i class="fas fa-cart-plus"></i></span>
                                    <span id ="numberCart" class="text-shopping-cart cart-total-full"><?php echo $numberCart; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notify-top">
                <div class="container">
                    <div class="popup-box">
                        <div class="item">
                            Đăng ký hoặc gọi 1800.0080 để cập nhật chương trình khuyến mãi </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="top-nav">
                            <div class="responsive megamenu-style-dev ">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="250">

                                                        <li class=" with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#converse" class="clearfix">
                                                                <strong>
Converse
</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width:100%">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-2">
                                                                            <div class="html ">
                                                                                <p>&nbsp;<img alt="" src="./share/converse-100x100.jpg">&nbsp;<a href="#converse">All Converse</a></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="categories ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/classic" onclick="window.location = &#39;#converse/classic&#39;;" class="main-menu"><img src="./share/127441-1-100x100-100x100.jpg"></a><a href="#converse/classic" onclick="window.location = &#39;#converse/classic&#39;;" class="main-menu">Classic</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/chuck-1970s" onclick="window.location = &#39;#converse/chuck-1970s&#39;;" class="main-menu"><img src="./share/162054C-mike-100x100-100x100.jpg"></a><a href="#converse/chuck-1970s" onclick="window.location = &#39;#converse/chuck-1970s&#39;;" class="main-menu">Chuck 1970S</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/chuck-2" onclick="window.location = &#39;#converse/chuck-2&#39;;" class="main-menu"><img src="./share/150146-100x100-100x100.jpg"></a><a href="#converse/chuck-2" onclick="window.location = &#39;#converse/chuck-2&#39;;" class="main-menu">Chuck II</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/cons-one-star" onclick="window.location = &#39;#converse/cons-one-star&#39;;" class="main-menu"><img src="./share/163245-mike-100x100-100x100.jpg"></a><a href="#converse/cons-one-star" onclick="window.location = &#39;#converse/cons-one-star&#39;;" class="main-menu">Cons - One Star</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/jack-purcell" onclick="window.location = &#39;#converse/jack-purcell&#39;;" class="main-menu"><img src="./share/164056C-mike-100x100-100x100.jpg"></a><a href="#converse/jack-purcell" onclick="window.location = &#39;#converse/jack-purcell&#39;;" class="main-menu">Jack Purcell</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/dainty-for-women" onclick="window.location = &#39;#converse/dainty-for-women&#39;;" class="main-menu"><img src="./share/564427C-mike-100x100-100x100.jpg"></a><a href="#converse/dainty-for-women" onclick="window.location = &#39;#converse/dainty-for-women&#39;;" class="main-menu">Dainty For Women</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/converse-seasonal" onclick="window.location = &#39;#converse/converse-seasonal&#39;;" class="main-menu"><img src="./share/161416-100x100-100x100.jpg"></a><a href="#converse/converse-seasonal" onclick="window.location = &#39;#converse/converse-seasonal&#39;;" class="main-menu">Seasonal</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/sneaker" onclick="window.location = &#39;#converse/sneaker&#39;;" class="main-menu"><img src="./share/165467C-mike-100x100-100x100.jpg"></a><a href="#converse/sneaker" onclick="window.location = &#39;#converse/sneaker&#39;;" class="main-menu">Sneaker</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/kid" onclick="window.location = &#39;#converse/kid&#39;;" class="main-menu"><img src="./share/327470-100x100-100x100.jpg"></a><a href="#converse/kid" onclick="window.location = &#39;#converse/kid&#39;;" class="main-menu">Kid</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/sandal" onclick="window.location = &#39;#converse/sandal&#39;;" class="main-menu"><img src="./share/1NHS906-100x100-100x100.jpg"></a><a href="#converse/sandal" onclick="window.location = &#39;#converse/sandal&#39;;" class="main-menu">Sandal</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#converse/accessories-apparel" onclick="window.location = &#39;#converse/accessories-apparel&#39;;" class="main-menu"><img src="./share/10017262-A031-100x100-100x100.jpg"></a><a href="#converse/accessories-apparel" onclick="window.location = &#39;#converse/accessories-apparel&#39;;" class="main-menu">Accessories &amp; Apparel</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class=" with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#vans" class="clearfix">
                                                                <strong>
Vans
</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width:100%">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-2">
                                                                            <div class="html ">
                                                                                <p><img alt="" src="./share/vans-100x100.jpg">&nbsp;<a href="#vans">All Vans</a></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="categories ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/classic" onclick="window.location = &#39;#vans/classic&#39;;" class="main-menu"><img src="./share/vans-old-skool-classic-100x100-100x100.jpg"></a><a href="#vans/classic" onclick="window.location = &#39;#vans/classic&#39;;" class="main-menu">Classic</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/old-skool" onclick="window.location = &#39;#vans/old-skool&#39;;" class="main-menu"><img src="./share/Vans-OS-100x100-100x100.jpg"></a><a href="#vans/old-skool" onclick="window.location = &#39;#vans/old-skool&#39;;" class="main-menu">Vans Old Skool</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/vans-authentic" onclick="window.location = &#39;#vans/vans-authentic&#39;;" class="main-menu"><img src="./share/authentic-100x100-100x100.jpg"></a><a href="#vans/vans-authentic" onclick="window.location = &#39;#vans/vans-authentic&#39;;" class="main-menu">Vans Authentic</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/vans-slip-on" onclick="window.location = &#39;#vans/vans-slip-on&#39;;" class="main-menu"><img src="./share/Slip-On-100x100-100x100.jpg"></a><a href="#vans/vans-slip-on" onclick="window.location = &#39;#vans/vans-slip-on&#39;;" class="main-menu">Vans Slip-On</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/era" onclick="window.location = &#39;#vans/era&#39;;" class="main-menu"><img src="./share/Era-100x100-100x100.jpg"></a><a href="#vans/era" onclick="window.location = &#39;#vans/era&#39;;" class="main-menu">Vans Era</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/vans-sk8-hi" onclick="window.location = &#39;#vans/vans-sk8-hi&#39;;" class="main-menu"><img src="./share/D5INVY-100x100-100x100.jpg"></a><a href="#vans/vans-sk8-hi" onclick="window.location = &#39;#vans/vans-sk8-hi&#39;;" class="main-menu">Vans SK8-Hi</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/sneaker" onclick="window.location = &#39;#vans/sneaker&#39;;" class="main-menu"><img src="./share/VN0A3DZ3VXZ-100x100-100x100.jpg"></a><a href="#vans/sneaker" onclick="window.location = &#39;#vans/sneaker&#39;;" class="main-menu">Sneaker</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/vans-anaheim" onclick="window.location = &#39;#vans/vans-anaheim&#39;;" class="main-menu"><img src="./share/VN0A38ENMR2-100x100-100x100.jpg"></a><a href="#vans/vans-anaheim" onclick="window.location = &#39;#vans/vans-anaheim&#39;;" class="main-menu">Vans Anaheim Factory</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/kid" onclick="window.location = &#39;#vans/kid&#39;;" class="main-menu"><img src="./share/VN000VHE6BT-100x100-100x100.jpg"></a><a href="#vans/kid" onclick="window.location = &#39;#vans/kid&#39;;" class="main-menu">Kid</a></li>
                                                                                                <li "ck"="">
                                                                                                    <a href="#vans/accessories-apparel" onclick="window.location = &#39;#vans/accessories-apparel&#39;;" class="main-menu"><img src="./share/VN0A3JAGAEF-100x100-100x100.jpg"></a><a href="#vans/accessories-apparel" onclick="window.location = &#39;#vans/accessories-apparel&#39;;" class="main-menu">Accessories &amp; Apparel</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class=" with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#palladium" class="clearfix">
                                                                <strong>
Palladium
</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width:100%">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-2">
                                                                            <div class="html ">
                                                                                <p><img alt="" src="./share/palla-100x100.jpg">&nbsp;<a href="#palladium">All Palladium</a></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="categories ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#palladium/sneaker" onclick="window.location = &#39;#palladium/sneaker&#39;;" class="main-menu"><img src="./share/96205-740-M-mike-100x100-100x100.jpg"></a><a href="#palladium/sneaker" onclick="window.location = &#39;#palladium/sneaker&#39;;" class="main-menu">Sneaker</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#palladium/classic" onclick="window.location = &#39;#palladium/classic&#39;;" class="main-menu"><img src="./share/image-classic-palla-100x100-100x100.jpg"></a><a href="#palladium/classic" onclick="window.location = &#39;#palladium/classic&#39;;" class="main-menu">Classic</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#palladium/waterproof" onclick="window.location = &#39;#palladium/waterproof&#39;;" class="main-menu"><img src="./share/76259-339-M-100x100-100x100.jpg"></a><a href="#palladium/waterproof" onclick="window.location = &#39;#palladium/waterproof&#39;;" class="main-menu">Waterproof</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#palladium/accessories-apparel" onclick="window.location = &#39;#palladium/accessories-apparel&#39;;" class="main-menu"><img src="./share/172597-008-100x100-100x100.jpg"></a><a href="#palladium/accessories-apparel" onclick="window.location = &#39;#palladium/accessories-apparel&#39;;" class="main-menu">Accessories &amp; Apparel</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class=" with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#k-swiss" class="clearfix">
                                                                <strong>
K-Swiss
</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width:100%">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-2">
                                                                            <div class="html ">
                                                                                <p><img alt="" src="./share/k-swiss-100x100.jpg">&nbsp;<a href="#k-swiss">All K-Swiss</a></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="categories ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#k-swiss/giay-nam-k-swiss" onclick="window.location = &#39;#k-swiss/giay-nam-k-swiss&#39;;" class="main-menu"><img src="./share/k-swiss-nam-100x100-100x100.jpg"></a><a href="#k-swiss/giay-nam-k-swiss" onclick="window.location = &#39;#k-swiss/giay-nam-k-swiss&#39;;" class="main-menu">Men</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#k-swiss/giay-nu-k-swiss" onclick="window.location = &#39;#k-swiss/giay-nu-k-swiss&#39;;" class="main-menu"><img src="./share/k-swiss-nu-100x100-100x100.jpg"></a><a href="#k-swiss/giay-nu-k-swiss" onclick="window.location = &#39;#k-swiss/giay-nu-k-swiss&#39;;" class="main-menu">Women</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class=" with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#supra" class="clearfix">
                                                                <strong>
Supra
</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width:100%">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="categories ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#supra" onclick="window.location = &#39;#supra&#39;;" class="main-menu"><img src="./share/supra-100x100.png"></a><a href="#supra" onclick="window.location = &#39;#supra&#39;;" class="main-menu">All Supra</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#supra/supra-high-top" onclick="window.location = &#39;#supra/supra-high-top&#39;;" class="main-menu"><img src="./share/08044-655-M-mike-100x100-100x100.jpg"></a><a href="#supra/supra-high-top" onclick="window.location = &#39;#supra/supra-high-top&#39;;" class="main-menu">High Top</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#supra/supra-low-top" onclick="window.location = &#39;#supra/supra-low-top&#39;;" class="main-menu"><img src="./share/08193-069-M-mike-100x100-100x100.jpg"></a><a href="#supra/supra-low-top" onclick="window.location = &#39;#supra/supra-low-top&#39;;" class="main-menu">Low Top</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#supra/accessories-apparel" onclick="window.location = &#39;#supra/accessories-apparel&#39;;" class="main-menu"><img src="./share/C3072-814-1-100x100-100x100.jpg"></a><a href="#supra/accessories-apparel" onclick="window.location = &#39;#supra/accessories-apparel&#39;;" class="main-menu">ACCESSORIES &amp; APPAREL</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class=" with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#accessoriesapparel" class="clearfix">
                                                                <strong>
Accessories
</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width:100%">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="categories ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#accessoriesapparel" onclick="window.location = &#39;#accessoriesapparel&#39;;" class="main-menu"><img src="./share/accessoriel-100x100-100x100.jpg"></a><a href="#accessoriesapparel" onclick="window.location = &#39;#accessoriesapparel&#39;;" class="main-menu">All Accessories &amp; Apparel</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#accessoriesapparel/phu-trang-converse" onclick="window.location = &#39;#accessoriesapparel/phu-trang-converse&#39;;" class="main-menu"><img src="./share/10017262-A031-100x100-100x100.jpg"></a><a href="#accessoriesapparel/phu-trang-converse" onclick="window.location = &#39;#accessoriesapparel/phu-trang-converse&#39;;" class="main-menu">Converse</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#accessoriesapparel/phu-trang-vans" onclick="window.location = &#39;#accessoriesapparel/phu-trang-vans&#39;;" class="main-menu"><img src="./share/VN0A3JAGAEF-100x100-100x100.jpg"></a><a href="#accessoriesapparel/phu-trang-vans" onclick="window.location = &#39;#accessoriesapparel/phu-trang-vans&#39;;" class="main-menu">Vans</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#accessoriesapparel/phu-trang-palladium" onclick="window.location = &#39;#accessoriesapparel/phu-trang-palladium&#39;;" class="main-menu"><img src="./share/172597-008-100x100-100x100.jpg"></a><a href="#accessoriesapparel/phu-trang-palladium" onclick="window.location = &#39;#accessoriesapparel/phu-trang-palladium&#39;;" class="main-menu">Palladium</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-25 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li "ck"="">
                                                                                                    <a href="#accessoriesapparel/phu-trang-supra" onclick="window.location = &#39;#accessoriesapparel/phu-trang-supra&#39;;" class="main-menu"><img src="./share/C3072-814-1-100x100-100x100.jpg"></a><a href="#accessoriesapparel/phu-trang-supra" onclick="window.location = &#39;#accessoriesapparel/phu-trang-supra&#39;;" class="main-menu">Supra</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="sale">
                                                            <p class="close-menu"></p>
                                                            <a href="#sale" class="clearfix">
                                                                <strong>
Khuyến mãi
</strong>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="#gioi-thieu-cua-hang" class="clearfix">
                                                                <strong>
Cửa hàng
</strong>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div id="search" class="input-group sb-search">
                            <div class="search-content">
                                <input name="search" class="sb-search-input" placeholder="Tìm kiếm" type="text" value="">
                                <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('#search .opens').click(function() {
                                $('#search').toggleClass('open');
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </header>