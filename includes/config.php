<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_PORT','3306');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','tms');
// Establish database connection.
try
{
$dbh = new PDO("sqlite:/Users/macbookair/.gemini/antigravity/brain/c4a2760a-75f8-4bf0-a63f-fc813de1d8ac/scratch/tms.db");
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>