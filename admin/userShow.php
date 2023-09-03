<?php
require_once '../database/db_connection.php';
// session_start();
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>User data</h1>
        <table class="table">
            <div class="col d-flex justify-content-end">
                <a href="addUser.php" class="btn btn-success mb-3">
                    Add
                </a>
            </div>
    </div>
    <table class="table table-hover table-striped border">
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>password</th>
                <th>phone</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result)> 0): ?>
            <?php  while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $row ["id"] ?></td>
                <td><?php echo $row ["username"]?></td>
                <td><?php echo $row ["password"]?></td>
                <td><?php echo $row ["phone"]?></td>
                <td><?php echo $row ["email"]?></td>
            </tr>
            <?php endwhile; ?>
            <?php else : ?>
            <tr>
                <td colspan="3">No users found</td>
            </tr>
            <?php endif ; ?>
        </tbody>
    </table>
    </div>
</body>

</html>
<?php
mysqli_close($conn);
?>