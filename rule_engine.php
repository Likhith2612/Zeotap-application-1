<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = ""; // Update this to your password
$dbname = "rule_engine_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Parse and evaluate rules based on action
$action = $_POST['action'];
$rule = $_POST['rule'];
$data = json_decode($_POST['data'], true);

switch ($action) {
    case "create":
        createRule($rule);
        break;
    case "evaluate":
        evaluateRule($rule, $data);
        break;
    case "modify":
        modifyRule($rule);
        break;
}

function createRule($rule) {
    global $conn;
    $sql = "INSERT INTO rules (rule_text) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rule);
    $stmt->execute();
    
    header("Location: index.php?rule_output=Rule created successfully");
}

function evaluateRule($rule, $data) {
    // Evaluate the AST rule against the data (dummy logic for now)
    $output = "Evaluating rule: $rule with data " . json_encode($data);
    header("Location: index.php?evaluation_output=$output");
}

function modifyRule($rule) {
    global $conn;
    $new_rule = $_POST['new_rule']; // Assuming this is passed via POST
    $sql = "UPDATE rules SET rule_text = ? WHERE rule_text = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $new_rule, $rule);
    $stmt->execute();

    header("Location: index.php?rule_output=Rule modified successfully");
}
