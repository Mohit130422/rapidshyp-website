<?php
/**
 * The main template file
 * 
 * @package rapidshyp
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<div class="container">
	
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			if(1 == $paged) {
				$args = array(
					'meta_key' => '_is_ns_featured_post',
					'orderby' => 'meta_value_num',
					'order' => 'DESC',
					'posts_per_page' => 1
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					echo '<div class="featured_article">';
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
					?>
					<div class="row clearfix">
						<div class="col-md-5 pull-right">
							<!--<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt=""/>-->
							<?php $featured = get_field('featured_post_image',22); ?>
							<img src="<?php echo $featured['url']; ?>" alt="featured-image"/>
						</div>
						<div class="col-md-7">
							<p>
								<?php
								$post_categories = wp_get_post_categories( get_the_ID() );
								$i=0;
								foreach( $post_categories as $cat_id ) {
									$cat_name = get_cat_name( $cat_id );
									echo '<a class="sub-category" href="' . get_category_link( $cat_id ) . '">' . $cat_name . '</a>';
									$i++;
								}
								?>
							</p>
							<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							<p><?php echo get_excerpt(150);?></p>
							<p class="author_date"><?php echo get_the_date('M d, Y');?> | <?php echo do_shortcode('[read_meter]');?> read</p>
						</div>
					</div>
					<?php
					}
					echo '</div>';
				}
				wp_reset_postdata();
			}
		?>

	<div class="recent_blogs">
		<!--<h2>Recent Blogs</h2>-->
		<?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'posts_per_page' => 6,// query last 5 posts  
			'paged' => $paged,
			'meta_query' => array(
				'relation' => 'OR',
				array(
					'key'     => '_is_ns_featured_post',
					'compare' => 'NOT EXISTS'
				)
			)
		);
		$recentblogs = new WP_Query($args);
		//echo $wpdb->last_query;
		if ($recentblogs->have_posts() ) {
			echo '<ul class="row clearfix articles_hold top_articles">';
			while ($recentblogs->have_posts() ) {
				$recentblogs->the_post();
		?>
			 <li class="col-md-4">
				<?php $img=get_field('post_image');
				if($img){?>
				 <a href="<?php the_permalink();?>"><img src="<?php echo $img['url'];?>"/></a>
				 <?php }else{?>
				 <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt=""/></a>
				 <?php }?>
				<p>
				<?php
				$post_categories = wp_get_post_categories( get_the_ID() );
				$i=0;
				foreach( $post_categories as $cat_id ) {
					$cat_name = get_cat_name( $cat_id );
					if($i==0){
					//if($i>=1){
						//echo ', ';
					//}
					echo '<a href="' . get_category_link( $cat_id ) . '">' . $cat_name . '</a>';
					}
					$i++;
				}
				?>
				<?php echo '&nbsp;&nbsp;'.do_shortcode('[read_meter]');?></p>
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<p><?php echo get_excerpt(150);?></p>
				<p class="author_date"><?php the_author_posts_link();?>&nbsp;&nbsp;&nbsp;<?php echo get_the_date('M d, Y');?></p>
			</li>
		<?php
			}
			echo '</ul>';
			echo '<div class="row clearfix"><div class="col-md-6 load_more_posts">';
			echo next_posts_link('Load More Articles');
			echo '</div><div class="col-md-6 text-right">';
			wp_pagenavi();
			/*if (function_exists("cq_pagination")) {
				cq_pagination(); 
			}*/
			echo '</div></div>';
		} else {
			// no posts found
		}
		wp_reset_postdata();
		?>
	</div>
	<?php $promo1 = get_field('promo_banner_1',22);
	if($promo1){?>
	<div class="promo_banner openWaitlistModal">
		<img alt="promo-banner" src="<?php echo $promo1['url']; ?>" id="promo-banner"/></a>
	</div>
	<?php }?>
	<div class="editors_choice">
		<?php
		$tag = get_term_by('slug','editors-choice','post_tag');
		$args = array(
			'tag__in' => $tag->term_id,
			'posts_per_page' => 2
		);
		$the_query = new WP_Query( $args );
		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<h2>Editors choice</h2>';
			echo '<ul class="row clearfix">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
		?>
			 <li class="col-md-6">
				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<p><?php echo get_excerpt(150);?></p>
				<p class="author_date"><strong><?php the_author_posts_link();?></strong>&nbsp;&nbsp;&nbsp;<?php echo get_the_date('M d, Y');?></p>
			</li>
		<?php
			}
			echo '</ul>';
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div>
	<div class="category_blogs">
		<?php 
		$categories=get_categories( array(
			'hide_empty' => 1,
			'offset' => 1,
			'parent'  => 0,
			'orderby' => 'count',
			'order'   => 'DESC',
		));
		$limit=6;
		$counter=0;
		foreach ($categories as $category){
			if($counter<$limit){
				$link = get_category_link($category->term_id);
				$subcategories = get_categories(array('child_of' => $category->term_id));
				//print_r($subcategories);
				foreach($subcategories as $subcat){
					 $sublink = get_category_link($subcat->term_id);
					 $subtitle .= "<a href='{$sublink}'>".$subcat->name."</a>";
				}
				//print_r($subtitle);
				$title = sprintf(__("View all posts in %s"), $category->name);
				if($counter==1){
					$promo2 = get_field('promo_banner_2',22);
					echo '<a href="'.get_field("promo_banner_1_link_copy",22).'"><img alt="promo-banner" src="'.$promo2['url'].'" id="promo-banner"/></a>';
				}
				echo '<h2>'.$category->name.'</h2>';
				echo '<div class="sub-categories">'.$subtitle.'</div>';
				$posts = get_posts( array(
					'cat' => $category->term_id,
					'numberposts' => 6,
				) );
				echo '<ul class="row clearfix articles_hold">';
				foreach($posts as $post){
				?>
					<li class="col-md-4">
					<?php $img=get_field('post_image');
					if($img){?>
						<a href="<?php the_permalink();?>"><img src="<?php echo $img['url'];?>"/></a>
					<?php }else{?>
						<a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>" alt=""/></a>
					<?php }?>
					<p>
					<?php
					$post_categories = wp_get_post_categories( get_the_ID() );
					$i=0;
					foreach( $post_categories as $cat_id ) {
						$cat_name = get_cat_name( $cat_id );
						if($i==0){
						//if($i>=1){
							//echo ', ';
						//}
						echo '<a href="' . get_category_link( $cat_id ) . '">' . $cat_name . '</a>';
						}
						$i++;
					}
					?>
					<?php echo '&nbsp;&nbsp;'.do_shortcode('[read_meter]');?></p>
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<p><?php echo get_excerpt(150);?></p>
					<p class="author_date"><?php the_author_posts_link();?>&nbsp;&nbsp;&nbsp;<?php echo get_the_date('M d, Y');?></p>
				</li>
				<?php
				}
				echo '</ul>';
			}
			$counter++;
		}

		?>
	</div>
</div>
<?php get_footer(); ?> 