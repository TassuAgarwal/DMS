<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>DMS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<style>
    .picZoomer {
        position: relative;
        /*margin-left: 40px;
    padding: 15px;*/
    }

    .picZoomer-pic-wp {
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .picZoomer-pic-wp:hover .picZoomer-cursor {
        display: block;
    }

    .picZoomer-zoom-pic {
        position: absolute;
        top: 0;
        left: 0;
    }

    .picZoomer-zoom-wp {
        display: none;
        position: absolute;
        z-index: 999;
        overflow: hidden;
        border: 1px solid #eee;
        height: 460px;
        margin-top: -19px;
    }

    .picZoomer-cursor {
        display: none;
        cursor: crosshair;
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 50%;
        border: 1px solid #eee;
        background-color: rgba(0, 0, 0, .1);
    }

    .picZoomCursor-ico {
        width: 23px;
        height: 23px;
        position: absolute;
        top: 40px;
        left: 40px;
        background: url(images/zoom-ico.png) left top no-repeat;
    }

    .my_img {
        vertical-align: middle;
        /* position: absolute; */
        top: 0;
        bottom: 0;
        margin: auto;
        height: 100%;
    }

    .piclist li {
        display: inline-block;
        width: 90px;
        height: 114px;
        border: 1px solid #eee;
    }

    .piclist li img {
        width: 97%;
        height: auto;
    }

    /* custom style */
    .picZoomer-pic-wp,
    .picZoomer-zoom-wp {
        border: 1px solid #eee;
    }



    .section-bg {
        background-color:rgb(255, 255, 255);
    }

    section {
        padding: 60px 0;
    }

    .row-sm .col-md-6 {
        padding-left: 5px;
        padding-right: 5px;
    }

    /*===pic-Zoom===*/
    ._boxzoom .zoom-thumb {
        width: 90px;
        display: inline-block;
        vertical-align: top;
        margin-top: 0px;
    }

    ._boxzoom .zoom-thumb ul.piclist {
        padding-left: 0px;
        top: 0px;
    }

    ._boxzoom ._product-images {
        width: 80%;
        display: inline-block;
    }

    ._boxzoom ._product-images .picZoomer {
        width: 100%;
    }

    ._boxzoom ._product-images .picZoomer .picZoomer-pic-wp img {
        left: 0px;
    }

    ._boxzoom ._product-images .picZoomer img.my_img {
        width: 100%;
    }

    .piclist li img {
        height: 100px;
        object-fit: cover;
    }

    /*======products-details=====*/
    ._product-detail-content {
        background: #fff;
        padding: 15px;
        border: 1px solid lightgray;
    }

    ._product-detail-content p._p-name {
        color: black;
        font-size: 20px;
        border-bottom: 1px solid lightgray;
        padding-bottom: 12px;
    }

    .p-list span {
        margin-right: 15px;
    }

    .p-list span.price {
        font-size: 25px;
        color: #318234;
    }

    ._p-qty>span {
        color: black;
        margin-right: 15px;
        font-weight: 500;
    }

    ._p-qty .value-button {
        display: inline-flex;
        border: 0px solid #ddd;
        margin: 0px;
        width: 30px;
        height: 35px;
        justify-content: center;
        align-items: center;
        background: #fd7f34;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #fff;
    }

    ._p-qty .value-button {
        border: 0px solid #fe0000;
        height: 35px;
        font-size: 20px;
        font-weight: bold;
    }

    ._p-qty input#number {
        text-align: center;
        border: none;
        border-top: 1px solid #fe0000;
        border-bottom: 1px solid #fe0000;
        margin: 0px;
        width: 50px;
        height: 35px;
        font-size: 14px;
        box-sizing: border-box;
    }

    ._p-add-cart {
        margin-left: 0px;
        margin-bottom: 15px;
    }

    .p-list {
        margin-bottom: 10px;
    }

    ._p-features>span {
        display: block;
        font-size: 16px;
        color: #000;
        font-weight: 500;
    }

    ._p-add-cart .buy-btn {
        background-color: #fd7f34;
        color: #fff;
    }

    ._p-add-cart .btn {
        text-transform: capitalize;
        padding: 6px 20px;
        /* width: 200px; */
        border-radius: 52px;
    }

    ._p-add-cart .btn {
        margin: 0px 8px;
    }

</style>

