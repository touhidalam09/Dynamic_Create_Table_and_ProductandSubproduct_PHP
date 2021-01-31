<?php
include_once 'dbconnection.php';
include_once 'createTableDB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Sub-product</title>

        <!--BOOTSTRAP LINK--> 
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="styleCreateForm.css">
    </head>
    <body>
        <section class="form-section">
            <div class="container">
                <div class="header-btn-div d-flex flex-row-reverse">
                    <div class="pb-3 btn-2-div">
                        <button type="button" class="btn btn-info">
                            <a href="tableView.php" class="text-decoration-none text-white cf-a-tag">Table View</a>
                        </button>
                    </div>
                </div>
                <div class="py-4 d-flex justify-content-center">
                    <div>
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="input-group mb-5">

                                <select class="custom-select" name="productSelect" id="inputGroupSelect01">
                                    <option selected value="0">Choose...</option>
                                    <?php
                                    $itemSql = "SELECT itemName FROM allitem";
                                    $result = $conn->query($itemSql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row["itemName"]; ?>"> <?php echo $row["itemName"]; ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <?php
                                } else {
                                    ?>
                                    <select class="custom-select" name="productSelect" id="inputGroupSelect01">
                                        <option selected value="0">Choose...</option>
                                    </select>
                                    <?php
                                }
                                ?>

                            </div>
                            <div class="form-div">
                                <div>
                                    <input type="text" class="form-control" id="productName" name="product_Name" placeholder="Enter Product Name..." required="*">
                                </div>

                                <div class="btn-div pt-4 d-flex justify-content-between">
                                    <div>
                                        <button type="submit" name="submit_cf" class="btn btn-outline-success">Submit</button>
                                    </div>
                                    <div>
                                        <a class="btn btn-outline-danger " href="#" role="button">Cancel</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div> 
            <!--container end-->
        </section>


        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/popper.min.js"></script>
    </body>
</html>
