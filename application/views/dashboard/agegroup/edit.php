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
                <h1 class="page-header">Age group</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                	<div class="panel-heading">
                		Edit age group
                	</div>
                	<div class="panel-body">
                            <?php if(isset($agegroup) && !empty($agegroup)){
                                $agegroup = $agegroup[0];                            
                            ?>
                		<form role="form" id="addNewCatalog" action="<?php echo URL::base()?>dashboard/editAgegroup" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $agegroup['id'];?>" />
                                    <div class="form-group col-lg-6">
		                        <label>Title</label>
		                        <input placeholder="Title age group" class="form-control" name="title" id="title" value="<?php echo $agegroup['title'];?>" />
		                    </div>
                                    <div class="form-group col-lg-6">
		                        <label>Description</label>
		                        <input placeholder="Description" class="form-control" name="description" id="description"  value="<?php echo $agegroup['description'];?>" />
		                    </div>
		                    
		                    <div class="form-group col-lg-6">
		                        <label>Is public</label>               
                                    <label class="radio-inline">
                                            <input type="radio" <?php if($agegroup['is_public'] == 1) { echo 'checked=""'; }?> value="1"  name="is_public" />Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" <?php if($agegroup['is_public'] == 0) { echo 'checked=""'; }?> value="0"  name="is_public" />No
                                    </label>                                                                             
		                    </div>
		                    <div class="form-group col-lg-6">
		                    	<button class="btn btn-primary pull-right" type="submit">Edit age group</button>
		                    </div>
            			</form>
                            <?php } else { ?>
                            Not any age groups                            
                            <?php } ?>
                	</div>
                </div>
            </div>
        </div>    
    </div>
</div>