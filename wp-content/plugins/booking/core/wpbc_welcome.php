<?php
/**
 * @version 1.0
 * @package Booking Calendar
 * @subpackage Welcome Panel Functions
 * @category Functions
 *
 * @author wpdevelop
 * @link https://wpbookingcalendar.com/
 * @email info@wpbookingcalendar.com
 *
 * @modified 2023-10-24
 */

if ( ! defined( 'ABSPATH' ) ) exit;                                             // Exit if accessed directly


// <editor-fold     defaultstate="collapsed"                        desc="  ==  Welcome Content  2 ==  2024-11-06 "  >

function wpbc_welcome_panel() {

	if ( ! wpbc_is_user_can_access_wizard_page() ){
		return;
	}

	?><script type="text/javascript">
			jQuery( document ).ready( function (){
				setTimeout( function (){
					if ( jQuery( '#wpbc_welcome_panel__version2' ).is( ':visible' ) ){
						jQuery( '#wpbc_welcome_panel__version2' ).slideUp( 1000 );
					}
				}, 60000 );
			} );
		</script>
		<div id="wpbc_welcome_panel__version2" style="display:none;">
			<?php
				$is_panel_visible = wpbc_is_dismissed( 'wpbc_welcome_panel__version2', array(
														'title' => '<i class="menu_icon icon-1x wpbc_icn_close"></i> ',
														'hint'  => __( 'Dismiss', 'booking' ),
														'class' => 'wpbc_panel_get_started_dismiss0',
														'css'   => 'text-decoration: none;font-weight: 600;float:right;background: #fff;border-radius: 7px;z-index: 1;position: relative;margin: 16px 15px 0 -32px;'
													));
				if ( $is_panel_visible ) {
					wpbc_welcome_panel__version2__content();
				}
			?>
		</div><?php
}

function wpbc_welcome_panel__version2__content() {

	?><div class="wpbc_welcome_panel" style="margin: 0 0 20px;"><?php

		wpbc_ui_settings__panel__welcome();

	?></div><?php
}


// ---------------------------------------------------------------------------------------------------------------------
//  Panel  == Plugin Version | & Buttons ==
// ---------------------------------------------------------------------------------------------------------------------

/**
 * Show Settings Statistic | Agenda Panel
 *
 * @return void
 */
