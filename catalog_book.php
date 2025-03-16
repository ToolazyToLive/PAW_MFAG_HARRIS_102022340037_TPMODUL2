<?php
include 'connect.php';

// Fetch books from database
$query = "SELECT * FROM tb_book";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1>Book Catalog</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Writer</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                while ($book = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($book['title']); ?></td>
                    <td><?= htmlspecialchars($book['writer']); ?></td>
                    <td><?= htmlspecialchars($book['publishing_year']); ?></td>
                    <td>
                        <a href="edit_book.php?id=<?= $book['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $book['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="add_book.php" class="btn btn-primary">Add Book</a>
    </div>
</body>
</html>

