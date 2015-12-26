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
                <h1 class="page-header">Songs</h1>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> Only for Youtube and Vimeo use: <br />
                    <ol>
                        <li>Enter Provider ID</li>
                        <li>Select provider</li>
                        <li>Right click and Save Image As...</li>
                        <li>Upload video image and fill form</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-heading">
                		Add new song
                	</div>
                	<div class="panel-body">
                		<form role="form" id="addNewCatalog" action="<?php echo URL::base()?>dashboard/newSong" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="category_id" value="2" />
                                    <div class="form-group col-lg-6">
		                        <label>Song ID</label>
		                        <input placeholder="Song ID" class="form-control" name="url" id="url">
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
		                        <label>Song language</label>
                                        <select class="form-control" name="language_id" id="language_id" data-category-id="2">
			                        <option value="">Select language</option>
			                        <?php echo Helper_Languages::selectLanguages ();?>
			                    </select>
		                    </div>
                                    
                                    
		                    <div class="form-group col-lg-6 ">
		                    	<label>File input</label>
                                <input type="file" name="image_name">
                                <div id="video-tumb"></div>
                                <?php if ($uploaded_file): ?>
                                <img src="<?php echo URL::site("/assets/images/songs/$uploaded_file") ?>" alt="Uploaded" />
                                <?php else: ?>
                                <p><?php echo $error_message; ?></p>
                                <?php endif;?>				  
		                    </div>
                                    <div class="form-group col-lg-6">
		                        <label>Catalog</label>
		                        <select class="form-control" name="catalog_id" id="catalog_id">
			                    <option value="">Select catalog</option>
                                            
                                        </select>
		                    </div>
		                    
		                    
		                    <div class="form-group col-lg-3">
		                        <label>Song age group</label>
		                        <select class="form-control" name="agegroup_id" id="agegroup_id">
			                        <option value="">Select age group</option>
			                        <?php echo Helper_Agegroup::selectAgegroup ();?>
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
		                    	<button class="btn btn-primary pull-right" type="submit">Add song</button>
		                    </div>
            			</form>
                	</div>
                </div>
            </div>
        </div>    
    </div>
</div>