                <div class="top_topic_page">
                    <div class="kiji_title_page" >
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/latest_kijititle.png" alt="">
                    </div>
                    <div style="padding: 20px 5px 10px 5px;　">


                        <?php
                        foreach((get_the_category()) as $cat) {
                        $cat_id = $cat->cat_ID ;
                        break ;
                        }
                        $query = 'cat=' . $cat_id. '&showposts=10';
                        query_posts($query . '&paged='.$paged) ;
                        ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                        <div class="post2">  
                            <div class="blog_info_a">
                                <span style="font-weight:600;font-size:120%;"><?php the_time('Y.m.d D') ?></span></br>
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                    <span style="font-weight:400;font-size:80%;line-height:14px;"><?php the_title(); ?></span>
                                </a>
                            </div>

                        </div>

                        <?php endwhile; ?>

                    </div>  
                </div><!-- /#top_topic -->    
                    
                    <div class="nav-below">
                    <span class="nav-previous">
                        <?php next_posts_link('<img src="/mop_phase01/wp-content/themes/MOP_Phase1/image/preview_page.png" />') ?>
                    </span>
                    <span class="nav-next"><?php previous_posts_link('<img src="/mop_phase01/wp-content/themes/MOP_Phase1/image/next_page.png" />') ?></span>
                    </div><!-- /.nav-below -->
                    
                             
                    <?php endif; ?>
                        <?php wp_reset_query() ?>
    