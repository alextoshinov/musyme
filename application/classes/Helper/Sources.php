<?php defined('SYSPATH') or die('No direct script access.');
//
class Helper_Sources
{
    public static function selectSources ($source_id=null)
    {
        $sources = Model_Sources::getAll();
        //
        foreach($sources as $source)
        { 
            if($source_id == $source['source_id'])
            {
                ?>
            <option data-name="<?php echo $source['name'];?>" value="<?php echo $source['source_id'];?>" selected><?php echo $source['name'];?></option>
            <?php
            } else {
                ?>
            <option data-name="<?php echo $source['name'];?>" value="<?php echo $source['source_id'];?>"><?php echo $source['name'];?></option>
        <?php 
            }
               
        } 
    }
}

