<?php

/**
 * Here's a brief explanation of what this class does:
 * The CheckCustomEmail class is defined with a constructor function that takes an email address as an argument.
 * The constructor function defines the table name for the custom email table based on the WordPress database prefix and the desired name for the table.
 * The constructor function prepares an SQL query to select the number of rows in the custom email table where the email_address column matches the specified email address.
 * The prepared SQL query is executed using the $wpdb->get_var() function, which retrieves a single variable value from the database.
 * The result of the SQL query is checked to see if it is greater than 0 (i.e., if the email address exists in the table). If the result is greater than 0, the function returns true. Otherwise, it returns false.
 *
*/

class CheckCustomEmail {
    public function __construct( $email ) {
        global $wpdb;

        $table_name = $wpdb->prefix . 'custom_emails';

        // Prepare the SQL query for checking if the email address exists in the custom email table
        $sql = $wpdb->prepare( "SELECT COUNT(*) FROM $table_name WHERE email_address = %s", $email );

        // Execute the SQL query and retrieve the result
        $result = $wpdb->get_var( $sql );

        // Return true if the email address exists in the table, false otherwise
        return $result > 0 ? true : false;
    }
}


/* Here's an example of how to use this class to check if an email address exists in the custom email table: */
/* Simply pass an email address as an argument to the CheckCustomEmail constructor to check if it exists in the custom email table. The class will prepare and execute an SQL query to check for the existence of the email address, and will return true or false depending on the result. */

$email = 'example@example.com';
$check_email = new CheckCustomEmail( $email );
if ( $check_email ) {
    echo 'The email address exists in the custom email table.';
} else {
    echo 'The email address does not exist in the custom email table.';
}
