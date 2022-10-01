<?php get_header(); 
    $term = get_queried_object();
    $btn_banner = get_field('btn_banner', $term);
    $link_banner = get_field('link_btn_banner', $term);
?>
<div class="single-news">
    <div class="container">
        <div class="title-single">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="excerpt-single">
            <p><?php the_excerpt(); ?></p>
        </div>
        <div class="img-single">
            <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="des-single">
            <p><?php the_content(); ?></p>
        </div>
        <div class="category-news">
            <span>Địa Điểm :</span><span><?php the_category(); ?></span>
        </div>
        <div class="author">
            <?php echo get_the_author(); ?>
        </div>
        <div class="ticket-banner">
            <a href="<?php echo $link_banner; ?>"><?php echo $btn_banner; ?></a>
        </div>
    </div>
</div>
<div class="news">
        <div class="container">
            <div class="relate">
                <h2>Bài Viết Liên Quan</h2>
            </div>
            <div class="items-news">
        <?php
        $categories = get_the_category($post->ID);
        if ($categories) 
        {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    
            $args=array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'showposts'=>3, // Số bài viết bạn muốn hiển thị.
            'caller_get_posts'=>1
            );
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) 
            {
                while ($my_query->have_posts())
                {
                    $my_query->the_post();
                    ?>
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
                    <?php
                }
            }
        }
    ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>