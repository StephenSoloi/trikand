<?php
include 'config.php';

$product_desc = $_POST['product-desc'];
$product_code = $_POST['product-code'];
$customer_name = $_POST['customer-name'];
$customer_mobile = $_POST['customer-mobile'];
$customer_feedback = $_POST['customer-feedback'];
$customer_rating = isset($_POST['star']) ? $_POST['star'] : null;
$departure_time = $_POST['departure-time'];
$arrival_time = $_POST['arrival-time'];
$location = $_POST['location'];
$route = $_POST['route'];
$transit_person = $_POST['transit-person'];
$vehicle_number = $_POST['vehicle-number'];
$category = $_POST['category'];
$product_collected = $_POST['product-collected'];
$company_remarks = $_POST['company-remarks'];

$sql = "INSERT INTO product_tracking (
    product_desc, product_code, customer_name, customer_mobile, customer_feedback, customer_rating,
    departure_time, arrival_time, location, route, transit_person, vehicle_number, category, product_collected, company_remarks
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssssssss",
    $product_desc, $product_code, $customer_name, $customer_mobile, $customer_feedback, $customer_rating,
    $departure_time, $arrival_time, $location, $route, $transit_person, $vehicle_number, $category, $product_collected, $company_remarks
);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
