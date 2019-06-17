<?php
add_action( 'rest_api_init', 'rc_slug_register_charity' );
function rc_slug_register_charity() {
    register_rest_field( 'charity',
        'charity_logo',
        array(
            'get_callback'    => 'rc_slug_get_charity_field',
            'update_callback' => null,
            'schema'          => null,
        )
    );
    register_rest_field( 'charity',
        'charity_description',
        array(
            'get_callback'    => 'rc_slug_get_charity_field',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

function rc_slug_get_charity_field( $post, $field_name ) {
    return CFS()->get( $field_name, $post[ 'id' ] );
}