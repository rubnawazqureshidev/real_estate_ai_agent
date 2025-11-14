<?php
/**
 * Contact Form Processor
 * Handles form submissions from the Real Estate AI Agent landing page
 */

// Enable error reporting for development (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Initialize response array
$response = [
    'success' => false,
    'message' => ''
];

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: landing-page.php');
    exit;
}

// Sanitize and validate input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Get form data
$name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
$phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
$agency = isset($_POST['agency']) ? sanitize_input($_POST['agency']) : '';
$message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';

// Validation errors
$errors = [];

// Validate required fields
if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!validate_email($email)) {
    $errors[] = 'Invalid email format';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

// If there are validation errors, redirect back with error message
if (!empty($errors)) {
    $error_message = implode(', ', $errors);
    header('Location: landing-page.php?error=' . urlencode($error_message));
    exit;
}

// Prepare data for storage/email
$submission_data = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'agency' => $agency,
    'message' => $message,
    'submitted_at' => date('Y-m-d H:i:s'),
    'ip_address' => $_SERVER['REMOTE_ADDR']
];

// Option 1: Save to a file (simple solution)
$log_file = 'submissions.log';
$log_entry = date('Y-m-d H:i:s') . ' | ' .
             $name . ' | ' .
             $email . ' | ' .
             $phone . ' | ' .
             $agency . ' | ' .
             $message . PHP_EOL;

file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// Option 2: Send email notification (configure your email settings)
$send_email = true; // Set to true to enable email notifications

if ($send_email) {
    $to = 'your-email@example.com'; // Change this to your email
    $subject = 'New Real Estate AI Agent Demo Request';

    $email_body = "New demo request received:\n\n";
    $email_body .= "Name: {$name}\n";
    $email_body .= "Email: {$email}\n";
    $email_body .= "Phone: {$phone}\n";
    $email_body .= "Agency: {$agency}\n";
    $email_body .= "Message: {$message}\n";
    $email_body .= "Submitted: " . date('Y-m-d H:i:s') . "\n";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Uncomment the line below to actually send emails
    // mail($to, $subject, $email_body, $headers);
}

// Option 3: Save to database (requires database setup)
/*
try {
    $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("
        INSERT INTO contact_submissions (name, email, phone, agency, message, submitted_at, ip_address)
        VALUES (:name, :email, :phone, :agency, :message, :submitted_at, :ip_address)
    ");

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':agency' => $agency,
        ':message' => $message,
        ':submitted_at' => $submission_data['submitted_at'],
        ':ip_address' => $submission_data['ip_address']
    ]);

} catch(PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    header('Location: landing-page.php?error=' . urlencode('System error. Please try again later.'));
    exit;
}
*/

// Success - redirect to thank you page or back to landing page with success message
header('Location: thank-you.php?name=' . urlencode($name));
exit;
?>
