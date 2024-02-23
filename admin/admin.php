<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <!-- bootstrap css link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap css link end -->

    <!-- font awseme link start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awseme link end -->

    <!-- css link start -->
    <link rel="stylesheet" href="style.css">
    <!-- css link end -->

</head>

<body>
    <!-- navbar start -->
    <div class="container-fluid p-0">
        <!-- first child start -->
        <nav class="navbar navbar-exapnad-lg navbar-light bg-info">
            <div class="container-fluid ">
                <img src="../img/1.logo.jpg" alt="" class=".logo" width="7%" height="7%">
                <!-- .. means call element in outside inside -->

                <!-- right navbar start -->
                <nav class="navbar navbar-exapnad-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome</a>
                        </li>
                    </ul>
                </nav>
                <!-- right navbar end -->
            </div>
        </nav>
        <!-- first schild end -->

        <!-- second child start -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- second child end -->

        <!-- third child start -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex">

                <!-- Button start -->
                <!-- button*10>a.nav.link.text-light.bg-info.my-1   --> <!-- my-1 means margin top-->
                <div class="button text-center">
                    <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Product</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Product</a></button>
                    <button><a href="admin.php?insert_categories" class="nav-link text-light bg-info my-1">Insert
                            Categories</a></button> <!-- ? refer to get variable -->
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="admin.php?insert_brands" class="nav-link text-light bg-info my-1">Insert
                            Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
                <!-- Button end -->

            </div>
        </div>
        <!-- third child end -->

        <!-- 4th child start -->
        <div class="container my-3">
            <?php
            if (isset($_GET['insert_categories'])) {
                include('insert_categories.php');
            }
            if (isset($_GET['insert_brands'])) {
                include('insert_brands.php');
            }
            ?>
        </div>
        <!-- 4th child end -->



        <!-- Last child start -->
        <div class="bg-info p-3 text-center">
            <p> All Copyright, Design by Mani at 2024</p>
        </div>
        <!-- Last Child end -->
    </div>
    <!-- navbar end -->

    <!-- bootstrap js lin start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- bootstrap js lin start -->
</body>

</html>