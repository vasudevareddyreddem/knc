<div class="content-wrapper pad_t100">
	<div class="">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                <?php $firstMarked = false; ?>
                <?php foreach($preview as $pre) {?>
                  <div class="item <?php echo !$firstMarked ? "active":"";?>">
                    <img src="<?php echo base_url();?>uploads/banners/<?php  echo 
                    $pre->file_name; ?>" alt="First slide">
                  </div>
                  <?php $firstMarked = true;?>
                  <?php } ?>
                  <!-- <div class="item">
                    <img src="http://localhost/cartinhour/assets/home/images/food_bnr.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://localhost/cartinhour/assets/home/images/food_bnr.jpg" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div> -->
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<br>
<br>
<br>
<br>
<br>
</div>
