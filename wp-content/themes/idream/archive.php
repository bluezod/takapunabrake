<?php get_header(); ?>

<!-- main column Starts here -->
<div id="maincol">

<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

	<?php /* If this is a category archive */ if (is_category()) { ?>
	<h2 class="arpageTitle"><?php single_cat_title(); ?></h2>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h2 class="arpageTitle">Tag: <?php single_tag_title(); ?></h2>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h2 class="arpageTitle">Archive for <?php the_time('F jS, Y'); ?></h2>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h2 class="arpageTitle">Archive for <?php the_time('F, Y'); ?></h2>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="arpageTitle">Archive for <?php the_time('Y'); ?></h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="arpageTitle">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2 class="arpageTitle">Blog Archives</h2>
<?php } ?>

<?php while (have_posts()) : the_post(); ?>

<div class="postwrap">

        	<div class="postmeta2">
            	<div class="meta2inner">
                	<div class="pday"><?php the_time('j'); ?></div>
                    <div class="pmonth"><?php the_time('M/y'); ?></div>
                </div>
            </div> 

  <h2 class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="postmeta">by <?php the_author_posts_link(); ?> under <?php the_category(', '); ?></div>
  <div class="clr16"></div>
  <div class="postcontent"><?php the_content('(continue reading...)'); ?></div>

		<div class="roubcornrcontent">         	
                <span class="posttags"><?php $tag = get_the_tags(); if (! $tag) {echo "No tags";} else {the_tags('', ', ', '');} ?></span>  
              	<span class="postcomments"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
              	<span class="postmore"><a href="<?php the_permalink() ?>">more...</a></span>
                <div class="clr"></div>
        </div>


<div class="cleared"></div>
</div> <!-- Closes topPost --><br/>

<?php endwhile; ?>

<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Not Found</a></h2>
  <div class="topContent"><p>Sorry, but you are looking for something that isn't here. You can search again by using <a href="#searchform">this form</a>...</p></div>
</div> <!-- Closes topPost -->

<?php endif; ?>

<div id="nextprevious">
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="cleared"></div>
</div>
</div>


<!-- right column Starts here -->
<div id="rightcol">
	<?php get_sidebar(); ?>
</div>
<div class="clr"></div>

<?php get_footer(); ?>