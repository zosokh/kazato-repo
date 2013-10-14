<?php
/*
Template Name: page
*/
?>


<?php get_header(); ?>



<!-- Contents -->             
               <div id="contents">
				  
               <div id="box">
                    <div id="main">
                    
               <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                         <div class="post">
                              <h1 class="title"><?php the_title(); ?></h1>
                              
                              <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
                              
                              <?php the_content(); ?>
                         </div><!-- /.post -->
                         
                    <?php endwhile; ?>
                     
                    <?php else : ?>
                     
                        <h2 class="title">記事が見つかりませんでした。</h2>
                        <p>検索で見つかるかもしれません。</p><br />
                        <?php get_search_form(); ?>
                     
                    <?php endif; ?>
                         
                    </div><!-- /#main -->
					<br class="clear" />
				</div>


                
				

<?php get_footer(); ?>