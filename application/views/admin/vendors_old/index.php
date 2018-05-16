<div class="right_col" role="main">

   <div class="x_title">

           

            <ul class="nav navbar-right panel_toolbox">

               <a href="<?= base_url("admin/vendors/add_vendor"); ?>" style="color:white;" class="btn btn-primary" role="button"  data-target="#new-user-reg">Add Vendors</a> 

            </ul>

            <div class="clearfix"></div>

          </div>

      <div class="">



        <div class="page-title">



          <div class="title_right pull-right">



            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">



            <form role="form" action="<?php echo base_url(); ?>admin/vendors/search" method="post">



              <div class="input-group">



                <input type="text" name="search" class="form-control" placeholder="Search for...">



                <span class="input-group-btn">



                <button class="btn btn-default" type="submit">Go!</button>



                </span>



                </div>

                </form>



            </div>



          </div>



        </div>



        <div class="clearfix"></div>



        <div class="row">



          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">



            <div class="x_panel">



              <div class="x_title">



                <h2>Vendors</h2>



     

                <div class="clearfix"></div>



              </div>



              <div class="x_content table-responsive">



                <table class="table table-bordered">



                  <thead>



                    <tr>



                      <th>Sr.No</th>



                      <th>User Name</th>



                      <th>Email</th>



                      <th>Mobile</th>



                     <th>View</th>



                      <th>Delete</th>



                    </tr>



                  </thead>



                  <?php if(!empty($vendorsdata)): ?> 



                  <tbody>



                   <?php $count = $this->uri->segment(4, 0);



              

                   foreach($vendorsdata as $vendors_data){?>



                    <tr>



                      <td><?= ++$count ?></td>



                      <td><?php  echo $vendors_data->vendor_name; ?></td>



                      <td><?php  echo $vendors_data->vendor_email; ?></td>



                      <td><?php  echo $vendors_data->vendor_mobile; ?></td>



                     <td><a href="<?php echo base_url(); ?>admin/vendors/view/<?php  echo $vendors_data->vendor_id; ?>"><i class="fa fa-eye" style="font-size:18px"></i></a></td>



                      <td><a href="<?php echo base_url(); ?>admin/vendors/delete/<?php  echo $vendors_data->vendor_id; ?>" onclick="return checkDelete('<?php  echo $vendors_data->vendor_name; ?>')"><i class="fa fa-trash" style="font-size:18px"></i></a></td>



                    </tr>



                     <?php  } ?>



              </tbody>



                  <?php else: ?>

                    <center><strong>No Records Found</strong></center>

                  <?php endif; ?>



                </table>



              </div>



            </div>



          </div>



          <center><?= $this->pagination->create_links(); ?></center>

          

          <div class="clearfix"></div>



        </div>



      </div>



    </div>



<script language="JavaScript" type="text/javascript">



function checkDelete(id)



{



  



return confirm('Are you sure want to delete "'+id +'" user?');



}



</script>