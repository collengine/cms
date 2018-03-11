<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Australia/Sydney" );  // http://www.php.net/manual/en/timezones.phplocalhost
define( "DB_DSN", "mysql:host=bookfair-mysqldbserver.mysql.database.azure.com; dbname=mysqlabase4082");
define( "DB_USERNAME", "peterkoech@bookfair-mysqldbserver" );
define( "DB_PASSWORD", "#Robert15");
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "peter" );
define( "ADMIN_PASSWORD", "passwd" );
require( "Article.php" );
 
// function handleException( $exception ) {
//   echo "Sorry, a problem occurred. Please try later.";
//   error_log( $exception->getMessage() );
// }
 
// set_exception_handler( 'handleException' );
?>
