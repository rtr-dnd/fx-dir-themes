<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package um-theme
 */

global $defaults;

	$post_status 		= absint( $defaults['um_theme_show_sidebar_post'] );
	$page_status 		= absint( $defaults['um_theme_show_sidebar_page'] );
	$archive_status 	= absint( $defaults['um_theme_show_sidebar_archive_page'] );
	$search_status 		= absint( $defaults['um_theme_show_sidebar_search'] );
	$group_status 		= absint( $defaults['um_theme_show_sidebar_group'] );
	$bbpress_forum		= absint( $defaults['um_theme_show_sidebar_bb_forum'] );
    $bbpress_topic      = absint( $defaults['um_theme_show_sidebar_bb_topic'] );
    $bbpress_reply      = absint( $defaults['um_theme_show_sidebar_bb_reply'] );
	$forumwp_forum		= absint( $defaults['um_theme_show_sidebar_forumwp_forum'] );
    $forumwp_topic      = absint( $defaults['um_theme_show_sidebar_forumwp_topic'] );
    $forumwp_tag      	= absint( $defaults['um_theme_show_sidebar_forumwp_tag'] );
    $forumwp_cat      	= absint( $defaults['um_theme_show_sidebar_forumwp_cat'] );
    $wpadverts_archive  = absint( $defaults['um_theme_show_sidebar_wpadverts_archive'] );
    $wpadverts_single   = absint( $defaults['um_theme_show_sidebar_wpadverts_single'] );

	if ( ! um_theme_active_page_sidebar() ) { return; }

	if ( is_single() && $post_status === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_page() && $page_status === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_archive() && $archive_status === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_search() && $search_status === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( class_exists( 'UM' ) && is_singular( 'um_groups' ) && $group_status === 1 or class_exists( 'UM' ) && um_is_core_page('groups') && $group_status === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_singular( 'forum' ) && $bbpress_forum === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_singular( 'topic' ) && $bbpress_topic === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_singular( 'reply' ) && $bbpress_reply === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_singular( 'fmwp_forum' ) && $forumwp_forum === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_singular( 'fmwp_topic' ) && $forumwp_topic === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_tax( 'fmwp_forum_category' ) && $forumwp_cat === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( is_tax( 'fmwp_topic_tag' ) && $forumwp_tag === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( class_exists( 'Adverts' ) && is_post_type_archive('advert') && $wpadverts_archive === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side oo <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} elseif ( class_exists( 'Adverts' ) && is_singular( 'advert' ) && $wpadverts_single === 1 ) {
		?>
		<aside id="secondary" class="widget-area widget-area-side <?php um_theme_determine_sidebar_position();?> <?php um_determine_single_sidebar_width();?>">
		<?php
			do_action( 'um_theme_before_sidebar' );
			dynamic_sidebar( 'sidebar-page' );
			do_action( 'um_theme_after_sidebar' );
			echo '</aside>';
	} else {
		return;
	}
