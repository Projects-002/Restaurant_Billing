<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing & Debt Tracking System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-color: #007bff;
            color: #fff;
            padding: 60px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .section {
            padding: 40px 0;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Billing & Debt Tracking System</h1>
        <p>Track meals, payments, and outstanding bills efficiently.</p>
    </div>
</section>

<!-- Meal and Billing Section -->
<section class="section" id="meals">
    <div class="container">
        <h2 class="text-center mb-4">Meals Taken (Paid/Unpaid)</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Meal Name</th>
                    <th>Date Taken</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Meals Taken -->
                <tr>
                    <td>Grilled Chicken</td>
                    <td>2024-10-10</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>Pasta Alfredo</td>
                    <td>2024-10-09</td>
                    <td><span class="badge bg-danger">Unpaid</span></td>
                    <td>$10</td>
                </tr>
                <tr>
                    <td>Beef Burger</td>
                    <td>2024-10-08</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>Vegetable Salad</td>
                    <td>2024-10-07</td>
                    <td><span class="badge bg-danger">Unpaid</span></td>
                    <td>$8</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Payment Section -->
<section class="section bg-light" id="payment">
    <div class="container">
        <h2 class="text-center mb-4">Make a Payment</h2>
        <form id="paymentForm">
            <div class="mb-3">
                <label for="mealName" class="form-label">Meal Name</label>
                <input type="text" class="form-control" id="mealName" placeholder="Enter the meal name" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" placeholder="Enter the amount" required>
            </div>
            <div class="mb-3">
                <label for="paymentMethod" class="form-label">Payment Method</label>
                <select class="form-select" id="paymentMethod" required>
                    <option value="">Select a method</option>
                    <option value="cash">Cash</option>
                    <option value="credit">Credit Card</option>
                    <option value="online">Online</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit Payment</button>
        </form>
    </div>
</section>

<!-- Bills Section -->
<section class="section" id="bills">
    <div class="container">
        <h2 class="text-center mb-4">Outstanding Bills</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Meal Name</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="outstandingBills">
                <tr>
                    <td>Pasta Alfredo</td>
                    <td>2024-10-09</td>
                    <td>$10</td>
                    <td><span class="badge bg-danger">Unpaid</span></td>
                </tr>
                <tr>
                    <td>Vegetable Salad</td>
                    <td>2024-10-07</td>
                    <td>$8</td>
                    <td><span class="badge bg-danger">Unpaid</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Footer -->
<section class="footer">
    <div class="container">
        <p>&copy; 2024 Billing & Debt Tracking System. All rights reserved.</p>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for Form Handling (Basic) -->
<script>
    document.getElementById('paymentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Payment submitted successfully!');
    });
</script>

</body>
</html>
