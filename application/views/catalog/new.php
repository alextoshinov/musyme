<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 9/24/15
 * Time: 7:45 PM
 */
?>
<?php include Kohana::find_file('views', 'dashboard/nav'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Catalog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-heading">
                		Add new catalog
                	</div>
                	<div class="panel-body">
                		<form role="form" id="addNewCatalog" action="<?php echo URL::base()?>catalog/new" method="post" enctype="multipart/form-data">
		            		<div class="form-group col-lg-6">
		                        <label>Catalog name</label>
		                        <input placeholder="Name" class="form-control" name="name" id="name">
		                    </div>
		                    <div class="form-group col-lg-6">
		                        <label>Catalog category</label>
		                        <select class="form-control" name="category_id" id="category_id">
			                        <option value="">Select category</option>
			                        <option value="1">movies</option>
			                        <option value="2">songs</option>
			                    </select>
		                    </div>
		                    <div class="form-group col-lg-6 ">
		                    	<label>File input</label>
                                <input type="file" name="image_name">
                                <?php if ($uploaded_file): ?>
                                <img src="<?php echo URL::site("/assets/images/catalogs/$uploaded_file") ?>" alt="Uploaded" />
                                <?php else: ?>
                                <p><?php echo $error_message; ?></p>
                                <?php endif;?>				  
		                    </div>

		                    <div class="form-group col-lg-6">
		                        <label>Catalog language</label>
		                        <select class="form-control" name="language_id">
			                        <option value="">Select language</option>
			                        <?php echo Helper_Languages::selectLanguages ();?>
			                    </select>
		                    </div>
		                    
		                    <div class="form-group col-lg-3">
		                        <label>Catalog age group</label>
		                        <select class="form-control" name="agegroup_id" id="agegroup_id">
			                        <option value="">Select age group</option>
			                        <option value="1">1-3</option>
			                        <option value="2">3-7</option>
			                    </select>
		                    </div>
		                    <div class="form-group col-lg-3">
		                        <label>Is public</label>               
                                    <label class="radio-inline">
                                        <input type="radio" checked="" value="1"  name="is_public" />Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="0"  name="is_public" />No
                                    </label>                                                                             
		                    </div>
		                    <div class="form-group col-lg-6">
		                    	<button class="btn btn-primary pull-right" type="submit">Add catalog</button>
		                    </div>
            			</form>
                	</div>
                </div>
            </div>
        </div>    
    </div>
</div>