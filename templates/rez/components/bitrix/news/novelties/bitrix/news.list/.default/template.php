
 <div id="productslider" class="owl-carousel owl-theme">

 <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="item">
                <div class="product">
                    <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"
                       data-placement="left">
                        <i class="glyphicon glyphicon-heart"></i>
                    </a>

                    <div class="image">
                        <div class="quickview">
                            <a title="Quick View" class="btn btn-xs  btn-quickview" data-target="#product-details-modal"
                               data-toggle="modal"> Quick View </a>
                        </div>
                        <a href="product-details.html"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                                            class="img-responsive"></a>

                        <div class="promotion"><span class="new-product"> NEW</span> <span
                                class="discount"><?=$arItem["DISPLAY_PROPERTIES"]["discount"]["VALUE"]?></span></div>
                    </div>
                    <div class="description">
                        <h4><a href="product-details.html"><?echo $arItem["NAME"]?></a></h4>

                        <p><?=$arItem["DETAIL_TEXT"]?></p>
                        <span class="size"><?=$arItem["DISPLAY_PROPERTIES"]["size"]["VALUE"]?></span></div>
                    <div class="price"><span><?=$arItem["DISPLAY_PROPERTIES"]["price"]["VALUE"]?></span></div>
                    <div class="action-control"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn btn-primary"> <span class="add2cart"><i
                            class="glyphicon glyphicon-shopping-cart"> </i> <?=$arItem["DISPLAY_PROPERTIES"]["button"]["VALUE"]?> </span> </a></div>
                </div>
            </div>
			<?endforeach;?>    
</div>
        <!--/.productslider-->






