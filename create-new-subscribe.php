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
     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e0f7fa;
        }
    </style>
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
                    <li><a href="data-subscribe.php">Data Subscribe</a></li>
                </ul>
            </li>
            <li><a href="#">Status</a></li>
        </ul>
    </nav>
    <main class="main-content">
        <div class="content-wrapper">
            <h1>Create New Subscribe</h1>
            <p>This is Subscriber Area. You can create new subscribe here</p>
            <br><br>
        <form action="data-subscribe.php" method="POST">
        <label for="customerName">Customer Name:</label>
            <input type="text" id="customerName" placeholder="Enter customer name">
            <button onclick="searchCustomer()">🔍</button>

            <label for="subscribeID" class="customer-id">Customer ID:</label>
            <br><br>
            <label for="subscribe-id">Subscribe ID: </label>
            <input type="text" name="subscribe-id" class="subscribe-id">
            <br><br>
            <div class="button-container">
            <button class="save-btn" onclick="saveData()">Save</button>
            <button class="post-btn" onclick="postData()">Post</button>
            </div>
            </div>
            <br><br>

            <table id="serviceTable">
            <thead>
                <tr>
                    <th class="add-row">+</th>
                    <th>Service Name</th>
                    <th>Installation ID</th>
                    <th>Monthly Amount</th>
                    <th>Start Service Date</th>
                    <th>Next Billing Date</th>
                    <th>Payment Status</th>
                    <th class="remove-row">Remove Row</th>
                </tr>
            </thead>
            <tbody>
                <!-- Rows will be added here -->
            </tbody>
        </table>
        </form>
        </div>
        <br>
        <div class="footer-section">
            <label for="statusDocument" class="status-document" >Status Document:</label>
            <label>Post Date:</label>
            <span id="postDate"></span>
        </div>
    </main>
    <script src="script.js"></script>
   <script>
    document.addEventListener("DOMContentLoaded", function () {
    const serviceTable = document.getElementById("serviceTable").getElementsByTagName("tbody")[0];

    // Event listener untuk tombol + di baris header
    document.querySelector(".add-row").addEventListener("click", function (e) {
        e.preventDefault();

        // Buat baris baru
        const newRow = document.createElement("tr");

        // Isi kolom dengan input field dan tombol remove
        newRow.innerHTML = `
            <td></td>
            <td><input type="text" name="serviceName[]" placeholder="Service Name"></td>
            <td><input type="text" name="installationID[]" placeholder="Installation ID"></td>
            <td><input type="number" name="monthlyAmount[]" placeholder="Monthly Amount"></td>
            <td><input type="date" name="startServiceDate[]"></td>
            <td><input type="date" name="nextBillingDate[]"></td>
            <td>
                <select name="paymentStatus[]">
                    <option value="Unpaid">Unpaid</option>
                    <option value="Paid">Paid</option>
                    <option value="Pending">Pending</option>
                </select>
            </td>
            <td><button type="button" class="remove-row">Remove</button></td>
        `;

        // Menambahkan baris baru ke tabel
        serviceTable.appendChild(newRow);

        // Event listener untuk tombol "Remove" yang ada pada setiap baris
        newRow.querySelector(".remove-row").addEventListener("click", function () {
            serviceTable.removeChild(newRow);
        });
    });
});

   </script> 
</body>
</html>