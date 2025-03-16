
<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Get book ID from URL

    $query = "DELETE FROM tb_book WHERE id = '$id'";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Failed to delete book');</script>";
    }
}
?>