function wpbc_ui_settings__panel__welcome(){


	?><style type="text/css">
		.wpbc_ui_settings__panel__welcome .wpbc_ajx_toolbar.wpbc_no_borders{
			margin-top: 5px !important;
		}
		.wpbc_ui_settings__panel__welcome .wpbc_ui_settings__card_text_small h1{
			line-height: 1.2;
			margin: 0;
		}
		.wpbc_ui_settings__panel__welcome .about-description {
			flex: 100%;
			margin: 0;
			color: #8a8a8a;
			font-size: 20px;
			font-weight: 600;
			border-bottom: 1px solid #eee;
			padding: 10px 20px;
		}
		.wpbc_ui_settings__panel__welcome .wpbc_ajx_toolbar .ui_container.ui_container_small .ui_group .ui_element .wpbc_ui_button {
			white-space: wrap;
			flex-flow: row nowrap;
			height: auto;
			padding: 5px 15px;
			line-height: 1.74;
		}
		.wpbc_ui_settings__panel__welcome .wpbc_ui_settings__panel h1 {
			margin: 0;
		}
	</style><?php

	?><div class="wpbc_ui_settings__flex_container wpbc_ui_settings__panel__welcome"><?php

		wpbc_ui_settings__panel_start();

			wpbc_ui_settings__panel__welcome__header();

			if ( WPBC_setup_plugin ) {
				wpbc_ui_settings_panel__card__setup_wizard();
			}

			wpbc_ui_settings_panel__card__version();

			wpbc_ui_settings_panel__card__welcome__have_questions();

			//Info: If needs to show "Shortcode Popup Dialog" and create new Pages, please uncomment all rows marked with: //FixIn: 10.6.6.2
			// wpbc_ui_settings_panel__card__publish_into_new( array() );			//FixIn: 10.6.6.2

			?><div style="flex:100%;border-bottom: 1px solid #eeeff1;"></div><?php		// Divider

			if ( ! empty( wpbc_stp_wiz__is_exist_published_page_with_booking_form() ) ) {
				wpbc_ui_settings_panel__card__publish_into_exist( array() );
			}

			wpbc_ui_settings_panel__card__integreate_into_new();
			wpbc_ui_settings_panel__card__shortcodes_help();

			//wpbc_ui_settings_panel__card__welcome__next_steps();





		wpbc_ui_settings__panel_end();

	?></div><?php
}


	function wpbc_ui_settings__panel__welcome__header() {

		?><p class="about-description"><?php
			_e( 'We&#8217;ve assembled some links to get you started:', 'booking' );
		?></p><?php
	}


	/**
	 * Show   == Dashboard Card  -  integreate into new  ==
	 *
	 * @return void
	 */
	function wpbc_ui_settings_panel__card__integreate_into_new(){



		?><div class="wpbc_ui_settings__card wpbc_ui_settings__card_text_small wpbc_ui_settings__card_divider_right wpbc_ui_settings_panel__card__publish_into_new">
			<div class="wpbc_ui_settings__text_row">
				<i class="menu_icon icon-1x wpbc-bi-box-arrow-in-down-left"></i>
				<h1>
					<span>
						<span class="0wpbc_ui_settings__text_color__black2"><?php _e( 'Insert shortcode in a page', 'booking' ); ?></span>
					</span>
				</h1>
			</div>
			<div class="wpbc_ui_settings__text_row">
				<span class="wpbc_ui_settings__text_color__black">
					<?php
					 	printf( __( 'Integrate booking form into a page on your website.', 'booking' ), '', '' );
					?>
				</span>
			</div>
			<div style="align-self:center;margin: 0px 0 0;" class="wpbc_flextable_col">
				<?php

				?>
				<div class="wpbc_ajx_toolbar wpbc_no_borders" style="margin: 0 auto;margin-top: 15px;">
					<div class="ui_container ui_container_small">
						<div class="ui_group ui_group__publish_btn"  style="align-items: center;">
							<div class="ui_element" style="margin: 0 15px 0 0;">
								<a href="<?php echo esc_url( wpbc_get_resources_url() ); ?>"
								   id="ui_btn_publish_into_exist" class="wpbc_ui_control wpbc_ui_button wpbc_ui_button_danger0 tooltip_top "
								   title="<?php echo esc_attr(
																sprintf( __( 'Integrate booking form into a page on your website.', 'booking' ), '', '' )
										); ?>"  >
										<span><?php _e('Integrate booking form', 'booking'); ?>&nbsp;&nbsp;&nbsp;</span>
										<i class="menu_icon icon-1x wpbc-bi-arrow-right-short" style="margin: 0;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php

				?>
			</div>

		</div><?php
	}


	/**
	 * Show   == Dashboard Card  -  Shortcodes Help  ==
	 *
	 * @return void
	 */
	function wpbc_ui_settings_panel__card__shortcodes_help(){

		?><div class="wpbc_ui_settings__card wpbc_ui_settings__card_text_small wpbc_ui_settings__card_divider_right wpbc_ui_settings_panel__card__publish_into_new">
			<div class="wpbc_ui_settings__text_row">
				<i class="menu_icon icon-1x wpbc_icn_code"></i>
				<h1>
					<span>
						<span class="0wpbc_ui_settings__text_color__black2"><?php _e( 'Shortcodes', 'booking' ); ?></span>
					</span>
				</h1>
			</div>
			<div class="wpbc_ui_settings__text_row">
				<span class="wpbc_ui_settings__text_color__black">
					<ul>
						<li style="font-size: 0.94em;"><span class="welcome-icon"><?php
							printf( __('Learn how to %sAdd the Booking Form or Calendar to your page%s in WordPress Block Editor, Elementor, or other non-standard editors.','booking')
									, '<strong><a href="https://wpbookingcalendar.com/faq/insert-booking-calendar-into-page/" target="_blank">', '</a></strong>'
									);
							echo '</span> <span class="welcome-icon">';
						    printf( __('See %sall shortcodes%s of the Booking Calendar that you can use in pages.','booking')
									, '<strong><a href="https://wpbookingcalendar.com/faq/#shortcodes" target="_blank">', '</a></strong>'
//									, '<a href="' . admin_url( 'edit.php?post_type=page' ) . '">', '</a>'
//									, '<a href="' . admin_url( 'edit.php' ) . '">', '</a>'
									);
						?></span></li>
					</ul>
				</span>
			</div>
		</div><?php
	}


	/**
	 * Show   == Dashboard Card  -  Next Steps  ==
	 *
	 * @return void
	 */
	function wpbc_ui_settings_panel__card__welcome__next_steps(){

		?><div class="wpbc_ui_settings__card wpbc_ui_settings__card_text_small wpbc_ui_settings__card_divider_right wpbc_ui_settings_panel__card__welcome__next_steps">
			<div class="wpbc_ui_settings__text_row">
				<i class="menu_icon icon-1x wpbc_icn_code"></i>
				<h1>
					<span>
						<span class="0wpbc_ui_settings__text_color__black2"><?php _e( 'Next Steps', 'booking' ); ?></span>
					</span>
				</h1>
			</div>
			<div class="wpbc_ui_settings__text_row">
				<span class="wpbc_ui_settings__text_color__black">
					<ul>

						<?php if ( ! empty( $wp_post_booking_absolute ) ) { ?>
						<li><div class="welcome-icon"><?php
							printf( __('Start creating %snew bookings%s from %syour page%s or in the %sAdmin Panel%s.','booking')
									, '<strong>', '</strong>'
									, '<strong><a href="' . esc_url( $wp_post_booking_absolute ) . '" target="_blank">', '</a></strong>'
									, '<a href="' . esc_url( wpbc_get_new_booking_url() ) . '">', '</a>'
									);
						?></div></li>
						<?php } ?>

						<li><div class="welcome-icon"><?php
							printf( __( 'Check %sBooking Listing%s page for new bookings.','booking')
										, '<a href="' . esc_url( wpbc_get_bookings_url(true, false) . '&view_mode=vm_listing' ) . '">', '</a>'
									);
						?></div></li>
						<li><div class="welcome-icon"><?php
							printf( __( 'Configure  %sForm Fields%s, %sEmails%s and other %sSettings%s.' ,'booking')
										, '<a href="' . esc_url( wpbc_get_settings_url(true, false) . '&tab=form' ) . '">', '</a>'
										, '<a href="' . esc_url( wpbc_get_settings_url(true, false) . '&tab=email' ) . '">', '</a>'
										, '<a href="' . esc_url( wpbc_get_settings_url(true, false) ) . '">', '</a>'
									);
						?></div></li>
					</ul>
				</span>
			</div>
		</div><?php
	}


	/**
	 * Show   == Dashboard Card  -  Have a questions?  ==
	 *
	 * @return void
	 */
	function wpbc_ui_settings_panel__card__welcome__have_questions(){

		?><div class="wpbc_ui_settings__card wpbc_ui_settings__card_text_small wpbc_ui_settings__card_divider_right0 wpbc_ui_settings_panel__card__welcome__have_questions">
			<div class="wpbc_ui_settings__text_row">
				<i class="menu_icon icon-1x wpbc_icn_help_outline"></i>
				<h1>
					<span>
						<span class="0wpbc_ui_settings__text_color__black2"><?php _e( 'Have a questions?', 'booking' ); ?></span>
					</span>
				</h1>
			</div>
			<div class="wpbc_ui_settings__text_row">
				<span class="wpbc_ui_settings__text_color__black">
					<ul>
						<li><span class="welcome-icon"><?php
							printf( __( 'See %sFAQ%s.' ,'booking'),
								'<a href="https://wpbookingcalendar.com/faq/" target="_blank">',
								'</a>' );
							echo '</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="welcome-icon">';
							printf( __( 'Contact %sSupport%s.','booking'),
								'<a href="https://wpbookingcalendar.com/support/" target="_blank">',
								'</a>' );
/*
						?></div></li>
						<li><div class="welcome-icon"><?php
							printf( __( 'Check out our %sHelp%s' ,'booking'),
								'<a href="https://wpbookingcalendar.com/help/" target="_blank">',
								'</a>' );
						?></div></li>
						<li><div class="welcome-icon"><?php
							printf( __( 'Still having questions? Contact %sSupport%s.','booking'),
								'<a href="https://wpbookingcalendar.com/support/" target="_blank">',
								'</a>' );
*/
						?></span></li>
				</span>
			</div>
		</div><?php
	}



// </editor-fold>

