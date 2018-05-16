
<div class="content-wrapper">
		<section class="content" style="padding-top:100px;">
		<div class="container">
			<div class="row">
				<?php if($this->session->flashdata('passworderror')): ?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('passworderror');?></div>	
					<?php endif; ?>
						<?php if($this->session->flashdata('updatpassword')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('updatpassword');?></div>	
					<?php endif; ?>
					<?php if(validation_errors()):?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo validation_errors(); ?></div>	
					<?php  endif;?>
				<form enctype="multipart/form-data" method="post" name="editcategory" id="editcategory"  action="<?php echo base_url('inventory/updatecategorypost'); ?>" class="well col-md-6 col-md-offset-2" style="background-color:#fff;">
				<div class=""  style="font-size:20px;font-weight:600;border-bottom:1px solid #ddd;margin-bottom:10px;padding-bottom:10px;">Edit category</div>
				<input type="hidden" name="catid" id="catid" value="<?php echo isset($category_details['category_id'])?$category_details['category_id']:''; ?>">
				<div class="form-group">
				<label for="category">category Name</label>
				<input type="text"  class="form-control" id="categoryname"  name="categoryname" value="<?php echo isset($category_details['category_name'])?$category_details['category_name']:''; ?>"/>
				</div>
				<div class="form-group">
				<label for="category">Category Image</label>
				<input type="file"  class="form-control" id="cat_image"  name="cat_image"/>
				<span><?php echo isset($category_details['category_image'])?$category_details['category_image']:''; ?></span>
				</div>
				
				<div class="form-group">
				<label for="category">Category File</label>
				<input type="file"  class="form-control" id="categoryfile" name="categoryfile" />
				<?php if(isset($category_details['documetfile']) && $category_details['documetfile']!=''){ ?>
				<a href="<?php echo base_url('assets/sellerfile/category/'.$category_details['documetfile']);?>"><?php echo $category_details['documetfile']; ?></a>
				<?php } ?>
				</div>
				<div class="btn-group-vertical btn-block text-center" role="group">
				<button type="submit" class="btn btn-danger btn-lg">Update</button>
				
				</div>
				</form>
			</div>
		</div>
    
		</section>
 </div>
   
	<script type="text/javascript">

$(document).ready(function() {
    $('#editcategory').bootstrapValidator({
       
        fields: {
            categoryname: {
					validators: {
					notEmpty: {
						message: 'Category Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9.&$-_, ]+$/,
					message: ' Category Name can only consist of alphanumaric, space and dot'
					}
				}
			},
			cat_image: {
           validators: {
          regexp: {
          regexp: /\.(jpe?g|png)$/i,
          message: 'Uploaded file is not a valid image. Only JPG, PNG and Jpeg files are allowed'
          }
            }
      }, 
			
			categoryfile: {
					validators: {
					regexp: {
					regexp: /\.(xlsx|xls)$/i,
					message: 'Uploaded file is not a valid image. Only xl files are allowed'
					}
				}
			}
        }
    });
});
</script>