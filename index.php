<?php
    require 'acces.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> simple site d'achat </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <!-- creer l'affichage-->
    <div class="container">
        <br />
        <br />
        <br />

        <br /><br />
        <?php
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <div class="col-md-4">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px"; align="center">
                            <img src="images/<?php echo $row["image"]; ?>"class="img-responsive" width=50px height=50px /><br />
                            <h4 class=" text-info"><?php echo $row["name"]; ?></h4>

                            <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>

                            <input type="text" name="quantity" value="1" class="form-control" />

                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Ajouter" />

                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
        <div style="clear:both"></div>
        <br />
        <h3>Detail commande</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Description</th>
                    <th width="10%">Quantité</th>
                    <th width="20%">Prix</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
                if (!empty($_SESSION["shopping_cart"])) {
                    $total = 0;
                    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                        <tr>
                            <td><?php echo $values["item_name"]; ?></td>
                            <td><?php echo $values["item_quantity"]; ?></td>
                            <td>€ <?php echo $values["item_price"]; ?></td>
                            <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                            <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Annuler</span></a></td>
                        </tr>
                    <?php
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    }
                    ?>
                    <tr>
                        <td colspan="3" text-align="right">Total</td>
                        <td text-align="right">€ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </div>
    </div>
    <br />
</body>

</html>

<?php

?>