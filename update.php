<?php
include 'connect.php';

// ==================1==================
// If statement to get POST data for update
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $publishing_year = $_POST['publishing_year'];
    // ==================2==================
    // Create query to update the book

    $query = "UPDATE tb_book SET title='$title', writer='$writer', publishing_year='$publishing_year' WHERE id='$id'";
    mysqli_query($conn, $query);
    // ==================3==================
    // Execute the query
    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Failed to update book');</script>";
    }
}
?>