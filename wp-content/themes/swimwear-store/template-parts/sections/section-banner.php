<section id="banner-section" class="banner-area home-banner">
    <?php

        // banner 1
        $banner_image = get_theme_mod('banner_image'); 

        // banner 2
        $banner_offernumber = get_theme_mod('banner_offernumber', '50');
        $banner_discounttext = get_theme_mod('banner_discounttext', 'DISCOUNT');
        $banner_title = get_theme_mod('banner_title', 'SET FOR A GOOD TIME');
        $banner_btntext = get_theme_mod('banner_btntext', 'Buy Now');

    ?>
    <div class="<?php if(esc_attr(get_theme_mod('swimwearstore_banner_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('swimwearstore_banner_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
        <div class="row m-0">
            <div class="col-lg-6 col-md-6 col-sm-12 pd-0">
                <div class="b_left">
                <?php 
                    if(!empty($banner_image)){
                        echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($banner_image).'" class="peccular-aboutus-imgboxshape" />';
                    }else{
                        echo '<img alt="banner1" class="sh-oly" src="'.get_template_directory_uri().'/assets/images/banner.jpg" />';
                    }
                ?>
                    
                </div>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pd-0">
                <div class="b_right">
                    <div class="banner-content">
                        <div class="banner-offertext">
                           <h2> 
                                <sup><?php esc_html_e('UP TO','swimwear-store'); ?></sup>
                                    <?php echo esc_html($banner_offernumber); ?>
                                       <sub> <?php esc_html_e('%','swimwear-store'); ?></sub>

                             </h2>
                            
                            <?php if ($banner_discounttext) { ?>
                                <h1><?php echo esc_html($banner_discounttext); ?></h1>
                            <?php } ?>
                            <div class="banner-title">
                            <?php if ($banner_title) { ?>
                                <h3><?php echo esc_html($banner_title); ?></h3>
                            <?php } ?>
                            </div>
                            <div class="banner-button">
                                <a class="banner-btnShopNow" href="<?php echo esc_url(get_theme_mod('banner_btnlink')); ?>"><?php echo esc_html($banner_btntext); ?></a>   
                            </div>
                       
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>