<?php
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

// Get raw POST data
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data || !isset($data['page']) || !isset($data['content'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid data format. Expected JSON with 'page' and 'content' keys."]);
    exit;
}

$page = $data['page'];
$htmlContent = $data['content'];

// Read existing JSON
$jsonFile = 'data/content.json';
if (!file_exists($jsonFile)) {
    $currentData = ["about" => "", "article" => ""];
} else {
    $currentData = json_decode(file_get_contents($jsonFile), true);
}

// Update content
if ($page === 'about' || $page === 'article') {
    $currentData[$page] = $htmlContent;
    
    // Save back to JSON
    if (file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        echo json_encode(["success" => true, "message" => "Content saved successfully"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Failed to write to file. Check permissions."]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "Invalid page specified. Allowed: 'about', 'article'"]);
}
?>
