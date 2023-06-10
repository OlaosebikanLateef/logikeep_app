<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>

:root {
   
   
   --second-text-color: #3043EC;
   --second-bg-color: #3043EC;
 }
 


 .primary-text {
   color: var(--main-text-color);
 }
 
 .second-text {
   color: var(--second-text-color);
 }
 
 .primary-bg {
   background-color: var(--main-bg-color);
 }
 
 .secondary-bg {
   background-color: var(--second-bg-color);
 }
 
 .rounded-full {
   border-radius: 100%;
 }
 
 #wrapper {
   overflow-x: hidden;
   background-image: linear-gradient(
     to right,
     #3043EC,
     #3043EC,
     #3043EC,
     #3043EC,
     #3043EC
   );
 }
 
 #sidebar-wrapper {
   min-height: 100vh;
   margin-left: -15rem;
   -webkit-transition: margin 0.25s ease-out;
   -moz-transition: margin 0.25s ease-out;
   -o-transition: margin 0.25s ease-out;
   transition: margin 0.25s ease-out;
 }
 
 #sidebar-wrapper .sidebar-heading {
   padding: 0.875rem 1.25rem;
   font-size: 1.2rem;
 }
 
 #sidebar-wrapper .list-group {
   width: 15rem;
 }
 
 #page-content-wrapper {
   min-width: 100vw;
 }
 
 #wrapper.toggled #sidebar-wrapper {
   margin-left: 0;
 }
 
 #menu-toggle {
   cursor: pointer;
 }
 
 .list-group-item {
   border: none;
   padding: 20px 30px;
 }
 
 .list-group-item.active {
   background-color: transparent;
   color: var(--main-text-color);
   font-weight: bold;
   border: none;
 }
 

 


    </style>
</head>
  <body>

   

<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
    Toggle static offcanvas
  </button> -->

   <!-- Page Content -->
   <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left text-primary fs-4 me-3" id="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"></i>
            <h2 class="fs-2 m-0 text-primary">Dashboard</h2>
        </div>

    

        <div class="" id="navbarSupportedContent">
          <!-- ?dfffhj -->
        </div>
    </nav>

    <div class="container-fluid px-4 ">
        <div class="row g-3 my-2">
            <div class="col-md-6  ">
                <div class="p-3 bg-white  d-flex justify-content-around align-items-center rounded shadow-lg border">
                    <div class="">
                        <h3 class="fs-2 text-primary">10000</h3>
                        <p class="fs-5 text-primary">Total Users</p>
                    </div>
                    <i class="fa-regular fa-user text-white border rounded-full secondary-bg p-3"></i>
                </div>
            </div> 
            <div class="col-md-6  ">
              <div class="p-3 bg-white  d-flex justify-content-around align-items-center rounded shadow-lg border">
                  <div>
                      <h3 class="fs-2 text-primary">20000</h3>
                      <p class="fs-5 text-primary">Total Amount Withdrawn</p>
                  </div>
                  <i class="fa-solid fa-credit-card text-white border rounded-full secondary-bg p-3"></i>
              </div>
          </div>
          </div>  
            <div class="row g-3 my-2">
            <div class="col-md-4 ">
                <div class="p-3 bg-white  d-flex justify-content-around align-items-center rounded shadow-lg border">
                    <div>
                        <h3 class="fs-2 text-primary">100</h3>
                        <p class="fs-5 text-primary">Total Account Created</p>
                    </div>
                    <i
                        class="fa-solid fa-building-columns fs-1 text-white border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-4  " >
                <div class="p-3 bg-white d-flex justify-content-around align-items-center rounded shadow-lg border">
                    <div>
                        <h3 class="fs-2 text-primary">3899</h3>
                        <p class="fs-5 text-primary">Total Subscribed Users</p>
                    </div>
                    
                    <i class="fa-solid fa-user-plus fs-1 text-white border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-4  ">
                <div class="p-3 bg-white  d-flex justify-content-around align-items-center rounded shadow-lg border">
                    <div>
                        <h3 class="fs-2 text-primary">10000</h3>
                        <p class="fs-5 text-primary">Amount Deposited</p>
                    </div>
                    <i class="fa-solid fa-money-check-dollar fs-1 text-white border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div>
  <!-- ofcanvas -->
  
  <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="bg-white" id="">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
             </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-clipboard-user me-2"></i>Record</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-clipboard-fill me-2"></i>Inventory</a>
                        
                <a href="#" class="list-group-item list-group-item-action  second-text fw-bold"><i
                        class="bi bi-wallet2 me-2"></i>Transactions</a>
                <a href="#" class="list-group-item list-group-item-action  second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Statements</a>
                <a href="#" class="list-group-item list-group-item-action  second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Wallets</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="bi bi-people-fill me-2"></i>Users</a>
                <a href="#" class="list-group-item list-group-item-action  second-text fw-bold"><i
                        class="bi bi-person-circle me-2"></i>Accounts</a>
                <a href="{{ route('logout')}}"
                 class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
    </div>
  </div>
  
<!-- table -->

<div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Activities</h3>
                    <div class="col">
                        <table class="table bg-white rounded table-bordered border-primary  shadow-lg table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col" width="50">ID</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Amount Deposited</th>
                                    <th scope="col">Amount Withdrawn</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Skima Sax</td>
                                    <td>$1200</td>
                                    <td>$1200</td>
                                    <td>4/6/2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>








     






