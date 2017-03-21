<?php
namespace cncWATT;

class ACF {
	function __construct() {
		$this->registerFields();
	}

	private function registerFields()
	{
		if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array (
			'key' => 'group_58d0ed16623a5',
			'title' => 'Kapcsolódó dokumentumok',
			'fields' => array (
				array (
					'key' => 'field_58d0ee5fc48d6',
					'label' => 'Csatolt fájl',
					'name' => 'cnc-wc-attachment',
					'type' => 'file',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'uploadedTo',
					'min_size' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	endif;
	}
}