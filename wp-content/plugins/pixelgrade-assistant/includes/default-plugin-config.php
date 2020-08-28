<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function pixassist_get_default_config( $original_theme_slug ){
	// General strings ready to be translated
	$config['l10n'] = array(
		'myAccountBtn'                  => esc_html__( 'My account', 'pixelgrade-assistant' ),
		'needHelpBtn'                   => esc_html__( 'Need help?', 'pixelgrade-assistant' ),
		'returnToDashboard'             => esc_html__( 'Continue to your WordPress dashboard', 'pixelgrade-assistant' ),
		'nextButton'                    => esc_html__( 'Continue', 'pixelgrade-assistant' ),
		'skipButton'                    => esc_html__( 'Skip this step', 'pixelgrade-assistant' ),
		'notRightNow'                   => esc_html__( 'Not right now', 'pixelgrade-assistant' ),
		'validationErrorTitle'          => esc_html__( 'Something went wrong', 'pixelgrade-assistant' ),
		'themeValidationNoticeFail'     => esc_html__( 'Not activated.', 'pixelgrade-assistant' ),
		'themeValidationNoticeOk'       => esc_html__( 'Connected & up-to-date!', 'pixelgrade-assistant' ),
		'themeValidationNoticeOutdatedWithUpdate' => esc_html__( 'Your theme is outdated, but an update is available!', 'pixelgrade-assistant' ),
		'themeValidationNoticeNotConnected' => esc_html__( 'Not connected', 'pixelgrade-assistant' ),
		'themeUpdateAvailableTitle'     => esc_html__( 'New theme update is available!', 'pixelgrade-assistant' ),
		'themeUpdateAvailableContent'   => esc_html__( 'Great news! There is a new version of {{theme_name}} available.', 'pixelgrade-assistant' ),
		'hashidNotFoundNotice'          => esc_html__( 'Sorry but we could not recognize your theme. This might have happened because you have made changes to the functions.php file. If that is the case - please try to revert to the original contents of that file and retry to validate your theme license.', 'pixelgrade-assistant' ),
		'themeUpdateButton'             => esc_html__( 'Update now', 'pixelgrade-assistant' ),
		'themeChangelogLink'             => esc_html__( 'View changelog', 'pixelgrade-assistant' ),
		'kbButton'                      => esc_html__( 'Theme Help', 'pixelgrade-assistant' ),
		'Error500Text'                  => esc_html__( 'Oh, snap! Something went wrong and we are unable to make sense of the actual problem.', 'pixelgrade-assistant' ),
		'Error500Link'                  => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'docs/guides-and-resources/server-errors-handling',
		'Error400Text'                  => esc_html__( 'There is something wrong with the current setup of this WordPress installation.', 'pixelgrade-assistant' ),
		'Error400Link'                  => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'docs/guides-and-resources/server-errors-handling',
		'themeDirectoryChangedTitle'                    => esc_html__( 'Your theme DIRECTORY is changed!', 'pixelgrade-assistant' ),
		'themeDirectoryChanged'                         => wp_kses_post( __( 'This will give you <strong>all kinds of trouble</strong> when installing updates for the theme. To be able to <strong>successfully install updates</strong> please <strong>change the theme\'s directory</strong> from "{{template}}" to "{{original_slug}}".', 'pixelgrade-assistant' ) ),
		'themeNameChangedTitle'                         => esc_html__( 'Your theme NAME is changed!', 'pixelgrade-assistant' ),
		'themeNameChanged'                              => wp_kses_post( __( 'The theme name specified in the "style.css" file in the theme\'s directory is <strong>"{{stylecss_theme_name}}".</strong> The next time you <strong>update your theme</strong> this name will be <strong>changed back to "{{theme_name}}".</strong>', 'pixelgrade-assistant' ) ),
		'childThemeNameChanged'                         => wp_kses_post( __( 'On your next theme update, your parent theme name will be <strong>changed back to its original one: "{{stylecss_theme_name}}".</strong> To avoid issues with your child theme, you will need to <strong>update the style.css file of both your parent and child theme</strong> with <strong>the original theme name: "{{theme_name}}".</strong>', 'pixelgrade-assistant' ) ),
		'forceDisconnected'             => esc_html__( 'Unfortunately, we\'ve lost your connection with pixelgrade.com. Just reconnect and all will be back to normal.', 'pixelgrade-assistant' ),
		'connectionLostTitle'         => esc_html__( 'Your connection is out of sight!', 'pixelgrade-assistant' ),
		'connectionLost'             => esc_html__( 'Unfortunately, we\'ve lost your connection with {{shopdomain}}. Just reconnect and all will be back to normal.', 'pixelgrade-assistant' ),
		'connectButtonLabel'         => esc_html__( 'Connect to {{shopdomain}}', 'pixelgrade-assistant' ),
		'refreshConnectionButtonLabel'         => esc_html__( 'Refresh your site connection', 'pixelgrade-assistant' ),
		'setupWizardTitle'              => esc_html__( 'Site setup wizard', 'pixelgrade-assistant' ),
		'internalErrorTitle'              => esc_html__( 'An internal server error has occurred', 'pixelgrade-assistant' ),
		'internalErrorContent'              => esc_html__( 'Something went wrong while trying to process your request. Please try again.', 'pixelgrade-assistant' ),
		'disconnectLabel'              => esc_html__( 'Disconnect', 'pixelgrade-assistant' ),
		'disconnectConfirm'              => esc_html__( "Are you sure you want to do this?\nYou will lose the connection with {{shopdomain}}.\nBut don't worry, you can always reconnect.", 'pixelgrade-assistant' ),
		'componentUnavailableTitle'  => esc_html__( 'Unavailable', 'pixelgrade-assistant' ),
		'componentUnavailableContent' => esc_html__( 'This feature is available only if your site is connected to {{shopdomain}}.', 'pixelgrade-assistant' ),
		'pluginInstallLabel' => esc_html__( 'Install', 'pixelgrade-assistant' ),
		'pluginActivateLabel' => esc_html__( 'Activate', 'pixelgrade-assistant' ),
		'pluginUpdateLabel' => esc_html__( 'Update', 'pixelgrade-assistant' ),
		'pluginsPlural' => esc_html__( 'selected plugins', 'pixelgrade-assistant' ),
		'starterContentImportLabel' => esc_html__( 'Import starter content', 'pixelgrade-assistant' ),
		'starterContentImportSelectedLabel' => esc_html__( 'Import selected', 'pixelgrade-assistant' ),
		'setupWizardWelcomeTitle' => esc_html__( 'Welcome to the site setup wizard', 'pixelgrade-assistant' ),
		'setupWizardWelcomeContent' => esc_html__( 'Go through this quick setup wizard to make sure you install all the recommended plugins and pre-load the site with helpful demo content. It\'s safe and fast.', 'pixelgrade-assistant' ),
		'setupWizardStartButtonLabel' => esc_html__( 'Let\'s get started!', 'pixelgrade-assistant' ),
		'authenticatorDashboardConnectTitle' => esc_html__( 'Connect your site to Pixelgrade', 'pixelgrade-assistant' ),
		'authenticatorDashboardConnectContent' => wp_kses_post( __( 'Securely connect to {{shopdomain}}, create <strong>a free account</strong>, and make sure you don\'t miss any of the following perks.
					<ul class="benefits">
						<li><i></i><span><strong>Hand-picked plugins</strong> to boost your website.</span></li>
						<li><i></i><span><strong>Starter content</strong> to make your website look like the demo.</span></li>
						<li><i></i><span><strong>Premium support</strong> to guide you through everything you need.</span></li>
                    </ul>', 'pixelgrade-assistant' ) ),
		'authenticatorDashboardConnectLoadingContent' => esc_html__( 'Take a break while you securely authorize Pixelgrade Assistant to connect to {{shopdomain}}. It\'s going to happen in a newly open browser window or tab, just so you know.', 'pixelgrade-assistant' ),
		'authenticatorDashboardConnectedSuccessTitle' => esc_html__( 'Yaaay, site connected! 👏', 'pixelgrade-assistant' ),
		'authenticatorDashboardConnectedSuccessContent' => wp_kses_post( __( 'Well done, <strong>{{username}}</strong>! Your website is successfully connected with {{shopdomain}}. Carry on and install the recommended plugins or starter content in the blink of an eye.', 'pixelgrade-assistant' ) ),
		'authenticatorActivationErrorTitle' => esc_html__( 'Something Went Wrong!', 'pixelgrade-assistant' ),
		'authenticatorActivationErrorContent' => esc_html__( 'We couldn\'t properly activate your theme. Please try again later.', 'pixelgrade-assistant' ),
		'authenticatorErrorMessage1' => esc_html__( 'An error occurred. Please refresh the page to try again. Error: ', 'pixelgrade-assistant' ),
		'authenticatorErrorMessage2' => wp_kses_post(__( 'If the error persists please contact our support team at <a href="mailto:help@pixelgrade.com?Subject=Help%20with%20connecting%20my%20site" target="_top">help@pixelgrade.com</a>.', 'pixelgrade-assistant' )),
	);

	$config['setupWizard'] = array(

		'activation' => array(
			'stepName' => 'Connect',
			'blocks'   => array(
				'authenticator' => array(
					'class'  => 'full white',
					'fields' => array(
						'authenticator_component' => array(
							'title' => esc_html__( 'Connect to {{shopdomain}}!', 'pixelgrade-assistant' ),
							'type'  => 'component',
							'value' => 'authenticator',
						),
					),
				),
			),
		),

		'plugins' => array(
			'stepName' => esc_html__( 'Plugins', 'pixelgrade-assistant' ),
			'blocks'   => array(
				'plugins' => array(
					'class'  => 'full white',
					'fields' => array(
						'title'             => array(
							'type'  => 'h2',
							'value' => esc_html__( 'Set up the right plugins', 'pixelgrade-assistant' ),
							'value_installing' => esc_html__( 'Setting up plugins..', 'pixelgrade-assistant' ),
							'value_installed' => '<span class="c-icon  c-icon--large  c-icon--success-auth"></span> ' . esc_html__( 'All done with plugins!', 'pixelgrade-assistant' ) . ' 🤩',
							'class' => 'section__title'
						),
						'head_content'   => array(
							'type'             => 'text',
							'value'            => esc_html__( 'Install and activate the plugins that provide recommended functionality for your site. You can add or remove plugins later on from within the WordPress dashboard.', 'pixelgrade-assistant' ),
							'value_installing' => wp_kses_post( __( 'Why not take a peek at our <a href="https://twitter.com/pixelgrade" target="_blank">Twitter page</a> while you wait? (opens in a new tab and the plugins aren\'t going anywhere)', 'pixelgrade-assistant' ) ),
							'value_installed'  => esc_html__( 'You made it! 🙌 You\'ve installed and activated the plugins. You are good to jump to the next step.', 'pixelgrade-assistant' ),
						),
						'plugins_component' => array(
							'title' => esc_html__( 'Install Plugins', 'pixelgrade-assistant' ),
							'type'  => 'component',
							'value' => 'plugin-manager',
						),
					),
				),
			),
		),

		'support'   =>  array(
			'stepName'  =>  esc_html__( 'Starter content', 'pixelgrade-assistant' ),
			'nextText'  =>  esc_html__( 'Next Step', 'pixelgrade-assistant' ),
			'blocks'    =>  array(
				'support'   =>  array(
					'class'  => 'full white',
					'fields' => array(
						'title'          => array(
							'type'  => 'h2',
							'value' => esc_html__( 'Import starter content', 'pixelgrade-assistant' ),
							'value_installing' => esc_html__( 'Importing starter content..', 'pixelgrade-assistant' ),
							'value_installed' => '<span class="c-icon  c-icon--large  c-icon--success-auth"></span> ' . esc_html__( 'Starter content imported!', 'pixelgrade-assistant' ),
							'value_errored' => '<span class="c-icon  c-icon--large  c-icon--warning"></span> ' . esc_html__( 'Starter content could not be imported!', 'pixelgrade-assistant' ),
							'class' => 'section__title',
						),
						'head_content'   => array(
							'type'             => 'text',
							'value'            => esc_html__( 'Use the demo content to make your site look as eye-candy as the theme\'s demo. The importer helps you have a strong starting point for your content and speed up the entire process.', 'pixelgrade-assistant' ),
							'value_installing' => wp_kses_post( __( 'Why not join our <a href="https://www.facebook.com/groups/PixelGradeUsersGroup/" target="_blank">Facebook Group</a> while you wait? (opens in a new tab)', 'pixelgrade-assistant' ) ),
							'value_installed'  => esc_html__( 'Mission accomplished! 👍 You\'ve successfully imported the starter content, so you\'re good to move forward. Have fun!', 'pixelgrade-assistant' ),
							'value_errored'  => esc_html__( 'Sadly, errors have happened and the started content could not be imported at this time. Please try again in a little while or reach out to our support crew.', 'pixelgrade-assistant' ),
						),
						'starterContent' => array(
							'type'     => 'component',
							'value'    => 'starter-content',
							'notconnected' => 'hidden',
						),
						'content'        => '',
						'links'          => '',
						'footer_content' => '',
					),
				),
			),
		),

		'ready' => array(
			'stepName' => esc_html__( 'Ready', 'pixelgrade-assistant' ),
			'blocks'   => array(
				'ready' => array(
					'class'  => 'full white',
					'fields' => array(
						'title'   => array(
							'type'  => 'h2',
							'value' => esc_html__( 'Your site is ready to make an impact!', 'pixelgrade-assistant' ),
							'class' => 'section__title'
						),
						'content' => array(
							'type'  => 'text',
							'value' => wp_kses_post( __( '<strong>Big congrats, mate!</strong> 👏 Everything\'s right on track which means that you can start making tweaks of all kinds. Login to your WordPress dashboard to make changes, and feel free to change the default content to match your needs.', 'pixelgrade-assistant' ) ),
						),
					),
				),

				'redirect_area' => array(
					'class'  => 'half',
					'fields' => array(
						'title' => array(
							'type'  => 'h4',
							'value' => esc_html__( 'Next steps', 'pixelgrade-assistant' )
						),
						'cta'   => array(
							'type'  => 'button',
							'class' => 'btn btn--large',
							'label' => esc_html__( 'View and Customize', 'pixelgrade-assistant' ),
							'url'   => '{{customizer_url}}?return=' . urlencode( admin_url( 'admin.php?page=pixelgrade_assistant' ) )
						),
					),
				),

				'help_links' => array(
					'class'  => 'half',
					'fields' => array(
						'title' => array(
							'type'  => 'h4',
							'value' => esc_html__( 'Learn more', 'pixelgrade-assistant' )
						),
						'links' => array(
							'type'  => 'links',
							'value' => array(
								array(
									'label' => esc_html__( 'Browse the Theme Documentation', 'pixelgrade-assistant' ),
									'url'   => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'docs/'
								),
								array(
									'label' => esc_html__( 'Learn How to Use WordPress', 'pixelgrade-assistant' ),
									'url'   => 'https://easywpguide.com'
								),
								array(
									'label' => esc_html__( 'Get Help and Support', 'pixelgrade-assistant' ),
									'url'   => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'get-support/'
								),
								array(
									'label' => esc_html__( 'Join our Facebook group', 'pixelgrade-assistant' ),
									'url'   => 'https://www.facebook.com/groups/PixelGradeUsersGroup/'
								),
							),
						),
					),
				),
			),
		),
	);

	$config['dashboard'] = array(
		'general' => array(
			'name'   => esc_html__( 'General', 'pixelgrade-assistant' ),
			'blocks' => array(
				'authenticator' => array(
					'class'  => 'full white',
					'fields' => array(
						'authenticator' => array(
							'type'  => 'component',
							'value' => 'authenticator'
						),
					),
				),
				'plugins' => array(
					'notconnected' =>  'hidden',
					'fields' => array(
						'recommended_plugins' => array(
							'type'  => 'component',
							'value' => 'recommended-plugins'
						),
					),
				),
                'starterContent' => array(
                    'notconnected' =>  'hidden',
                    'fields' => array(
	                    'title'          => array(
		                    'type'  => 'h2',
		                    'value' => esc_html__( 'Starter content', 'pixelgrade-assistant' ),
		                    'value_installing' => esc_html__( 'Starter content importing..', 'pixelgrade-assistant' ),
		                    'value_installed' => '<span class="c-icon  c-icon--large  c-icon--success-auth"></span> ' . esc_html__( 'Starter content imported!', 'pixelgrade-assistant' ),
		                    'value_errored' => '<span class="c-icon  c-icon--large  c-icon--warning"></span> ' . esc_html__( 'Starter content could not be imported!', 'pixelgrade-assistant' ),
		                    'class' => 'section__title',
	                    ),
	                    'head_content'   => array(
		                    'type'             => 'text',
		                    'value'            => esc_html__( 'Use the demo content to make your site look as eye-candy as the theme\'s demo. The importer helps you have a strong starting point for your content and speed up the entire process.', 'pixelgrade-assistant' ),
		                    'value_installing' => wp_kses_post( __( 'Why not join our <a href="https://www.facebook.com/groups/PixelGradeUsersGroup/" target="_blank">Facebook Group</a> while you wait? (opens in a new tab)', 'pixelgrade-assistant' ) ),
		                    'value_installed'  => esc_html__( 'Mission accomplished! 👍 You\'ve successfully imported the starter content, so you\'re good to move forward. Have fun!', 'pixelgrade-assistant' ),
		                    'value_errored'  => esc_html__( 'Sadly, errors have happened and the started content could not be imported at this time. Please try again in a little while or reach out to our support crew.', 'pixelgrade-assistant' ),
	                    ),
	                    'starterContent' => array(
		                    'type'     => 'component',
		                    'value'    => 'starter-content',
	                    ),
                    ),
                ),
			),
		),

		'customizations' => array(
			'name'   => esc_html__( 'Customizations', 'pixelgrade-assistant' ),
			'class'  => 'sections-grid__item',
			'blocks' => array(
				'featured'  => array(
					'class'  => 'u-text-center',
					'fields' => array(
						'title'   => array(
							'type'  => 'h2',
							'value' => esc_html__( 'Customizations', 'pixelgrade-assistant' ),
							'class' => 'section__title'
						),
						'content' => array(
							'type'  => 'text',
							'value' => esc_html__( 'We know that each website needs to have an unique voice in tune with your charisma. That\'s why we created a smart options system to easily make handy color changes, spacing adjustments and balancing fonts, each step bringing you closer to a striking result.', 'pixelgrade-assistant' ),
							'class' => 'section__content'
						),
						'cta'     => array(
							'type'  => 'button',
							'class' => 'btn btn--action  btn--green',
							'label' => esc_html__( 'Access the Customizer', 'pixelgrade-assistant' ),
							'url'   => '{{customizer_url}}',
							'target' => '', // we don't want the default _blank target
						),
					),
				),
				'subheader' => array(
					'class'  => 'section--airy  u-text-center',
					'fields' => array(
						'subtitle' => array(
							'type'  => 'h3',
							'value' => esc_html__( 'Learn more', 'pixelgrade-assistant' ),
							'class' => 'section__subtitle'
						),
						'title'    => array(
							'type'  => 'h2',
							'value' => esc_html__( 'Design & Style', 'pixelgrade-assistant' ),
							'class' => 'section__title'
						),
					),
				),
				'colors'    => array(
					'class'  => 'half sections-grid__item',
					'fields' => array(
						'title'   => array(
							'type'  => 'h4',
							'value' => '<img class="emoji" alt="🎨" src="https://s.w.org/images/core/emoji/2.2.1/svg/1f3a8.svg"> ' . esc_html__( 'Tweaking Colors Schemes', 'pixelgrade-assistant' ),
							'class' => 'section__title'
						),
						'content' => array(
							'type'  => 'text',
							'value' => esc_html__( 'Choose colors that resonate with the statement you want to portray. For example, blue inspires safety and peace, while yellow is translated into energy and joyfulness.', 'pixelgrade-assistant' ),
						),
						'cta'     => array(
							'type'  => 'button',
							'label' => esc_html__( 'Changing Colors', 'pixelgrade-assistant' ),
							'class' => 'btn btn--action btn--small  btn--blue',
							'url'   => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'docs/design-and-style/style-changes/changing-colors/'
						),
					),
				),

				'fonts' => array(
					'class'  => 'half sections-grid__item',
					'fields' => array(
						'title'   => array(
							'type'  => 'h4',
							'value' => '<img class="emoji" alt="🎨" src="https://s.w.org/images/core/emoji/2.2.1/svg/1f3a8.svg"> '. esc_html__( 'Managing Fonts', 'pixelgrade-assistant' ),
							'class' => 'section__title'
						),
						'content' => array(
							'type'  => 'text',
							'value' => esc_html__( 'We recommend you settle on only a few fonts: it\'s best to stick with two fonts but if you\'re feeling ambitious, three is tops.', 'pixelgrade-assistant' ),
						),
						'cta'     => array(
							'type'  => 'button',
							'label' => esc_html__( 'Changing Fonts', 'pixelgrade-assistant' ),
							'class' => 'btn btn--action btn--small  btn--blue',
							'url'   => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'docs/design-and-style/style-changes/changing-fonts/'
						),
					),
				),

				'custom_css' => array(
					'class'  => 'half sections-grid__item',
					'fields' => array(
						'title'   => array(
							'type'  => 'h4',
							'value' => '<img class="emoji" alt="🎨" src="https://s.w.org/images/core/emoji/2.2.1/svg/1f3a8.svg"> ' . esc_html__( 'Custom CSS', 'pixelgrade-assistant' ),
							'class' => 'section__title'
						),
						'content' => array(
							'type'  => 'text',
							'value' => esc_html__( 'If you\'re looking for changes that are not possible through the current set of options, swing some Custom CSS code to override the default CSS of your theme.', 'pixelgrade-assistant' ),
						),
						'cta'     => array(
							'type'  => 'button',
							'label' => esc_html__( 'Using the Custom CSS Editor', 'pixelgrade-assistant' ),
							'class' => 'btn btn--action btn--small  btn--blue',
							'url'   => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'docs/design-and-style/custom-code/using-custom-css-editor'
						),
					),
				),

				'advanced' => array(
					'class'  => 'half sections-grid__item',
					'fields' => array(
						'title'   => array(
							'type'  => 'h4',
							'value' => '<img class="emoji" alt="🎨" src="https://s.w.org/images/core/emoji/2.2.1/svg/1f3a8.svg"> ' . esc_html__( 'Advanced Customizations', 'pixelgrade-assistant' ),
							'class' => 'section__title'
						),
						'content' => array(
							'type'  => 'text',
							'value' => esc_html__( 'If you want to change HTML or PHP code, and keep your changes from being overwritten on the next theme update, the best way is to make them in a child theme.', 'pixelgrade-assistant' ),
						),
						'cta'     => array(
							'type'  => 'button',
							'label' => esc_html__( 'Using a Child Theme', 'pixelgrade-assistant' ),
							'class' => 'btn btn--action btn--small  btn--blue',
							'url'   => trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'docs/getting-started/using-child-theme'
						),
					),
				),
			),
		),

		'system-status' => array(
			'name'   => 'System Status',
			'blocks' => array(
				'system-status' => array(
					'class'  => 'u-text-center',
					'fields' => array(
						'title'        => array(
							'type'  => 'h2',
							'class' => 'section__title',
							'value' => esc_html__( 'System Status', 'pixelgrade-assistant' ),
						),
						'systemStatus' => array(
							'type'  => 'component',
							'value' => 'system-status'
						),
						'tools'        => array(
							'type'  => 'component',
							'value' => 'pixassist-tools'
						),
					),
				),
			),
		),
	);

	$config['systemStatus'] = array(
		'phpRecommendedVersion'     => 5.6,
		'l10n' => array(
			'title'                     => esc_html__( 'System Status', 'pixelgrade-assistant' ),
			'description'               => esc_html__( 'Allow Pixelgrade to collect non-sensitive diagnostic data and usage information. This will allow us to provide better assistance when you reach us through our support system. Thanks!', 'pixelgrade-assistant' ),
			'phpOutdatedNotice'         => esc_html__( 'This version is a little old. We recommend you update to PHP ', 'pixelgrade-assistant' ),
			'wordpressOutdatedNoticeContent' => esc_html__( 'We recommend you update to the latest and greatest WordPress version.', 'pixelgrade-assistant' ),
			'updateAvailable' => esc_html__( 'There\'s an update available!', 'pixelgrade-assistant' ),
			'themeLatestVersion' => esc_html__( 'You are running the latest version of {{theme_name}}', 'pixelgrade-assistant' ),
			'wpUpdateAvailable1' => esc_html__( 'There\'s an update available!', 'pixelgrade-assistant' ),
			'wpUpdateAvailable2' => esc_html__( 'Follow this link to update.', 'pixelgrade-assistant' ),
			'wpVersionOk' => esc_html__( 'Great!', 'pixelgrade-assistant' ),
			'phpUpdateNeeded1' => esc_html__( 'Your PHP version isn\'t supported anymore!', 'pixelgrade-assistant' ),
			'phpUpdateNeeded2' => esc_html__( 'Please update to a newer PHP version', 'pixelgrade-assistant' ),
			'phpVersionOk' => esc_html__( 'Your PHP version is OK.', 'pixelgrade-assistant' ),
			'mysqlUpdateNeeded1' => esc_html__( 'Your MySQL version isn\'t supported anymore!', 'pixelgrade-assistant' ),
			'mysqlUpdateNeeded2' => esc_html__( 'Please update to a newer MySQL version', 'pixelgrade-assistant' ),
			'mysqlVersionOk' => esc_html__( 'Your MySQL version is OK.', 'pixelgrade-assistant' ),
			'dbCharsetIssue' => esc_html__( 'You might have problems with emoji!', 'pixelgrade-assistant' ),
			'dbCharsetOk' => esc_html__( 'Go all out emoji-style!', 'pixelgrade-assistant' ),
			'tableWPDataTitle' => esc_html__( 'WordPress Install Data', 'pixelgrade-assistant' ),
			'tableSystemDataTitle' => esc_html__( 'System Data', 'pixelgrade-assistant' ),
			'tableActivePluginsTitle' => esc_html__( 'Active Plugins', 'pixelgrade-assistant' ),
			'resetPluginButtonLabel' => esc_html__( 'Reset Pixelgrade Assistant Plugin Data', 'pixelgrade-assistant' ),
			'resetPluginDescription' => esc_html__( 'In case you run into trouble, you can reset the plugin data and start over. No content will be lost.', 'pixelgrade-assistant' ),
			'resetPluginConfirmationMessage' => esc_html__( "Are you sure you want to reset Pixelgrade Assistant?\n\n\nOK, just do this simple calculation: ", 'pixelgrade-assistant' ),
		)
	);

	$config['pluginManager'] = array(
		'l10n' => array(
			'updateButton' => esc_html__( 'Update', 'pixelgrade-assistant' ),
			'installFailedMessage' => esc_html__( 'I could not install the plugin! You will need to install it manually from the plugins page!', 'pixelgrade-assistant' ),
			'activateFailedMessage' => esc_html__( 'I could not activate the plugin! You need to activate it manually from the plugins page!', 'pixelgrade-assistant' ),
			'pluginReady' => esc_html__( 'Plugin ready!', 'pixelgrade-assistant' ),
			'pluginUpdatingMessage' => esc_html__( 'Updating ...', 'pixelgrade-assistant' ),
			'pluginInstallingMessage' => esc_html__( 'Installing ...', 'pixelgrade-assistant' ),
			'pluginActivatingMessage' => esc_html__( 'Activating ...', 'pixelgrade-assistant' ),
			'pluginUpToDate' => esc_html__( 'Plugin up to date!', 'pixelgrade-assistant' ),
			'tgmpActivatedSuccessfully' => esc_html__( 'The following plugin was activated successfully:', 'pixelgrade-assistant' ),
			'tgmpPluginActivated' => esc_html__( 'Plugin activated successfully.', 'pixelgrade-assistant' ),
			'tgmpPluginAlreadyActive' => esc_html__( 'No action taken. Plugin was already active.', 'pixelgrade-assistant' ),
			'tgmpNotAllowed' => esc_html__( 'Sorry, you are not allowed to access this page.', 'pixelgrade-assistant' ),
			'groupByRequiredLabels' => array(
				'required' => esc_html__( 'Core plugins needed for your website (required).', 'pixelgrade-assistant' ),
				'recommended' => esc_html__( 'Recommended plugins to enhance your website.', 'pixelgrade-assistant' ),
			),
			'noPlugins' => esc_html__( 'No plugins needed at this time.', 'pixelgrade-assistant' ),
		),
	);

	$config['starterContent'] = array(
		'l10n' => array(
			'importTitle' => esc_html__( '{{theme_name}} demo content', 'pixelgrade-assistant' ),
			'importContentDescription' => esc_html__( 'Import the content from the theme demo.', 'pixelgrade-assistant' ),
			'noSources' => esc_html__( 'Unfortunately, we don\'t have any starter content to go with your theme right now.', 'pixelgrade-assistant' ),
			'alreadyImportedConfirm' => esc_html__( 'Starter content was already imported! Are you sure you want to import it again?', 'pixelgrade-assistant' ),
			'alreadyImportedDenied' => esc_html__( 'It\'s OK!', 'pixelgrade-assistant' ),
			'importingData' => esc_html__( 'Getting data about available content...', 'pixelgrade-assistant' ),
			'somethingWrong' => esc_html__( 'Something went wrong!', 'pixelgrade-assistant' ),
			'errorMessage' => esc_html__( "This starter content is not available right now.\nPlease try again later!", 'pixelgrade-assistant' ),
			'mediaAlreadyExistsTitle' => esc_html__( 'Media already exists!', 'pixelgrade-assistant' ),
			'mediaAlreadyExistsContent' => esc_html__( 'We won\'t import again as there is no need to!', 'pixelgrade-assistant' ),
			'mediaImporting' => esc_html__( 'Importing media: ', 'pixelgrade-assistant' ),
			'postsAlreadyExistTitle' => esc_html__( 'Posts already exist!', 'pixelgrade-assistant' ),
			'postsAlreadyExistContent' => esc_html__( 'We won\'t import them again!', 'pixelgrade-assistant' ),
			'postImporting' => esc_html__( 'Importing ', 'pixelgrade-assistant' ),
			'taxonomiesAlreadyExistTitle' => esc_html__( 'Taxonomies (like categories) already exist!', 'pixelgrade-assistant' ),
			'taxonomiesAlreadyExistContent' => esc_html__( 'We won\'t import them again!', 'pixelgrade-assistant' ),
			'taxonomyImporting' => esc_html__( 'Importing taxonomy: ', 'pixelgrade-assistant' ),
			'widgetsAlreadyExistTitle' => esc_html__( 'Widgets already exist!', 'pixelgrade-assistant' ),
			'widgetsAlreadyExistContent' => esc_html__( 'We won\'t import them again!', 'pixelgrade-assistant' ),
			'widgetsImporting' => esc_html__( 'Importing widgets ...', 'pixelgrade-assistant' ),
			'importingPreSettings' => esc_html__( 'Preparing the scene for awesomeness...', 'pixelgrade-assistant' ),
			'importingPostSettings' => esc_html__( 'Wrapping it up... ', 'pixelgrade-assistant' ),
			'importSuccessful' => esc_html__( 'Successfully Imported!', 'pixelgrade-assistant' ),
			'imported' => esc_html__( 'Imported', 'pixelgrade-assistant' ),
			'import' => esc_html__( 'Import', 'pixelgrade-assistant' ),
			'importSelected' => esc_html__( 'Import selected', 'pixelgrade-assistant' ),
			'stop' => esc_html__( 'Pause import', 'pixelgrade-assistant' ),
			'resume' => esc_html__( 'Resume import', 'pixelgrade-assistant' ),
			'stoppedMessage' => esc_html__( 'Currently paused...', 'pixelgrade-assistant' ),
		),
		'defaultSceRestPath' => 'wp-json/sce/v2', // this will be appended to the starter content source URL if we are not given a baseRestUrl
	);

	$config['knowledgeBase'] = array(
		'selfHelp'   => array(
			'name'   => esc_html__( 'Self Help', 'pixelgrade-assistant' ),
			'blocks' => array(
				'search' => array(
					'class'  => 'support-autocomplete-search',
					'fields' => array(
						'placeholder' => esc_html__( 'Search through the Knowledge Base', 'pixelgrade-assistant' )
					),
				),
				'info'   => array(
					'class'  => '',
					'fields' => array(
						'title'     => array(
							'type'  => 'h1',
							'value' => esc_html__( 'Theme Help & Support', 'pixelgrade-assistant' ),
						),
						'content_free_theme'   => array(
							'type'  => 'text',
							'value' => wp_kses_post( __( 'Your site is <strong>connected to {{shopdomain}}.</strong> This means you\'re able to get <strong>premium support service.</strong><br>We strive to answer as fast as we can, but sometimes it can take a day or two. Be sure to check out the documentation in order to <strong>get quick answers</strong> in no time. Chances are it\'s <strong>already been answered!</strong>', 'pixelgrade-assistant' ) ),
							'applicableTypes' => array(
								"theme_wporg",
								"theme_modular_wporg",
							)
						),
						'subheader' => array(
							'type'  => 'h2',
							'value' => esc_html__( 'How can we help?', 'pixelgrade-assistant' )
						),
					),
				),
			),
		),
		'openTicket' => array(
			'name'   => esc_html__( 'Open Ticket', 'pixelgrade-assistant' ),
			'blocks' => array(
				'topics'        => array(
					'class'  => '',
					'fields' => array(
						'title'  => array(
							'type'  => 'h1',
							'value' => esc_html__( 'What can we help with?', 'pixelgrade-assistant' )
						),
						'topics' => array(
							'class'  => 'topics-list',
							'fields' => array(
								'start'          => array(
									'type'  => 'text',
									'value' => esc_html__( 'I have a question about how to start', 'pixelgrade-assistant' )
								),
								'feature'        => array(
									'type'  => 'text',
									'value' => esc_html__( 'I have a question about how a distinct feature works', 'pixelgrade-assistant' )
								),
								'plugins'        => array(
									'type'  => 'text',
									'value' => esc_html__( 'I have a question about plugins', 'pixelgrade-assistant' )
								),
								'productUpdates' => array(
									'type'  => 'text',
									'value' => esc_html__( 'I have a question about theme updates', 'pixelgrade-assistant' )
								),
							),
						),
					),
				),
				'ticket'        => array(
					'class'  => '',
					'fields' => array(
						'title'             => array(
							'type'  => 'h1',
							'value' => esc_html__( 'Give us more details', 'pixelgrade-assistant' )
						),
						'changeTopic'       => array(
							'type'  => 'button',
							'label' => esc_html__( 'Change Topic', 'pixelgrade-assistant' ),
							'class' => 'btn btn__dark',
							'url'   => '#'
						),
						'descriptionHeader' => array(
							'type'  => 'text',
							'value' => esc_html__( 'How can we help?', 'pixelgrade-assistant' )
						),
						'descriptionInfo'   => array(
							'type'  => 'text',
							'class' => 'label__more-info',
							'value' => esc_html__( 'Briefly describe how we can help.', 'pixelgrade-assistant' )
						),
						'detailsHeader'     => array(
							'type'  => 'text',
							'value' => esc_html__( 'Tell Us More', 'pixelgrade-assistant' )
						),
						'detailsInfo'       => array(
							'type'  => 'text',
							'class' => 'label__more-info',
							'value' => wp_kses_post( __( 'Share all the details. Be specific and include some steps to recreate things and help us get to the bottom of things more quickly! Use a free service like <a href="http://imgur.com/" target="_blank">Imgur</a> or <a href="http://tinypic.com/" target="_blank">Tinypic</a> to upload files and include the link.', 'pixelgrade-assistant' ) ),
						),
						'nextButton'        => array(
							'type'  => 'button',
							'label' => esc_html__( 'Next Step', 'pixelgrade-assistant' ),
							'class' => 'form-row submit-wrapper',
						),
					),
				),
				'searchResults' => array(
					'class'  => '',
					'fields' => array(
						'title'       => array(
							'type'  => 'h1',
							'value' => esc_html__( 'Try these solutions first', 'pixelgrade-assistant' )
						),
						'description' => array(
							'type'  => 'text',
							'value' => esc_html__( 'Based on the details you provided, we found a set of articles that could help you instantly. Before you submit a ticket, please check these resources first:', 'pixelgrade-assistant' )
						),
						'noResults'   => array(
							'type'  => 'text',
							'value' => esc_html__( 'Sorry, we couldn\'t find any articles suitable for your question. Submit your ticket using the button below.', 'pixelgrade-assistant' )
						),
					),
				),
				'sticky'        => array(
					'class'  => 'notification__blue clear sticky',
					'fields' => array(
						'notConnected'       => array(
							'type'  => 'text',
							'value' => esc_html__( 'Please connect to {{shopdomain}} in order to be able to submit tickets.', 'pixelgrade-assistant' ),
						),
						'initialQuestion' => array(
							'type'  => 'text',
							'value' => esc_html__( 'Did any of the above resources answer your question?', 'pixelgrade-assistant' ),
						),
						'success'         => array(
							'type'  => 'text',
							'value' => '😊 ' . esc_html__( 'Yaaay! You did it by yourself!', 'pixelgrade-assistant' ),
						),
						'noSuccess'       => array(
							'type'  => 'text',
							'value' => '😕 ' . esc_html__( 'Sorry we couldn\'t find an helpful answer.', 'pixelgrade-assistant' ),
						),
						'submitTicket'    => array(
							'type'  => 'button',
							'label' => esc_html__( 'Submit ticket', 'pixelgrade-assistant' ),
							'class' => 'btn btn__dark'
						),
						'cancelSubmitTicket'    => array(
							'type'  => 'button',
							'label' => esc_html__( 'Cancel', 'pixelgrade-assistant' ),
							'class' => 'btn btn__dark'
						),
					),
				),
			),
		),
		'l10n' => array(
			'selfHelp' => esc_html__( 'Self Help', 'pixelgrade-assistant' ),
			'searchResults' => esc_html__( 'Search Results', 'pixelgrade-assistant' ),
			'closeLabel' => esc_html__( 'Close', 'pixelgrade-assistant' ),
			'backLabel' => esc_html__( 'Back to Self Help', 'pixelgrade-assistant' ),
			'missingTicketDetails' => esc_html__( 'Customer service is a two-way street. Help us help you and everyone wins. Please fill the boxes with relevant details.', 'pixelgrade-assistant' ),
			'missingTicketDescription' => esc_html__( 'You have not described how can we help out. Please enter a description in the box above.', 'pixelgrade-assistant' ),
			'searchingMessage' => esc_html__( 'Hang tight! We\'re searching for the best results.', 'pixelgrade-assistant' ),
			'emailMessage' => esc_html__( 'the email used to register on {{shopdomain}}.', 'pixelgrade-assistant' ),
			'ticketSendSuccessTitle' => esc_html__( '👍 Thanks!', 'pixelgrade-assistant' ),
			'ticketSendSuccessContent' => esc_html__( 'Your ticket was successfully delivered! As soon as a member of our crew has had a chance to review it they will be in touch with you at', 'pixelgrade-assistant' ),
			'ticketSendSuccessGreeting' => esc_html__( 'Cheers!', 'pixelgrade-assistant' ),
			'ticketSendingLabel' => esc_html__( 'Submitting the ticket...', 'pixelgrade-assistant' ),
			'backTo' => esc_html__( 'Back to ', 'pixelgrade-assistant' ),
			'articleHelpfulQuestion' => esc_html__( 'Was this article helpful?', 'pixelgrade-assistant' ),
			'articleNotHelpful' => esc_html__( 'We\'re sorry to hear that. How can we improve this article?', 'pixelgrade-assistant' ),
			'articleHelpful' => esc_html__( 'Great! We\'re happy to hear about that.', 'pixelgrade-assistant' ),
			'articleHelpfulYesLabel' => esc_html__( 'Yes', 'pixelgrade-assistant' ),
			'articleHelpfulNoLabel' => esc_html__( 'No', 'pixelgrade-assistant' ),
			'sendFeedbackLabel' => esc_html__( 'Send Feedback', 'pixelgrade-assistant' ),
			'sendFeedbackPlaceholder' => esc_html__( 'Send Feedback', 'pixelgrade-assistant' ),
			'notConnectedTitle' => esc_html__( 'Not connected!', 'pixelgrade-assistant' ),
			'notConnectedContent' => esc_html__( 'You haven\'t connected to {{shopdomain}} yet! Go to your Pixelgrade Dashboard to connect.', 'pixelgrade-assistant' ),
			'dashboardButtonLabel' => esc_html__( 'Pixelgrade Dashboard', 'pixelgrade-assistant' ),
			'backToSelfHelpLabel' => esc_html__( 'Back to Self Help', 'pixelgrade-assistant' ),
			'searchFieldLabel' => esc_html__( 'Search the knowledge base', 'pixelgrade-assistant' ),
			'searchNoResultsMessage' => esc_html__( 'Sorry - we couldn\'t find any results in our docs matching your search query.', 'pixelgrade-assistant' ),
			'errorGetSelection' => esc_html__( 'An error has occurred while trying to get your selection.', 'pixelgrade-assistant' ),
			'backToMainSection' => esc_html__( 'Back to your main section', 'pixelgrade-assistant' ),
			'errorFetchCategories' => esc_html__( 'Could not fetch categories!', 'pixelgrade-assistant' ),
			'errorFetchArticles' => esc_html__( 'Something went wrong while fetching the knowledge base articles for this theme. If the error persists, please create a ticket from the Open Ticket tab.', 'pixelgrade-assistant' ),
		),
	);

	// the authenticator config is based on the component status which can be: not_validated, loading, validated
	$config['authentication'] = array(
		// general strings
		'title'               => esc_html__( 'You are almost finished!', 'pixelgrade-assistant' ),
		// validated string
		'validatedTitle'      => '<span class="c-icon c-icon--success"></span> ' . esc_html__( 'Site connected! You\'re all set 👌', 'pixelgrade-assistant' ),
		'validatedContent'    => wp_kses_post( __( '<strong>Well done, {{username}}!</strong> Your site is successfully connected to {{shopdomain}} and all the tools are available to make it shine.', 'pixelgrade-assistant' ) ),
		//  not validated strings
		'notValidatedContent' => wp_kses_post( __( 'In order to get access to <strong>premium support, starter content, in-dashboard documentation,</strong> and many others, your site needs to have <strong>an active connection</strong> to {{shopdomain}}.<br/><br/>This <strong>does not mean</strong> we gain direct (admin) access to this site. You remain the only one who can log in and make changes. <strong>Connecting means</strong> that this site and {{shopdomain}} share a few details needed to communicate securely.', 'pixelgrade-assistant' ) ),
		'notValidatedButton'  => esc_html__( 'Connect to {{shopdomain}}', 'pixelgrade-assistant' ),
		// no themes from shop
		'noThemeContent'      => esc_html__( 'Ups! You are logged in, but it seems you don\'t have a license for this theme yet.', 'pixelgrade-assistant' ),
		'noThemeRetryButton'  => esc_html__( 'Retry to activate', 'pixelgrade-assistant' ),
		'noThemeLicense'      => esc_html__( 'You don\'t seem to have any licenses for this theme', 'pixelgrade-assistant' ),
		// Not our theme or broken beyond recognition
		'brokenTitle'      => esc_html__( 'Huston, we have a problem.. Really!', 'pixelgrade-assistant' ),
		'brokenContent'    => wp_kses_post( __( 'This doesn\'t seem to be <strong>a Pixelgrade theme.</strong> Are you sure you are <strong>using the original theme code</strong>?<br/><strong>We can\'t activate this theme</strong> in it\'s current state.<br/><br/>Reach us at <a href="mailto:help@pixelgrade.com?Subject=Help%20with%20broken%20theme" target="_top">help@pixelgrade.com</a> if you need further help.', 'pixelgrade-assistant' ) ),
		// loading strings
		'loadingTitle' => esc_html__( 'Connection in progress', 'pixelgrade-assistant' ),
		'loadingContent'      => esc_html__( 'Getting a couple of details to make sure everything is working and secure...', 'pixelgrade-assistant' ),
		'loadingPrepare'      => esc_html__( 'Preparing...', 'pixelgrade-assistant' ),
		'loadingError'        => esc_html__( 'Sorry... I can\'t do this right now!', 'pixelgrade-assistant' ),
		// license urls
		'buyThemeUrl'         => esc_url( trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'pricing' ),
		'renewLicenseUrl'     => esc_url( trailingslashit( PIXELGRADE_ASSISTANT__SHOP_BASE ) . 'my-account' )
	);

	// the recommended plugins config is based on the component status which can be: not_validated, loading, validated
	$config['recommendedPlugins'] = array(
		// general strings
		'title'               => esc_html__( 'Manage plugins', 'pixelgrade-assistant' ),
		'content'               => esc_html__( '{{theme_name}} recommends these plugins so you can take full advantage of everything that it offers.', 'pixelgrade-assistant' ),
		// validated string
		'validatedTitle'      => '<span class="c-icon c-icon--success"></span> ' . esc_html__( 'Plugins ready 🧘️', 'pixelgrade-assistant' ),
		'validatedContent'    => wp_kses_post( __( 'You can rest assured that {{theme_name}} can do its best for you and your site.', 'pixelgrade-assistant' ) ),
	);

	$update_core = get_site_transient( 'update_core' );

	if ( ! empty( $update_core->updates ) && ! empty( $update_core->updates[0] ) ) {
		$new_update                                     = $update_core->updates[0];
		$config['systemStatus']['wpRecommendedVersion'] = $new_update->current;
	}

	$config = apply_filters( 'pixassist_default_config', $config );

	return $config;
}
