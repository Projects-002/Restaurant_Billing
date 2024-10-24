<?php
include('databases/connect.php');
















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center flex-column">
        <h2 class="text-center mb-4">Sales Form</h2>
        <form class="w-50">
            <!-- Registration Number -->
            <div class="mb-3">
                <label for="registrationNumber" class="form-label">Registration Number</label>
                <input type="text" class="form-control" id="registrationNumber" placeholder="Enter registration number" required>
            </div>
            <!-- Product Name -->
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
            </div>
            <!-- Category -->
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" placeholder="Enter product category" required>
            </div>
            <!-- Amount -->
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" placeholder="Enter amount" required>
            </div>
            <!-- Status -->
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" id="status" required>
                    <option value="" selected disabled>Select status</option>
                    <option value="paid">Paid</option>
                    <option value="unpaid">Unpaid</option>
                </select>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Make sale</button>
        </form>
    </div>
 <style>
    
 </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
