<?php

function my_pmprorh_init()
{
    //don't break if Register Helper is not loaded
    if(!function_exists("pmprorh_add_registration_field"))
    {
        return false;
    }

    //define the fields
    $fields = array();
    

    $fields[] = new PMProRH_Field(
        "tshirt_size",
        "select",
        array(
            "label"=>"TShirt Size",
            "required"=>"true",
            "options"=>array(
                ""=>"",
                "No Shirt"=>"No Shirt",
                "XS"=>"XS",
                "S"=>"S",
                "M"=>"M",
                "L"=>"L",
                "XL"=>"XL",
                "2XL"=>"2XL",
                "3XL"=>"3XL"
            )
        )
    );

    $fields[] = new PMProRH_Field(
        "diet",
        "select",
        array(
            "label"=>"Dietary Restrictions?",
            "required"=>"true",
            "options"=>array(
                ""=>"",
                "No Lunch"=>"No Lunch",
                "Omnivore"=>"Omnivore",
                "Vegetarian"=>"Vegetarian",
                "Vegan"=>"Vegan",
                "Kosher"=>"Kosher"
            )
        )
    );

    //add the fields into a new checkout_boxes are of the checkout page
    foreach($fields as $field)
        pmprorh_add_registration_field(
            "checkout_boxes", // location on checkout page
            $field            // PMProRH_Field object
        );

    //that's it. see the PMPro Register Helper readme for more information and examples.
}

add_action("init", "my_pmprorh_init");


/**
 * Spring includes
 */

require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions
