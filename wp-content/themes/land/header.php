<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package land
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/png">
    <?php wp_head(); ?>
    <style>
        .l-header {
            background: url('<?php the_field('background_image'); ?>') no-repeat center;
        }
    </style>
    <?php include_once "js/form-ajax.php" ?>
</head>
<body>
<div class="l-header">
    <div class="mainWrap">
        <div class="top-bar">
            <div class="top-bar-title">
                <ul class="menu header-menu">
                    <li class="menu-text header-hamburger header-button">
                        <svg class="icon icon-menu">
                            <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-menu"></use>
                        </svg>
                        <span><?php the_field('menu_title'); ?></span>
                    </li>
                    <li class="menu-text">
                        <?php $languages = icl_get_languages('skip_missing=0');
                        foreach ($languages as $l) {
                            if ($l['language_code'] == 'ru') {
                                $l['language_code'] = 'RUS';
                            } elseif ($l['language_code'] == 'en') {
                                $l['language_code'] = 'ENG';
                            }
                            if ($l['active']) {
                                $active_lang_code = $l['language_code'];
                            } else {
                                $lang_code = $l['language_code'];
                                $lang_url = $l['url'];
                            }
                        } ?>
                        <span class="header-dropdown header-button"><?= $active_lang_code ?>
                            <i class="fa fa-angle-down"></i>
                        </span>
                        <div class="header-dropmenu-wrap is-hidden">
                            <a href="<?= $lang_url ?>">
                                <ul class="header-dropmenu">
                                    <li><?= $lang_code ?></li>
                                </ul>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="top-bar-left text-center"><a class="header-logo" href="<?php home_url(); ?>"><img
                            src="<?php the_field('logo'); ?>"></a>
            </div>
            <div class="top-bar-right">
                <ul class="menu align-right header-menu">
                    <li><a href="tel:<?php the_field('phone_without_spaces'); ?>">
                            <svg class="icon icon-phone">
                                <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-phone"></use>
                            </svg>
                            <?php the_field('phone'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="innerMenu-wrap is-hidden">
        <div class="innerMenu">
            <div class="innerMenu-title">
                <h2 class="title-section"><?php the_field('menu_title'); ?></h2>
                <div class="close-button">
                    <svg class="icon icon-cross">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-cross"></use>
                    </svg>
                </div>
            </div>
            <ul class="menu vertical">
                <li><a class="innerMenu-link" href="#products"><?= get_field('menu')[0]['menu_item_title']; ?></a></li>
                <li><a class="innerMenu-link" href="#offers"><?= get_field('menu')[1]['menu_item_title']; ?></a></li>
                <li><a class="innerMenu-link" href="#about"><?= get_field('menu')[2]['menu_item_title']; ?></a></li>
                <li><a class="innerMenu-link" href="#partners"><?= get_field('menu')[3]['menu_item_title']; ?></a></li>
                <li><a class="innerMenu-link" href="#additional"><?= get_field('menu')[4]['menu_item_title']; ?></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-title">
        <p class="header-title-subtitle"><?php the_field('title_first'); ?></p>
        <h1 class="header-title-title"><?php the_field('title_second'); ?></h1>
        <p class="header-title-subtitle orange-darken"><?php the_field('title_third'); ?></p>
    </div>
    <form class="header-consult-form" id="static-form">
        <div class="header-consult-form-row">
            <div class="header-consult-form-column">
                <textarea name="text" placeholder="<?php the_field('textarea_placeholder'); ?>"></textarea>
            </div>
            <div class="header-consult-form-column">
                <input name="name" type="text" placeholder="<?php the_field('input_first_placeholder'); ?>">
                <input required name="email" type="text" placeholder="<?php the_field('input_second_placeholder'); ?>">
                <input type="hidden" name="required-field" value="email" placeholder="<?php the_field('input_first_placeholder'); ?>">
            </div>
            <div class="header-consult-form-column">
                <input name="phone" type="text" placeholder="<?php the_field('input_third_placeholder'); ?>">
                <button id="submit-static-form" class="btn-general" type="submit"><?php the_field('button_text'); ?>
                    <svg class="icon icon-arrow-r">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/img/symbol-defs.svg#icon-arrow-r"></use>
                    </svg>
                </button>
<!--                <input type="submit" id="submit-static-form" value="Отправить">-->
            </div>
        </div>
    </form>
</div>