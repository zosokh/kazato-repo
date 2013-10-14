<?php get_header(); ?>



<!-- Contents -->			
			<div id="contents">
			<div id="contents-left">
				
                <div class="top_topic">
                	<div class="kiji_title">LIVE</div>
                	<div style="padding: 20px 30px 20px 30px;　">

            			<?php
						function filter_where($where = '') {
						$where .= " AND post_date > '" . date('Y-m-d', strtotime('0 days')) . "'";
						return $where;
						}
						add_filter('posts_where', 'filter_where');
						query_posts(array(
						    'cat' => 6,
						    'order' => ASC,
						));?>
						<?php if (have_posts()) : ?>
						<?while (have_posts()): the_post(); ?>
						    <div class="blog_info_a">
						    <a href="#liveLink">
							<span style="font-weight:bold;"><?php the_time('Y.m.d') ?>&nbsp; ｜&nbsp; </span>
							<span style="font-weight:100;"><?php the_title(); ?></span>
							</a>
							</div>
						<?php endwhile; ?>
						<?php else : ?>
						    <p>現在予定しているライブはございません。</p>
						<?php endif; ?>
					</div>	
				</div><!-- /#top_topic -->
				

			<br class="clear">
			</div><!-- /#contents-left -->


			
			<div id="contents-right">


				<div class="top_topic">
                	<div class="kiji_title">NEWS</div>
                	<div style="padding: 5px 30px 20px 30px;">
                    	<?php $posts = get_posts('numberposts=4&category=4');
						foreach($posts as $post) :
						setup_postdata($post); ?>
        			
        				<div class="post">  
							<div class="blog_info_a">
								<span style="font-weight:100;font-size:80%;"><?php the_time('Y.m.d') ?></span></br>
								<a href="#newsLink"><span style="font-weight:600;font-size:100%;line-height:20px;"><?php the_title(); ?></span></a>
							</div>
						</div>
                     
            			<?php endforeach; ?>
					</div>	
				</div><!-- /#top_topic -->
            
			<br class="clear" />
		</div><!-- /#contents-right -->
		<br class="clear" />


		<div style="margin-top:50px;">
			<div id="contents-left">

				<div class="top_topic">
                	<div class="kiji_title">RELEASE</div>
                	<div style="padding: 20px 30px 20px 30px; text-align:center;">
                		<div>
                    		<img src="<?php bloginfo('template_directory'); ?>/image/newalbum.jpg">&nbsp; 
                    		<a href="#releaseLink"><img style="margin-left:20px; " src="<?php bloginfo('template_directory'); ?>/image/UNCONTROL_sam.jpg"></a>
                    	</div>
                    	<div style="margin-top:20px;">
                    		<a href="#releaseLink"><img src="<?php bloginfo('template_directory'); ?>/image/retronix_sam.jpg"></a>&nbsp; 
                    		<a href="#releaseLink"><img style="margin-left:20px; " src="<?php bloginfo('template_directory'); ?>/image/ep_sam.jpg"></a>
                    	</div>
					</div>	
				</div><!-- /#top_topic -->
				<br class="clear" />
			</div>
		</div>



			<div id="contents-right">


				<a id="soundsLink"></a>
				<div class="top_topic">
                	<div class="kiji_title">SOUNDS</div>
                	<div style="padding: 5px 0px 20px 0px;">
                    	<iframe width="100%" height="420" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F4767582"></iframe>
					</div>	
				</div><!-- /#top_topic -->
            
			<br class="clear" />
		</div><!-- /#contents-right -->
		<br class="clear" />


		<div style="min-height:30px;"></div>



		<a id="youtubeLink"></a>
		<div class="full_topics" >
                	<div class="kiji_title">YOUTUBE</div>
                	<div style="padding: 20px 20px 20px 20px; text-align:center;">
                    	<iframe width="800" height="500" src="http://www.youtube.com/embed/XN5btjd2v0s" frameborder="0" allowfullscreen></iframe>
					</div>	
		</div><!-- /#full_topic -->



		<a id="bioLink"></a>
		<div class="full_topics">
                	<div class="kiji_title">BIOGRAPHY</div>
                	<div style="padding-top: 20px; text-align:center;">
                		<div style="width:980px;">
                			<div style="width:483px; float:left; margin-left:40px;">
                				<img src="<?php bloginfo('template_directory'); ?>/image/artist_min.jpg" alt="">
                			</div>
                			<div style="float:left; text-align:center; width:457px;">
                				<div style="padding-top:50px; ">
                					<img src="<?php bloginfo('template_directory'); ?>/image/logo_min.png" alt="">
                					<div class="prof_box">
                						<p class="prof_member">Ba : Hitomi Kuramochi</p>
                						<p class="prof_member">Machine : George</p>
                						<p class="prof_member">Gt : Takuma Kikuch</p>
                						<p class="prof_member">Dr : Satoshi Yamashita</p>
                					</div>
                					
                				</div>
                				
                			</div>
                			<br class="clear" />
                		</div>
                    	<div style="padding-top: 20px; width:901px; margin-left:auto; margin-right:auto;">
                    		<div class="prof_text">
                    			<span style="line-height:20px;">　2006年に結成されたMop of Headは、ブレイクビーツ、ダブステップ、ドラムンベース、ハウスなどのクラブミュージックを生演奏で表現するバンドとして成長。
