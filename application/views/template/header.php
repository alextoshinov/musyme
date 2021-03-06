<header>    
    <div id="header-container">        
        <div id="logo-container">            
            <h1>     
                <a href="/">
                    <img src="<?php echo URL::base();?>assets/img/musyme-logo.png" width="170" alt="Musyme logo">                
                </a>            
            </h1>        
        </div>        
        <nav>            
            <ul id="main-nav-list" class="nav-list">                
                <li>                    
                    <a href="<?php echo URL::base()?>movies" title="<?php echo __('nav_movies');?>">                        
                        <img src="<?php echo URL::base();?>assets/img/nav-btn1.png" alt="<?php echo __('nav_movies');?>" />                    
                    </a>                
                </li>                
                <li>                    
                    <a href="<?php echo URL::base()?>songs" title="<?php echo __('nav_songs');?>">                        
                        <img src="<?php echo URL::base();?>assets/img/nav-btn2.png" alt="<?php echo __('nav_songs');?>" />                    
                    </a>                
                </li>                
                <li class="lang">                                          
                    <a href="#" title="<?php echo __('nav_select_language');?>">                            
                        <img src="<?php echo URL::base();?>assets/img/flag-<?php echo $current_lang;?>.jpg" alt="<?php echo __('nav_select_language');?>">                        
                    </a>                    
                    <ul class="sub-nav-list">
                        <?php echo Helper_Languages::getLanguages();?>                   
                    </ul>                
                </li>                
                <li>                    
                    <a href="https://shop.musy.me" title="<?php echo __('nav_books');?>">                        
                        <img src="<?php echo URL::base();?>assets/img/nav-btn4.png" alt="<?php echo __('nav_books');?>" />                    
                    </a>                
                </li>            
            </ul>        
        </nav>    
    </div>    
    <a class="f-share" href="https://www.facebook.com/musyme" target="_blank"><?php echo __('nav_share');?></a>
</header>