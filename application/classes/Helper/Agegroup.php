<?php defined('SYSPATH') or die('No direct script access.');
//
class Helper_Agegroup
{
    public static function selectAgegroup ($id=false)
    {
        $agegroup = Model_Agegroup::getAllSelect (1);
        //
        foreach($agegroup as $age)
        { 
            if($id == $age['id'])
            {
                ?>
            <option value="<?php echo $age['id'];?>" selected><?php echo $age['title'];?></option>
            <?php
            } else {
                ?>
            <option value="<?php echo $age['id'];?>"><?php echo $age['title'];?></option>
        <?php 
            }
               
        } 
    }
}

