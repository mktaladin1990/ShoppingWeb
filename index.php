<?php
include_once "./layout/header.php";
include_once "./model/connection.php";
?>
<div id="wrapper" class="">    
    <div id="socialLogin"></div>
    <div class="top-page">
        <!-- <div id="carousel0" class="owl-carousel owl-loaded owl-drag"> -->
        <div id="carousel0" class="owl-carousel owl-theme">
            <div class="item" style="width: 1903px;">
                <div class=" text-center">
                    <a href="#suoi-am-ngay-giao-mua-bang-sac-vang-ruc-nang-cua-vans-pig-suede"><img src="./share/web-vans-suede-mango1a-1500x560.jpg" alt="Vans pig suede" class=""></a>
                </div>
            </div>
            <div class="item" style="width: 1903px;">
                <div class=" text-center">
                    <a href="#supra-lizard-deathwish"><img src="./share/web-supra-lizard-1500x560.jpg" alt="Supra lizard" class=""></a>
                </div>
            </div>
            <div class="item" style="width: 1903px;">
                <div class=" text-center">
                    <a href="#vans-pride-rainbow"><img src="./share/web-vans-anaheim-factorya-1500x560.jpg" alt="Vans Pride" class=""></a>

                </div>
            </div>
            <!-- <div class="item" style="width: 1903px;">
                    <div class=" text-center">
                        <a href="#suoi-am-ngay-giao-mua-bang-sac-vang-ruc-nang-cua-vans-pig-suede"><img src="./share/web-vans-suede-mango1a-1500x560.jpg" alt="Vans pig suede" class=""></a>

                    </div>
                  </div> -->
            <div class="item" style="width: 1903px;">
                <div class="owl-item" style="width: 1903px;">
                    <div class=" text-center">
                        <a href="#pampa-unzipped-voi-thiet-ke-mang-khoa-zip-ben-hong-than-giay"><img src="./share/web-palladium-pampa-unzipped1a-1500x560.jpg" alt="Palladium pampa unzipped" class=""></a>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="owl-nav disabled">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div> -->
        <div class="owl-dots">
            <div class="owl-dot"><span></span></div>
            <div class="owl-dot"><span></span></div>
            <div class="owl-dot active"><span></span></div>
            <div class="owl-dot"><span></span></div>
            <div class="owl-dot"><span></span></div>
        </div>
    </div>
    <script type="text/javascript">
        $("#getting-started")
            .countdown("2017/10/30 20:00", function(event) {
                $(this).html(
                    event.strftime('<span> %H </span> : <span> %M </span> : <span> %S </span>')
                );
            });
    </script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Aldrich');
        #getting-started {
            font-size: 40px;
            color: #dabc3a;
            position: absolute;
            top: 12%;
            z-index: 1000;
            left: 5%;
            font-family: 'Aldrich', sans-serif;
            font-weight: bold;
            text-shadow: 2px 2px #222;
        }
        
        #getting-started span {
            display: inline-block;
            border-radius: 5px;
            background: #222;
            text-align: center;
            width: 70px;
            height: 80px;
            line-height: 80px;
            text-transform: uppercase;
        }
        
        @media(max-width: 767px) {
            #getting-started {
                font-size: 20px;
                top: 50%;
                left: 0;
                right: 0;
                margin-top: -30px;
            }
            #getting-started span {
                width: 40px;
                height: 60px;
                line-height: 60px;
            }
        }
        
        @media(max-width: 480px) {
            #getting-started {
                font-size: 18px;
                top: 50%;
                left: 0;
                right: 0;
                margin-top: -25px;
            }
            #getting-started span {
                width: 35px;
                height: 50px;
                line-height: 50px;
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            var owl = $('#carousel0');
            owl.owlCarousel({
                dots: true,
                nav: false,
                loop: true,
                items: 1,
                autoplay: true,
                autoplayTimeout: 4500,
                smartSpeed: 550
            })
        })
    </script>
    <style type="text/css">
        .owl-dots {
            position: absolute;
            display: inline-block;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            bottom: 0;
        }
        
        .owl-dot {
            display: inline-block;
            margin: 0 5px;
        }
        
        .owl-dot span {
            width: 12px;
            height: 12px;
            border-radius: 12px;
            background: #FFF;
            display: inline-block;
            opacity: 0.7;
            position: relative;
        }
        
        .owl-dot span:before {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            width: 16px;
            height: 16px;
            border-radius: 16px;
            border: 1px solid #e1b221;
            display: none;
        }
        
        .owl-dot.active span {
            opacity: 1;
        }
        
        .owl-dot.active span:before {
            display: block;
        }
    </style>
    <div class="clearfix"></div>
