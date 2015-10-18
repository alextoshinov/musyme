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
                <h1 class="page-header">Movies</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-heading">
                		Add new movie
                	</div>
                	<div class="panel-body">
                		<form role="form" id="addNewCatalog" action="<?php echo URL::base()?>dashboard/movies/new" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="category_id" value="1" />
                                    <div class="form-group col-lg-6">
		                        <label>Movie ID</label>
		                        <input placeholder="Movie ID" class="form-control" name="url" id="url">
		                    </div>
                                    <div class="form-group col-lg-6">
		                        <label>Title</label>
		                        <input placeholder="Title" class="form-control" name="title" id="title">
		                    </div>
		                    <div class="form-group col-lg-6">
		                        <label>Provider</label>
		                        <select class="form-control" name="source_id" id="source_id">
			                    <option value="">Select provider</option>
                                            <?php Helper_Sources::selectSources();?>
                                        </select>
		                    </div>
                                    <div class="form-group col-lg-6">
		                        <label>Catalog</label>
		                        <select class="form-control" name="source_id" id="source_id">
			                    <option value="">Select catalog</option>
                                            <?php Helper_Catalogs::selectCatalogs (1);?>
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
		                        <label>Movie language</label>
		                        <select class="form-control" name="language_id">
			                        <option value="">Select language</option>
			                        <?php echo Helper_Languages::selectLanguages ();?>
			                    </select>
		                    </div>
		                    
		                    <div class="form-group col-lg-3">
		                        <label>Movie age group</label>
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
		                    	<button class="btn btn-primary pull-right" type="submit">Add movie</button>
		                    </div>
            			</form>
                	</div>
                </div>
            </div>
        </div>    
    </div>
</div>