<?php get_header(); ?>



<!-- Contents -->           
            <div id="contents">


            <!-- <a id="soundsLink"></a> -->
            <div class="full_topics" >
                    <div class="kiji_title" id="soundsLink" name="#soundsLink">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/sounds_kijititle.png" alt="">
                    </div>
                    <div style="padding: 20px 20px 20px 20px; text-align:center;">
                        <iframe width="100%" height="350" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F4767582&amp;color=ff0000&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    </div>  
            </div>


            <!-- <a id="liveLink"></a> -->
            <div id="contents-left" >

                <div class="top_topic">
                    <div class="kiji_title" id="liveLink" name="#liveLink">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/live_kijititle.png" alt="">
                    </div>
                    <div style="padding: 20px 30px 20px 30px;　">

                        <?php
                        function filter_where($where = '') {
                        $where .= " AND post_date > '" . date('Y-m-d', strtotime('0 days')) . "'";
                        return $where;
                        }
                        add_filter('posts_where', 'filter_where');
                        query_posts(array(
                            'cat' => 2,
                            'order' => ASC,
                        ));?>
                        <?php if (have_posts()) : ?>
                        <?while (have_posts()): the_post(); ?>
                            <div class="blog_info_a">
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                            <span style="font-weight:bold;"><?php the_time('Y.m.d') ?>&nbsp; ｜&nbsp; </span>
                            <span style="font-weight:100;"><?php the_title(); ?></span>
                            </a>
                            </div>
                        <?php endwhile; ?>
                        <?php else : ?>
                            <p>現在予定しているライブはございません。</p>
                        <?php endif; ?>
                    </div> 
                    <div style="right:0px; bottom:0px;position:absolute;">
                        <a href="<?php echo get_category_link('2'); ?>" class="more_info">More Info</a>
                    </div> 
                </div><!-- /#top_topic -->
                

            <br class="clear">
            </div><!-- /#contents-left -->


            
            <!-- <a id="newsLink">&nbsp;</a> -->
            <div id="contents-right">


                <div class="top_topic">
                    <div class="kiji_title" id="newsLink" name="#newsLink">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/news_kijititle.png" alt="">
                    </div>
                    <div style="padding: 5px 30px 20px 30px;">
                        <?php $posts = get_posts('numberposts=4&category=3');
                        foreach($posts as $post) :
                        setup_postdata($post); ?>
                    
                        <div class="post">  
                            <div class="blog_info_a">
                                <span style="font-weight:100;font-size:80%;"><?php the_time('Y.m.d') ?></span></br>
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                    <span style="font-weight:600;font-size:100%;line-height:20px;"><?php the_title(); ?></span>
                                </a>
                            </div>
                        </div>
                     
                        <?php endforeach; ?>
                    </div> 
                    <div style="right:0px; bottom:0px;position:absolute;">
                        <a href="<?php echo get_category_link('3'); ?>" class="more_info">More Info</a>
                    </div>  
                </div><!-- /#top_topic -->
            
            <br class="clear" />
        </div><!-- /#contents-right -->
        <br class="clear" />


        <div style="margin-top:30px;">
            <div id="contents-left">

                <div class="top_topic">
                    <div class="kiji_title">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/twitter_kijititle.png" alt="">
                    </div>

                    <div style="padding: 0px 10px 0px 10px;">
                        <a class="twitter-timeline" data-chrome="noheader transparent"　data-border-color="#000"　width="231" height="450"　href="https://twitter.com/MopofHead" data-widget-id="328571863657750528">@MopofHead からのツイート</a>
                        <script>
                            !function(d,s,id){
                                var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js,fjs);}
                            }(document,"script","twitter-wjs");
                        </script>

                    </div>  
                </div><!-- /#top_topic -->
                <br class="clear" />
            </div>
        </div>



            <div id="contents-right">


                
                <div class="top_topic">
                    <div class="kiji_title" id="" name="#">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/facebook_kijititle.png" alt="">
                    </div>
                    <div style="padding: 0px 0px 0px 0px;">
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmopofhead&amp;width=451&amp;height=558&amp;show_faces=true&amp;colorscheme=light&amp;stream=true&amp;border_color=%23E8E9E9%3B&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:451px; height:450px;" allowTransparency="true"></iframe>
                    </div>  
                </div><!-- /#top_topic -->
            
            <br class="clear" />
        </div><!-- /#contents-right -->
        <br class="clear" />


        <div class="full_topics" >
                    <div class="kiji_title" id="youtubeLink" name="#youtubeLink">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/release_kijititle.png" alt="">
                    </div>
                    <div style="padding: 20px 30px 10px 30px; text-align:center;">
                        <div>
                            <a href="#releaseLink"><img src="<?php bloginfo('template_directory'); ?>/image/braking_sam.jpg"></a>&nbsp; 
                            <a href="#releaseLink"><img style="margin-left:45px; " src="<?php bloginfo('template_directory'); ?>/image/UNCONTROL_sam.jpg"></a>&nbsp; 
                            <a href="#releaseLink"><img style="margin-left:45px; " src="<?php bloginfo('template_directory'); ?>/image/retronix_sam.jpg"></a>&nbsp; 
                            <a href="#releaseLink"><img style="margin-left:45px; " src="<?php bloginfo('template_directory'); ?>/image/ep_sam.jpg"></a>
                        </div>
                    </div>   
        </div>


        <!-- <a id="youtubeLink"></a> -->
        <div class="full_topics" >
                    <div class="kiji_title" id="youtubeLink" name="#youtubeLink">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/videos_kijititle.png" alt="">
                    </div>
                    <div style="padding: 20px 20px 20px 20px; text-align:center;">
                        <iframe width="800" height="500" src="http://www.youtube.com/embed/XN5btjd2v0s" frameborder="0" allowfullscreen></iframe>
                    </div>  
        </div><!-- /#full_topic -->



        <!-- <a id="bioLink"></a> -->
        <div class="full_topics">
                    <div class="kiji_title" id="bioLink" name="#bioLink" >
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/bio_kijititle.png" alt="">
                    </div>
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
                                <span style="line-height:20px;">2006年に結成。<br>
