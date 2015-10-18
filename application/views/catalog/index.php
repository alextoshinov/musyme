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
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Catalogs <a href="<?php echo URL::base()?>catalog/new" class="btn btn-success btn-xs pull-right" type="button">Add new</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table id="tbl_catalog" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Pic</th>
                                        <th>Lang</th>
<!--                                        <th>User</th>
                                        <td>Agegroup</td>-->
                                        <th>Created at</th>
                                        <th>is Public</th>
                                        <th>Actions Edit/Delete</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Pic</th>
                                        <th>Lang</th>
<!--                                        <th>User</th>
                                        <td>Agegroup</td>-->
                                        <th>Created at</th>
                                        <th>is Public</th>
                                        <th>Actions Edit/Delete</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>

