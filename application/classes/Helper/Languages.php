<?php defined('SYSPATH') or die('No direct script access.');
//
class Helper_Languages
{
    public static function getLanguages ($is_public = 1)
    {
        $languages = Model_Languages::listAll($is_public);
        //
        foreach($languages as $lang)
        { ?>
            <li>
                <div>
                    <a href="<?php echo URL::base()?>language/changelangto/<?php echo $lang['abbr'];?>" title="<?php echo $lang['name'];?>"><img src="<?php echo URL::base();?>assets/img/<?php echo $lang['icon'];?>" alt="<?php echo $lang['name'];?>"></a>
                </div>
            </li>
        <?php        
        }        
    }
    //
    public static function selectLanguages ($language_id=false, $is_public = 1)
    {
        $languages = Model_Languages::listAll($is_public);
        //
        foreach($languages as $lang)
        { 
            if($language_id == $lang['language_id'])
            {
                ?>
            <option value="<?php echo $lang['language_id'];?>" selected><?php echo $lang['name'];?></option>
            <?php
            } else {
                ?>
            <option value="<?php echo $lang['language_id'];?>"><?php echo $lang['name'];?></option>
        <?php 
            }
               
        } 
    }
    //
}