ブレイクビーツ、ダブステップ、ドラムンベース、ハウスなどのクラブミュージックを生演奏で表現するロックバンドとして成長。<br>
「人間が限界の状況で奏でるループが生み出す歪み、そこから生まれる快感」を追求すべく、ライブでは同期系機材やループを一切使用しないスタイルをとっている。<br><br>

タワーレコードの超人気キャンペーン【踊るロック】に新人ながらフィーチャーされるなど、ダンスロックシーンからの熱い注目を集めるなか、【FUJI ROCK FESTIVAL‘11】の前夜祭に大抜擢されることとなった。文字通り5,000人以上のフジロッカーを見事ノックアウトしたステージは、“彼らをブッキングしたのは去年のFUJIROCK最大の功績”と大絶賛され、ハイライトのひとつとして大きな賞賛と注目を集めた。（フジロックフェスティバルオフィシャルブログサイト、“Fujirockers.org”より抜粋）<br><br>

また、イギリスBBC Radio 1の人気No.1 DJ、Gilles Petersonの看板番組【WORLD WIDE】や、☆Taku Takahashi(m-flo / TCY RADIO)主宰インターネットラジオ【TCY RADIO】等もいち早く反応し、自らの番組やパーティーで頻繁に彼らのトラックをプレイしており、クラブミュージック界隈に於いても熱い支持を受けている。特にGillesの【WORLD WIDE】では、彼自身が選ぶ上半期TOP50にノミネートされた。
                                </span>
                            </div>
                            <div style="width:430px; float:left; padding:10px; text-align:left;">
                                <span style="line-height:20px;">その後、10月にはDIGITALISM JAPAN TOURのゲストアクトへの抜擢、そして12月30日には、国内最大級の年末フェスティバル【COUNTDOWN JAPAN 11/12】にも出演幕張アリーナのフロアをキック。その常軌を逸したエキセントリック且つ中毒性の高いライブは、“ベストアクト‘と称する声が多かったことからも分かるように、現在全国的に凄まじい勢いで伝染している。<br><br>

2012年5月9日に、タワーレコード限定EP【UNCONTROL】をリリースした。<br>
昨年に続きタワーレコード【踊るロック】に、表紙として抜擢された。<br>
既に前作のフルアルバムのセールスを超え、新人バンドとしては異例の【FUJI ROCK FESTIVAL’12】へ出演!!!　<br>
最終日深夜、満員のRED MARQUEEを大いに盛り上げた。<br>
各地のイベントへも引っ張りだことなり、前年に続きDIGITALISMとのスプリットツアーを敢行するなど、多くのアーティストから賛辞とラブコールを送られている。<br><br>

迎えた2013年。注目の2ndフルアルバムを5月8日リリース予定。<br><br>

