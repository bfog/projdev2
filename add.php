<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>Product</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
   <script type="text/javascript" src="indexValidate.js"></script>
</head>
<body>
<?php include 'addSaleCheck.php'; include 'addProductCheck.php'; include 'include/menu.inc';?>
<br>
    <div class="container">
        <form id="addSaleForm" method="post" action="index.php">
            <h4>Add New Sale:</h4>
            <div class="form-group">
               <label for="saleID">ID / Name:</label>
               <input type="text" class="form-control" name="saleID" id="saleID">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" name="quantity" id="quantity">
            </div>
            <div class="form-group">
                  <input type="submit" class="btn btn-dark btn-md" value="Add" />
            </div>
        </form>

        <form id="addProductForm" method="post" action="index.php">
            <h4>Add New Product:</h4>
            <div class="form-group">
               <label for="prodName">Name:</label>
               <input type="text" class="form-control" name="prodName" id="prodName">
            </div>
           <div class="form-group">
            <label>Category:</label>
               <select class="form-control" name="categories" id="categories">
                <?php
                  $db = mysqli_connect('localhost', 'root', '', 'pharmacy');
                  if (!$db){
                    die();
                  }
                  $sql = "SELECT category_id, category_name FROM categories";
                  $result = $db->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo "<option value=\"". $row["category_id"]. "\">". $row["category_name"]. "</option>";
                    }
                  } else {
                    echo "<option value=\"0\">Error</option>";
                  }
                  mysqli_close($db);
                ?>
                <!--
                   <option value="medicine">Medicine</option>
                   <option value="health">Health Care Products</option>
                   <option value="accessories">Accessories</option>
                 -->
               </select>
            </div>
            <div class="form-group">
               <label for="stock">Stock:</label>
               <input type="number" class="form-control" name="stock" id="stock">
            </div>
            <div class="form-group">
               <label for="price">Price:</label>
               <input type="number" class="form-control" name="price" id="price" step="0.01" min="0">
            </div>
           <div class="form-group">
            <input type="submit" class="btn btn-dark btn-md" value="Add" />
          </div>
        </form>
    </div>
</body>
</html>
