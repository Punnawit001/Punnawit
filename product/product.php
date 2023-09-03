<div class="conainer">
    <h2 class="my-4">Product list</h2>
    <div class="row">
        <?php
        require_once('../database/db_connection.php');

        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-4">';
                echo '<div class="caed product-caed">';
                echo '<img src"' . $row['image'] . '"class="card-img-top" alt="Product image>';
                echo '<div class="caed-body">';
                echo '<h5 class="card-text">' . $row['name'] . '</h5>';
                echo '<p class="card-text">Price: ' . $row['prive'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>NO products found </p>";
        }

        mysqli_close($conn);
        ?>
    </div>
</div>