<?php
require_once('../model/salaryModel.php');

$response = ['success' => false, 'message' => ''];

try {
    $salary = $_POST['salary'];
    $id = $_POST['id'];
    $host = ['salary' => $salary, "id" => $id];

    updateHost($host);

    // Set the success flag to true
    $response['success'] = true;

    // Add the updated salary to the response
    $response['updatedSalary'] = $salary;
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode($response);
?>

