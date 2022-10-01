<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<?php   $title_banner = get_field('title-banner', $term);
        $des_banner = get_field('description-banner', $term); 
        $img_banner = get_field('img-banner',$term);
        $title_memory = get_field('title-memory',$term);
        $des_memory = get_field('des-memory',$term);
        $title_place = get_field('title_place',$term);
        $img_place = get_field('img_place',$term);
        $title_choose = get_field('title_choose',$term);
        $img_choose = get_field('img_choose',$term);
        $title_consecterur = get_field('title_consecterur',$term);
        $img_consecterur = get_field('img_consecterur',$term);
        $title_staff = get_field('title_staff',$term);
        $img_contact = get_field('img_contact',$term);
        $btn_banner = get_field('btn_banner',$term);
        $link_banner = get_field('link_btn_banner',$term);
        $btn_memory = get_field('btn_memory',$term);
        $link_memory = get_field('link_memory',$term);
?>

    <div class="banner">
        <div class="container">
            <div class="banner-header">
                <div class="container-banner">
                    <div class="travel-banner" data-aos="fade-right">
                        <div class="title-banner">
                            <h2><?php echo $title_banner ?></h2>
                        </div>
                        <div class="description-banner">
                            <p><?php echo $des_banner ?></p>
                        </div>
                        <div class="ticket-banner">
                            <a href="<?php echo $link_banner; ?>"><?php echo $btn_banner; ?></a>
                        </div>
                    </div>
                    <div class="img-banner" data-aos="fade-left">
                        <img src=<?php echo $img_banner['url']; ?> alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="memory" data-aos="zoom-in-up">
        <div class="item-memory">
            <div class="title-memory">
                <h2><?php echo $title_memory ?></h2>
            </div>
            <div class="description-memory">
                <p><?php echo $des_memory ?></p>
            </div>
            <div class="travel-logs">
                <a href="<?php echo $link_memory; ?>"><?php echo $btn_memory; ?></a>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="items-news">
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true ?>
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="item-news" data-aos="zoom-out">
                    <div class="img-news">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
                    </div>
                    <div class="line-bottom"></div>
                    <div class="content-news">
                        <div class="title-news">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        </div>
                        <div class="description-news">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="category-news">
                            <p><?php the_category(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="pagination">
               <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
                <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
            </div>
            <?php endif ?>
        </div>
    </div>
    <?php if(is_category()) : ?>
    <div class="place">
        <div class="container">
            <div class="container-place" data-aos="zoom-out-down">
                <div class="icon-place text-center">
                    <img src="<?php bloginfo('template_directory') ?>/public/images/icon-places.png" alt="">
                </div>
                <div class="title-place text-center">
                    <h2><?php echo $title_place; ?></h2>
                    <div class="line-bottom-place"></div>
                </div>
                <div class="cate text-center">
                    <?php
                        $args = array(
                            'type' => 'posts',
                            'child_of' => 0,
                            'parent' => 0,
                            'hide_empty' => 0,
                            'taxonomy' => 'category',
                            'number' => 10,
                        );
                        $categories = get_categories($args);
                        foreach($categories as $cate) {
                            $category_link = get_category_link($cate->cat_ID); ?>
                            <span><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cate->name ?></a></span>
                            <span>|</span>
                        <?php } ?>
                </div>
            </div>
            <div class="place-page">
                <div class="container-items-place">
                    <div class="item-img-place" data-aos="zoom-out-right">
                        <div class="tape-place">
                            <img src="<?php bloginfo('template_directory') ?>/public/images/tape-place.png" alt="">
                        </div>
                        <div class="img-place">
                            <img src=<?php echo $img_place['url']; ?> alt="">
                        </div>  
                    </div>
                    <div class="items-place" data-aos="zoom-out-left">
                        <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post();?>
                        <div class="item-place">
                            <div class="item-bg-place">
                                <div class="img-item-place">
                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
                                </div>
                                <div class="content-item-place">
                                    <div class="title-item-place">
                                        <h2><u><?php the_title(); ?></u></h2>
                                    </div>
                                    <div class="des-item-place">
                                        <p><?php the_excerpt(); ?></p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
    <div class="choose">
        <div class="item-choose">
            <div class="container-choose container" data-aos="zoom-out-right">
                <div class="title-choose">
                    <h2><?php echo $title_choose; ?></h2>
                </div>
                <div class="content-choose">
                    <p>Lorem Ipsum dolor</p>
                </div>
                <div class="des-choose">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cumque nesciunt, quam tempora perspiciatis impedit consequuntur omnis dolorum laboriosam ea odit suscipit deleniti maiores quia optio ut facere ratione sed? perspiciatis impedit consequuntur omnis</p>
                </div>
                <div class="content-choose">
                    <p>Lorem Ipsum dolor</p>
                </div>
                <div class="des-choose">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cumque nesciunt, quam tempora perspiciatis impedit consequuntur omnis dolorum laboriosam ea odit suscipit deleniti maiores quia optio ut facere ratione sed?  perspiciatis impedit consequuntur omnis</p>
                </div>
            </div>
            <div class="img-choose" >
                <img src=<?php echo $img_choose['url']; ?> alt="">
            </div>
        </div>
    </div> 
    <div class="consecter-staff-contact">
        <div class="img-bg-left">
            <img src="<?php bloginfo('template_directory') ?>/public/images/img-bg-staff.png" alt="">
        </div>
        <div class="img-bg-right">
            <img src="<?php bloginfo('template_directory') ?>/public/images/img-right-staff.png" alt="">
        </div>
        <div class="consecter">
            <div class="container">
                <div class="container-consecter">
                    <div class="item-consecter">
                    <div class="title-consecter">
                            <h2><?php echo $title_consecterur ?></h2>
                        </div>
                        <div class="line-des-consecter"></div>
                        <div class="des-consecter">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">+</a>
                        </div>
                        <div class="line-des-consecter"></div>
                        <div class="des-consecter">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">+</a>
                        </div>
                        <div class="line-des-consecter"></div>
                        <div class="des-consecter">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">+</a>
                        </div>
                        <div class="line-des-consecter"></div>
                        <div class="des-consecter">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">+</a>
                        </div>
                        <div class="line-des-consecter"></div>  
                    </div>
                    <div class="img-consecter">
                        <img src=<?php echo $img_consecterur['url']; ?> alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="staff">
            <div class="container">
                <div class="title-staff">
                    <h2><?php echo $title_staff; ?></h2>
                </div>
                <div class="items-staff">
                    <div class="item-bg-staff">
                        <div class="item-staff text-center">
                            <div class="img-staff">
                                <img src="<?php bloginfo('template_directory') ?>/public/images/img-avatar.png" alt="">
                            </div>
                            <div class="title-item-staff">
                                <h2>Customer Name</h2>
                            </div>
                            <div class="des-item-staff">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia consectetur, vitae</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-bg-staff">
                        <div class="item-staff text-center">
                            <div class="img-staff">
                                <img src="<?php bloginfo('template_directory') ?>/public/images/img-avatar.png" alt="">
                            </div>
                            <div class="title-item-staff">
                                <h2>Customer Name</h2>
                            </div>
                            <div class="des-item-staff">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia consectetur, vitae</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-bg-staff">
                        <div class="item-staff text-center">
                            <div class="img-staff ">
                                <img src="<?php bloginfo('template_directory') ?>/public/images/img-avatar.png" alt="">
                            </div>
                            <div class="title-item-staff">
                                <h2>Customer Name</h2>
                            </div>
                            <div class="des-item-staff">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia consectetur, vitae</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-bg-staff">
                        <div class="item-staff text-center">
                            <div class="img-staff">
                                <img src="<?php bloginfo('template_directory') ?>/public/images/img-avatar.png" alt="">
                            </div>
                            <div class="title-item-staff">
                                <h2>Customer Name</h2>
                            </div>
                            <div class="des-item-staff">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia consectetur, vitae</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="container">
                <div class="items-contacts">
                    <div class="item-contact" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                        <?php   $get_contact_id = 95;
                                $contact_page = get_post($get_contact_id);
                                $content = $contact_page->post_content; //gets the unfiltered page content
                                $content = apply_filters('the_content', $content); //cleanup content
                                $content = str_replace(']]>', ']]&gt;', $content); //cleanup content
                                $title_contact = $contact_page->post_title;
                        ?>  
                        <div class="title-contact">
                            <h2><?php echo $title_contact; ?></h2>
                        </div>
                        <div class="form-contact">
                            <?php echo $content; ?>
                        </div>
                        <!-- <form class="form-contact" action="">
                            <input type="text" placeholder="First Name*">
                            <input type="text" placeholder="Last Name*">
                            <input type="email" placeholder="Email Subject*">
                            <textarea name="contact" placeholder="Write something here..." id="contact" cols="30" rows="10"></textarea>
                            <input type="submit" id="btn-contact" value="Submit Email">
                        </form> -->
                    </div>
                    <div class="img-contact" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src=<?php echo $img_contact['url']; ?> alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>