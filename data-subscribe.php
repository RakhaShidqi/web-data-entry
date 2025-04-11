<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry App</title>
    <!-- My Css -->
     <link rel="stylesheet" href="style.css">
     <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- dataTables cdn -->
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <!-- font awesome -->
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
                    <li><a href="create-new-subscribe.php">Create New Subscribe</a></li>
                    <li><a href="#">Data Subscribe</a></li>
                </ul>
            </li>
            <li><a href="#">Status</a></li>
        </ul>
    </nav>
    <main class="main-content">
        <div class="content-wrapper">
            <h1>Data Subscribe</h1>
            <p>This is the Data Subscribe</p>
            <br><br>
            <table id="myTable" class="display" cellspacing="0">
                <thead>
                    <tr>
                        <th>Subscription ID</th>
                        <th>Customer ID</th>
                        <th>Service Start Date</th>
                        <th>Next Billing Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>