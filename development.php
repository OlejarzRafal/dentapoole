<?php 
$link = get_field('link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
<a class="button" href="<?php echo esc_url( $link_url ); ?>"
  target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>



<?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>



<?php if( have_rows('slides') ): ?>
<?php while( have_rows('slides') ): the_row(); 
        $image = get_sub_field('image');
        ?>
<?php endwhile; ?>
<?php endif; ?>