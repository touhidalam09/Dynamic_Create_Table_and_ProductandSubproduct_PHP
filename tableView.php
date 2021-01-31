<?php
include_once 'dbconnection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Table</title>

        <!--BOOTSTRAP LINK--> 
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="styleTableView.css">
    </head>
    <body>

        <section class="btn-section">
            <div class="container">
                <div class="d-flex justify-content-end">
                    <div>
                        <button type="button" class="btn btn-success">
                            <a href="createForm.php" class="text-white text-decoration-none">
                                Create New
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>   

        <section class="table-section">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <table class="table table-hover table-striped text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sqlShowData = "SELECT * FROM country";
                                $result = $conn->query($sqlShowData);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <th scope = "row"> <?php echo $row["id"] ?></th>
                                            <!--<td> <?php // echo $row["CountryName"]   ?> </td>-->

                                            
                                            
                                           
                                            
                                            
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
                                                    <?php echo $row["CountryName"]; ?> 
                                                </button>

                                                <!-- Modal -->
                                                
                                            </td>







                                            <td>
                                                <div>
                                                    <button type = "button" class = "btn btn-outline-danger">
                                                        <a href = "deleteData.php ? id=<?php echo $row["id"]; ?>" class="text-decoration-none dlt-tag">DELETE</a>
                                                    </button>
                                                    <button type = "button" class = " btn btn-outline-warning">
                                                        <a href = "updated.php ? id=<?php echo $row["id"]; ?>" class="text-decoration-none update-tag">UPDATE</a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                } else {
                                    //no data message show
                                }
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>

    </body>
</html>

