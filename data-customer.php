

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry App</title>
    <!-- My Css -->
     <link rel="stylesheet" href="style.css">
     <!-- jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <!-- Font Awesome (optional, for icons) -->
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
                    <li><a href="#">Data Customer</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="subscribe-btn">Subscribe
                    <i class='bx bx-caret-down second'></i>
                </a>
                <ul class="subscribe-show">
                    <li><a href="create-new-subscribe.php">Create New Subscribe</a></li>
                    <li><a href="data-subscribe.php">Data Subscribe</a></li>
                </ul>
            </li>
            <li><a href="#">Status</a></li>
        </ul>
    </nav>
    <main class="main-content">
        <div class="content-wrapper">
            <h1>Data Customer</h1>
            <p>This is the Data Customer area.</p>
            <br><br>
            <div class="container">
            <table id="myTable" class="display responsive nowrap" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
            </table>
            </div> 
        </div>
        <script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#myTable').DataTable({
            "ajax": 'data.php',  // URL yang mengembalikan data
            "columns": [
                { "data": "name" },  // Menampilkan data dari kolom 'name'
                { "data": "email" }, // Menampilkan data dari kolom 'email'
                { "data": "phone" }  // Menampilkan data dari kolom 'phone'
            ],
            "responsive": true  // Membuat tabel responsif
        });
    });
</script>

    </main>
    <script src="script.js"></script>
</body>
</html>