「人間が限界の状況で奏でるループが生み出す歪み、そこから生まれる快感」を追求すべく、ライブでは同期系機材やループを一切使用しないスタイルをとっている。<br><br>

　タワーレコードの超人気キャンペーン“踊るロック”に新人ながらフィーチャーされるなど、ダンスロックシーンからの熱い注目を集めるなか、【FUJI ROCK FESTIVAL‘11】の前夜祭に大抜擢されることとなった。文字通り5,000人以上のフジロッカーを見事ノックアウトしたステージは、“彼らをブッキングしたのは去年のFUJI ROCK最大の功績”と大絶賛され、ハイライトのひとつとして大きな賞賛と注目を集めた。
                    			</span>
                    		</div>
                    		<div style="width:430px; float:left; padding:10px; text-align:left;">
                    			<span style="line-height:20px;">また、イギリスBBC Radio 1の人気No.1 DJ、Gilles Petersonの看板番組【WORLD WIDE】や、☆Taku Takahashi(m-flo / TCY RADIO)主宰インターネットラジオ【TCY RADIO】等もいち早く反応し、自らの番組やパーティーで頻繁に彼らのトラックをプレイしており、クラブミュージック界隈に於いても熱い支持を受けている。特にGillesの【WORLD WIDE】では、彼自身が選ぶ上半期TOP50にノミネートされた。<br><br>

