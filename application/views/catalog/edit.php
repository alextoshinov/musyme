






<?php include Kohana::find_file('views', 'dashboard/nav'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Catalog</h1>
            </div>
        </div>
        <?php  if(isset($catalog)):?>
        <?php $c = $catalog[0];?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    Edit catalog <strong><?php echo $c['name'];?></strong>
                  </div>
                  <div class="panel-body">
                    <form role="form" id="editCatalogForm" action="<?php echo URL::base()?>catalog/update" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="catalog_id" value="<?php echo $c['catalog_id'];?>"
                    <div class="form-group col-lg-6">
                            <label>Catalog name</label>
                            <input placeholder="Name" 
                            class="form-control" 
                            name="name" 
                            id="name" 
                            value="<?php echo $c['name'];?>" 
                            />
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Catalog category</label>
                            <select class="form-control" name="category_id" id="category_id">
                              <option value="">Select category</option>
                              <option value="1" <?php if($c['category_id'] == 1) { echo 'selected'; }?>>movies</option>
                              <option value="2" <?php if($c['category_id'] == 2) { echo 'selected'; }?>>songs</option>
                          </select>
                        </div>
                        <div class="form-group col-lg-6 ">
                          <label>File input</label>
                                <input type="file" name="image_name" value="<?php echo $c['image_name'];?>" />                          
                                <img height="190" width="285" src="<?php echo URL::site("/assets/images/catalogs/".$c['image_name']); ?>" alt="Uploaded" />          
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Catalog language</label>
                            <select class="form-control" name="language_id">      
                              <?php echo Helper_Languages::selectLanguages ($c['language_id']);?>
                            </select>
                        </div>
                        
                        <div class="form-group col-lg-3">
                            <label>Catalog age group</label>
                            <select class="form-control" name="agegroup_id" id="agegroup_id">
                              <option value="">Select age group</option>
                              <option value="1" <?php if($c['agegroup_id'] == 1) { echo 'selected'; }?>>1-3</option>
                              <option value="2" <?php if($c['agegroup_id'] == 2) { echo 'selected'; }?>>3-7</option>
                          </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Is public</label>               
                                    <label class="radio-inline">
                                        <input type="radio" <?php if($c['is_public'] == 1) { echo 'checked=""'; }?> value="1"  name="is_public" />Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" <?php if($c['is_public'] == 0) { echo 'checked=""'; }?> value="0"  name="is_public" />No
                                    </label>                                                                             
                        </div>
                        <div class="form-group col-lg-6">
                          <button class="btn btn-primary pull-right" type="submit">Edit catalog</button>
                        </div>
                  </form>
                  </div>
                </div>
            </div>
        </div>
        <?php else:?>
        <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-danger alert-dismissable">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  Has not catalog. <a class="alert-link" href="<?php echo URL::base()?>catalog">Back to catalog</a>.
              </div>
            </div>
          </div>
        <?php endif;?>
    </div>
</div>
