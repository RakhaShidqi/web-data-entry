<?php
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Data Entry</title>
        <!-- Bootstrap Styling -->
        <link
            rel="stylesheet"
            href="./src/css/bs5.css"
            type="text/css"
            media="all"
        />
        <script
            src="./src/js/bs5.js"
            type="text/javascript"
            charset="utf-8"
        ></script>

        <!-- Styling -->
        <link
            rel="stylesheet"
            href="./src/css/style.css"
            type="text/css"
            media="all"
        />

        <!-- Link Box Icon -->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!-- Link Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/favicon-16x16.png"
        />
        <link rel="manifest" href="/site.webmanifest" />
    </head>
    <body>
        <!-- Main Section -->
        <section class="container-fluid h-100">
            <!-- Header -->
            <header
                class="navbar navbar-expand-lg bg-primary mt-2 shadow rounded sticky-sm-top mb-3 z-1"
            >
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold text-white" href="/"
                        >Data Entry</a
                    >
                    <button class="btn text-white" type="button" id="btnAlert">
                        <i
                            class="bx bx-question-mark fs-3 rounded-circle p-1"
                            style="border: 1px solid #f1f2f3"
                        ></i>
                    </button>
                </div>
            </header>

            <!-- Cards -->
            <div class="card mb-2 shadow">
                <div class="card-header h5">Number of Customers</div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Amount: 00</p>
                        <footer class="blockquote-footer">
                            Customer data from
                            <cite title="Source Title">CSV File</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card mb-2 shadow">
                <div class="card-header h5">Number of Subscription</div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Amount: 00</p>
                        <footer class="blockquote-footer">
                            Customer data from
                            <cite title="Source Title">CSV File</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>

            <!-- Action Box -->
            <div id="actionAddBox" class="card">
                <div class="card-header">
                    <span class="h6">Add New: </span>
                </div>
                <div class="card-body d-flex gap-3">
                    <button
                        id="customer"
                        class="btn w-100 btn-success d-flex align-items-center justify-content-center gap-2"
                        data-bs-toggle="modal"
                        data-bs-target="#addCustModal"
                    >
                        <i class="bx bx-group"></i>
                        Customer
                    </button>
                    <button
                        id="subscription"
                        class="btn w-100 btn-danger d-flex align-items-center justify-content-center gap-2"
                        data-bs-toggle="modal"
                        data-bs-target="#addSubsModal"
                    >
                        <i class="bx bx-dollar"></i>
                        Subscription
                    </button>
                </div>
            </div>

            <sub class="credits d-flex justify-content-center mt-5"
                >Designed by
                <a
                    href="https://instagram.com/tomsdroid/"
                    class="nav-link"
                    target="_blank"
                    >&nbsp;@tomsdroid</a
                ></sub
            >

            <!-- Navbar -->
            <nav class="nav nav-pills fixed-bottom justify-content-around mb-3">
                <a href="/" class="nav-link active" aria-current="page">Home</a>
                <a href="/customer.php" class="nav-link" id="customerTab"
                    >Customers</a
                >
                <a href="/subscription.php" class="nav-link" id="subscriptionTab"
                    >Subscriptions</a
                >
            </nav>

            <!-- Modal -->
            <div
                class="modal fade"
                id="searchModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Searching by
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="get" accept-charset="utf-8">
                                <div class="form-floating mb-3">
                                    <input
                                        type="email"
                                        class="form-control form-control-sm"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput"
                                        >Email Address</label
                                    >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Add Customers -->
            <div
                class="modal fade"
                id="addCustModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Add New Customers
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="get" accept-charset="utf-8">
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="floatingInput"
                                        required
                                        placeholder="John Doe"
                                    />
                                    <label for="floatingInput">Full Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="email"
                                        class="form-control form-control-sm"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                        required
                                    />
                                    <label for="floatingInput"
                                        >Email Address</label
                                    >
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="phone"
                                        class="form-control form-control-sm"
                                        id="floatingInput"
                                        placeholder="0812xxxxxx"
                                        required
                                    />
                                    <label for="floatingInput"
                                        >Phone Number</label
                                    >
                                </div>
                                <div
                                    class="form-footer w-100 d-flex justify-content-end"
                                >
                                    <button
                                        type="submit"
                                        class="btn btn-primary py-2 px-5 fw-bold text-end"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Add Subscriptions -->
            <div
                class="modal fade"
                id="addSubsModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Add Customers Subscriptions
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="get" accept-charset="utf-8">
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="floatingInput"
                                        readonly="true"
                                        placeholder="John Doe"
                                    />
                                    <label for="floatingInput"
                                        >Customers ID</label
                                    >
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                        required
                                    />
                                    <label for="floatingInput"
                                        >Customers Name</label
                                    >
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        id="floatingInput"
                                        placeholder="Mk3802xxxx"
                                        required
                                    />
                                    <label for="floatingInput"
                                        >Subscription ID</label
                                    >
                                </div>
                                <div
                                    class="form-footer w-100 d-flex justify-content-end"
                                >
                                    <button
                                        type="submit"
                                        class="btn btn-primary py-2 px-5 fw-bold text-end"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Flow Button -->
        <button
            id="btnAdd"
            class="btn btn-outline-primary btnActionAdd"
            type="button"
        >
            <i class="bx bx-plus fs-4"></i>
        </button>
        <button
            type="button"
            class="btn btn-primary btnActionSearch"
            data-bs-toggle="modal"
            data-bs-target="#searchModal"
        >
            <i class="bx bx-search"></i>
        </button>

        <script
            src="./src/js/script.js"
            type="text/javascript"
            charset="utf-8"
        ></script>
    </body>
</html>