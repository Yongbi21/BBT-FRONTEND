<!doctype html>
<html lang="en" class="no-js">
  <html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--- links for bootstrap and css  --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/remit.css" />
    <script src="https://kit.fontawesome.com/6023332cf2.js" crossorigin="anonymous"></script>
    <title>Wmsu Collection System</title>
    </head>

      <body>
      <div class="d-flex" id="wrapper">
        <!-- Sidebar with bootstrap -->
        <div class="bg-white" id="sidebar-wrapper">
            <img src="../images/logo.jpg" width ="200" alt="CCS COLLECTION FEE">
            <div class="list-group list-group-flush my-3">
                <a href="../admin/dashboard.php" class="list-group-item list-group-item-action bg-hover second-text  fw-bold">Dashboard</a>
                <a href="../fees/fees.php" class="list-group-item list-group-item-action bg-hover second-text  fw-bold">Fees</a>
                <a href="../remit-records/remit-records.php" class="list-group-item list-group-item-action bg-hover second-text active fw-bold">Remit Records</a>
                <a href="../college/college.php" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Colleges</a>
                <a href="../funds/funds.php" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Funds</a>
                <a href="../financial-report/financial-report.php" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Financial Report</a>
                <a href="../audit-log/audit-log.php" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Audit Log</a>
                <button class="list-group-item list-group-item-action bg-hover second-text dropdown-btn fw-bold">Admin Settings</a>
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="list-group-item list-group-item-action bg-hover second-text fw">
                    <ul><a href="../admin-settings/overview.php">Overview</a></ul>
                    <ul><a href="../admin-settings/user-management.php">User Management</a></ul>
                    <ul><a href="../admin-settings/colleges.php">Colleges</a></ul>
                </div>
                <a href="../public/logout.php" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

   <!-- Page Content -->
   <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-active py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">College Remitted Records</h2>
        </div>
    </nav>
    <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                    <div class="col-md-3">
                        <div class="row my-5">
                            <div class="col-md-3" id="topnav">
                                <form action="Search">
                                <input type="text" placeholder="Search.."></i>
                                </form>
                             </div>
                            <div class="col">
                                <table class="table bg-white rounded shadow-sm  table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50">#</th>
                                            <th scope="col">Payment Description</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">College</th>
                                            <th scope="col">School Year</th>
                                            <th scope="col">Sem</th>
                                            <th scope="col">Total Amount</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
        
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                           <td>CSC Fee</td>
                                            <td>11/2/2022</td>
                                            <td>12:30</td>
                                            <td>COE</td>
                                            <td>2021-22</td>
                                            <td>1</td>
                                            <td>Php 150,000.00</td>
                                            <td>Paid</td>
        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
           <div class="clearfix">
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            </div>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");
        
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
            
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var listgroup = document.getElementsByClassName("list-group-item")
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
        </body>
        
        </html>