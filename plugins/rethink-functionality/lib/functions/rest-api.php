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
    register_rest_field( 'charity',
        'charity_chimp_key',
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


// function rc_post_featured_image_json( $data, $post, $context ) {
//     $featured_image_id = $data->data['featured_media']; // get featured image id
//      $featured_image_url = wp_get_attachment_image_src( $featured_image_id, 'large' ); // get url of the original size

//         if( $featured_image_url ) {
//             $data->data['featured_image_url'] = $featured_image_url[0];
//         }

//         return $data;
//     }
//  add_filter( 'rest_prepare_post', 'rc_post_featured_image_json', 10, 3 );

