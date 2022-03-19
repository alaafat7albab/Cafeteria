<?php
include("errorPHPChecker.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Table</title>

    <!-- Title Icon -->
    <link rel="shortcut icon" href="/Admin/images/favicon.png" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        input[type=checkbox] {
            transform: scale(2);
            background-color:  #c68c53;
        }

        #add {
            text-decoration: underline;
            color:  #cc9966;
        }
    </style>


    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <?php require_once("navbar.php"); ?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <section class="container" style="margin: 10rem auto;">
    <div class="d-flex justify-content-between align-items-center pt-3" >  <h2><a href=""> Products </a> </h2>
          <a class="h3" id="add" href="addProduct.php">Add Product</a>
    </div>
    
        <div class="container border mt-1">
            <div class="row">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Picture</th>
                            <th>Availability</th>
                            <th>Edit - Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../../Database.php");
                        $tableNameProducts = "products";
                        $dp = new DataBase();
                        $dp->connect();
                        $productsRows = $dp->select_All($tableNameProducts);
                        foreach ($productsRows as $product) {
                        ?>
                            <tr class="text-light" style="font-weight:1000;">
                                <td><?php echo $product["id"] ?></td>
                                <td><?php echo $product["name"] ?></td>
                                <td><?php echo $product["price"] ?></td>
                                <td><?php echo $product["category"] ?></td>
                                <td> <img src="<?php echo "../images/product_image/".$product['picture'] ?>" class="col-xs-3" width="150px" height="150px"></td>
                                <?php $check =  "";
                                if ($product["status"] == 1) {
                                    $check =  "checked";
                                } ?>
                                <td><input class="form-check-input" type="checkbox" value="<?php echo $product["id"] ?>" id="box" <?php echo $check ?>></td>
                                <td style="padding-bottom: 0.2rem;">
                                    <h5><a href='editProduct.php?id=<?= $product['id'] ?>'>Edit </a> - <a href='deleteProduct.php?id=<?= $product['id'] ?>'>Delete</a></h5>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <!-- JavaScript Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('input[type="checkbox"]').click(function() {
                            isChecked = $(this).is(':checked');
                            if (isChecked) {
                                checked = 1
                            } else {
                                checked = 0
                            }
                            id = $(this).val();
                            $.ajax({
                                url: "updateProductStatus.php",
                                method: "POST",
                                data: {
                                    id,
                                    checked,
                                },
                                success: function(data) {},
                            });

                        });
                    });
                </script>


                <script src="../js/template/jquery.min.js"></script>
                <script src="../js/template/jquery-migrate-3.0.1.min.js"></script>
                <script src="../js/template/popper.min.js"></script>
                <script src="../js/template/bootstrap.min.js"></script>
                <script src="../js/template/jquery.easing.1.3.js"></script>
                <script src="../js/template/jquery.waypoints.min.js"></script>
                <script src="../js/template/jquery.stellar.min.js"></script>
                <script src="../js/template/owl.carousel.min.js"></script>
                <script src="../js/template/jquery.magnific-popup.min.js"></script>
                <script src="../js/template/aos.js"></script>
                <script src="../js/template/jquery.animateNumber.min.js"></script>
                <script src="../js/template/bootstrap-datepicker.js"></script>
                <script src="../js/template/jquery.timepicker.min.js"></script>
                <script src="../js/template/scrollax.min.js"></script>
                <script src="../js/template/main.js"></script>
    </section>
</body>


</body>

</html>