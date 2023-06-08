<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <title>View Transactions</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Previous Transaction</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="CSS\style.css">
        <link rel="icon" href="Images\Logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body onload="displayTransactions()">
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
                            <a class="nav-link" aria-current="page" href="homepage"><i class="fa-solid fa-house"></i>
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
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i>
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
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
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
        <div class="col-md-12">
            <div class="h-100 p-5 bg-body-tertiary border rounded-5">
                <center>
                    <h2>View Previous Transactions</h2>
                    <div class="btn-group">
                        <label for="sortSelect" style="font-size: larger; font-weight: 700;">Sort By:</label>
                        <select id="sortSelect" style="background-color: #a2a8d3; border-radius: 10px;">
                          <option value="number" style="color: #1824c3ed;">Invoice ID</option>
                          <option value="category" style="color: #1824c3ed;">Category</option>
                          <option value="date" style="color: #1824c3ed;">Date</option>
                          <option value="price" style="color: #1824c3ed;">Price</option>
                        </select>
                    </div>
                    <hr><table class="table table-hover" style="text-align:center" id="transactionTable">
                        <thead>
                        <tr>
                            <th>Invoice Number</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->invoice_number}}</td>
                            <td>{{$transaction->category}}</td>
                            <td>{{$transaction->date}}</td>
                            <td>{{$transaction->amount}}</td>
                            <td><a href="{{ url('EditTransaction/' . $transaction->invoice_number) }}"><button style="border: none; background-color:transparent;"><i class="fa-solid fa-ellipsis"></i></button></a></td>
                            <td><a href="{{ url('DeleteTransaction/' . $transaction->invoice_number) }}"><button style="border: none; background-color:transparent;"><i class="fa-solid fa-trash-can"></i></button></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </center>
            </div>
        </div>
    </div>
</div>

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
        <script>
            /*
            The code below will delete the entire row of transaction data
            */
            function deleteRow(r) {
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById("transactionTable").deleteRow(i);
            }
            /*
            The code below will ask confirmation from user
            */
            function confirmDelete(r) {
                let text = "Are you sure that you want to delete the record?";
                if (confirm(text) == true) {
                    deleteRow(r)
                }
            }
            /*
            The code below will display information recieved from user
            */
            function displayTransactions() {
                var transactionData = localStorage.getItem("newTransaction");

                if (transactionData) {
                    var transaction = JSON.parse(transactionData);

                    var table = document.getElementById("transactionTable");
                    var newRow = table.insertRow();

                    var invoiceIdCell = newRow.insertCell();
                    invoiceIdCell.textContent = transaction.invoiceId;

                    var categoryCell = newRow.insertCell();
                    categoryCell.textContent = transaction.category;

                    var dateCell = newRow.insertCell();
                    dateCell.textContent = transaction.date;

                    var priceCell = newRow.insertCell();
                    priceCell.textContent = "$" + transaction.price;

                    var editCell = newRow.insertCell();
                    var editButton = document.createElement("a");
                    editButton.href = "EditTransaction";
                    var innerButton = document.createElement("button");
                    innerButton.style.border = "none";
                    innerButton.style.backgroundColor = "transparent";
                    innerButton.innerHTML = '<i class="fas fa-ellipsis"></i>';
                    editButton.appendChild(innerButton);
                    editCell.appendChild(editButton);
                    
                    var deleteCell = newRow.insertCell();
                    var deleteButton = document.createElement("button");
                    deleteButton.style.border = "none";
                    deleteButton.style.backgroundColor = "transparent";
                    deleteButton.innerHTML = '<i class="fas fa-trash-alt"></i>';
                    deleteButton.onclick = function() {
                    confirmDelete(this);
                    };
                    deleteCell.appendChild(deleteButton);
                }
            }
        </script>
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                const sortSelect = document.getElementById('sortSelect');
                sortSelect.addEventListener('change', sortTransactions);

                function sortTransactions() {
                    const sortBy = sortSelect.value;
                    const table = document.getElementById('transactionTable');
                    const tbody = table.getElementsByTagName('tbody')[0];
                    const rows = Array.from(tbody.getElementsByTagName('tr'));

                    rows.sort((a, b) => {
                        let aValue, bValue;

                        switch (sortBy) {
                            case 'number':
                                aValue = parseInt(a.cells[0].textContent);
                                bValue = parseInt(b.cells[0].textContent);
                                break;
                            case 'category':
                                aValue = a.cells[1].textContent;
                                bValue = b.cells[1].textContent;
                                break;
                            case 'date':
                                aValue = new Date(a.cells[2].textContent);
                                bValue = new Date(b.cells[2].textContent);
                                break;
                            case 'price':
                                aValue = parseFloat(a.cells[3].textContent.replace('$', ''));
                                bValue = parseFloat(b.cells[3].textContent.replace('$', ''));
                                break;
                            default:
                                return 0;
                        }

                        if (aValue < bValue) {
                            return -1;
                        } else if (aValue > bValue) {
                            return 1;
                        } else {
                            return 0;
                        }
                    });
                    rows.forEach((row) => {
                        tbody.appendChild(row);
                    });
                }
            });
        </script>
    </body>
</html>
