<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES['input_files']['name'];
    $file_type = $_FILES['input_files']['type'];
    $file_size = $_FILES['input_files']['size'];
    $file_tmp_name = $_FILES['input_files']['tmp_name'];
    $file_error = $_FILES['input_files']['error'];

    // Untuk memindahkan file sementara dari tmp folder
    move_uploaded_file($file_tmp_name, __DIR__ . "/files/" . $file_name);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?= $file_name ?></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><?= $file_type ?></td>
        </tr>
        <tr>
            <td>Size</td>
            <td><?= $file_size ?></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><?= $file_tmp_name ?></td>
        </tr>
        <tr>
            <td>Error</td>
            <td><?= $file_error ?></td>
        </tr>
    </table>
<?php } ?>
 
    <form action="" method="post" enctype="multipart/form-data">
        <label> Files
            <input type="file" name="input_files">
        </label>
        <input type="submit" value="Upload">
    </form>
</body>
</html>