<?php 

/** 
 * Custom Gutenberg Functions
 */

 function schly_gutenberg_default_colors() {

    add_theme_support('editor-color-palette', array(

            array(

                'name' => 'White',
                'slug' => 'white',
                'color' => '#ffffff'
            ),

            array(

                'name' => 'Black',
                'slug' => 'black',
                'color' => '#000'
            )
        )
   
    );

}

add_action('init', 'schly_gutenberg_default_colors');