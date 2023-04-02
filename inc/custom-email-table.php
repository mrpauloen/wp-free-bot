<?phpglobal $wpdb;

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
