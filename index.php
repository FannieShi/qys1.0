<?php get_header(); ?>		
<div class="main">
	<div class="bloglist">
		<h3 class="title">
			<span>最新文章</span>
		</h3>
		<!-- Blog Post -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="blog">
			<h4>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h4>
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php 
						if (has_post_thumbnail()) { 
							the_post_thumbnail(); 
						}else{?>
							<img src="<?php bloginfo('template_url'); ?>/imgs/404.jpg" alt="default" />
					<?php } ?> 
				</a>							
			</div>
			<div class="text">
				<?php the_excerpt(); ?>
				<p class="readmore">
					<a href="<?php the_permalink(); ?>" target="_blank">阅读全文&rsaquo;&rsaquo;</a>
				</p>					
			</div>
			<div class="info">
				<span>版块：[<?php the_category(', '); ?>]</span>
				<span>浏览（<a href="<?php the_permalink(); ?>" class="view"><?php if(function_exists('the_views')) { the_views(); } ?></a>）</span>
				<span>评论（<?php comments_popup_link('0', '1', '%', '', '评论已关闭'); ?>）</span>
				<span><?php edit_post_link('编辑', ''); ?></span>
			</div>
			<div class="dates">
				<?php the_time('Y-m-d') ?>
			</div>
			
		</article>
		<?php endwhile; ?>
		<?php else : ?>
		<article class="blog">
		 	<h4>
				<a href="#" rel="bookmark">Not Found!</a>
			</h4>
			<div class="thumbnail">
				<a href="<?php echo get_option('home'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/imgs/404.jpg" alt="" />
				</a>							
			</div>
			<div class="text">
				<p>没有找到任何文章！</p>
			</div>
			<div class="info">
				<span>版块：[<a href="#">默认</a>]</span>
				<span>浏览（<a href="#" class="view">0</a>）</span>
				<span>评论（<a href="#" class="comment">已关闭</a>）</span>
			</div>
		</article>
		<div class="dates">
			<?php the_time('Y-m-d') ?>
		</div>
		<?php endif; ?>
		<!--分页导航-->
		<div class="pagenav">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?><br />	
		</div>
	</div>
</div>
<?php get_sidebar(); ?>		
<?php get_footer(); ?>	