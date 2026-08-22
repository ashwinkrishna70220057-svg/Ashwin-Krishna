<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "local", 10005);
if ($mysqli->connect_error) {
    die("Connect Error: " . $mysqli->connect_error . "\n");
}

$now = date('Y-m-d H:i:s');
$title = "Anand Menon (Deloitte) — Finance & Tax Opportunity";
$content = "Dear Ashwin,\n\nWe came across your research on the 'Corporate Life of Gen Z' and your coursework in B.Com Finance & Taxation at Bhavan's College, Thammanam.\n\nWe would like to connect with you regarding an upcoming Financial Analyst / Tax Associate opportunity.\n\nBest regards,\nAnand Menon\nSenior Talent Partner, Deloitte";

$stmt = $mysqli->prepare("INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_name, post_modified, post_modified_gmt, post_parent, menu_order, post_type, post_mime_type, comment_count, to_ping, pinged, post_content_filtered) VALUES (1, ?, ?, ?, ?, '', 'publish', 'closed', 'closed', 'anand-menon-sample', ?, ?, 0, 0, 'portfolio_enquiry', '', 0, '', '', '')");
$stmt->bind_param("ssssss", $now, $now, $content, $title, $now, $now);
$stmt->execute();
$post_id = $stmt->insert_id;

if ($post_id) {
    $mysqli->query("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES ($post_id, '_enquiry_name', 'Anand Menon (Deloitte)')");
    $mysqli->query("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES ($post_id, '_enquiry_email', 'anand.menon@deloitte.com')");
    $mysqli->query("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES ($post_id, '_enquiry_subject', 'Finance & Tax Opportunity')");
    $mysqli->query("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES ($post_id, '_enquiry_message', '" . $mysqli->real_escape_string($content) . "')");
    $mysqli->query("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES ($post_id, '_enquiry_status', 'unread')");
    echo "Sample Enquiry inserted successfully with Post ID: $post_id\n";
}

$mysqli->close();
