                <div class="top_topic_page">
                    <div class="kiji_title_page" >
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/latest_kijititle.png" alt="">
                    </div>
                    <div style="padding: 10px 10px 10px 10px;　">


                        <?php
                        foreach((get_the_category()) as $cat) {
                        $cat_id = $cat->cat_ID ;
                        break ;
                        }
                        function filter_where2($where = '') {
                        $where .= " AND post_date > '" . date('Y-m-d', strtotime('0 days')) . "'";
                        return $where;
                        }
                        add_filter('posts_where', 'filter_where2');
                        $query = 'cat=' . $cat_id. '&showposts=10' . '&order=ASC';
                        query_posts($query . '&paged='.$paged) ;
                        ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                        <div class="live_post">  
                            <div class="blog_info_a_live">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <th >
                                        <p style="font-weight:400;font-size:100%;"><?php the_time('Y') ?></p>
                                        <p style="font-weight:400;font-size:100%;"><?php the_time('m') ?></p>
                                        <p style="font-weight:400;font-size:100%;"><?php the_time('d') ?></p>
                                        <p style="font-weight:400;font-size:100%;"><?php the_time('D') ?></p>
                                    </th>
                                    <td>
                                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                            <span style="font-weight:600;font-size:100%;line-height:20px;"><?php the_title(); ?></span>
                                        </a>
                                    </td>
                                    </tr>
                                </table>
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
    