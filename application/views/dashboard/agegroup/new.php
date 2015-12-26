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
                		Add new age group
                	</div>
                	<div class="panel-body">
                		<form role="form" id="addNewCatalog" action="<?php echo URL::base()?>dashboard/newAgegroup" method="post" enctype="multipart/form-data">

                                    <div class="form-group col-lg-6">
		                        <label>Title</label>
		                        <input placeholder="Title age group" class="form-control" name="title" id="title">
		                    </div>
                                    <div class="form-group col-lg-6">
		                        <label>Description</label>
		                        <input placeholder="Description" class="form-control" name="description" id="description">
		                    </div>
		                    
		                    <div class="form-group col-lg-6">
		                        <label>Is public</label>               
                                    <label class="radio-inline">
                                        <input type="radio" checked="" value="1"  name="is_public" />Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="0"  name="is_public" />No
                                    </label>                                                                             
		                    </div>
		                    <div class="form-group col-lg-6">
		                    	<button class="btn btn-primary pull-right" type="submit">Add age group</button>
		                    </div>
            			</form>
                	</div>
                </div>
            </div>
        </div>    
    </div>
</div>