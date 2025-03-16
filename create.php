<?php
include 'connect.php';

// ==================1==================
// Save the data sent from the POST request to variables
if (isset($_POST['title']) && isset($_POST['writer']) && isset($_POST['publishing_year'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $writer = mysqli_real_escape_string($conn, $_POST['writer']);
    $publishing_year = (int) $_POST['publishing_year'];
    
    // ==================2==================
    // Define $query to insert data into the database
    $query = "INSERT INTO tb_book (title, writer, publishing_year) VALUES ('$title', '$writer', '$publishing_year')";
    
    // ==================3==================
    // Execute the query
    if (mysqli_query($conn, $query)) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>