</div>
<div id="content">
    <div class="container page-builder-ltr">
        <div class="row row_5tlw row-style ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6utb col-style">
                <div id="brands0" class="brands-box" style="opacity: 1;">
                    <div class="item">
                        <a href="#converse/"><img src="./share/converse-114x88-114x88.jpg" alt="CONVERSE" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="#vans/"><img src="./share/VANS-114x88-114x88.jpg" alt="VANS" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="#palladium/"><img src="./share/PALLADIUM-114x88.jpg" alt="PALLADIUM" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="#supra"><img src="./share/supra-114x88.png" alt="Supra" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="#k-swiss"><img src="./share/KSWISS-114x88-114x88.jpg" alt="K-Swiss" class="img-responsive"></a>
                    </div>
                </div>
                <style type="text/css">
                    .brands-box {
                        margin-bottom: 20px;
                        text-align: center;
                    }
                    
                    .brands-box .item {
                        display: inline-block;
                        padding-left: 10px;
                        padding-right: 10px;
                    }
                </style>
            </div>
        </div>
    </div>
    <div class="container page-builder-ltr">
        <div class="row row_eiyr row-style bannerhome-2 ">
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 col_gf6n col-style">
                <div>
                    <div class="box-content"></div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_t8tl col-style">
            </div>
        </div>
    </div>
    <div class="container page-builder-ltr">
        <div class="row row_jx1e row-style bannerhome-2 ">
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 col_jwii col-style">
                <div class="title-home">
                    <div class="box-content"></div>
                </div>
            </div>
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 col_aycb col-style">
            </div>
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 col_xia0 col-style">
            </div>
        </div>
    </div>
    <div class="container page-builder-ltr">
        <div class="row row_xgir row-style bannerhome-2 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_do0r col-style">
                <div>
                    <div class="box-content">
                        <p>
                            <a href="#converse"><img alt="" src="./share/danh-muc-converse-9-19-2a.jpg"></a>
                        </p>
                    </div>
                </div>
                <div class="box-tab-home">
                    <div class="tab-content">
                        <div id="mcproduct0_0" class="tab-pane fade in active">                                       
                           
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM product limit 18 ");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) :
                                ?>
                                <div class="ltabs-item col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <div class="product-thumb">
                                    <div class="product-item-content" style="height: 268px;">
                                        <div class="left-block">
                                            <div class="product-image-container second_img so-quickview">
                                                <a href="show.php?id=<?= $row['id'] ?> "> 
                                                <img src="./share/<?= $row['product_image'] ?>"alt="Chuck Taylor All Star East Village Explorer" title="Chuck Taylor All Star East Village Explorer" class="img-responsive"> </a>
                                                <div class="box-label"> </div>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="caption">
                                                <h4 style="height: 32px;"><a href="show.php?id=<?= $row['id'] ?> "><?= $row['product_name'] ?></a></h4>
                                                <div class="sku"> # <?= $row['product_code'] ?> </div>
                                                <div class="price" style="height: 17px;">
                                                    <div> <span class="tprice">Mike Price: </span> <span class="price-normal"><?= number_format($row['product_sale']) .'&nbsp;đ' ?> </span> </div>
                                                </div>
                                                <div class="description  hidden ">
                                                    <p><?= $row['product_des'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            ?>
                            <div class="view-more"> <a href="#converse">See More</a> </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "./layout/footer.php";
?>