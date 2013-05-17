<?php
get_header();
the_post();
the_content(); ?>
<hr />
<nav class="video-nav">
    <ul class="menu">
        <li class="previous-video-button floatleft"><?php previous_post_link_plus( array(
            'order_by' => 'menu_order',
            'in_same_cat' => true,
            'format' => '%link',
            'link' => '<i class="icon-arrow-left"></i> Previous Video'
        ) );?></li>
        <li class="next-video-button floatright"><?php next_post_link_plus( array(
            'order_by' => 'menu_order',
            'in_same_cat' => true,
            'format' => '%link',
            'link' => 'Next Video <i class="icon-arrow-right"></i>'
        ) );?></li>
    </ul>
</nav>
<ul class="menu video-actions">
    <li><a href="<?php  ?>">Download Video <span class="tag">MP4</span></a></li>
    <li><a href="">Download Audio <span class="tag">MP3</span></a></li>
    <li><a href="">Download Transcript <span class="tag">PDF</span></a></li>
</ul>
<hr />
<?php get_footer();
