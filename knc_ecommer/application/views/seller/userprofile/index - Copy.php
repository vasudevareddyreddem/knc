<div class="content-wrapper mar_t_con">
    <section class="content">
        <?php if($this->session->flashdata('message')): ?>
        <div class="alert dark alert-success alert-dismissible" id="infoMessage">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('message');?></div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-headshot">

                            <a  data-toggle="modal" data-target="#myModal">
                                <span style="position:absolute;position: absolute;top:66px;right:120px;
											background: #207ba5; padding:5px; border-radius:50%;color:#fff;" class="glyphicon glyphicon-edit">
								</span>
                            </a>
                            <?php foreach($profiles as $profile){ ?>
                            <?php if($profile[ 'profile_pic']=="" ) { ?>
                            <div class="user-image">
                                <img style="border-radius:50%; border:4px solid #f4f4f4;" class="img-responsive" src="<?php echo base_url();?>uploads/profile/default.jpg" class="img-circle" height="65" width="65" alt="User Image">
                            </div>
                            <?php } else {?>
                            <div class="user-image">
                                <img style="border-radius:50%; border:4px solid #f4f4f4;" class="img-responsive" src="<?php echo base_url();?>uploads/profile/<?php  echo $profile['profile_pic']; ?>" class="img-circle" height="65" width="65" alt="User Image">
                            </div>
                            <?php } ?>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="card-content">
                        <div class="card-content-member">
                            <h4 class="m-t-0">Your ID:<?php echo ucfirst($personal_deatils['seller_rand_id']); ?></h4>
                            <h4 class="m-t-0">Your Name:<?php echo ucfirst($personal_deatils['seller_name']); ?></h4>
                            <p class="m-0"><i class="pe-7s-map-marker"></i>
                               <?php echo ucfirst($personal_deatils['seller_address']); ?></p>
                        </div>
                        <div class="card-content-languages">

                            <div class="card-content-languages-group">
                                <div>
                                    <h4>Categories</h4>
                                </div>
                                <div>
                                    <ul>
                                        <?php foreach($sellers_cat_display as $cat_data){ ?>
                                        <li>
                                            <?php echo $cat_data->category_name;?>.</li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-stats">
                            <div>
                                <!-- <p class="text-center">Total Orders:
                                        <?php foreach($seller_orders as $order_total){ ?>
                                                    <?php echo $order_total->total_order;?>.                     
                                                    <?php }?> </p> -->
                            </div>
                        </div>
                        <div class="card-footer-message">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="rating-block">
                            <h4>Average user rating</h4>
                            <h2 class="m-b-20">4.3 <small>/ 5</small></h2>
                            <button type="button" class="btn btn-success btn-sm" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h4 class="m-t-0">Rating breakdown</h4>
                        <div class="pull-left">
                            <div class="review-number">
                                <div>5 <span class="glyphicon glyphicon-star"></span>
                                </div>
                            </div>
                            <div class="review-progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 90%">
                                        <span class="sr-only">90% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-number">1</div>
                        </div>
                        <div class="pull-left">
                            <div class="review-number">
                                <div>4 <span class="glyphicon glyphicon-star"></span>
                                </div>
                            </div>
                            <div class="review-progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-number">1</div>
                        </div>
                        <div class="pull-left">
                            <div class="review-number">
                                <div>3 <span class="glyphicon glyphicon-star"></span>
                                </div>
                            </div>
                            <div class="review-progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 70%">
                                        <span class="sr-only">70% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-number">0</div>
                        </div>
                        <div class="pull-left">
                            <div class="review-number">
                                <div>2 <span class="glyphicon glyphicon-star"></span>
                                </div>
                            </div>
                            <div class="review-progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                        <span class="sr-only">60% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-number">0</div>
                        </div>
                        <div class="pull-left">
                            <div class="review-number">
                                <div>1 <span class="glyphicon glyphicon-star"></span>
                                </div>
                            </div>
                            <div class="review-progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-violet progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 50%">
                                        <span class="sr-only">50% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-number">0</div>
                        </div>
                    </div>
                </div>
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-img">
                                <img src="assets/dist/img/avatar.png" class="img-rounded" alt="">
                            </div>
                            <div class="review-block-name"><a href="#">nktailor</a>
                            </div>
                            <div class="review-block-date">January 29, 2016
                                <br/>1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-img">
                                <img src="assets/dist/img/avatar2.png" class="img-rounded" alt="">
                            </div>
                            <div class="review-block-name"><a href="#">nktailor</a>
                            </div>
                            <div class="review-block-date">January 29, 2016
                                <br/>1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-img">
                                <img src="assets/dist/img/avatar3.png" class="img-rounded" alt="">
                            </div>
                            <div class="review-block-name"><a href="#">nktailor</a>
                            </div>
                            <div class="review-block-date">January 29, 2016
                                <br/>1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Profile Pic</h4>
            </div>
            <div class="modal-body">
                <form name="profile_pic" id="profile_pic" action="<?php echo base_url('/seller/user_profile/profile_pic_store'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group nopaddingRight col-md-6 san-lg">
                        <label for="exampleInputFile">Change profile Pic</label>
                        <input type="file" name="picture" id="picture">
                    </div>
					<div class="clearfix"></div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
				<div class="clearfix"></div>
            </div>
		
           
        </div>

    </div>
</div>

</div>


<script src="<?php echo base_url(); ?>assets/dist/js/bootstrapValidator.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#profile_pic').bootstrapValidator({
            fields: {
                picture: {
                    validators: {
                        notEmpty: {
                            message: 'Profile Pic is required'
                        },
                        regexp: {
                            regexp: /\.(jpe?g|png|gif)$/i,
                            message: 'Uploaded file is not a valid image. Only JPG, PNG and GIF files are allowed'
                        }
                    }
                },
            }
        });
    });
</script>