<body class="main-layout footer_to90 about_page">

    <?php include 'header.php' ?>

    <div class="container pt-4 mt-4">
        <div class="about">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>About Us</h2>
                    </div>
                </div>

                <section id="services" class="services section-bg">
                    <div class="container-fluid">
                        <div class="row row-sm">
                            <div class="col-md-6 _boxzoom">
                                <div class="zoom-thumb">
                                    <ul class="piclist">
                                        <li><img src="images/1.Ventilator.png" alt=""></li>
                                        <li><img src="images/2.png" alt=""></li>
                                        <li><img src="images/3. O.T Equipments.png" alt=""></li>
                                        <li><img src="images/4. Electrosurgical Units.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="_product-images">
                                    <div class="picZoomer">
                                        <img class="my_img" src="images/3. O.T Equipments.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="_product-detail-content">
                                    <p class="_p-name"> Milton Bottle </p>
                                    <div class="_p-price-box">
                                        <div class="p-list">
                                            <span> M.R.P. : <i class="fa fa-inr"></i> <del> 1399 </del> </span>
                                            <span class="price"> Rs. 699 </span>
                                        </div>
                                        <div class="_p-add-cart">
                                            <div class="_p-qty">
                                                <span>Add Quantity</span>
                                                <div class="value-button decrease_" id="" value="Decrease Value">-</div>
                                                <input type="number" name="qty" id="number" value="1" />
                                                <div class="value-button increase_" id="" value="Increase Value">+</div>
                                            </div>
                                        </div>
                                        <div class="_p-features">
                                            <span> Description About this product:- </span>
                                            Solid color polyester/linen full blackout thick sunscreen floor curtain
                                            Type: General Pleat
                                            Applicable Window Type: Flat Window
                                            Format: Rope
                                            Opening and Closing Method: Left and Right Biparting Open
                                            Processing Accessories Cost: Included
                                            Installation Type: Built-in
                                            Function: High Shading(70%-90%)
                                            Material: Polyester / Cotton
                                            Style: Classic
                                            Pattern: Embroidered
                                            Location: Window
                                            Technics: Woven
                                            Use: Home, Hotel, Hospital, Cafe, Office
                                            Feature: Blackout, Insulated, Flame Retardant
                                            Place of Origin: India
                                            Name: Curtain
                                            Usage: Window Decoration
                                            Keywords: Ready Made Blackout Curtain
                                        </div>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <ul class="spe_ul"></ul>
                                            <div class="_p-qty-and-cart">
                                                <div class="_p-add-cart">
                                                    <button class="btn-theme btn buy-btn" tabindex="0">
                                                        <i class="fa fa-shopping-cart"></i> Buy Now
                                                    </button>
                                                    <button class="btn-theme btn btn-success" tabindex="0">
                                                        <i class="fa fa-shopping-cart"></i> Add to Cart
                                                    </button>
                                                    <input type="hidden" name="pid" value="18" />
                                                    <input type="hidden" name="price" value="850" />
                                                    <input type="hidden" name="url" value="" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>  
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script>
        ;
        (function($) {
            $.fn.picZoomer = function(options) {
                var opts = $.extend({}, $.fn.picZoomer.defaults, options),
                    $this = this,
                    $picBD = $('<div class="picZoomer-pic-wp"></div>').css({
                        'width': opts.picWidth + 'px',
                        'height': opts.picHeight + 'px'
                    }).appendTo($this),
                    $pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
                    $cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
                    cursorSizeHalf = {
                        w: $cursor.width() / 2,
                        h: $cursor.height() / 2
                    },
                    $zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
                    $zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
                    picBDOffset = {
                        x: $picBD.offset().left,
                        y: $picBD.offset().top
                    };


                opts.zoomWidth = opts.zoomWidth || opts.picWidth;
                opts.zoomHeight = opts.zoomHeight || opts.picHeight;
                var zoomWPSizeHalf = {
                    w: opts.zoomWidth / 2,
                    h: opts.zoomHeight / 2
                };

                //初始化zoom容器大小
                $zoomWP.css({
                    'width': opts.zoomWidth + 'px',
                    'height': opts.zoomHeight + 'px'
                });
                $zoomWP.css(opts.zoomerPosition || {
                    top: 0,
                    left: opts.picWidth + 30 + 'px'
                });
                //初始化zoom图片大小
                $zoomPic.css({
                    'width': opts.picWidth * opts.scale + 'px',
                    'height': opts.picHeight * opts.scale + 'px'
                });

                //初始化事件
                $picBD.on('mouseenter', function(event) {
                    $cursor.show();
                    $zoomWP.show();
                    $zoomPic.attr('src', $pic.attr('src'))
                }).on('mouseleave', function(event) {
                    $cursor.hide();
                    $zoomWP.hide();
                }).on('mousemove', function(event) {
                    var x = event.pageX - picBDOffset.x,
                        y = event.pageY - picBDOffset.y;

                    $cursor.css({
                        'left': x - cursorSizeHalf.w + 'px',
                        'top': y - cursorSizeHalf.h + 'px'
                    });
                    $zoomPic.css({
                        'left': -(x * opts.scale - zoomWPSizeHalf.w) + 'px',
                        'top': -(y * opts.scale - zoomWPSizeHalf.h) + 'px'
                    });

                });
                return $this;

            };
            $.fn.picZoomer.defaults = {
                picHeight: 460,
                scale: 2.5,
                zoomerPosition: {
                    top: '0',
                    left: '380px'
                },

                zoomWidth: 400,
                zoomHeight: 460
            };
        })(jQuery);



        $(document).ready(function() {
            $('.picZoomer').picZoomer();
            $('.piclist li').on('click', function(event) {
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src', $pic.attr('src'));
            });

            var owl = $('#recent_post');
            owl.owlCarousel({
                margin: 20,
                dots: false,
                nav: true,
                navText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ],
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    },
                    1200: {
                        items: 4
                    }
                }
            });

            $('.decrease_').click(function() {
                decreaseValue(this);
            });
            $('.increase_').click(function() {
                increaseValue(this);
            });

            function increaseValue(_this) {
                var value = parseInt($(_this).siblings('input#number').val(), 10);
                value = isNaN(value) ? 0 : value;
                value++;
                $(_this).siblings('input#number').val(value);
            }

            function decreaseValue(_this) {
                var value = parseInt($(_this).siblings('input#number').val(), 10);
                value = isNaN(value) ? 0 : value;
                value < 1 ? value = 1 : '';
                value--;
                $(_this).siblings('input#number').val(value);
            }
        });
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>