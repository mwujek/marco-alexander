<?php

/**
 * Details for the provide MailChimp
 */

function provider_mailchimp() {

	$provider_id = 'mailchimp';

    $eoi_settings = get_option('easy_opt_in_settings');

    $double_opt_in = K::get_var( $provider_id . '_double_opt_in', $eoi_settings, 'true' );
    $double_opt_in = 'true' === $double_opt_in;

	return  array(
		'info' => array(
			'id' => 'mailchimp',
			'name' => 'MailChimp',
		),
		'settings' => array(
			'api_key' => array(
				'title' => 'MailChimp API Key',
				'html' => K::input( '{{setting_name}}'
					, array(
						'value' => K::get_var( $provider_id . '_api_key', $eoi_settings ),
						'class' => 'regular-text',
					)
					, array(
						'return' => true,
						'format' => ':input<br /><a tabindex="-1" href="http://admin.mailchimp.com/account/api" target="_blank">Where can I find my MailChimp API Key?</a>',
					)
				),
			),
			'double_opt_in' => array(
				'title' => 'Double opt-in',
				'html' => 
					K::input( '{{setting_name}}'
						, array(
							'type' => 'radio',
							'value' => 'true',
							'checked' => $double_opt_in ? 'checked' : null,
						)
						, array(
							'format' => '<div><label>:input Yes</label></div>',
							'return' => true,
						)
					)
					. K::input( '{{setting_name}}'
						, array(
							'type' => 'radio',
							'value' => 'false',
							'checked' => $double_opt_in ? null : 'checked',
						)
						, array(
							'format' => '<div><label>:input No</label></div>',
							'return' => true,
						)
					)
				,
			),
		),
	);
}
