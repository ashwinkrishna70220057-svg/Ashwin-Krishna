<?php
// Set DB_HOST before wp-config is parsed or update wp_options directly via mysqli
$mysqli = new mysqli("127.0.0.1", "root", "root", "local", 10005);
if ($mysqli->connect_error) {
    die("Connect Error: " . $mysqli->connect_error . "\n");
}

echo "Connected to MySQL successfully!\n";

// Update active template and stylesheet in wp_options
$theme_name = "ashwin-krishna-portfolio";
$mysqli->query("UPDATE wp_options SET option_value = '{$theme_name}' WHERE option_name = 'template'");
$mysqli->query("UPDATE wp_options SET option_value = '{$theme_name}' WHERE option_name = 'stylesheet'");
$mysqli->query("UPDATE wp_options SET option_value = 'Ashwin Krishna Portfolio' WHERE option_name = 'current_theme'");

// Verify
$res1 = $mysqli->query("SELECT option_value FROM wp_options WHERE option_name = 'template'")->fetch_assoc();
$res2 = $mysqli->query("SELECT option_value FROM wp_options WHERE option_name = 'stylesheet'")->fetch_assoc();

echo "Active Template: " . $res1['option_value'] . "\n";
echo "Active Stylesheet: " . $res2['option_value'] . "\n";
echo "\nSUCCESS! 'Ashwin Krishna Portfolio' theme is now 100% active in WordPress database!\n";

$mysqli->close();
