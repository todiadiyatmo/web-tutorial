<?php
include "mysql.php";

// SQL query to select blog posts
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysql_connect();
    // Get data from the form
    $id = $_POST['id'] ?? 0;
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    // Update the database
    if ($id > 0 && !empty($title) && !empty($content)) {
        $stmt = $conn->prepare("UPDATE blog SET title = ?, content = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $content, $id);
        if ($stmt->execute()) {
            $message = "Post updated successfully. <a href='blog-list.php'>View Posts</a>";
        } else {
            $message = "Error updating post: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $message = "All fields are required.";
    }
} 
if (isset($_REQUEST['id'])) {

    // Get the ID from the URL
    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

    // Fetch the post from the database
    if ($id > 0) {
        $conn = mysql_connect();
        $stmt = $conn->prepare("SELECT title, content FROM blog WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($post = $result->fetch_assoc()) {
            // Post found
        } else {
            die('Post not found.');
        }
        $stmt->close();
    } else {
        die('Invalid ID.');
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
                <h2>Edit Post</h2>

                <?php if (isset($message)) { ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo $message ?>
                    </div>
                <?php } ?>

                <form action="blog-edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required><?php echo htmlspecialchars($post['content']); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
// Close the database connection
$conn->close();
