<?php get_header() ?>
    <div class="single">
        <div class="container">
            <div class="main-single">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();?>
                        <article class="single-post">
                            <header>
                                <h1><?php the_title() ?></h1>
                                <div class="postmeta">
                                    <i class="fas fa-clock"></i>
                                    <span><?php the_date('j F Y'); ?></span>
                                </div>
                                <div class="postmeta">
                                    <i class="fas fa-user"></i>
                                    <span><?php the_author(); ?></span>
                                </div>
                                <div class="postmeta">
                                    <i class="fas fa-folder-open"></i>
                                    <span><?php the_category(','); ?></span>
                                </div>
                                <div class="postmeta">
                                    <i class="fas fa-eye"></i>
                                    <span><?php if(function_exists('the_views')) { the_views(); } ?></span>
                                </div>
                            </header>
                            <div class="post-pic">
                                <?php
                                $podc = get_post_meta(get_the_ID(), key: 'lingomoj_radio', single: true);

                                if(!empty($podc)){
                                    $attr = array(
                                        'src' => $podc,
                                        'loop'   => 'on',
                                        'width'=> '50%',




                                    );?>
                                <audio controls class="single-player">
                                    <source src="<?php echo wp_audio_shortcode($attr);?>
                    </audio>
                                    <?php

                                } else {
                                    the_post_thumbnail();
                                }
                                ?>
                                </figure>
                            <div class="content-single">
                                <?php the_content(); ?>

                            </div>
                        </article>
                    <?php
                    endwhile;
                else :
                    _e( 'Sorry, no posts were found.', 'textdomain' );
                endif;
                ?>

                <section class="related-post">
                    <div class="related-head">
                        <h4>مطالب مرتبط</h4>
                    </div>
                    <div class="articles-slider">
                        <div id="related-slider" class="owl-carousel owl-theme">
                            <?php

                            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
                            if( $related ) foreach( $related as $post ) {
                                setup_postdata($post); ?>
                                <div class="item article-box">
                                    <a href="<?php the_permalink();?>" target="_blank"><?php the_post_thumbnail(); ?>
                                        <h2><?php the_title(); ?></h2></a>
                                    <?php the_excerpt(); ?>
                                    <div class="btn-more">
                                        <a href="<?php the_permalink();?>">ادامه مطلب</a>
                                    </div>
                                </div>
                            <?php }
                            wp_reset_postdata(); ?>


                        </div>
                    </div>
                </section>
                <div class="comment-box">
                    <div class="related-head">
                        <h4>ثبت دیدگاه :</h4>
                    </div>
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>


                </div>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>


<?php get_footer() ?>