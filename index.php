<?php
function shortcode_list_tags(){
    $tags = get_terms( array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,
    ) );
 
    $html = '<ul>';
 
    foreach ( $tags as $tag ) {
        $html .= '<li><a href="' . get_term_link( $tag->term_id ) . '">' . $tag->name . '</a></li>';
    }
 
    $html .= '</ul>';
 
    return $html;
}
add_shortcode( 'list_tags', 'shortcode_list_tags' );
?>
