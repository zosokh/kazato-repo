
<?php get_header(live); ?>



<!-- Contents -->			
			<div id="contents" >
			<br class="clear" />

            <div id="contents-left_page" >

                        <?php get_template_part( 'loop', 'live' ); ?>
      

            <br class="clear">
            </div><!-- /#contents-left_page -->



            <div id="contents-right_page">


                <div class="top_topic_page">
                    <div class="kiji_title_page" >
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/live_w_kijititle.png" alt="">
                    </div>
                        <?php if (have_posts()) : ?>
                        <?while (have_posts()): the_post(); ?>


                    <div style="padding-top: 70px ;">

                        <div class="blog_info" >
                                <p style="font-weight:600;font-size:350%;text-align:center;"><?php the_time('Y.m.d　D') ?></p>
                        </div>
                    
                        <div class="blog_info" style="padding-top:25px;">
                                <h1 class="title">
                                    <?php the_title(); ?>
                                </h1>
                        </div>
                    </div>  

                    <div style="padding: 0px 80px 20px 80px;">

                        <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
                            <div style="padding-top:20px;padding-bottom:20px; font-size:110%;">  
                                <p ><?php the_content('more'); ?></p>
                            </div>
                     
                        <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>  
                </div><!-- /#top_topic -->

                <div class="nav-below">
                    <span class="nav-previous">
                        <?php next_post_link('%link', '<img src="/mop_phase01/wp-content/themes/MOP_Phase1/image/preview_page.png" />', true);?>
                    </span>
                    <span class="nav-next"><?php previous_post_link('%link', '<img src="/mop_phase01/wp-content/themes/MOP_Phase1/image/next_page.png" />', true); ?></span>
                </div><!-- /.nav-below -->
            
                <br class="clear" />
            </div><!-- /#contents-right -->
            <br class="clear" />
				

<?php get_footer(); ?>