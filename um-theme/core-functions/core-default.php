<?php
/**
 * Customizer Default Settings value.
 *
 * @package     um-theme
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 */

global $defaults;

if ( ! function_exists( 'um_theme_option_defaults' ) ) {
	function um_theme_option_defaults() {
		$default = array(

			// Colors
			'title_text_color' 									=> '#444444',
			'button_background_color'							=> '#444444',
			'link_text_color'									=> '#444444',
			'um_theme_form_field_text_color'					=> '#444444',
			'um_theme_form_field_label_text_color'				=> '#444444',
			'um_theme_login_page_field_label_color'				=> '#444444',
			'um_theme_login_page_bg_color'						=> '#ffffff',
			'widgets_background_color' 							=> '#ffffff',
			'button_hover_text_color' 							=> '#ffffff',
			'button_text_color'									=> '#ffffff',
			'um_theme_form_field_error_text_color'				=> '#ffffff',
			'um_theme_form_field_background_color'				=> '#ffffff',
			'um_theme_login_page_login_text_color' 				=> '#ffffff',
			'um_theme_login_page_register_color' 				=> '#eeeeee',
			'um_customizer_post_content_bg_color' 				=> '#eeeeee',
			'button_hover_color' 								=> '#333333',
			'um_post_single_box_text_color' 					=> '#333333',
			'body_text_color' 									=> '#333333',
			'link_hover_color'									=> '#333333',
			'button_border_color'								=> '#333333',
			'um_theme_reg_button_border_color'					=> '#333333',
			'um_theme_login_button_border_color'				=> '#333333',
			'um_theme_form_field_placeholder_text_color'		=> '#aaaaaa',
			'um_theme_um_plug_meta_color'						=> '#aaaaaa',
			'um_theme_um_account_tab_text_color'				=> '#999999',
			'um_theme_login_page_login_color'					=> '#3BA1DA',
			'um_theme_login_page_register_text_color'			=> '#666666',
			'um_theme_form_field_error_bg_color'				=> '#ED5565',
			'um_theme_website_meta_color'						=> '#a5aaa8',
			'um_theme_form_field_border_color'					=> '#e2e2e2',
			'um_theme_primary_color'							=> '#2196F3',

			// Font
			'um_enable_font_smoothing'							=> true,
			'um_theme_typography_body_font' 					=> 'Open Sans',
			'um_theme_typography_title_font' 					=> 'Open Sans',
			'um_theme_typography_nav_font' 						=> 'Open Sans',
			'um_theme_typography_logo_font' 					=> 'Open Sans',
			'um_theme_typography_button_font' 					=> 'Open Sans',

			// Font Size
			'body_h1_size' 										=> '40px',
			'body_h2_size' 										=> '34px',
			'body_h3_size' 										=> '28px',
			'body_h4_size' 										=> '22px',
			'body_h5_size' 										=> '16px',
			'body_h6_size' 										=> '16px',
			'um_theme_logo_font_size' 							=> '16px',
			'um_theme_button_font_size' 						=> '16px',
			'um_theme_body_font_size' 							=> '16px',

			// Font Weight
			'um_theme_title_weight'								=> 'bold',
			'um_theme_button_weight'							=> 'normal',
			'um_theme_body_weight'								=> 'normal',
			'um_theme_nav_weight'								=> 'normal',
			'um_theme_logo_weight'								=> 'normal',

			// Border Radius
			'header_search_border_radius' 						=> '4px',
			'um_theme_button_border_radius' 					=> '4px',
			'header_profile_border_radius' 						=> '45px',

			// Social Accounts
			'um_theme_social_account_icon_one'					=> '',
			'um_theme_social_account_link_one'					=> '',
			'um_theme_social_account_icon_two'					=> '',
			'um_theme_social_account_link_two'					=> '',
			'um_theme_social_account_icon_three'				=> '',
			'um_theme_social_account_link_three'				=> '',
			'um_theme_social_account_icon_four'					=> '',
			'um_theme_social_account_link_four'					=> '',
			'um_theme_social_account_link_five'					=> '',
			'um_theme_social_account_icon_five'					=> '',
			'um_theme_social_account_link_six'					=> '',
			'um_theme_social_account_icon_six'					=> '',
			'social_accounts_color' 							=> '#333333',
			'social_accounts_hover_color' 						=> '#333333',

			// Sidebar
			'um_theme_show_sidebar_archive_page'				=> 1,
			'um_theme_show_sidebar_search'						=> 1,
			'um_theme_show_sidebar_group'						=> 1,
			'um_theme_layout_single_sidebar_width'				=> 1,
			'um_theme_show_sidebar_post'						=> 1,
			'um_theme_content_sidebar_position'					=> 2,
			'um_theme_show_sidebar_page'						=> 2,
			'um_theme_sticky_sidebar'							=> 2,

			// WooCommerce
			'um_theme_show_woo_related'							=> 1,
			'um_theme_woo_product_layout'						=> 1,
			'um_theme_show_sidebar_woo_archive'					=> 1,
			'um_theme_show_sidebar_woo_product'					=> 1,
			'um_theme_woo_related_product_no'					=> 4,
			'um_theme_woo_upsell_product_no'					=> 4,
			'um_theme_woocommerce_shop_show_add_cart'			=> true,
			'um_theme_woocommerce_shop_show_product_title'		=> true,
			'um_theme_woocommerce_shop_show_product_price'		=> true,
			'um_theme_woocommerce_shop_show_sale_badge'			=> true,
			'um_theme_woo_prod_title_font_size' 				=> '16px',
			'um_theme_woocommerce_star_rating_color'			=> '#FFC107',
			'um_theme_woocommerce_message_color'				=> '#8fae1b',
			'um_theme_woocommerce_info_color'					=> '#1e85be',
			'um_theme_woocommerce_sale_badge_color'				=> '#ef3768',
			'um_theme_woocommerce_notice_bg_color'				=> '#a46497',
			'um_theme_woocommerce_add_cart_button_hover_color'	=> '#3F51B5',
			'um_theme_woocommerce_price_color'					=> '#3F51B5',
			'um_theme_woocommerce_product_title_color'			=> '#3F51B5',
			'um_theme_woocommerce_add_cart_button_color'		=> '#3F51B5',
			'um_theme_woocommerce_message_text_color'			=> '#ffffff',
			'um_theme_woocommerce_sale_badge_text'				=> '#ffffff',
			'um_theme_woocommerce_add_cart_button_text'			=> '#ffffff',
			'um_theme_woocommerce_add_cart_button_hover_text'	=> '#ffffff',
			'um_theme_woocommerce_notice_text_color'			=> '#ffffff',

			// YITH Wishlist
			'um_theme_yith_show_wishlist_product_loop'			=> false,
			'um_theme_yith_wishlist_add_cart_color'				=> '#3F51B5',
			'um_theme_yith_wishlist_add_cart_text_color'		=> '#ffffff',
			'um_theme_yith_wishlist_remove_color'				=> '#CFD8DC',
			'um_theme_yith_wishlist_remove_text_color'			=> '#607D8B',

			// ForumWP
			'um_theme_show_sidebar_forumwp_forum'				=> 1,
			'um_theme_show_sidebar_forumwp_topic'				=> 1,
			'um_theme_show_sidebar_forumwp_tag'					=> 1,
			'um_theme_show_sidebar_forumwp_cat'					=> 1,
			'um_forumwp_topic_title_font_size'					=> '16px',
			'um_forumwp_cat_color'								=> '#ffffff',
			'um_forumwp_tag_color'								=> '#ffffff',
			'um_forumwp_topic_btn_text_color'					=> '#ffffff',
			'um_forumwp_reply_btn_text_color'					=> '#ffffff',
			'um_forumwp_search_button_text_color'				=> '#ffffff',
			'um_forumwp_search_box_color'						=> '#ffffff',
			'um_forumwp_meta_color'								=> '#333333',
			'um_forumwp_forum_title_color'						=> '#333333',
			'um_forumwp_cat_txt_color'							=> '#333333',
			'um_forumwp_tag_txt_color'							=> '#333333',
			'um_forumwp_topic_title_color'						=> '#333333',
			'um_forumwp_forum_heading_color'					=> '#333333',
			'um_forumwp_search_button_color'					=> '#1a1a1a',
			'um_forumwp_topic_btn_color'						=> '#1a1a1a',
			'um_forumwp_reply_btn_color'						=> '#1a1a1a',
			'um_forumwp_subdata_color'							=> '#a3a3a3',
			'um_forumwp_reply_box_color'						=> '#a3a3a3',
			'um_forumwp_border_color'							=> '#eeeeee',

			// bbPress
			'um_theme_show_sidebar_bb_forum'					=> 1,
			'um_theme_show_sidebar_bb_topic'					=> 1,
			'um_theme_show_sidebar_bb_reply'					=> 1,
			'um_bb_forum_title_font_size' 						=> '16px',
			'um_bb_notice_text_color'							=> '#444444',
			'um_bb_forum_author_name_color'						=> '#444444',
			'um_bb_forum_text_color'							=> '#444444',
			'um_bb_sticky_topic_bg_color'						=> '#f0f8ff',
			'um_bb_notice_bg_color'								=> '#ECEFF1',
			'um_bb_notice_border_color'							=> '#CFD8DC',
			'um_bb_forum_title_color'							=> '#6596ff',
			'um_bb_forum_header_bg_color'						=> '#6596ff',
			'um_bb_forum_header_border_color'					=> '#6596ff',
			'um_bb_forum_header_text_color'						=> '#ffffff',

			// Ultimate Member Extension
			'um_theme_seo_enable_schema_profilepage'			=> false,
			'um_theme_ext_um_group_show_group_description'		=> true,
			'um_theme_user_bookmarks_list_excerpt_show'			=> 1,
			'um_theme_ext_um_group_list_layout'					=> 1,
			'um_theme_ext_pm_message_hide_chat_history'			=> 1,
			'um_show_profile_friend_requests'					=> 1,
			'um_show_header_friend_requests'					=> 1,
			'um_show_header_messenger'							=> 1,
			'um_theme_um_account_tab_position'					=> 1,
			'um_show_floating_notification'						=> 2,
			'header_profile_avatar_size'						=> 50,
			'header_profile_icon_font_size' 					=> '16px',
			'um_theme_ext_tag_text_font_size' 					=> '12px',
			'um_theme_ext_group_title_font_size' 				=> '16px',
			'um_theme_ext_group_description_font_size' 			=> '16px',
			'um_theme_ext_acitivity_text_font_size' 			=> '16px',
			'um_theme_member_directory_title_font_size' 		=> '16px',
			'um_theme_ext_friends_image_radius' 				=> '45px',
			'um_theme_ext_activity_image_radius' 				=> '45px',
			'um_theme_um_plug_button_text_color'				=> '#ffffff',
			'um_theme_um_plug_button_hover_text_color'			=> '#ffffff',
			'um_theme_ext_group_search_button_text_color' 		=> '#ffffff',
			'um_theme_ext_float_notification_bell_icon_color'	=> '#ffffff',
			'um_theme_ext_pm_message_text_color'				=> '#ffffff',
			'um_theme_ext_pm_message_button_text_color'			=> '#ffffff',
			'um_theme_ext_acitivity_head_color'					=> '#ffffff',
			'um_theme_ext_friend_button_bg_color'				=> '#ffffff',
			'um_theme_ext_friend_button_hover_text_color'		=> '#ffffff',
			'um_theme_ext_pm_message_your_text_color'			=> '#ffffff',
			'um_theme_ext_groups_bg_color' 						=> '#ffffff',
			'um_theme_template_profile_content_area_color'		=> '#ffffff',
			'um_theme_member_directory_box_bg_color'			=> '#ffffff',
			'um_theme_template_profile_single_container_color'	=> '#ffffff',
			'um_theme_template_profile_sidebar_container_color'	=> '#ffffff',
			'um_theme_template_profile_nav_bar_color'			=> '#ffffff',
			'um_theme_template_profile_nav_menu_hover_color'	=> '#ffffff',
			'header_notification_box_color' 					=> '#ffffff',
			'header_friend_req_confirm_button_text_color' 		=> '#ffffff',
			'header_friend_req_box_color' 						=> '#ffffff',
			'header_notification_bubble_color' 					=> '#ffffff',
			'header_friend_req_bubble_color' 					=> '#ffffff',
			'um_theme_ext_woo_product_bg_color' 				=> '#ffffff',
			'header_register_text_color'						=> '#ffffff',
			'um_theme_header_messenger_box_color'				=> '#ffffff',
			'um_theme_ext_tags_hover_border_color' 				=> '#eeeeee',
			'um_theme_ext_tags_hover_bg_color' 					=> '#eeeeee',
			'um_theme_ext_tags_border_color' 					=> '#eeeeee',
			'um_theme_ext_tags_bg_color' 						=> '#eeeeee',
			'um_theme_ext_profile_empty_bar_color' 				=> '#eeeeee',
			'um_theme_header_messenger_divider_color' 			=> '#eeeeee',
			'um_theme_template_profile_field_label_color' 		=> '#eeeeee',
			'um_theme_um_plug_alt_button_color'					=> '#eeeeee',
			'um_theme_um_account_tab_color'						=> '#eeeeee',
			'um_theme_ext_reviews_single_title_color' 			=> '#333333',
			'um_theme_header_messenger_text_color'				=> '#333333',
			'um_theme_template_profile_nav_menu_bg_hover_color'	=> '#333333',
			'um_theme_header_messenger_username_color'			=> '#333333',
			'um_theme_profile_field_label_txt_color' 			=> '#333333',
			'um_theme_ext_tags_hover_text_color'				=> '#666666',
			'um_theme_ext_tags_text_color'						=> '#666666',
			'um_theme_ext_acitivity_text_color'					=> '#666666',
			'um_theme_ext_friend_button_text_color'				=> '#666666',
			'um_theme_ext_group_title_color'					=> '#666666',
			'um_theme_ext_followers_meta_color'					=> '#999999',
			'um_theme_profile_meta_color'						=> '#999999',
			'um_theme_ext_pm_message_icon_color'				=> '#999999',
			'um_theme_member_directory_box_text_color'			=> '#444444',
			'um_theme_um_account_tab_icon_color'				=> '#444444',
			'um_theme_um_account_tab_text_hover_color'			=> '#444444',
			'um_theme_ext_float_notification_icon_color'		=> '#444444',
			'um_theme_ext_woo_product_title_color'				=> '#444444',
			'um_theme_ext_woo_product_review_color'				=> '#444444',
			'um_theme_profile_single_text_color' 				=> '#444444',
			'um_theme_template_profile_content_area_text_color'	=> '#444444',
			'um_theme_template_profile_nav_menu_color'			=> '#444444',
			'header_friend_req_content_color'					=> '#444444',
			'header_notification_text_color'					=> '#444444',
			'um_theme_ext_pm_your_message_bg_color'				=> '#0084ff',
			'um_theme_ext_pm_message_bg_color'					=> '#0084ff',
			'um_theme_ext_pm_message_button_color'				=> '#0084ff',
			'um_theme_ext_friend_button_hover_bg_color'			=> '#6596ff',
			'um_theme_ext_group_search_button_color' 			=> '#6596ff',
			'um_theme_ext_woo_product_price_color'				=> '#6596ff',
			'header_friend_req_delete_button_color' 			=> '#f2f2f2',
			'um_theme_ext_group_tab_border_color'				=> '#f2f2f2',
			'um_theme_ext_reviews_bar_color'					=> '#3BA1DA',
			'um_theme_ext_profile_complete_bar_color'			=> '#3BA1DA',
			'um_theme_ext_followers_count_color'				=> '#3BA1DA',
			'um_theme_ext_reviews_empty_bar_color'				=> '#e5e5e5',
			'um_theme_ext_acitivity_border_color'				=> '#e5e5e5',
			'um_theme_ext_acitivity_meta_color'					=> '#aaaaaa',
			'um_theme_ext_reviews_star_color'					=> '#E6B800',
			'um_theme_ext_reviews_section_title_color'			=> '#555555',
			'um_theme_ext_verified_icon_color'					=> '#5ea5e7',
			'um_theme_ext_group_description_color'				=> '#8a8a8a',
			'um_theme_header_unread_message_color' 				=> '#e6e9f0',
			'header_friend_req_delete_button_text_color' 		=> '#3F51B5',
			'header_friend_req_confirm_button_color' 			=> '#3F51B5',
			'header_notification_color'							=> '#cccccc',
			'header_friend_req_color'							=> '#cccccc',
			'um_theme_form_field_border_focus_color'			=> '#cccccc',
			'um_theme_user_notes_border_color' 					=> '#cccccc',
			'header_private_message_color'						=> '#cccccc',
			'header_notification_hover_color'					=> '#bbbbbb',
			'header_friend_req_hover_color'						=> '#bbbbbb',
			'header_private_message_hover_color'				=> '#bbbbbb',
			'header_notification_bubble_bg_color' 				=> '#ED5565',
			'header_friend_req_bubble_bg_color' 				=> '#ED5565',
			'um_theme_user_bookmarks_button_color' 				=> '#ECEFF1',
			'um_theme_user_bookmarks_button_text_color' 		=> '#607D8B',
			'um_theme_user_bookmarks_remove_button_color' 		=> '#FCE4EC',
			'um_theme_user_bookmarks_remove_button_text_color' 	=> '#F48FB1',
			'um_theme_user_notes_color' 						=> '#BBDEFB',
			'um_theme_user_notes_text_color' 					=> '#0D47A1',
			'um_theme_user_bookmarks_modal_bg' 					=> '#ffffff',
			'um_theme_user_bookmarks_modal_text' 				=> '#333333',
			'um_theme_um_plug_accent_color'						=> '#3BA1DA',
			'um_theme_um_plug_button_bg_color'					=> '#3BA1DA',
			'um_theme_um_plug_button_hover_bg_color'			=> '#3BA1DA',
			'um_theme_um_plug_alt_button_text_color'			=> '#666666',
			'um_theme_um_plug_alt_button_hover_text_color'		=> '#666666',
			'um_theme_um_plug_alt_button_hover_color'			=> '#e5e5e5',
			'um_theme_um_account_tab_hover_color'				=> '#dddddd',
			'um_theme_ext_group_filter_active_bg' 				=> '#f2f2f2',
			'um_theme_ext_group_filter_active_text' 			=> '#444444',
			'um_theme_ext_group_filter_bg' 						=> '#f2f2f2',
			'um_theme_ext_group_filter_text' 					=> '#444444',
			'um_theme_member_dir_selec_filter_text_color' 		=> '#666666',
			'um_theme_member_dir_selec_filter_bg_color' 		=> '#f1f1f1',

			// Footer
			'um_show_footer_layout'								=> 1,
			'um_footer_colum_first_layout'						=> 1,
			'um_footer_colum_second_layout'						=> 1,
			'footer_menu_font_size' 							=> '13px',
			'um_theme_code_footer' 								=> '',
			'um_theme_footer_widget_column'						=> 'boot-col-md-3',
			'um_theme_footer_widget_alignment'					=> 'center',
			'um_theme_footer_widget_bg_color'					=> '#ffffff',
			'footer_background_color'							=> '#ffffff',
			'footer_menu_color'									=> '#444444',
			'footer_text_color'									=> '#333333',
			'footer_link_color'									=> '#333333',
			'footer_link_hover_color'							=> '#333333',
			'um_theme_footer_widget_color'						=> '#333333',
			'um_theme_footer_widget_link_color'					=> '#333333',
			'um_theme_footer_widget_link_hover_color'			=> '#333333',

			// Header
			'header_logged_out_text'							=> '',
			'um_theme_header_out_button_one_url'				=> '',
			'um_theme_header_out_button_two_url'				=> '',
			'um_theme_header_out_button_one_text'				=> '',
			'um_theme_header_out_button_two_text'				=> '',
			'um_header_username_type_select'					=> 1,
			'um_show_header_search'								=> 1,
			'um_show_header_profile'							=> 1,
			'um_theme_header_layout' 							=> 1,
			'header_logged_out_display'							=> 1,
			'um_show_header_notification'						=> 1,
			'um_theme_make_header_sticky'						=> 2,
			'um_show_header_logo_type'							=> 1,
			'um_show_header_search_type'						=> 1,
			'um_show_header_username'							=> 1,
			'um_show_bottombar'									=> 1,
			'um_show_topbar'									=> 1,
			'um_bottombar_colum_first_layout'					=> 1,
			'um_show_bottombar_layout'							=> 1,
			'um_topbar_colum_first_layout'						=> 1,
			'um_topbar_colum_second_layout'						=> 1,
			'um_bottombar_colum_second_layout'					=> 1,
			'um_header_profile_position'						=> 2,
			'um_theme_header_width'								=> '100%',
			'um_header_padding_setting' 						=> '10px',
			'header_bottombar_background_color'					=> '#444444',
			'header_bottombar_onclick_icon_color'				=> '#444444',
			'header_topbar_background_color' 					=> '#444444',
			'header_login_button_color'							=> '#444444',
			'header_search_text_color'							=> '#444444',
			'header_log_button_two_color'						=> '#444444',
			'header_bottombar_onclick_icon_hover_color'			=> '#333333',
			'header_bottombar_text_color'						=> '#333333',
			'um_header_logged_out_button_one_hover_bg' 			=> '#333333',
			'um_header_logged_out_button_two_hover_bg' 			=> '#333333',
			'header_login_text_color'							=> '#ffffff',
			'header_log_button_two_text_color'					=> '#ffffff',
			'um_header_logged_out_button_one_hover_text' 		=> '#ffffff',
			'um_header_logged_out_button_two_hover_text' 		=> '#ffffff',
			'header_background_color' 							=> '#ffffff',
			'header_topbar_text_color' 							=> '#ffffff',
			'header_search_background_color'					=> '#ecf1ff',
			'header_search_placeholder_text_color'				=> '#888888',
			'header_topbar_link_hover_color'					=> '#eeeeee',

			// LifterLMS
			'um_theme_lifter_primary_button_color'				=> '#2295ff',
			'um_theme_lifter_primary_button_text_color'			=> '#fefefe',
			'um_theme_lifter_primary_button_hover_color'		=> '#0077e4',
			'um_theme_lifter_primary_button_hover_text_color'	=> '#fefefe',
			'um_theme_lifter_secondary_button_color'			=> '#e1e1e1',
			'um_theme_lifter_secondary_button_text_color'		=> '#414141',
			'um_theme_lifter_secondary_button_hover_color'		=> '#414141',
			'um_theme_lifter_secondary_button_hover_text_color'	=> '#414141',
			'um_theme_lifter_plan_title_bg_color'				=> '#2295ff',
			'um_theme_lifter_plan_featured_bg_color'			=> '#4ba9ff',
			'um_theme_lifter_plan_featured_border_color'		=> '#2295ff',
			'um_theme_lifter_plan_restriction_link_color'		=> '#f8954f',
			'um_theme_lifter_plan_restriction_link_hover_color'	=> '#f67d28',
			'um_theme_lifter_checkout_heading_bg_color'			=> '#2295ff',
			'um_theme_lifter_checkout_border_color'				=> '#2295ff',
			'um_theme_lifter_plan_title_color'					=> '#ffffff',
			'um_theme_lifter_plan_featured_color'				=> '#ffffff',
			'um_theme_lifter_checkout_heading_color'			=> '#ffffff',

			// Easy Digital Downloads
			'um_theme_edd_button_font_size'						=> '16px',
			'um_theme_edd_button_bg_color'						=> '#428bca',
			'um_theme_edd_button_text_color'					=> '#ffffff',
			'um_theme_edd_button_hover_text_color'				=> '#ffffff',
			'um_theme_edd_button_hover_bg_color'				=> '#428bca',
			'um_theme_edd_alert_bg_color'						=> '#f2dede',
			'um_theme_edd_alert_text_color'						=> '#a94442',
			'um_theme_edd_alert_border_color'					=> '#ebccd1',
			'um_theme_edd_success_bg_color'						=> '#dff0d8',
			'um_theme_edd_success_text_color'					=> '#3c763d',
			'um_theme_edd_success_border_color'					=> '#d6e9c6',
			'um_theme_edd_info_bg_color'						=> '#d9edf7',
			'um_theme_edd_info_text_color'						=> '#31708f',
			'um_theme_edd_info_border_color'					=> '#bce8f1',
			'um_theme_edd_warn_bg_color'						=> '#fcf8e3',
			'um_theme_edd_warn_text_color'						=> '#8a6d3b',
			'um_theme_edd_warn_border_color'					=> '#faebcc',

			// Posts
			'um_theme_blog_pagination_type' 					=> 1,
			'um_theme_show_site_comments'						=> 1,
			'um_theme_show_post_article_summary'				=> 1,
			'um_theme_show_post_meta_navigation'				=> 1,
			'um_theme_show_post_tags'							=> 1,
			'um_theme_show_post_category'						=> 1,
			'um_theme_show_post_author_box'						=> 1,
			'um_theme_blog_posts_layout'						=> 1,
			'um_theme_post_featured_image_pos'					=> 2,
			'um_post_single_box_bg' 							=> '#ffffff',
			'um_theme_blog_post_bg_color' 						=> '#ffffff',
			'um_theme_blog_post_title_color'					=> '#000000',
			'um_theme_blog_post_content_color' 					=> '#000000',
			'um_post_tag_box_bg'								=> '#f1f3f4',
			'um_post_tag_text_color' 							=> '#62646c',

			// WP Job Manager
			'um_theme_sing_job_listing_button_text_color'		=> '#ffffff',
			'um_theme_sing_job_listing_title_color'				=> '#333333',
			'um_theme_sing_job_listing_button_color'			=> '#2196F3',
			'um_theme_sing_job_listing_title_font_size' 		=> '30px',

			// Dokan Multivendor
			'um_theme_dokan_shop_show_sold_by'					=> true,
			'um_theme_dokan_single_vendor_info'					=> true,
			'um_theme_dokan_store_name_color'					=> '#ffffff',
			'um_theme_dokan_store_info_color'					=> '#ffffff',

			// Menu
			'um_theme_submenu_arrow'							=> 2,
			'um_theme_menu_font_size'							=> '16px',
			'header_topbar_menu_font_size' 						=> '13px',
			'header_bottombar_menu_font_size' 					=> '13px',
			'header_topbar_icon_font_size' 						=> '22px',
			'header_bottombar_onclick_icon_size' 				=> '16px',
			'um_theme_menu_position'							=> 'right',
			'menu_text_color' 									=> '#444444',
			'um_theme_submenu_text_color'						=> '#444444',
			'header_topbar_menu_color' 							=> '#ffffff',
			'header_bottombar_menu_color' 						=> '#ffffff',
			'um_theme_submenu_background_color'					=> '#ffffff',
			'selected_menu_bg_color'							=> '#ffffff',
			'menu_text_hover_color' 							=> '#333333',
			'selected_menu_text_color' 							=> '#333333',

			// Restrict Content
			'um_theme_rcp_logout_bg_color' 						=> '#333333',
			'um_theme_rcp_message_text_color' 					=> '#333333',
			'um_theme_rcp_message_bg_color' 					=> '#ffffff',
			'um_theme_rcp_logout_text_color' 					=> '#ffffff',

			// WPAverts
			'um_theme_wpadverts_price_color'					=> '#b34040',
			'um_theme_wpadverts_price_bg_color'					=> '#ffffff',
			'um_theme_wpadverts_link_color'						=> '#21759b',
			'um_theme_wpadverts_text_color'						=> '#333333',
			'um_theme_wpadverts_item_bg_color'					=> '#ffffff',
			'um_theme_wpadverts_item_border_color'				=> '#e5e5e5',
			'um_theme_wpadverts_featured_item_bg_color'			=> '#F0F8FF',
			'um_theme_wpadverts_featured_item_border_color'		=> '#b0c4de',
			'um_theme_wpadverts_sold_item_bg_color'				=> '#ffcc00',
			'um_theme_wpadverts_sold_item_text_color'			=> '#ffffff',
			'um_theme_wpadverts_icon_color'						=> '#999999',
			'um_theme_wpadverts_icon_bg_color'					=> '#f5f5f5',
			'um_theme_wpadverts_contact_box_bg_color'			=> '#fcfcfc',
			'um_theme_wpadverts_contact_box_border_color'		=> '#f5f5f5',
			'um_theme_wpadverts_search_box_color'				=> '#ffffff',
			'um_theme_wpadverts_search_border_color'			=> '#e5e5e5',
			'um_theme_wpadverts_search_placeholder_bg'			=> '#eeeeee',
			'um_theme_wpadverts_search_placeholder_text'		=> '#333333',
			'um_theme_wpadverts_search_button_bg'				=> '#f5f5f5',
			'um_theme_wpadverts_search_button_text'				=> '#333333',
			'um_theme_wpadverts_featured_item_title_color'		=> '#21759b',
			'um_theme_wpadverts_featured_item_text_color'		=> '#333333',
			'um_theme_show_sidebar_wpadverts_archive'			=> 1,
			'um_theme_show_sidebar_wpadverts_single'			=> 1,

			// Other
			'um_theme_code_javascript' 							=> '',
			'um_theme_code_head' 								=> '',
			'um_theme_code_header' 								=> '',
			'um_retina_logo'									=> '',
			'um_theme_login_page_bg_image'						=> '',
			'um_theme_show_scroll_to_top'						=> 1,
			'um_theme_login_button_border_enable'				=> 2,
			'um_theme_reg_button_border_enable'					=> 2,
			'um_theme_button_border_enable'						=> 2,
			'um_theme_canvas_width' 							=> '1200px',
			'um_theme_login_button_border_width' 				=> '1px',
			'um_theme_reg_button_border_width' 					=> '1px',
			'um_theme_button_border_width' 						=> '1px',
			'um_theme_title_capitalization'						=> 'none',
			'um_theme_button_transform'							=> 'none',
			'um_theme_widget_title_alignment'					=> 'left',

			// UM Theme Hooks
			'um_theme_setting_hook_content_before_site'			=> '',
			'um_theme_setting_hook_header'						=> '',
			'um_theme_setting_hook_header_profile_before'		=> '',
			'um_theme_setting_hook_header_profile_after'		=> '',
			'um_theme_setting_hook_header_after_header'			=> '',
			'um_theme_setting_hook_before_content'				=> '',
			'um_theme_setting_hook_content_top'					=> '',
			'um_theme_setting_hook_content_before_page'			=> '',
			'um_theme_setting_hook_content_page'				=> '',
			'um_theme_setting_hook_content_after_page'			=> '',
			'um_theme_setting_hook_before_footer'				=> '',
			'um_theme_setting_hook_footer'						=> '',
			'um_theme_setting_hook_after_footer'				=> '',
			'um_theme_setting_hook_header_before_header'		=> '',
			'um_theme_setting_hook_loop_before'					=> '',
			'um_theme_setting_hook_loop_after'					=> '',
			'um_theme_setting_hook_single_post_before'			=> '',
			'um_theme_setting_hook_single_post_top'				=> '',
			'um_theme_setting_hook_single_post'					=> '',
			'um_theme_setting_hook_before_comments'				=> '',
			'um_theme_setting_hook_before_comments_title'		=> '',
			'um_theme_setting_hook_after_comments_title'		=> '',
			'um_theme_setting_hook_after_comments'				=> '',
			'um_theme_setting_hook_single_post_bottom'			=> '',
			'um_theme_setting_hook_single_post_after'			=> '',
		);

	    $options = get_option( 'customization', $default );
	    $options = wp_parse_args( $options, $default );

		return $options;
	}
}
