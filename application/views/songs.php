<?php if(isset($catalogs)):?>
<ul>
    <?php foreach($catalogs as $catalog):?>    
        <li>
            <div class="frame">
                <a title="<?php echo $catalog['name'];?>" href="<?php echo URL::base()?>songs/view/<?php echo $catalog['catalog_id'];?>/<?php echo Model_Languages::getLangIdByAbbr($lang);?>">
                    <img alt="<?php echo $catalog['name'];?>" src="<?php echo URL::base(); ?>assets/images/catalogs/<?php echo $catalog['image_name'];?>" class="cover-image">
                </a>
            </div>
        </li>    
    <?php endforeach;?>
</ul>
<?php else:?>
<p>Not records in this category or lang</p>
<?php endif; ?>
