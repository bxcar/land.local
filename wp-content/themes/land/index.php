<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package land
 */
get_header(); ?>
    <div class="l-products">
        <div class="products-wrap" id="products">
            <div class="products-description text-block">
                <h2 class="title-section"><?php the_field('op_title'); ?></h2>
                <?php the_field('op_description'); ?>
                <div class="products-list-nav">
                    <div class="products-list-nav-dots"></div>
                </div>
            </div>
            <div class="products-list">
                <?php
                $products = get_field('products_list');
                if ($products) {
                    foreach ($products as $product) { ?>
                        <div class="products-list-item-wrap">
                            <div class="products-list-item">
                                <figure class="products-list-item-img"><img
                                            src="<?= $product['products_list_item_image'] ?>"></figure>
                                <div class="product-list-item-title"><?= $product['products_list_item_title'] ?></div>
                                <div class="product-list-item-price"><?= $product['products_list_item_price'] ?></div>
                                <div class="product-list-item-btn"><?= $product['products_list_item_text'] ?>
                                    <svg class="icon icon-arrow-r">
                                        <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-arrow-r"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
    <div class="l-photos">
        <figure class="photos-big"><img src="<?php the_field('first_image'); ?>"></figure>
        <div class="photos-list">
            <div class="photos-small">
                <figure class="photos-small-item"><img src="<?php the_field('second_image'); ?>"></figure>
                <figure class="photos-small-item"><img src="<?php the_field('third_image'); ?>"></figure>
            </div>
            <figure class="photos-medium"><img src="<?php the_field('fourth_image'); ?>"></figure>
        </div>
    </div>
    <div class="l-offers">
        <div class="offers-inner" id="offers">
            <div class="mainWrap">
                <h2 class="title-section center"><?php the_field('bundles_title'); ?></h2>
                <div class="offers-list">
                    <?php
                    $bundles = get_field('bundles');
                    if ($bundles) {
                        foreach ($bundles as $bundle) { ?>
                            <div class="offers-list-item-wrap">
                                <div class="offers-list-item">
                                    <div class="offers-list-item-text"><span class="title"><?=  $bundle['bundles_title']; ?></span><span
                                                class="description"><?= $bundle['bundles_description']; ?></span></div>
                                    <div class="btn-grey"><span><?= $bundle['bundles_button_text']; ?></span>
                                        <svg class="icon icon-arrow-r">
                                            <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-arrow-r"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="l-about" id="about">
        <div class="about-text">
            <div class="about-text-content text-block">
                <h2 class="title-section"><?php the_field('master_title'); ?></h2>
                <p class="subtitle"><?php the_field('master_subtitle'); ?></p>
                <?php the_field('master_description'); ?>
            </div>
        </div>
        <div class="about-photo">
            <figure class="about-photo-item"><img src="<?php the_field('master_first_photo'); ?>"></figure>
            <figure class="about-photo-item"><img src="<?php the_field('master_second_photo'); ?>"></figure>
        </div>
    </div>
    <div class="partners-wrap">
        <div class="l-partners">
            <div class="mainWrap">
                <div class="partners-list" id="partners">
                    <h2 class="title-section center"><?php the_field('partners_title'); ?></h2>
                    <div class="partners-list-items">
                        <figure class="partners-list-items-img"><img src="<?php the_field('partners_first_image'); ?>"></figure>
                        <figure class="partners-list-items-img"><img src="<?php the_field('partners_second_image'); ?>"></figure>
                        <figure class="partners-list-items-img"><img src="<?php the_field('partners_third_image'); ?>"></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-additional" id="additional">
            <figure class="additional-img"><img src="<?php the_field('bottom_block_image'); ?>"></figure>
            <div class="additional-text text-block">
                <div class="additional-text-content">
                    <h2 class="title-section smaller"><?php the_field('bottom_block_title'); ?></h2>
                    <?php the_field('bottom_block_description'); ?>
                    <div class="btn-general"><?php the_field('bottom_block_button_text'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="products-popup-wrap is-hidden">
        <div class="products-popup">
            <div class="close-button">
                <svg class="icon icon-cross">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-cross"></use>
                </svg>
            </div>
            <h2 class="title-section center"><?php the_field('popup_form_title'); ?></h2>
            <form id="static-form-2">
                <input name="name" type="text" placeholder="<?php the_field('popup_form_input_first_placeholder'); ?>">
                <input name="phone" type="text" placeholder="<?php the_field('popup_form_input_second_placeholder'); ?>">
                <input required name="email" type="email" placeholder="<?php the_field('popup_form_input_third_placeholder'); ?>">
                <input type="hidden" name="required-field" value="email">
                <textarea name="text" placeholder="<?php the_field('popup_form_textarea_placeholder'); ?>"></textarea>
                <button id="submit-static-form-2" class="btn-general" type="submit"><?php the_field('popup_form_button_text'); ?>
                    <svg class="icon icon-arrow-r">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-arrow-r"></use>
                    </svg>
                </button>
            </form>
        </div>
    </div>
<?php
get_footer();
