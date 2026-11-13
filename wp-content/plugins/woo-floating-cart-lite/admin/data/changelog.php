<?php

return array(

	array(
		'version' => '1.0.6.1',
		'date' =>'16.03.2017',
		'changes' => array(
			
			'enhance' => array(
				'Show error message within cart header whenever product quantity has reached stock limit or a minimum quantity is required.'
			)			
		)
	),
	
	array(
		'version' => '1.0.6',
		'date' =>'15.03.2017',
		'changes' => array(
			
			'new' => array(
				'Auto sync cart content with third party mini cart plugins or within themes.',
				'Added global javascript function woofc_refresh_cart() for developers to force cart refresh within plugins or themes.'			
			),
			'support' => array(
				'Added Support for caching plugins'
			),	
			'fix' => array(
				'Fix cart issues on non woocommerce pages.'
			)			
		)
	),
	
	array(
		'version' => '1.0.5',
		'date' =>'17.02.2017',
		'changes' => array(
			
			'new' => array(
				'Sync cart with native WooCommerce cart page on Add, remove, update products'		
			),
			'support' => array(
				'Added support for Yith Product Addons Plugin',
				'Better support for third party plugins',
			),	
			'enhance' => array(
				'Centralize template output functions'
			)		
		)
	),
	array(
		'version' => '1.0.4',
		'date' =>'11.02.2017',
		'changes' => array(
			'new' => array(
				'Added Product Variations Support',
			),
			'enhance' => array(
				'Better theme compatibility'
			),	
		)
	),	
	array(
		'version' => '1.0.3.2',
		'date' =>'26.01.2017',
		'changes' => array(
			'update' => array(
				'Updated Full Version Changelog'
			),
			'fix' => array(
				'Minor CSS Fixes'
			)	
		)
	),	
	array(
		'version' => '1.0.3.1',
		'date' =>'19.01.2017',
		'changes' => array(
			'fix' => array(
				'Fixed minor bug with add to cart button when used with third party gift card plugins'
			)	
		)
	),	
	array(
		'version' => '1.0.3',
		'date' =>'10.01.2017',
		'changes' => array(
			'fix' => array(
				'Fixed WooCommerce installation check notice'
			)	
		)
	),
	array(
		'version' => '1.0.2',
		'date' =>'30.11.2016',
		'changes' => array(
			'fix' => array(
				'Allow html in product titles',
				'License validation Fix'
			)	
		)
	),	
	array(
		'version' => '1.0.1',
		'date' =>'02.11.2016',
		'changes' => array(
			'enhance' => array(
				'Replaced click with click event for faster taps on mobile.'
			),	
			'update' => array(
				'Updated Translation Files'	
			),
			'fix' => array(
				'Removed hover effect on mobile for faster response',
				'Fixed bug with checkout button typography options',
				'Minor CSS Fixes'
			)	
		)
	),
	array(
		'version' => '1.0.0',
		'date' =>'01.11.2016',
		'changes' => array(
			'initial' => 'Initial Version'
		)
	)
);