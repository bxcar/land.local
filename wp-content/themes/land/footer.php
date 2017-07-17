<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package land
 */

?>
<footer class="l-footer">
    <div class="mainWrap">
        <div class="footer-contacts">
            <?php
            $contacts = get_field('contacts');
            if ($contacts) {
                foreach ($contacts as $contact) { ?>
                    <div class="footer-contacts-item">
                        <p class="footer-subtitle"><?= $contact['contacts_item_title']; ?></p>
                        <p class="footer-text"><?= $contact['contacts_item_description']; ?></p>
                    </div>
                <?php }
            } ?>
        </div>
        <div class="footer-social">
            <a href="<?php the_field('facebook_link'); ?>">
                <svg class="icon icon-fb-o">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-fb-o"></use>
                </svg>
            </a>
        </div>
        <div class="footer-copyright"><?php the_field('footer_copyright'); ?></div>
    </div>
</footer>
<style>
    .l-footer {
        background: url('<?php the_field('footer_image'); ?>') no-repeat center bottom;
    }
</style>
<?php wp_footer(); ?>
</body>
</html>
