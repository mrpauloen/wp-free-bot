<?php

/**
 *
 * Here's a brief explanation of what this code does:
 * The $wpdb global variable is used to access the WordPress database functions and properties.
 * A table name is defined based on the WordPress database prefix and the desired name for the custom email table.
 * The SHOW TABLES MySQL statement is used to check if the table already exists in the database.
 * If the table does not already exist, an SQL query is defined for creating the custom email table. This example table includes columns for id, email_address, and created_at.
 * The dbDelta function is used to execute the SQL query and create the table. This function is provided by WordPress to handle database schema updates and ensure compatibility across different versions of MySQL.
 * You can modify the table structure and column names as needed to fit your specific use case. Once the table is created, you can use standard SQL queries to interact with it and store or retrieve email addresses as desired.
 *
*/

global $wpdb;

$table_name = $wpdb->prefix . 'custom_emails';

// Check if the table already exists
if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) !== $table_name ) {

    // Define the SQL query for creating the table
    $sql = "CREATE TABLE $table_name (
            id INT(11) NOT NULL AUTO_INCREMENT,
            email_address VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";

    // Include the WordPress database upgrade file
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    // Execute the SQL query to create the table
    dbDelta( $sql );
}
