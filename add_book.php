<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>Tambah Buku</title>
</head>
<body>
    <?php include ("navbar.php") ?>
    <center>
        <div class="container">
            <h1>Add Book</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="create.php" method="POST">
                            <label>Title:</label>
                            <input type="text" name="title" required><br>
                            
                            <label>Writer:</label>
                            <input type="text" name="writer" required><br>
                            
                            <label>Publishing Year:</label>
                            <input type="number" name="publishing_year" required><br>
                            
                            <button type="submit" name="submit">Add Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
