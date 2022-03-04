<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>

    <!-- Title Icon -->
    <link rel="shortcut icon" href="/Admin/images/favicon.png" />


    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php require_once("navbar.php"); ?>

    <section class="container">
        <div class="d-flex justify-content-between align-items-center pt-3" style="margin-top: 7rem;">
            <h2>Add Product</h2>
        </div>
        <form class="row border rounded" action="" method="post" enctype="multipart/form-data">
            <fieldset class="m-3">
                <div class="col-md-3">
                    <label class="form-label">Product</label>
                    <input type="text" name="product" class="form-control" value="" required>
                </div>


                <hr>
                <div class="col-md-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="custom-number" name="price" min="1" step="1" value="" required>
                </div>

                <hr>
                <div class="row-md-3">
                    <label class="form-label" style="margin-right: 6rem; margin-left:1rem;">Category</label>
                    <select name="category" class="form-select" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Hot Drinks">Hot Drinks</option>
                        <option value="Beverages">Beverages</option>
                        <option value="Alcohol">Alcohol</option>
                    </select>
                </div>

                <!-- <div class="row-md-3">
                    <label class="form-label" style="font-size: large; margin-right: 3rem;">Category</label>
                    <input type="number" step="1" min="1" max="12" name="room" class="form-control" value="">
                </div> -->

                <hr>
                <div class="row-md-6">
                    <div class="col ">
                        <label class="form-label">Product Picture</label>
                    </div>
                    <div class="col">
                        <input class="form-control btn" name="productPicture" type="file" id="formFile" required>
                    </div>
                </div>

                <hr>
                <div class="row m-3">
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit" style="font-family: Tahoma;font-weight:bold;">Save</button>
                    </div>
                    <div class="col-6" style="font-family: Tahoma;">
                        <button class="btn btn-primary btn-danger" type="reset" style="font-family: Tahoma;font-weight:bold;">Reset</button>
                    </div>
                </div>
            </fieldset>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </section>
</body>


</body>

</html>