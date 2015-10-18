<?php defined('SYSPATH') or die('No direct script access.');
//
class Helper_Catalogs
{
    public static function selectCatalogs ($category_id, $catalog_id=null)
    {
        $catalogs = Model_Catalogs::getAllSelect ($category_id);
        //
        foreach($catalogs as $catalog)
        { 
            if($catalog_id == $catalog['catalog_id'])
            {
                ?>
            <option value="<?php echo $catalog['catalog_id'];?>" selected><?php echo $catalog['name'];?></option>
            <?php
            } else {
                ?>
            <option value="<?php echo $catalog['catalog_id'];?>"><?php echo $catalog['name'];?></option>
        <?php 
            }
               
        } 
    }
}

