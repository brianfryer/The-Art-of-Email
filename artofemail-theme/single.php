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
<ul class="video-actions">
    <li>Download Video (MP4)</li>
    <li>Download Audio (MP3)</li>
    <li>Download Transcript (PDF)</li>
</ul>
<hr />
<?php get_footer();
