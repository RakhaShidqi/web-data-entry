<?php
    require "insert-customer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry App</title>
    <!-- My Css -->
     <link rel="stylesheet" href="style1.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="sidebar">
        <div class="header-sidebar">Data Entry App</div>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li>
                <a href="#" class="customer-btn">Customer
                    <i class='bx bx-caret-down first'></i>
            </a>
                <ul class="customer-show">
                    <li><a href="create-new-customer.php">Create New Customer</a></li>
                    <li><a href="data-customer.php">Data Customer</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="subscribe-btn">Subscribe
                    <i class='bx bx-caret-down second'></i>
                </a>
                <ul class="subscribe-show">
                    <li><a href="#">Create New Subscribe</a></li>
                    <li><a href="#">Data Subscribe</a></li>
                </ul>
            </li>
            <li><a href="#">Status</a></li>
        </ul>
    </nav>
    <main class="main-content">
        <div class="content-wrapper">
            <h1>Create New Customer</h1>
            <p>This is Customer Area. You can create new customer here</p>
            <br><br>
        <form action="data-customer.php" method="POST">
            <label for="full-name" class="full-name">Full Name</label>
            <br>
            <input type="text" name="customer-name" class="customer-name">
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" class="email">
            <br><br>
            <label for="phone">Phone</label>
            <br>
            <input type="text" name="phone" class="phone">
            <br><br>
            <button type="submit" class="create-customer-btn">Create Customer</button>
        </form>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>