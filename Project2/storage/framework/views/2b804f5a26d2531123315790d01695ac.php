<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="CSS\style.css">
        <link rel="icon" href="Images\Logo.png" type="image/x-icon">
    </head>
    <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <img class="img-fluid" src="Images\logo.png" alt="Logo" width="55" height="55">
                <a class="navbar-brand">
                    Receipt Recorder
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="homepage"><i class="fa-solid fa-house"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Help"><i class="fa-solid fa-circle-question"></i>
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About"><i class="fa-solid fa-users"></i>
                                About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i>
                                Transactions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="NewTransaction">Add New Transaction</a></li>
                                <li><a class="dropdown-item" href="PreviousTransaction">View Previous Transactions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i>
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ViewAccount">View Account</a></li>
                                <li><a class="dropdown-item" href="EditAccount">Edit Account</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <a class="dropdown-item" style="cursor: pointer;">
                                        <button type="submit" style="background: none; border: none;">Sign out</button>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation Bar -->

        <!-- Main content -->
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <div class="row align-items-md-stretch">
                <div class="col-sm-12">
                    <h1><br></h1>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary border rounded-5">
                        <center>
                            <h2>Add New Transaction</h2>
                            <br>
                            <a href="NewTransaction" class="button" style="font-size: 140%;"><i class="fa-solid fa-square-plus"></i> Add New Transaction</a>                   
                            <p><br>Add new information of your receipt to keep track and organise your expenses.</p>               
                        </center>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary border rounded-5">
                        <center>
                            <h2>View Previous Transactions</h2>
                            <a href="PreviousTransaction" class="button"  style="font-size: 140%;"><i class="fa-solid fa-clock-rotate-left"></i> View Previous Transactions</a>
                            <p><br>View your historical data, edit or delete the transactionsthe transaction. You can also sort your expenses based in attribute.</p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h1><br></h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 align-self-center">
                        <div class="h-100 p-5 bg-body-tertiary border rounded-5">
                            <center>
                                <h1><b>Benefits of our app</b></h1>
                                <h4><i class="fa-solid fa-credit-card"></i> Improve budget managment</h4>
                                <p>Gain control of budget spending across individuals, teams and departments with rules coded directly into cards.</p>
                                <h4><i class="fa-solid fa-coins"></i> Increase visibility to plan and adapt</h4>
                                <p>Identify and address any concerns with expense tracking that shows real-time budget spending status.</p>
                                <h4><i class="fa-solid fa-clock"></i> Save more time with better receipt management</h4>
                                <p>Capture receipts instantly on mobile. Save time spent on processing reimbursements manually while tracking spend in real-time.</p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h1><br></h1>
                </div>
            </div>
        </div>
        <!-- End Main content -->

        <!-- Footer -->
        <footer class="bg-dark text-center text-lg-start" style="background-color:#0c0716; color: white;">
            <div class="container p-1">
            <div class="row">
                <div class="col-lg-6 me-auto mb-2 mb-lg-0">
                    <img class="img-fluid" src="Images\logo.png" alt="Logo" width="55" height="55">
                    &copy; 2023 Receipt Recorder Company, Inc
                </div>
                <div class="col-lg-3">
                </div>
                <div class="col-lg-3">
                <ul class="list-unstyled mb-0">
                    <li>
                    <a href="#" class="text-light" style="text-decoration: none;">Terms & Condition</a>
                    </li>
                    <li>
                        <a href="#" class="text-light" style="text-decoration: none;">Privacy Policy</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </footer>
        <!-- End of Footer -->

        <!-- Java Script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html><?php /**PATH C:\laragon\www\project2\resources\views/homepage.blade.php ENDPATH**/ ?>