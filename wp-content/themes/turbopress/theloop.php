<?php 
	global $post, $query_string, $SMTheme;
	query_posts($query_string);
	$i=1;
	if (have_posts()) :  
	
	if (!isset($_GET['ajaxpage'])) {?>
 <dl class='articles'>
	<?php }
	while (have_posts()) : the_post(); 
	?>
		<dt id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (!is_single()&&!is_page()) { ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( $SMTheme->_( 'permalink' ), the_title_attribute( 'echo=0' ) ); ?>" class='post_ttl'><?php the_title(); ?></a></h2>
			<?php } else { ?>
<h1><?php the_title(); ?></h1>
			<?php } ?>
        
        <!--add social sharing links js code ### begin 20130103 ###-->
        <a href="http://v.t.sina.com.cn/share/share.php?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="新浪微博" target="_blank" rel="nofollow"><img src="<?php bloginfo('url') ?>/wp-content/themes/turbopress/images/icons/32-weibo.png" alt="sina" width="24" height="24" border="0" /></a>
        <a href="http://v.t.qq.com/share/share.php?url=<?php the_title(); ?>&rurl=<?php the_permalink(); ?>" title="腾讯微博" target="_blank" rel="nofollow"><img src="<?php bloginfo('url') ?>/wp-content/themes/turbopress/images/icons/32-qqweibo.png" alt="tencent" width="24" height="24" border="0" /></a>
        <a href="http://share.renren.com/share/buttonshare.do?link=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="人人网" target="_blank" rel="nofollow" ><img src="<?php bloginfo('url') ?>/wp-content/themes/turbopress/images/icons/32-renren.png" alt="renren" width="24" height="24" border="0" /></a>
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Facebook" target="_blank" rel="nofollow"><img src="<?php bloginfo('url') ?>/wp-content/themes/turbopress/images/icons/32-facebook.png" alt="facebook" width="24" height="24" border="0" /></a>
        <a href="http://twitter.com/home?status=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Twitter" target="_blank" rel="nofollow"><img src="<?php bloginfo('url') ?>/wp-content/themes/turbopress/images/icons/32-twitter.png" alt="twitter" width="24" height="24" border="0" /></a>
        <a href="https://plus.google.com/share?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Google+" target="_blank" rel="nofollow"><img src="<?php bloginfo('url') ?>/wp-content/themes/turbopress/images/icons/32-google.png" alt="google+" width="24" height="24" border="0" /></a>
       <!--### end 20130103 ###-->
       
			<p><?php if (!is_page()) {?><?php echo get_the_date(); ?> <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/smt/category.png"><?php the_category(',&nbsp;'); }?>
			<?php if(comments_open( get_the_ID() ))  {
                    ?><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/smt/comments.png">&nbsp;<span class="meta_comments"><?php comments_popup_link( $SMTheme->_( 'noresponses' ), $SMTheme->_( 'oneresponse' ), $SMTheme->_( 'multiresponse' ) ); ?></span><?php
                }
                ?><?php edit_post_link( $SMTheme->_( 'edit' ), '&nbsp;&nbsp;|&nbsp;&nbsp;<span class="edit-link">', '</span>' ); ?></p>
		</dt>
		<dd>
			<?php
                if(has_post_thumbnail())  {
                    ?><?php if (!is_single()) { ?><a href="<?php the_permalink(); ?>" title="<?php printf( $SMTheme->_( 'permalink' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_post_thumbnail(
						array($SMTheme->get( 'layout', 'imgwidth' ), $SMTheme->get( 'layout', 'imgheight' )),
                        array("class" => $SMTheme->get( 'layout','imgpos' ) . " featured_image")
                    ); ?></a><?php } else { ?>
						<?php the_post_thumbnail(
						array(278, 173),
                        array("class" => $SMTheme->get( 'layout','imgpos' ) . " featured_image")
                    ); ?>
					<?php }
                }
				
				if (!is_single()&&!is_page()) {
					smtheme_excerpt('echo=1');
					?><a href='<?php the_permalink(); ?>' class='readmore'><?php echo $SMTheme->_( 'readmore' ); ?></a><?php
				} else {
					the_content('');
					
				}
            ?>
			<?php wp_link_pages(); ?>
		</dd>
	<?php endwhile; ?>
	
	<?php if (!isset($_GET['ajaxpage'])) {?>
 </dl>
	<?php } ?>
	
	
<?php endif; ?>