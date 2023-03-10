<?php

    //resume session here to fetch session values
    //session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
   // if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] == 'student'){
     //   header('location: ../control-panel/login.php');
   // }
   //if the above code is false then html below will be displayed

  //  require_once '../tools/variables.php';
   // $page_title = 'GreenScreen | Application';
   //$application = 'active';

   require_once '../includes/header.php';
?>
<body>
    <?php
//   require_once '../includes/topnav_admin.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
             require_once '../includes/sidebar.php';
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4">
                <div class="w-100">
                    <h5 class="col-12 fw-bold mb-3">Fees</h5>
                    <ul class="nav nav-tabs application">
                        <li class="nav-item active">
                            <a class="nav-link">Paid<span class="counter">2</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Unpaid <span class="counter">2</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Partial <span class="counter">1</span></a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">All</a>
                        </li>
                    </ul>
                    <div class="table-responsive py-3 table-container">
                        
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        function load(status){
            if(status == 'fees'){
                $.ajax({
                    type: "GET",
                    url: 'fees.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-fees").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
                        })
                        $('select#student_fees').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([2]).search(status).draw();
                        })
                        new $.fn.dataTable.FixedHeader(dataTable);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            }
        }
        $(document).ready(function(){
            load('fees');
            $('ul.application .nav-item').on('click', function(){
                $('ul.application .nav-item').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>
</html>