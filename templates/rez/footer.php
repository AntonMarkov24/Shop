<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<?
$sCurPage = $APPLICATION->GetCurPage(false);
if ($sCurPage == "/") {
    $bIsMain = true;
}
?>

</div>
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                            <h4><a class="inline" href="callto:+88016000000"> <strong> <i class="fa fa-phone"> </i> 
                        
                        
                            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/phone.php"
	)
);?>
                        
                        </strong> </a></h4>
                            <h4><a class="inline" href="mailto:help@tshopweb.com"> <i class="fa fa-envelope-o"> </i>
                                help@tshopweb.com </a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="index.html"> Home </a></li>
                        <li><a href="category.html"> Category </a></li>
                        <li><a href="category2.html"> Category Style 2 [Parallax] </a></li>
                        <li><a href="sub-category.html"> Sub Category </a></li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Information </h3>
                    <ul>
                        <li><a href="product-details.html"> Product Details </a></li>
                        <li><a href="product-details-style2.html"> Product Details Version 2 </a></li>
                        <li><a href="cart.html"> Cart </a></li>
                        <li><a href="about-us.html"> About us </a></li>
                        <li><a href="about-us-2.html"> About us 2 </a></li>
                        <li><a href="contact-us.html"> Contact us </a></li>
                        <li><a href="contact-us-2.html"> Contact us 2 </a></li>
                        <li><a href="terms-conditions.html"> Terms &amp; Conditions </a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> My Account </h3>
                    <ul>
                        <li><a href="account-1.html"> Account Login </a></li>
                        <li><a href="account.html"> My Account </a></li>
                        <li><a href="my-address.html"> My Address </a></li>
                        <li><a href="wishlist.html"> Wish List </a></li>
                        <li><a href="order-list.html"> Order list </a></li>
                        <li><a href="order-status.html"> Order Status </a></li>
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Stay in touch </h3>
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Subscribe <i
                                        class="fa fa-long-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                        <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                        <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; TSHOP 2014. All right reserved. </p>

            <div class="pull-right paymentMethodImg"><img height="30" class="pull-right"
                                                          src="<?=SITE_TEMPLATE_PATH?>/images/site/payment/master_card.png" alt="img"> <img
                    height="30" class="pull-right" src="<?=SITE_TEMPLATE_PATH?>/images/site/payment/visa_card.png" alt="img"><img height="30"
                                                                                                          class="pull-right"
                                                                                                          src="<?=SITE_TEMPLATE_PATH?>/images/site/payment/paypal.png"
                                                                                                          alt="img">
                <img height="30" class="pull-right" src="<?=SITE_TEMPLATE_PATH?>/images/site/payment/american_express_card.png" alt="img"> <img
                        height="30" class="pull-right" src="<?=SITE_TEMPLATE_PATH?>/images/site/payment/discover_network_card.png" alt="img">
                <img height="30" class="pull-right" src="<?=SITE_TEMPLATE_PATH?>/images/site/payment/google_wallet.png" alt="img">

            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>

<? if ($bIsMain == true): ?>
<div class="modal fade hide" id="modalAds" role="dialog">
    <div class="modal-dialog  modal-bg-1">
        <div class="modal-body-content">
            <a class="close" data-dismiss="modal">??</a>

            <div class="modal-body">
                <div class="col-lg-6 col-sm-8 col-xs-8">
                    <h3>enter your email to receive</h3>

                    <p class="discountLg">10% OFF </p>

                    <p>We invite you to subscribe to our newsletter and receive 10% discount.
                    </p>

                    <div class="clearfx">
                        <form id="newsletter" class="newsletter">
                            <input type="text" id="subscribe" name="s" placeholder="Enter email">
                            <button class="subscribe-btn">Subscribe</button>
                        </form>
                    </div>

                    <p><a href="category.html" class="link shoplink"> SHOP NOW <i class="fa fa-caret-right"> </i> </a>
                    </p>


                </div>
            </div>

        </div>
    </div>
</div>
<?endif?>
<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>



<script src="<?=SITE_TEMPLATE_PATH?>/assets/bootstrap/js/bootstrap.min.js"></script>

<script>
    // this script required for subscribe modal
    $(window).load(function () {
        // full load
        $('#modalAds').modal('show');
        $('#modalAds').removeClass('hide');
    });

</script>

<!-- include jqueryCycle plugin -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.cycle2.min.js"></script>

<!-- include easing plugin -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.easing.1.3.js"></script>

<!-- include  parallax plugin -->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include checkRadio plugin //Custom check & Radio --> 
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/ion-checkRadio/ion.checkRadio.min.js"></script>



<!-- include grid.js // for equal Div height -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/grids.js"></script>


<!-- include carousel slider plugin  -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/owl.carousel.min.js"></script>


<!-- jQuery minimalect // custom select   -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.minimalect.min.js"></script>


<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/bootstrap.touchspin.js"></script>


<!-- include custom script for only homepage  -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/home.js"></script>


<!-- include custom script for site -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/script.js"></script>

<script>

</script>


<?
//use Bitrix\Main\Page\Asset;
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/bootstrap/js/bootstrap.min.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.cycle2.min.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.easing.1.3.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.parallax-1.1.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/helper-plugins/jquery.mousewheel.min.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.mCustomScrollbar.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/ion-checkRadio/ion.checkRadio.min.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/grids.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/owl.carousel.min.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.minimalect.min.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/bootstrap.touchspin.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/home.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/script.js");
?>



</body>
<?$APPLICATION->ShowPanel()?>

</html>
