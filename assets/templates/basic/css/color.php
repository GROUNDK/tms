<?php
header("Content-type: text/css; charset: UTF-8");
$color1 = $_GET['color1'];
$color2 = $_GET['color2'];

function checkhexcolor($c)
{
    return preg_match('/^[a-f0-9]{6}$/i', $c);
}

if (isset($_GET['color1']) && !empty($_GET['color1']) && checkhexcolor($_GET['color1'])) {
    $color1 = '#' . $_GET['color1'];
}

if (!$color1) {
    $color1 = "#faa603";
}

if (isset($_GET['color2']) && !empty($_GET['color2']) && checkhexcolor($_GET['color2'])) {
    $color2 = '#' . $_GET['color2'];
}

if (!$color2) {
    $color2 = "#faa603";
}
?>



.cmn-btn, .feature-section .feature-item .feature-icon i, .feature-section .feature-item.active .feature-icon i, .title-border::before, .title-border::after, .pricing-section .pricing-item:hover .pricing-header .sub-title span, .pricing-section .pricing-item.active .pricing-header .sub-title span, .scrollToTop, .feature-item::before, .process-icon, .process-area::before {
    background-color: <?php echo $color1 ?> !important;
}

 .choose-section .choose-item:hover .choose-content .title, .choose-section .choose-item.active .choose-content .title{
    border-color: <?php echo $color2 ?> !important;
}


.text-color-1, .header-bottom-area .navbar-collapse .main-menu li a:hover, .header-bottom-area .navbar-collapse .main-menu li a.active, .section-title span, .process-section .process-item .process-devider::after, .feature-section .feature-item:hover .feature-content .title, .pricing-section .pricing-item .pricing-body .pricing-list li i, .footer-widget ul li i, .navbar-toggler span{
    color: <?php echo $color1 ?> !important; 
}



.pricing-section .pricing-item .pricing-header .sub-title span, .preloader, .call-to-action-section, .feature-item, .cmn-btn-active, .choose-section .choose-item .choose-icon i, .header-top-area, .bg-overlay-primary:before, .bg-overlay-primary-two:before, .privacy-area {
background-color: <?php echo $color2 ?>;
}

.cmn-btn:focus, .cmn-btn:hover {
    box-shadow: 0 0 20px <?php echo $color1 ?>99 !important;
}

::selection {
    background-color: <?php echo $color1 ?> !important;
    color: white;
}

.feature-section .feature-item:hover .feature-icon i, .feature-section .feature-item.active .feature-icon i  {
    background-color: <?php echo $color1 ?>;
    color: white !important;
}

.process-section .process-item .process-devider {
    background-image: linear-gradient(90deg, <?php echo $color1 ?>, <?php echo $color1 ?> 40%, transparent 40%, transparent 100%);
}

.pricing-section .pricing-item::before, .pricing-section .pricing-item::after {
    background-color: <?php echo $color1 ?>1a;
}

*::-webkit-scrollbar-button, *::-webkit-scrollbar-thumb {
    background-color: <?php echo $color1 ?>;
}

.client-section .client-content .client-icon i {
    color: <?php echo $color1 ?>33;
}


.footer-social li a:hover, .footer-social li a.active {
  background-color: <?php echo $color1 ?>;
}
.footer-social li a:hover i, .footer-social li a.active i {
  color: #fff !important;
}

.header-bottom-area {
    background-color: <?php echo $color2 ?>99;
}