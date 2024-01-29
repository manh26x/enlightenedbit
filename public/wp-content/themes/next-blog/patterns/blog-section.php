<?php
 /**
  * Title: Blog Section
  * Slug: next-blog/blog-section
  * Categories: next-blog, featured
  */
?><!-- wp:columns {"className":"blog-section"} -->
<div class="wp-block-columns blog-section"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"first-blog position-relative"} -->
<div class="wp-block-column is-vertically-aligned-center first-blog position-relative" style="flex-basis:45%"><!-- wp:image {"id":158,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/blog1-2.jpg" alt="" class="wp-image-158"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|40","bottom":"0","left":"var:preset|spacing|40"}}},"className":"first-blog-content"} -->
<div class="wp-block-group first-blog-content" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--30);text-transform:uppercase"><?php echo esc_html__('Blog Title 1', 'next-blog'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#858585"},"typography":{"fontSize":"14px","lineHeight":"1.8"}}} -->
<p class="has-text-color" style="color:#858585;font-size:14px;line-height:1.8"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit,', 'next-blog'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:latest-posts {"postsToShow":4,"displayPostContent":true,"excerptLength":20,"postLayout":"grid","columns":2,"displayFeaturedImage":true,"className":"latest-blog"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->