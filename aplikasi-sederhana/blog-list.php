<?php
include "mysql.php";

// SQL query to select blog posts
$conn = mysql_connect();
$sql = "SELECT ID,title, content FROM blog";
$result = $conn->query($sql);
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
                <h2>Daftar Blog Post</h2>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Check if we have results and output HTML for each row
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["title"]). "</td>";
                                echo "<td>" . htmlspecialchars($row["content"]) . "</td>";
                                echo "<td><a href='blog-edit.php?id=".$row['ID']."'>Edit</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>No posts found</td></tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>

<?php
// Close the database connection
$conn->close();
