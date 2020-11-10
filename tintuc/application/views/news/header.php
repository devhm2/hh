<div class="header">
<!-- <img src="<?php echo base_url('news/imgs/t1.jpg');?>" width="100%" height="250px" /> -->
<div class="main-slider" data-block-type="main_slider">
    <div class="container">
        <div class="slick-slider slick-slider-visible" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "dots": false, "arrows":true, "speed": 500, "autoplaySpeed": 6000}'>
            <div class='imgc'><img src="<?php echo base_url('news/imgs/hpbdt10.png');?>"  alt="" class="lazyload" /></div>
            <div class='imgc'><img src="<?php echo base_url('news/imgs/wonmen.png');?>" alt="Slider 2" class="lazyload" /></div>
            <div class='imgc'><img src="<?php echo base_url('news/imgs/phongchay.png');?>" alt="Slider 4" class="lazyload" /></div>
        </div>        
    </div>
</div>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/news/__main.min.2020102.css" />
<!--  -->
    <!-- #region Phần css tùy chỉnh-->
    <style>.main-color-1 { color: #4AA02C; }
.bg-main-color-1 { background-color: #4AA02C; }
.bg-main-color-1 .bg-inherit { background-color: #4AA02C; }
.bg-main-color-1-fade { background-color: rgba(74, 160, 44,0.1) }
.bd-main-color-1{ border-color:#4AA02C; }
.main-color-1-active .active,
.main-color-1-active .slick-current{ color: #4AA02C; }

.main-color-2 { color: #FF7C10; }
.bg-main-color-2 { background-color: #FF7C10; }
.bg-main-color-2 .bg-inherit { background-color: #FF7C10; }
.bg-main-color-2-fade { background-color: rgba(255, 124, 16,0.1) }
.bd-main-color-2{ border-color:#FF7C10; }
.slick-slider-btn-main-color-2 .slick-arrow{ background-color: #FF7C10; border-color: #FF7C10; }
.main-color-2-active .active,
.main-color-2-active .slick-current{ color: #FF7C10; }

.category[data-blocklayouts*='_itemborderimg_'][data-blocklayouts*='_itembordercolor1_'] .imgc, .category[data-blocklayouts*='_itemborderimg_'][data-blocklayouts*='_itembordercolor1_'] .imgc0,
.category[data-blocklayouts*='_itemborder_'][data-blocklayouts*='_itembordercolor1_'] .item,
.category[data-blocklayouts*='_bordercolor1_']{
    border-color: rgba(74, 160, 44,0.2) !important;
}
.category[data-blocklayouts*='_itemborderimg_'][data-blocklayouts*='_itembordercolor2_'] .imgc, .category[data-blocklayouts*='_itemborderimg_'][data-blocklayouts*='_itembordercolor2_'] .imgc0,
.category[data-blocklayouts*='_itemborder_'][data-blocklayouts*='_itembordercolor2_'] .item,
.category[data-blocklayouts*='_bordercolor2_']{
    border-color: rgba(255, 124, 16,0.2) !important;
}

.text-color { color: #333333; }
.text-color-fade { color: #999999; }

body{ color:#333333; font-size:15px }

a:hover{ color:#FF7C10 }
a.active{ color:#FF7C10 }
.active>a{ color:#FF7C10 }
.active>i.fa{ color:#FF7C10 }
.tabs-underline .active:after{ background-color:#FF7C10 }
.tabs-underline .tab:hover:after{ background-color:#FF7C10 }

.tabs-underline-color-1 .active:after{ background-color:#4AA02C }
.tabs-underline-color-1 .tab:hover:after{ background-color:#4AA02C }
.tabs-underline-color-1 a:hover{ color:#4AA02C }
.tabs-underline-color-1 a.active{ color:#4AA02C }
.tabs-underline-color-1 .active>a{ color:#4AA02C }
.tabs-underline-color-1 .active>i.fa{ color:#4AA02C }

/*#region Chỉnh màu hover của table */
.table-hover tbody tr:hover { background-color: rgba(74, 160, 44, 0.1) }
/*#endregion */

/*#region Chỉnh màu các nút, viết cùng ở file color.scss để tiện thay thế, điều chỉnh */
.btn-primary { background-color: #FF7C10; }
.btn-outline-primary { color: #FF7C10; border-color: #FF7C10; }
.btn-primary-1 { background-color: #4AA02C; }
.btn-outline-primary-1 { color: #4AA02C; border-color: #4AA02C; }

.btn-primary:hover, .btn-primary:active, .btn-primary.disabled,
.btn-outline-primary:hover, .btn-outline-primary:active, .btn-outline-primary.disabled{
    background-color: rgba(255, 124, 16, 0.9) !important;                
}
.btn-primary:focus,
.btn-outline-primary:focus{ box-shadow: 0 0 0 0.2rem rgba(255, 124, 16, 0.5) !important; }

.btn-primary-1:hover, .btn-primary-1:active, .btn-primary-1.disabled,
.btn-outline-primary-1:hover, .btn-outline-primary-1:active, .btn-outline-primary-1.disabled{
    background-color: rgba(74, 160, 44, 0.9) !important;                
}
.btn-primary-1:focus,
.btn-outline-primary-1:focus{ box-shadow: 0 0 0 0.2rem rgba(74, 160, 44, 0.5) !important; }
/*#endregion */.font-size { font-size: 15px; }
.font-size-1 { font-size: 16px; }
.font-size-2 { font-size: 17px; }
.font-size-3 { font-size: 18px; }
.font-size-4 { font-size: 19px; }
.font-size-5 { font-size: 20px; }
.font-size--1 { font-size: 14px; }
.font-size--2 { font-size: 13px; }
.font-size--3 { font-size: 12px; }
.font-size--4 { font-size: 11px; }
.font-size--5 { font-size: 10px; }

/*Font to cho tiêu đều phần giới thiệu danh mục*/
.font-size-large-x { font-size: 50px; }

/*Font to cho tiêu đều danh mục*/
.font-size-large { font-size: 30px; }
.font-size-larger { font-size: 37.5px; }

/*Font trung bình cho tiêu đề bài viết*/
.font-size-medium--2 { font-size: 16px; }
.font-size-medium { font-size: 18px; }
.font-size-medium-2 { font-size: 20px; }
.font-size-medium-4 { font-size: 22px; }

@media (max-width: 767px) {
    /*Font to cho tiêu đều phần giới thiệu danh mục*/
    .font-size-large-x { font-size: 30px; }

    /*Font to cho tiêu đều danh mục*/
    .font-size-large { font-size: 18px; }
    .font-size-larger { font-size: 22.5px; }

    /*Font trung bình cho tiêu đề bài viết*/
    .font-size-medium--2 { font-size: 16px; }
    .font-size-medium { font-size: 17px; }
    .font-size-medium-2 { font-size: 18px; }
    .font-size-medium-2 { font-size: 19px; }
}

.btn,
.form-control{ font-size: 15px; }/*Hạn chế chiều rộng trang trên màn fullhd*/
@media (min-width: 1600px) { .container.container-large { max-width:1230px; } }
/*End - Hạn chế chiều rộng trang trên màn fullhd*/body{ background-image:none; }
.category[data-blocklayouts*='_itemcolor1bg_'] .item { background-color: #4AA02C; }
.category[data-blocklayouts*='_itemcolor2bg_'] .item { background-color: #FF7C10; }</style>
    <!-- #endregion -->

    <!-- #region Các mã có thể nhúng vào thẻ head như Google Analytics, Facebook,... -->





<!-- Google Tag Manager -->
<!-- <script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
    var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:"";j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PG8SJFP');
</script> -->
<!-- End Google Tag Manager -->

<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57b3c6e605cf604546aea569/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script--><style>
    /*body{background:#fff}
.module- .bn-fixed-lr{display:none}
.btn-calls-fixed[data-small-size='1']{right:auto;left:10px}

.item[data-app='news'] .imgc:before, .item[data-app='news'] .imgc0:before,
.item[data-app='blog'] .imgc:before, .item[data-app='blog'] .imgc0:before,
.item[data-app='service'] .imgc:before, .item[data-app='service'] .imgc0:before {
    padding-bottom: 56.25%;
}*/


.header-news .logo img{max-height:40px}

/*#region Chỉnh màu menu chính*/
.menu-main-wrap.bg-main-color-1{
background: rgb(75,160,43);
background: -moz-linear-gradient(left,  rgba(75,160,43,1) 0%, rgba(255,124,16,1) 100%);
background: -webkit-linear-gradient(left,  rgba(75,160,43,1) 0%,rgba(255,124,16,1) 100%);
background: linear-gradient(to right,  rgba(75,160,43,1) 0%,rgba(255,124,16,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4ba02b', endColorstr='#ff7c10',GradientType=1 );
}
.menu-main-wrap.bg-main-color-1 .row.bg-main-color-1,
.menu-main.bg-inherit {background:none}
/*#endregion*/

/*#region Menu các điểm nổi bật ở trang chủ*/
.linked-service-menu-wrap .category-header,
.linked-service-menu-wrap .category-title-wrap{height:auto}
.linked-service-menu-wrap .category-title{line-height:44px}
.linked-service-menu-wrap .category-title>div{font-family:UTMFireHouse;font-size:40px;font-weight:normal;
background: -webkit-linear-gradient(-90deg, #e1cc5d 0%, #e1cc5d 40%, #be241d 60%, #be241d 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;}

.linked-service-menu-wrap .item{border:solid 1px #d5b255;background:rgba(0,0,0,0.7)}
.linked-service-menu-wrap .item-desc{height:auto !important;}
.linked-service-menu-wrap .item-title{font-weight:bold}
.linked-service-menu-wrap .item-desc{color:#dfdfdf}
.linked-service-menu-wrap .item-links{display:none !important}
.linked-service-menu-wrap .item-img{padding:20px 10px}
#homepageblock_DBNPFvej{margin-bottom:150px;position:relative;z-index:1}
#homepageblock_DBNPFvej:after{display:block;content:"";position:absolute;z-index:1;bottom:-110px;left:0;right:0;height:110px;background: linear-gradient(to bottom,  rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);pointer-events: none;}

@media(max-width:767px){
.linked-service-menu-wrap .category-body{overflow-x:auto}
.linked-service-menu-wrap .category-body .row{flex-wrap:nowrap}
.linked-service-menu-wrap .category-body .row div[class^='col']{flex:0 0 75vw}
}
/*#endregion*/

/*#region Làm mờ phần trên của footer cho hòa vào khối hỗ hỗ trợ*/
@media(min-width:992px){
#homepageblock_WDEqFvEQ{position:relative;z-index:2}
#homepageblock_WDEqFvEQ:before{content:"";display:block;position:absolute;z-index:1;pointer-events:none;top:0;right:0;left:0;height:90px;
    background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
    background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
    background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
}
#homepageblock_WDEqFvEQ>.container{position:relative;z-index:2}

#homepageblock_vOVIacLc{position:relative;z-index:2}
#homepageblock_vOVIacLc:before{content:"";display:block;position:absolute;z-index:1;pointer-events:none;bottom:0;right:0;left:0;height:66px;
    background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
    background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%);
    background: linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%);
}
}
/*#endregion*/

/*#region Chỉnh nền footer trên tablet, mobile*/
@media(max-width:991px){
#homepageblock_WDEqFvEQ{background-size:cover}
}
@media(max-width:767px){
.linked-service-menu-wrap .category-title>div{font-size:20px}
.linked-service-menu-wrap .category-title{line-height:25px}
#homepageblock_WDEqFvEQ{padding-bottom:45px !important}
}
/*#endregion*/

/*#region Chỉnh nút trò chuyện trên mobile*/
.btn-calls-fixed{z-index:3}
/*#endregion*/

/*#region Khách hàng nổi bật*/
.category[data-app-category='partnergroup'][data-position='1'] .item-title{font-weight:normal; color:#666;padding-left:5px;padding-right:5px}
.category[data-app-category='partnergroup'][data-position='1']{padding-left:15px;padding-right:15px}
@media(min-width:1360px){
.category[data-app-category='partnergroup'][data-position='1']{padding-left:5%;padding-right:5%;position:relative;z-index:2;background:#fff}
.category[data-app-category='partnergroup'][data-position='1'] .col-xl-12d5 {flex: 0 0 14.28%; max-width: 14.28%;}
}
@media(max-width:767px){
.category[data-app-category='partnergroup'][data-position='1'] .category-body{overflow-x:auto;padding-left:3px}
.category[data-app-category='partnergroup'][data-position='1'] .row{flex-wrap:nowrap}
.category[data-app-category='partnergroup'][data-position='1'] .row div[class^='col']{flex:0 0 75vw}
}
/*#endregion*/

/*#region Ý kiến khách hàng*/
@media(max-width:767px){
.category[data-app-category='customerreviews'][data-position='0'] .category-body{overflow-x:auto;}
.category[data-app-category='customerreviews'][data-position='0'] .row{flex-wrap:nowrap}
.category[data-app-category='customerreviews'][data-position='0'] .row div[class^='col']{flex:0 0 75vw}
}
/*#endregion*/</style>
<script>
    var WebUrl = "https://tatthanh.com.vn/";
    var ApiDomain = "https://iweb.tatthanh.com.vn/";
    var Lang = "";

    var ModuleRewrite = "blog";

    var NoImageSrcThumb = "/pic/noimage/no-image-thumb.png";
    var NoImageSrcSmall = "/pic/noimage/no-image-small.png";
    var NoImageSrcCompact = "/pic/noimage/no-image-compact.png";
    var NoImageSrcMedium = "/pic/noimage/no-image-medium.png";
    var NoImageSrcLarge = "/pic/noimage/no-image-large.png";

    var NoMaleImageSrcThumb = "/pic/noimage/man-thumb.png";
    var NoMaleImageSrcSmall = "/pic/noimage/man-small.png";
    var NoMaleImageSrcCompact = "/pic/noimage/man-compact.png";
    var NoMaleImageSrcMedium = "/pic/noimage/man-medium.png";
    var NoMaleImageSrcLarge = "/pic/noimage/man-large.png";

    var NoFemaleImageSrcThumb = "/pic/noimage/woman-thumb.png";
    var NoFemaleImageSrcSmall = "/pic/noimage/woman-small.png";
    var NoFemaleImageSrcCompact = "/pic/noimage/woman-compact.png";
    var NoFemaleImageSrcMedium = "/pic/noimage/woman-medium.png";
    var NoFemaleImageSrcLarge = "/pic/noimage/woman-large.png";

    var popupDelayMiliseconds = 30000;
    var popupSleepHours = 1;
</script>
<script src="<?php echo base_url('news/jquery/__main.min.20201023.15h28.js');?>"></script>