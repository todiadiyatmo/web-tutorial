<?php
include "mysql.php";

// SQL query to select blog posts
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysql_connect();
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO blog (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);
    
    // Execute and check
    if ($stmt->execute()) {
        $message = "Post baru berhasil dibuat";
    } else {
        $message = $stmt->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <!-- Include Bootstrap CSS from a CDN -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php include "blog-nav.php" ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <h2>Tambah Post Baru</h2>

                <?php if( isset($message) ) { ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo $message ?>
                    </div>
                <?php }?>

                <form id="addPostForm" action="blog-add.php" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
// Close the database connection
$conn->close();
