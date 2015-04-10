<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <?php $i=0; foreach($this->bannerSlider as $key => $value) { ?>
	<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i == 0){echo 'class="active"';} ?>></li>
  <?php $i++; } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php $i=0; foreach($this->bannerSlider as $key => $value) { ?>
	<div class="item <?php if($i == 0){echo 'active';}?>">
      <img src="<?php echo $value['bnr_img'];?>" alt="<?php echo $value['bnr_alt'];?>">
    </div>
  <?php $i++; } ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
<div class="row">
  <h2>Featured</h2><hr>
  <div class="col-xs-6 col-sm-6 col-md-2">
    <div class="thumbnail product-featured text-center">
      <img src="http://www.csctohome.com/image/cache//catalog/product/Alcatel/Alcatel_Idol%20Flash_Gray-228x228.jpg" alt="Alcatel Idol Flash">
      <div class="caption">
        <span class="featured-prod-name">Alcatel Idol Flash</span>
        <span class="featured-prod-price">5,490.-</span>
		<p><a href="" class="btn btn-default">Buy Now</a></p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-2">
    <div class="thumbnail product-featured text-center">
      <img src="http://www.csctohome.com/image/cache//catalog/product/Alcatel/Alcatel_Idol%20Flash_Gray-228x228.jpg" alt="Alcatel Idol Flash">
      <div class="caption">
        <span class="featured-prod-name">Alcatel Idol Flash</span>
        <span class="featured-prod-price">5,490.-</span>
		<p><a href="" class="btn btn-default">Buy Now</a></p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-2">
    <div class="thumbnail product-featured text-center">
      <img src="http://www.csctohome.com/image/cache//catalog/product/Alcatel/Alcatel_Idol%20Flash_Gray-228x228.jpg" alt="Alcatel Idol Flash">
      <div class="caption">
        <span class="featured-prod-name">Alcatel Idol Flash</span>
        <span class="featured-prod-price">5,490.-</span>
		<p><a href="" class="btn btn-default">Buy Now</a></p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-2">
    <div class="thumbnail product-featured text-center">
      <img src="http://www.csctohome.com/image/cache//catalog/product/Alcatel/Alcatel_Idol%20Flash_Gray-228x228.jpg" alt="Alcatel Idol Flash">
      <div class="caption">
        <span class="featured-prod-name">Alcatel Idol Flash</span>
        <span class="featured-prod-price">5,490.-</span>
		<p><a href="" class="btn btn-default">Buy Now</a></p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-2">
    <div class="thumbnail product-featured text-center">
      <img src="http://www.csctohome.com/image/cache//catalog/product/Alcatel/Alcatel_Idol%20Flash_Gray-228x228.jpg" alt="Alcatel Idol Flash">
      <div class="caption">
        <span class="featured-prod-name">Alcatel Idol Flash</span>
        <span class="featured-prod-price">5,490.-</span>
		<p><a href="" class="btn btn-default">Buy Now</a></p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-2">
    <div class="thumbnail product-featured text-center">
      <img src="http://www.csctohome.com/image/cache//catalog/product/Alcatel/Alcatel_Idol%20Flash_Gray-228x228.jpg" alt="Alcatel Idol Flash">
      <div class="caption">
        <span class="featured-prod-name">Alcatel Idol Flash</span>
        <span class="featured-prod-price">5,490.-</span>
		<p><a href="" class="btn btn-default">Buy Now</a></p>
      </div>
    </div>
  </div>

</div>

<div class="row">
  <h2>Our Product</h2><hr>
  <div class="col-xs-6 col-md-3 text-center">
    <a href="" class="thumbnail">
      <img src="http://www.csctohome.com/image/cache//catalog/componant/icon/Mobile%202%20Icon-100x100.png" alt="...">
    </a>
	<div class="caption"><h4>MOBILE</h4></div>
  </div>
  <div class="col-xs-6 col-md-3 text-center">
    <a href="" class="thumbnail">
      <img src="http://www.csctohome.com/image/cache//catalog/componant/icon/Laptop-icon-100x100.png" alt="...">
    </a>
	<div class="caption"><h4>IT</h4></div>
  </div>
  <div class="col-xs-6 col-md-3 text-center">
    <a href="" class="thumbnail">
      <img src="http://www.csctohome.com/image/cache//catalog/componant/icon/Seting%20Icon-100x100.png" alt="...">
    </a>
	<div class="caption"><h4>ACCESSORY</h4></div>
  </div>
  <div class="col-xs-6 col-md-3 text-center">
    <a href="" class="thumbnail">
      <img src="http://www.csctohome.com/image/cache//catalog/componant/icon/Mobile2%20Icon-100x100.png" alt="...">
    </a>
	<div class="caption"><h4>wisebook</h4></div>
  </div>

</div>

<div class="row">
  <h3>Promotion</h3>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://www.tgfone.com/images/2015-APR-CITIBANK-CASHBACK-2.png" alt="...">
      <div class="caption">
        <span>โปรโมชั่นส่งเสริมการขาย Citi Bank</span>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://www.tgfone.com/images/2015-APR-CITIBANK-CASHBACK-2.png" alt="...">
      <div class="caption">
        <span>โปรโมชั่นส่งเสริมการขาย Citi Bank</span>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://www.tgfone.com/images/2015-APR-CITIBANK-CASHBACK-2.png" alt="...">
      <div class="caption">
        <span>โปรโมชั่นส่งเสริมการขาย Citi Bank</span>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://www.tgfone.com/images/2015-APR-CITIBANK-CASHBACK-2.png" alt="...">
      <div class="caption">
        <span>โปรโมชั่นส่งเสริมการขาย Citi Bank</span>
      </div>
    </div>
  </div>
  
</div>

<div class="row">

  <div class="col-xs-12 col-md-4">
  <h3>News</h3>
    <div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
	<div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
	<div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
  </div>
  <div class="col-xs-12 col-md-4">
  <h3>New shop</h3>
    <div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
	<div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
	<div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
  </div>
  <div class="col-xs-12 col-md-4">
  <h3>Reviews</h3>
    <div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
	<div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
	<div class="media">
	  <div class="media-left media-middle">
		<a href="#">
		  <img style="box-shadow: inset 0 1px 0 rgba(255,255,255,.10),0 2px 5px rgba(0,0,0,.100); margin:4px;" class="media-object img-circle" src="http://csci.co.th/modules/mod_globalnews/thumbs/02/c_90_90_16777215_102_themall-koratch.png" alt="...">
		</a>
	  </div>
	  <div class="media-body">
		<a href="#"><h4 class="media-heading">สาขาเปิดใหม่ เดอะมอลล์ </h4></a>
		ปิดให้บริการแล้ว CSC Shop สาขา เดอะมอลล์ โคราช ชั้น 2
	  </div>
	</div>
  </div>
  
</div>


