
<div class="first-teaser-widget-area">
<?php 
query_posts('category_name=Slider&post_per_page=3');
echo "<div class='flexslider'>";
echo "<ul class='slides'>";
if ( have_posts() ) while ( have_posts() ) : the_post();
echo "<li class='slide'>";
if (has_post_thumbnail()) the_post_thumbnail('full');
echo "<div class='caption'>";
echo "<h3>Topthema</h3>";
echo "<h2>";
echo "<a href=";
the_permalink();
echo ">";
echo short_title('&hellip;', 6);
echo "</a>";
echo "</h2>";
echo "</div>";
echo "</li>";
endwhile;
echo "</ul>";
echo "</div>";
wp_reset_query(); ?>
</div>

<div class="second-teaser-widget-area">
<div class="skin">
<?php if ( is_active_sidebar( 'second-teaser-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'second-teaser-widget-area' ); ?>
<?php endif; ?>
</div>
</div>