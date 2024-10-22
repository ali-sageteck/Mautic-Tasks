<?php
// index.php (main entry point)
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Retrieve API credentials from environment variables
$apiUrl = $_ENV['API_URL'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];

// Get the endpoint from the query string (default to emails)
$endpoint = $_GET['endpoint'] ?? 'contacts';

// Include the respective endpoint file based on user selection
switch ($endpoint) {
    case 'contacts':
        require 'src/endpoints/contacts.php';
        break;
    default:
        require 'src/endpoints/contacts.php';
        break;
}
?>
