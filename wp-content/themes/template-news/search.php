_<?php get_header(); ?>
<div class="news-seacrch">
        <div class="container">
        <?php global $query_string;
                wp_parse_str($query_string, $search_args);
                $search_query = new WP_Query($search_args);
                $total_results = $search_query->found_posts ? $search_query->found_posts : 0;
                echo '<h2>';
                printf(__('We found %1$s articles for your search'), $total_results);
                echo '<h2>';
                ?>
            <div class="items-news">
                <?php if($search_query->have_posts() ) : ?>
                <?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
                <div class="item-news"  data-aos="zoom-out">
                    <div class="img-news">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
                    </div>
                    <div class="line-bottom"></div>
                    <div class="content-news">
                        <div class="title-news">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        </div>
                        <div class="description-news">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="category-news">
                            <span>Địa Điểm :</span><span><?php the_category(); ?></span>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php endif ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>