台湾の【URBAN NOMAD FILM FESTIVAL】への出演も決定し、いよいよ海外への進出を果たすことになる。<br>
そして、バンド史上初となる全国規模のツアーも予定されており、音楽雑誌【MUSICA】が推薦する”2013年イチ押しアーティスト”に選ばれるなど、より大きな期待を寄せられている新型のロックバンド。
                                </span>
                            </div>
                        </div>
                        <br class="clear" />
                        <div style="padding-top: 20px; width:901px; margin-left:auto; margin-right:auto; text-align:left;">
                            <span style="line-height:20px;">
                                Mop of Head are<br>
Machines- George<br>
Drums- Satoshi Yamashita<br>
Bass- Hitomi Kuramochi<br>
Guitar- Takuma Kikuchi<br><br>

Mop of Head was formed in 2006 by George and friends over a common interest in breakbeats, dubstep, drum ‘n’ bass, house, club music in general, and the desire to perform it themselves live.   Given certain human limitations, loops were also employed, but distorted live to taste.  Finding pleasure in their first few live performances, they fervently pursued music full force.<br>
Their debut EP “Retronix” was initially sold only at their live performances, but in 2011 was released to retail stores, and did especially well at Tower Records, who picked it up to feature it in their annual “Odoru Rock” campaign.  This created an even bigger stir, and led to their being invited to play at the welcoming event at Fuji Rock 2011.   Drawing over 5,000 people to the Red Marquee, they scored a musical knockout with a dynamic performance, which won them high praise from music fans and the industry. <br>
Amongst those who picked up on Mop of Head early was BBC Radio 1 DJ Gilles Peterson, who played them often on his show “World Wide” and Taku Takahashi of m-flo and supervisor of internet radio station TCY Radio.  Via the band’s live performances, radio exposure and club play, the band’s music spread, and the reaction was positive and immediate. <br><br> 

In October of 2011 they were asked to join the Japanese tour of German electro house duo Digitalism.   Continuing on a roll, they were invited to play Japan’s biggest year end live event “Countdown Japan 11/12” at Makuhari Messe arena. The band delivered a mighty performance, and gained the reputation of being a band not to miss.  <br> 
Coming into the 2012, the band changed drummers, but they did not slow down a bit.  <br> 
May 9, 2012 Mop of Head releases their second official EP “Uncontrol”, are featured on the cover of the pamphlet for this year’s “Odoru Rock” , made a new buzz to more music fans.<br>
They have played festivals and clubs across Japan, opened for acclaimed British band Teeth and have been invited to again played at Fuji Rock Festival ’12 this summer’s came back.<br>
Also asked to join the Japanese Tour of Digitalism again at October of 2012, they were really praised from German star guys and their management, sure of develop up step by step through the 2012.<br><br>

2013 is really new year for Lads.<br>
Big music magazine "MUSICA" picked up them to "featured artists of 2013" on new year's issue.<br>
Remarkable stuff is, Taiwan's famous festival "URBAN NOMAD" asked them to act strongly and fixed, moreover this offer is for Headline of festival…, will gig at April 27.<br>
its a their first straight up activities overseas experience.<br>
And then they begun to make new materials right away, so its called their 2nd full length album to be released on May 9th,
with big confidence, attitude, kicking the next range of music lovers all over the world.<br><br>

