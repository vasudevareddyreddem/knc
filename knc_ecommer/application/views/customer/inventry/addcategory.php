
<div class="content-wrapper">
		<section class="content" style="padding-top:100px;">
		<div class="container">
			<div class="row">
			
						<?php if($this->session->flashdata('updatpassword')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('updatpassword');?></div>	
					<?php endif; ?>
					<?php if($this->session->flashdata('addsuccess')){ ?>

					<div class="alert dark alert-warning alert-dismissible" id="infoMessage">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					 <?php foreach($this->session->flashdata('addsuccess') as $error){?>
					
					<?php echo $error.'<br/>'; ?>
					
					
					<?php } ?></div><?php } ?>
					<?php if(validation_errors()):?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo validation_errors(); ?></div>	
					<?php  endif;?>
				<form enctype="multipart/form-data" method="post" name="addcategory" id="addcategory"  action="<?php echo base_url('inventory/addcategorypost'); ?>" class="well col-md-6 col-md-offset-2" style="background-color:#fff;">
					<?php if($this->session->flashdata('error')): ?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('error');?></div>	
					<?php endif; ?>
				<div class=""  style="font-size:20px;font-weight:600;border-bottom:1px solid #ddd;margin-bottom:10px;padding-bottom:10px;">Add category</div>
				
				<div class="form-group">
				<label for="category">Category Name</label>
				<input type="text"  class="form-control" id="categoryname"  name="categoryname"/>
				</div>
				<div class="form-group">
				<label for="category">Category Image</label>
				<input type="file"  class="form-control" id="cat_image"  name="cat_image"/>
				</div>
				<div class="form-group">
				<label for="category">Category File</label>
				<input style="height:auto;" type="file" class="form-control" id="categoryfile" name="categoryfile" />
				</div>
				<div class="btn-group-vertical btn-block text-center" role="group">
				<button type="submit" class="btn btn-danger btn-lg">Add</button>
				
				</div>
				</form>
				<form enctype="multipart/form-data" method="post" name="importcategory" id="importcategory"  action="<?php echo base_url('inventory/importcategory'); ?>" class="well col-md-6 col-md-offset-2" style="background-color:#fff;">
				<div class=""  style="font-size:20px;font-weight:600;border-bottom:1px solid #ddd;margin-bottom:10px;padding-bottom:10px;">Import category</div>
				<a id="fashionproducts" href="<?php echo base_url('assets/subcategoryimportfiles/'); ?>/importcategories.xlsx" >Download sample Import File</a>
				
				<div class="form-group">
				<label for="category">Import File</label>
				<input style="height:auto;" type="file" placeholder="" class="form-control" id="importaegoryfile" name="importaegoryfile" />
				</div>
				<div class="btn-group-vertical btn-block text-center" role="group">
				<button type="submit" class="btn btn-danger btn-lg">Import</button>
				</div>
				</form>
				
				
			</div>
		</div>
    
		</section>
 </div>
   
	<script type="text/javascript">

$(document).ready(function() {
    $('#importcategory').bootstrapValidator({
       
        fields: {
            
			
			importaegoryfile: {
					validators: {
					notEmpty: {
						message: 'Category Name is required'
					},
					regexp: {
					regexp: /\.(xlsx|xls)$/i,
					message: 'Uploaded file is not a valid image. Only xl files are allowed'
					}
				}
			}
        }
    });
});

$(document).ready(function() {
    $('#addcategory').bootstrapValidator({
       
        fields: {
            categoryname: {
					validators: {
					notEmpty: {
						message: 'Category Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. &$-_ ]+$/,
					message: ' Category Name can only consist of alphanumaric, space and dot'
					}
				}
			},
			cat_image: {
           validators: {
             notEmpty: {
            message: 'Category Image is required'
          },
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