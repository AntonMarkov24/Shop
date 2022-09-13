







<?foreach($arResult["ITEMS"] as $arItem):?>
	
	<? if($arItem["PROPERTIES"]["TYPE"]["VALUE"] == 1): ?>
	<div class="slider-item slider-item-img1">
                    	<div class="sliderInfo">
                        	<div class="container">
                            	<div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull ">
                                	<div class="inner text-center">
                                    	<div class="topAnima animated">
                                        	<h1 class="uppercase xlarge"><?=$arItem["NAME"]?></h1>

                                        	<h3 class="hidden-xs"> <?=$arItem["PREVIEW_TEXT"];?></h3>
                                   		 </div>
                                    	<a class="btn btn-danger btn-lg bottomAnima animated opacity0" href="novelties"><?=$arItem["DISPLAY_PROPERTIES"]["BATTONNAME"]["VALUE"];?>
                                        	<span class="arrowUnicode">►</span></a></div>
                            	</div>
                        	</div>
                    	</div>
                    	<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive parallaximg sliderImg" alt="img"></div>
	<? endif; ?>
	<? if($arItem["PROPERTIES"]["TYPE"]["VALUE"] == 2): ?>
		<div class="slider-item slider-item-img3 ">
                    <div class="sliderInfo">
                        <div class="container">
                            <div class="col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs">
                                <div class="inner">
                                    <h1><?=$arItem["NAME"]?></h1>

                                    <h3 class="price "> <?=$arItem["PREVIEW_TEXT"];?></h3>

                                    <p class="hidden-xs"><?=$arItem["DETAIL_TEXT"];?> </p>
                                    <a href="novelties" class="btn btn-primary"><?=$arItem["DISPLAY_PROPERTIES"]["BATTONNAME"]["VALUE"];?><span class="arrowUnicode">►</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive parallaximg sliderImg" alt="img"></div>
	<? endif; ?>
<?endforeach;?>