We have the feeling things are just getting started.
                            <span>
                        </div>
                        <div style="margin-top:30px;">
                            <a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                        </div>
                    </div>  
                    <br class="clear" />

        </div><!-- /#full_topic -->



        <!-- <a id="releaseLink"></a> -->
        <div class="full_topics" id="releaseLink" name="#releaseLink">
                    <div class="kiji_title">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/release_kijititle.png" alt="">
                    </div>
                    <div style="text-align:center; padding-bottom:20px;">
                        <div class="large_box">
                            <div style="float:left; ">
                                <img src="<?php bloginfo('template_directory'); ?>/image/braking_a.png">
                                <div style="text-align:center; padding:10px;">
                                    <a href="https://itunes.apple.com/jp/album/id639093441" target="itunes_store">
                                        <img src="<?php bloginfo('template_directory'); ?>/image/i_budge.png" alt="">
                                    </a>
                                </div>  
                            </div>
                            <div style="float:left; margin-left:50px; padding-top:50px; text-align:left; width:500px;">
                                <p class="songs">Release Date : 2013/5/8</p>
                                <p class="songs">￥2,625（Tax Include）</p><br>
                                <p class="songs">01. Land</p>
                                <p class="songs">02. Japanese Boring</p>
                                <p class="songs">03. C</p>
                                <p class="songs">04. Breaking Out Basis</p>
                                <p class="songs">05. Animal</p>
                                <p class="songs">06. 1988</p>
                                <p class="songs">07. Zamora</p>
                                <p class="songs">08. UNCONTROL -Toni Economides Extended Mix-</p>
                                <p class="songs">09. Bomb</p>
                                <p class="songs">10. Waltz of Paradiso</p>
                            </div>
                            <br class="clear" />
                            <br class="clear" />

                            <div style="margin:-30px; left:50%; text-align:center; position:absolute;">
                            <a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                            </div>

                        </div>

                        <div class="large_box">
                            <div style="float:left; ">
                                <img src="<?php bloginfo('template_directory'); ?>/image/uncontrol_a.png">
                                <div style="text-align:center; padding:10px;">
                                    <a href="https://itunes.apple.com/jp/album/retronix/id445304419?uo=4" target="itunes_store">
                                        <img src="<?php bloginfo('template_directory'); ?>/image/i_budge.png" alt="">
                                    </a>
                                </div>  
                            </div>
                            <div style="float:left; margin-left:50px; padding-top:50px; text-align:left; width:500px;">
                                <p class="songs">Release Date : 2012/5/9（TOWER RECORDS Limited）</p>
                                <p class="songs">￥1,575（Tax Include）</p><br>
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
                                <div style="text-align:center; padding:10px;">
                                    <a href="https://itunes.apple.com/jp/album/retronix/id445304419?uo=4" target="itunes_store">
                                        <img src="<?php bloginfo('template_directory'); ?>/image/i_budge.png" alt="">
                                    </a>
                                </div>  
                            </div>
                            <div style="float:left; margin-left:50px; padding-top:20px; text-align:left; width:500px;">
                                <p class="songs">Release date : 2011/7/6</p>
                                <p class="songs">￥2,625（Tax Include）</p><br>
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

                            <div style="margin-left:-20px; left:50%; text-align:center; ">
                            <a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                            </div>

                        </div>
                        
                        
                        <div class="large_box">
                            <div style="float:left; ">
                                <img src="<?php bloginfo('template_directory'); ?>/image/ep_a.png">
                                <div style="text-align:center; padding:10px;">
                                    <a href="https://itunes.apple.com/jp/album/mop-of-head-ep/id428463703?uo=4" target="itunes_store">
                                        <img src="<?php bloginfo('template_directory'); ?>/image/i_budge.png" alt="">
                                    </a>
                                </div>  
                            </div>
                            <div style="float:left; margin-left:50px; padding-top:50px; text-align:left; width:500px;">
                                <p class="songs">Release Date : 2011/4/20（TOWER RECORDS Limited - SOLD OUT）</p>
                                <p class="songs">￥1,050 (Tax Include）</p><br>
                                <p class="songs">01. super humanE</p>
                                <p class="songs">02. joy-feared</p>
                                <p class="songs">03. 8th night</p>
                                <p class="songs">04. C remix by DJ RAYMOND(from the samos) &Takeru John Otoguro (fromTachytelic)</p>
                                <p class="songs">05. GLOW - super human OLFA ASTRA remix -</p>
                            </div>
                            <br class="clear" />
                            <br class="clear" />

                            <div style="margin:-30px; left:50%; text-align:center; position:absolute;">
                            <a href="#top"><img src="<?php bloginfo('template_directory'); ?>/image/ancer.png" alt=""></a>
                            </div>

                        </div>
                    </div>  
        </div><!-- /#full_topic -->




        <!-- <a id="goodsLink"></a> -->
        <div class="full_topics" id="goodsLink" name="#goodsLink">
                    <div class="kiji_title">
                        <img style="vertical-align:middle;" src="<?php bloginfo('template_directory'); ?>/image/goods_kijititle.png" alt="">
                    </div>
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
                                        <p style="line-height:19px;">Body : White/Black</p>
                                        <p style="line-height:19px;">価格 ｜2,500円（税込）</p>
                                    </div>
                                </div>
                                <div class="goods_T_box" style="margin-left:80px;">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/love_Tee.jpg">
                                    <div style="margin-top:20px; text-align:center;">
                                        <p style="line-height:19px;">LOVE POP TEE</p>
                                        <p style="line-height:19px;">サイズ | ０／１／２</p>
                                        <p style="line-height:19px;">価格 ｜2,500円（税込）</p>
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