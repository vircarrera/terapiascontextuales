<?php if( have_rows('videos_relacionados') ): //parent group field
    while( have_rows('videos_relacionados') ): the_row(); 
    // vars
    $linkArchiveLeft = get_sub_field('link_archive_left');
    $linkLeft = get_sub_field('link_left');
    $archiveLeft = get_sub_field('archive_left');
    $linkArchiveRight = get_sub_field('link_archive_right');
    $linkRight = get_sub_field('link_right');
    $archiveRight = get_sub_field('archive_right');
?>
    <div class="b-videosapoyo" data-aos="fade-up">
        <?php 
            if ($linkArchiveLeft): 
                if ($archiveLeft): ?>
                    <div class="video__wrapper">
                        <video src="<?php echo esc_url($archiveLeft); ?>" autoplay loop muted playinline></video>
                    </div>
                <?php endif; 
            else:
                if ($linkLeft):
            ?>
                <div class="video__wrapper">
                    <?php echo $linkLeft; ?>
                </div>
            <?php
                endif;
            endif;
        ?>
        <?php 
            if ($linkArchiveRight): 
                if ($archiveRight): ?>
                    <div class="video__wrapper">
                        <video src="<?php echo esc_url($archiveRight); ?>" autoplay loop muted playinline></video>
                    </div>
                <?php endif;
            else: 
                if ($linkRight):
                ?>
                <div class="video__wrapper">
                    <?php echo $linkRight; ?>
                </div>
        <?php                  
                endif;
            endif; 
        ?>
    </div>
    <?php endwhile;
    endif; ?> <!-- end parent group field -->