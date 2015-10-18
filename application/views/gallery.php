<?php if(isset($gallery)):?>
<ul class="gallery">
   <?php foreach($gallery as $g):?> 
    <?php $source = Model_Sources::getProvider($g['source_id']);?>
    <li>
        <div class="frame">
            <img alt="<?php echo $g['title'];?>" src="<?php echo URL::base()?>assets/images/<?php echo $g['catalog_id'];?>/<?php echo $g['image_name'];?>" class="cover-image">
            <a href="<?php echo $source['url'];?><?php echo $g['url'];?>" class="<?php echo $source['name'];?> cboxElement">
                <div class="play"></div>
            </a>               
        </div>
    </li>
    <?php endforeach;?>
</ul>
<?php else:?>

<?php endif; ?>


