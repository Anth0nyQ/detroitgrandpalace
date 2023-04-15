<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
       

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


        <!DOCTYPE html>

<html>
    <head>
        <title>Detroit Grand Palace</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Importing of Bootstrap CSS and scripts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- End of Importing of Bootstrap CSS and Scripts-->

        <!-- Navbar -->
        <style>
          /* Set the background color for the navigation bar */
          .navbar {
            background-color: maroon;
          }
          
          /* Style the links in the navigation bar */
          .navbar a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
          }
          
          /* Add a hover effect to the links in the navigation bar */
          .navbar a:hover {
            background-color: #ddd;
            color: black;
          }
          
          /* Clear floats after the navigation bar */
          .navbar::after {
            content: "";
            clear: both;
            display: table;
          }
        </style>
        <div class="navbar">
          <a href="../home.html">Home</a>
          <a href="../about_the_company.html">About</a>
          <a href="../Contact.html">Contact</a>
          <a href="../index.php">Packages</a>
          <a href="../login-related-files/login.php">Log In</a>
        </div>
        <!-- End of Navbar -->
    </head>

    <body>
        <link rel="stylesheet" href="packages.css">
        <h1 class="justify-content-center">Packages</h1>
        <p class="justify-content-center">Below you can view and see the benefits of our packages that we offer.</p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>



<div class="container">
          <div class="row">
            <div class="col">
              <div class="card text-center">
                <div class="card-header">
                  Basic
                </div>
                <div class="card-body">
                  <h5 class="card-title">Package Name 1</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Line 1</li>
                    <li class="list-group-item">Line 2</li>
                  </ul>
                  <button onclick="cartAction('add','code1','Package 1',1000)" href="/billing-details.php" class="btn btn-primary">Purchase</button>
                </div>
                <div class="card-footer text-muted">
                  Best for those who do not want a huge wedding.
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card text-center">
                <div class="card-header">
                  Intermediate
                </div>
                <div class="card-body">
                  <h5 class="card-title">Package Name 2</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Line 1</li>
                    <li class="list-group-item">Line 2</li>
                    <li class="list-group-item">Line 3</li>
                    <li class="list-group-item">Line 4</li>
                  </ul>
                  <button onclick="cartAction('add','code2','Package 2',2000)" href="/billing-details.php" class="btn btn-primary">Purchase</bu>
                </div>
                <div class="card-footer text-muted">
                  A well-rounded package best for a budget.
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card text-center">
                <div class="card-header">
                  Advanced
                </div>
                <div class="card-body">
                  <h5 class="card-title">Package Name 3</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Line 1</li>
                    <li class="list-group-item">Line 2</li>
                    <li class="list-group-item">Line 3</li>
                    <li class="list-group-item">Line 4</li>
                    <li class="list-group-item">Line 5</li>
                    <li class="list-group-item">Line 6</li>
                  </ul>

                  <button onclick="cartAction('add','code3','Package 3',3000)" href="/billing-details.php" class="btn btn-primary">Purchase</button>

                </div>
                <div class="card-footer text-muted">
                  Best for the ultimate experience.
                </div>
              </div>
            </div>

          </div>
        </div>

    </body>

