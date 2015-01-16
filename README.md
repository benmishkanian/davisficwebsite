# UC Davis Finance & Investment Club Website

Website of the UC Davis Finance & Investment Club. The site is hosted at **[davisfic.com](http://www.davisfic.com/)**.

## Author

Ben Mishkanian - benmishkanian \[atty\] ucdavis \[dotty\] edu

## Dependencies

php-login requirements:  
- PHP 5.3.7+  
- MySQL 5 database (please use a modern version of MySQL (5.5, 5.6, 5.7) as very old versions have a exotic bug that
[makes PDO injections possible](http://stackoverflow.com/q/134099/1114320).  
- activated mysqli (last letter is an "i") extension (activated by default on most server setups)

## Configuration

Most of the website will work out of the box. To make the forms work, database login files must be included.  
Replace xxxx with the information for your SQL server.  

The first file is **php-login-minimal-master/config/db.php**:  
<?php  
define("DB_HOST", xxxx);  
define("DB_NAME", xxxx);  
define("DB_USER", xxxx);  
define("DB_PASS", xxxx);  

The second file is **config.php**  
<?php  
$dbhost = xxxx;  
$dbuser = xxxx;  
$dbpass = xxxx;  
$dbname = xxxx;  
?>  

## Development Environment

Developed in PhpStorm 8.0.1