　その後10月にはDIGITALISM JAPAN TOURにゲストアクトとして同行。そして12月30日には、国内最大級の年末フェスティバル【COUNTDOWN JAPAN 11/12】にも出演し、幕張アリーナのフロアをキック。今一番見逃してはならないバンドであることに疑いの余地はない（当社比）。
                    			</span>
                    		</div>
                    	</div>
                    	<br class="clear" />
                    	<div style="margin-top:30px;">
                    		<a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                    	</div>
					</div>	
					<br class="clear" />

		</div><!-- /#full_topic -->


		<a id="liveLink"></a>
		<div class="full_topics" >
                	<div class="kiji_title">LIVE</div>
                	<div style="padding: 20px 30px 100px 30px; text-align:left;">
                    	<?php
						function filter_where2($where = '') {
						$where .= " AND post_date > '" . date('Y-m-d', strtotime('0 days')) . "'";
						return $where;
						}
						add_filter('posts_where', 'filter_where2');
						query_posts(array(
						    'cat' => 6,
						    'order' => ASC,
						));?>
						<?php if (have_posts()) : ?>
						<?while (have_posts()): the_post(); ?>
        			
        				 <div class="post" style="padding:20px; text-align:left;"> 
        				 	<div style="float:left ; width:450px;">
        				 		<div class="blog_info">
								<p style="font-weight:600;font-size:140%;text-align:left;"><?php the_time('Y.m.d　D') ?></p>
            					<h1 class="title_live" >
                        			<?php the_title(); ?>
								</h1>
								</div>
								<div style="margin-top:10px; ">
									<div style="width:170px; height:121px; float:left;">
										<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); ?>
										<?php }else {?>
						    			<img src="<?php bloginfo('template_directory'); ?>/image/no-image.png" alt="">
										<?php }?>
									</div>
									<div style="padding:20px; font-size:110%; float:left; text-align:right;">
										<p><?php the_content('more'); ?></p>
									</div>
								<br class="clear" />
								</div>
        				 	</div>

        				 	<div style="float:left; padding-left:10px;">
        				 		<div class="ticket_box">
        				 			<p><?php the_content(); ?></p>
        				 			<p>TICKET</p>
        				 			<p>イープラス：http://eplus.jp/</p>
        				 			<p>チケットぴあ：0570-02-9999　Pコード：185-961</p>
        				 			<p>ローソンチケット：0570-084-003　Lコード：79359</p>
        				 			<p>セブンチケット：セブンコード：020-270</p>
        				 		</div>
        				 		<div style="margin-top:20px; text-align:center; ">
                    			<a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                    			</div>
        				 	</div>
        				 	<br class="clear" />
        				 	

						</div>
					

            			<?php endwhile; ?>
						<?php else : ?>
						    <p>現在予定しているライブはございません。</p>
						<?php endif; ?>

					</div>	
		</div><!-- /#full_topic -->


		<a id="newsLink">&nbsp;</a>
		<div class="full_topics" >
                	<div class="kiji_title">NEWS</div>
                	<div style="padding: 20px 30px 100px 30px; text-align:left;">
                    	<?php $posts = get_posts('numberposts=4&category=4');
						foreach($posts as $post) :
						setup_postdata($post); ?>
        			
        				 <div class="post" style="padding:20px;"> 
        				 	<div style="text-align:right;">
                    		<a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                    		</div>
							<div class="blog_info">
            					<h1 class="title">
                        			<?php the_title(); ?>
								</h1>
								<p style="font-weight:400;font-size:120%;text-align:right;"><?php the_time('Y.m.d　D') ?></p>
							</div>
						

								<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
                            <div style="padding-top:20px;padding-bottom:20px; font-size:110%;">  
								<p><?php the_content('more'); ?></p>
							</div>
							
						</div>
					

            			<?php endforeach; ?>

					</div>	
		</div><!-- /#full_topic -->


		<a id="releaseLink"></a>
		<div class="full_topics" >
                	<div class="kiji_title">RELEASE</div>
                	<div style="text-align:center; padding-bottom:20px;">
                		<div class="large_box">
                			<div style="float:left; ">
                				<img src="<?php bloginfo('template_directory'); ?>/image/uncontrol_a.png">
                			</div>
                			<div style="float:left; margin-left:50px; padding-top:50px; text-align:left;">
                				<p class="songs">01. Territory</p>
                				<p class="songs">02. Uncontrol</p>
                				<p class="songs">03. Planet Gig</p>
                				<p class="songs">04. Pele</p>
                				<p class="songs">05. Nagisa</p>
                			</div>
                			<br class="clear" />
                			<br class="clear" />

                			<div style="margin:-30px; left:50%; text-align:center; position:absolute;">
                    		<a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                    		</div>

                		</div>

                		<div class="large_box">
                			<div style="float:left; ">
                				<img src="<?php bloginfo('template_directory'); ?>/image/retronix_a.png">
                			</div>
                			<div style="float:left; margin-left:50px; padding-top:50px; text-align:left;">
                				<p class="songs">01. ONE</p>
                				<p class="songs">02. S.A</p>
                				<p class="songs">03. Istanbul</p>
                				<p class="songs">04. Retronix Symphony</p>
                				<p class="songs">05. THE WORLD</p>
                				<p class="songs">06. Hocus Homage</p>
                				<p class="songs">07. Delyte</p>
                				<p class="songs">08. Davala</p>
                				<p class="songs">09. Love Pop Dance Music</p>
                				<p class="songs">10. superhuman</p>
                				<p class="songs">11. Davala - Kan Takahiko Remix</p>
                				<p class="songs">12. ONE - DJ RAYMOND (from TheSAMOS) Remix</p>
                				<p class="songs">13. Hocus Homage - DJ momoko Remix</p>
                				<p class="songs">14. Retronix Symphony - Seiji Remix</p>

                			</div>
                			<br class="clear" />
                			<br class="clear" />

                			<div style="margin:-30px; left:50%; text-align:center; position:absolute;">
                    		<a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                    		</div>

                		</div>
					</div>	
		</div><!-- /#full_topic -->




		<a id="goodsLink"></a>
		<div class="full_topics" >
                	<div class="kiji_title">GOODS</div>
                	<div style="padding-bottom:20px; text-align:center;">
                		<div class="large_box" >
                			<div id="goods_titlebox">
                			<p style="color:#FFF; font-weight: 100;">LIVE会場限定GOODS</p>
                			</div>

                			<div style="margin-top:20px;">
                				<div class="goods_T_box" style="margin-left:10px;">
                					<img src="<?php bloginfo('template_directory'); ?>/image/logo_Tee.jpg">
                					<div style="margin-top:20px; text-align:center;">
                						<p style="line-height:19px;">MOP of HEAD logo TEE</p>
                						<p style="line-height:19px;">サイズ | ０／１／２</p>
                						<p style="line-height:19px;">価格 ｜2,500円（税込）</p>
                					</div>
                				</div>
                				<div class="goods_T_box" style="margin-left:80px;">
                					<img src="<?php bloginfo('template_directory'); ?>/image/love_Tee.jpg">
                					<div style="margin-top:20px; text-align:center;">
                						<p style="line-height:19px;">LOVE POP TEE</p>
                						<p style="line-height:19px;">サイズ | ０／１／２</p>
                						<p style="line-height:19px;">価格 ｜2,600円（税込）</p>
                					</div>
                				</div>
                				<div class="goods_T_box" style="margin-left:80px; margin-right:10px;">
                					<img src="<?php bloginfo('template_directory'); ?>/image/connection_Tee.jpg">
                					<div style="margin-top:20px; text-align:center;">
                						<p style="line-height:19px;">CONNECTION TEE</p>
                						<p style="line-height:19px;">サイズ | フリーサイズ</p>
                						<p style="line-height:19px;">価格 ｜3,500円（税込）</p>
                					</div>
                				</div>
                			</div>
                		<br class="clear" />	
                		</div>

                		<div class="large_box" >
                			<div style="margin-top:20px;">
                				<div class="goods_Cap_box" style="margin-left:0px;">
                					<img src="<?php bloginfo('template_directory'); ?>/image/leave_Cap.jpg">
                					<div style="margin-top:20px; text-align:center;">
                						<p style="line-height:19px;">MOP of HEAD LEAVE M CAP</p>
                						<p style="line-height:19px;">サイズ | ブラック</p>
                						<p style="line-height:19px;">価格 ｜3,900円（税込）</p>
                					</div>
                				</div>
                				<div class="goods_Cap_box" style="margin-left:20px;">
                					<img src="<?php bloginfo('template_directory'); ?>/image/work_Cap.jpg">
                					<div style="margin-top:20px; text-align:center;">
                						<p style="line-height:19px;">MOP of HEAD LEAVE WORK CAP</p>
                						<p style="line-height:19px;">サイズ | ブラック／カーキ</p>
                						<p style="line-height:19px;">価格 ｜3,900円（税込）</p>
                					</div>
                				</div>
                			</div>
                		<br class="clear" />
                		<div style="margin:-30px; left:50%; text-align:center; position:absolute;">
                    	<a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                    	</div>
                		</div>
					</div>	
		</div><!-- /#full_topic -->



<?php get_footer(); ?>