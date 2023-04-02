
<?php 
/*
* Template Name: Home
*/
get_header(); 
?>

    <section class="desk-height banner__section" style="background-image: url(<?php the_field('banner-section_img'); ?>);">
        <div class="container">
            <div class="row">
                <div class="leftside col-lg-6">
                    <h1><?php the_field('title-banner'); ?></h1>
                    <h3><?php the_field('subtitle-banner'); ?></h3>
                </div>
                <div class="rightside col-lg-6" id="pdg-top">
                    <div class="contactform">
                        <ul>
                        <?php dynamic_sidebar('widget-2'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slide-section">
        <div class="container">
            <div class="swiper mySwiper mySwiperone">
                <div class="swiper-wrapper ">
                    <?php
                    $args = array(
                    'post_type' => 'sliderone',
                    'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                    while($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <div class="swiper-slide">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Alt text">
                    </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="valuation__section" id="valuation">
        <div class="container">
            <div class="row">
                <div class="leftside col-lg-6">
                <h1><?php the_field('title-leftside'); ?></h1>
                <h3><?php the_field('subtitle-leftside'); ?></h3>
                <div class="listednr">  
                    <div class="first-row">
                        <div class="first-row-title flex row-custom">
                            <h2>1</h2>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('group_fields')['first_title'] );?></h3>
                                <p><?php echo ( get_field('group_fields')['first_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="first-row">
                        <div class="second-row-title flex row-custom">
                            <h2>2</h2>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('group_fields')['second_title'] );?></h3>
                                <p><?php echo ( get_field('group_fields')['second_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="first-row">
                        <div class="third-row-title flex row-custom">
                            <h2>3</h2>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('group_fields')['third_title'] );?></h3>
                                <p><?php echo ( get_field('group_fields')['third_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="first-row">
                        <div class="fourth-row-title flex row-custom">
                            <h2>4</h2>
                            <div class="row-under-title">
                                <h3><?php echo ( get_field('group_fields')['fourth_title'] );?></h3>
                                <p><?php echo ( get_field('group_fields')['fourth_subtitle'] );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-custom">
                    <ul>
                    <?php dynamic_sidebar('widget-3');?>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="rightside col-lg-6">
                    <img src="<?php the_field('imgright'); ?>" alt="Alt text">
                </div>
            </div>
        </div>
    </section>

    <section class="values__section" id="values">
        <div class="container">
            <div class="row custom-row">
                <div class="leftside col-lg-6">
                <h1><?php the_field('title-values'); ?></h1>
                    <div class="listedlines">  
                        <div class="first-row">
                            <div class="first-row-title row-custom">
                                <div class="first-row-under-title">
                                    <h3><?php echo ( get_field('grouptwo_fields')['first_title'] );?></h3>
                                    <h4><?php echo ( get_field('grouptwo_fields')['first_subtitle'] );?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="first-row">
                            <div class="second-row-title flex row-custom">
                                <div class="first-row-under-title">
                                    <h3><?php echo ( get_field('grouptwo_fields')['second_title'] );?></h3>
                                    <h4><?php echo ( get_field('grouptwo_fields')['second_subtitle'] );?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="first-row">
                            <div class="third-row-title flex row-custom">
                                <div class="first-row-under-title">
                                    <h3><?php echo ( get_field('grouptwo_fields')['third_title'] );?></h3>
                                    <h4><?php echo ( get_field('grouptwo_fields')['third_subtitle'] );?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="first-row">
                            <div class="fourth-row-title flex row-custom">
                                <div class="first-row-under-title">
                                    <h3><?php echo ( get_field('grouptwo_fields')['fourth_title'] );?></h3>
                                    <h4><?php echo ( get_field('grouptwo_fields')['fourth_subtitle'] );?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="rightsideimg" src="<?php the_field('imgrights'); ?>" alt="Alt text">
    </section>


    <section class="slide-section-two">
        <div class="container">
            <div class="swiper mySwiper mySwipertwo">
                    <div class="swiper-wrapper ">
                        
                        <div class="swiper-slide">
                        <div class="slide-out">
                        <img src="<?php echo ( get_field('groupthree_fields')['imgone'] );?>" alt="Alt text">
                        <h1><?php echo ( get_field('groupthree_fields')['titlesl'] );?></h1>
                        <h3><?php echo ( get_field('groupthree_fields')['subtitlesl'] );?></h3>
                        </div>
                        </div>
                        <div class="swiper-slide">
                        
                        <div class="slide-out">
                        <img src="<?php echo ( get_field('groupthree_fields')['imgtwo'] );?>" alt="Alt text">
                        <h1><?php echo ( get_field('groupthree_fields')['titletwosl'] );?></h1>
                        <h3><?php echo ( get_field('groupthree_fields')['subtitletwosl'] );?></h3>
                        </div>
                        </div>
                        <div class="swiper-slide">
                        
                        <div class="slide-out">
                        <img src="<?php echo ( get_field('groupthree_fields')['imgthree'] );?>" alt="Alt text">
                        <h1><?php echo ( get_field('groupthree_fields')['titlethreesl'] );?></h1>
                        <h3><?php echo ( get_field('groupthree_fields')['subtitlethreesl'] );?></h3>
                        </div>
                        </div>
                        <div class="swiper-slide">
                        
                        <div class="slide-out">
                        <img src="<?php echo ( get_field('groupthree_fields')['imgfour'] );?>" alt="Alt text">
                        <h1><?php echo ( get_field('groupthree_fields')['titlefoursl'] );?></h1>
                        <h3><?php echo ( get_field('groupthree_fields')['subtitlefoursl'] );?></h3>
                        </div>
                        </div>
                        
                    </div>
            </div>
        </div>
    </section>

    <section class="usecases__section" id="usecases">
        <div class="swiper mySwiper mySwiperthree">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'sliderthree',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">
                <div class="flex">
                <div class="leftside">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Alt text">
                </div>   
                <div class="rightside">
                <div class="container">
                <div class="slide-inside-elements">
                    <h1>Use cases</h1>
                    <h2><?php the_title();?></h2>
                    <h3><?php the_excerpt();?></h3>
                    <h4><?php the_content();?></h4>
                </div>
                <div class="unslide-outside">
                <div class="arrows">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
                <div class="btn-custom">
                <ul>
                <?php dynamic_sidebar('widget-3');?>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="clientsforus__section" id="testimonials">
        <div class="container">
        <div class="flex">
        <div class="leftside col-lg-6">
        <h2>What our clients say about us</h2>
        </div>
        <div class="rightside col-lg-6">
        <div class="swiper mySwiper mySwiperfour">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'sliderfour',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">
                <h1><?php the_content();?></h1>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Alt text">
                <h2><?php the_title();?></h2>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="swiperfour-arrows">
            <div class="swiper-button-nextt"></div>
            <div class="swiper-button-prevv"></div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <section class="last__section">
    <div class="container">
    <div class="row row-custom">
    <div class="leftside col-lg-6">
    <h1><?php the_field('title-lastsection'); ?></h1>
    <ul>
    <?php dynamic_sidebar('widget-3');?>
    </ul>
    </div>
    </div>
    
    </div>
    <img class="rightsideimg" src="<?php the_field('imglastsection'); ?>" alt="Alt text">
    </section>

    <?php get_footer(); ?>