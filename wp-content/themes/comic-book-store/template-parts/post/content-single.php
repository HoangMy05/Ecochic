<?php
/**
 * @package Comic Book Store
 */
?>

<?php
    $comic_book_store_post_date = esc_html(get_the_date());
    
    $comic_book_store_author_name = esc_html(get_the_author());

    $comic_book_store_single_post_show_date     = get_theme_mod('comic_book_store_single_post_date', true);
    $comic_book_store_single_post_show_comments = get_theme_mod('comic_book_store_single_post_comment', true);
    $comic_book_store_single_post_show_author   = get_theme_mod('comic_book_store_single_post_author', true);
    $comic_book_store_single_post_show_time     = get_theme_mod('comic_book_store_single_post_time', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
    
    <?php 
    $comic_book_store_designation = get_post_meta($post->ID, 'comic_book_store_designation', true);
    
    if ($comic_book_store_designation) : ?>
        <p class="serv-content"><?php echo esc_html($comic_book_store_designation); ?></p>
    <?php endif; ?>
    <div class="social-icon text-start">
        <?php
        $comic_book_store_facebook_link = get_post_meta($post->ID, 'comic_book_store_facebook_link', true);
        $comic_book_store_twitter_link = get_post_meta($post->ID, 'comic_book_store_twitter_link', true);
        $comic_book_store_telegram_link = get_post_meta($post->ID, 'comic_book_store_telegram_link', true);

        if ($comic_book_store_facebook_link || $comic_book_store_twitter_link || $comic_book_store_telegram_link) :
        ?>
            <div class="meta-fields text-start">
                <?php if ($comic_book_store_facebook_link) : ?>
                    <a href="<?php echo esc_url($comic_book_store_facebook_link); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                <?php endif; ?>

                <?php if ($comic_book_store_twitter_link) : ?>
                    <a href="<?php echo esc_url($comic_book_store_twitter_link); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>

                <?php if ($comic_book_store_telegram_link) : ?>
                    <a href="<?php echo esc_url($comic_book_store_telegram_link); ?>" target="_blank"><i class="fab fa-telegram"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if (has_post_thumbnail() ){ ?>
        <div class="post-thumb">
           <?php the_post_thumbnail(); ?>
        </div>
    <?php } ?>

    <?php if ('post' == get_post_type()) : ?>
        <?php if ( $comic_book_store_single_post_show_date || $comic_book_store_single_post_show_comments || $comic_book_store_single_post_show_author || $comic_book_store_single_post_show_time ) : ?>
            <div class="postmeta">
                <?php if ($comic_book_store_single_post_show_date) : ?>
                <div class="post-date">
                    <i class="fas fa-calendar-alt"></i> &nbsp;<?php echo esc_html($comic_book_store_post_date); ?>
                </div>
                <?php endif; ?>
                <?php if ($comic_book_store_single_post_show_comments) : ?>
                <div class="post-comment">&nbsp; &nbsp;
                    <span><?php echo esc_html(get_theme_mod('comic_book_store_single_post_metabox_seperator', '|'));?></span>
                    <i class="fa fa-comment"></i> &nbsp; <?php comments_number(); ?>
                </div>
                <?php endif; ?>
                <?php if ($comic_book_store_single_post_show_author) : ?>
                    <div class="post-author">&nbsp; &nbsp;
                        <span><?php echo esc_html(get_theme_mod('comic_book_store_single_post_metabox_seperator', '|'));?></span>
                        <i class="fas fa-user"></i> &nbsp; <?php echo esc_html($comic_book_store_author_name); ?>
                    </div>
                <?php endif; ?>
                <?php if ($comic_book_store_single_post_show_time) : ?>
                    <div class="post-time">&nbsp; &nbsp;
                        <span><?php echo esc_html(get_theme_mod('comic_book_store_single_post_metabox_seperator', '|'));?></span>
                        <i class="fas fa-clock"></i> &nbsp; <?php echo get_the_time(); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'comic-book-store' ),
                'after'  => '</div>',
            ) );
        ?>
        <div class="tags"><?php the_tags(); ?></div>
    </div>
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'comic-book-store' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article>