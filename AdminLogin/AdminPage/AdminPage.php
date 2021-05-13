<?php require_once "newsController.php";
$results = mysqli_query($con, "SELECT * FROM info");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<!--alert msg-->
<?php if (isset($_SESSION['msg'])): ?>
    <div class="alert-msg">
        <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>
    </div>
<?php endif ?>
<!--alert msg-->
    <header class="main-header">
        <div class="container row">
            <div class="page-title">
                <h1>Admin Page</h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="taxcalculator.php">Tax Calculator</a></li>
                    <li><a href="userfeed.php">User Feed</a></li>
                </ul>
            </nav>

            <div class="search-bar">
                <input type="text" name="email" id="" required>
                <button type="submit">Add Admin</button>
            </div>

            <div class="search-bar">
                <nav class="main-nav">
                    <ul>
                        <li><button type="button"><a href="../login-user.php">Logout</a></button></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!-- display database-->
            <tbody>
               <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td>
                        <button class="btnn" type="button" onclick="document.location='adminView.php?edit=<?php echo $row['id']; ?>'">Edit</button></a>
                        <button class="btnn" type="button"  onclick= "document.location='newsController.php?del=<?php echo $row['id']; ?>'">Delete</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <!-- display database-->
        </table>
        
        <button class="open-button" onclick="openForm()">Add News</button>

        <div class="chat-popup" id="myForm">
            <form class="form-container" action="AdminPage.php" method="post" enctype="multipart/form-data">
                <h1>News</h1>
                <label for="title"><b>Title</b></label>
                <textarea placeholder="Title" name="title" required></textarea>
                <label for="description"><b>Description</b></label>
                <textarea placeholder="Description" name="description" required></textarea>
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <button type="submit" name="post" class="btn">Post</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        <footer class="footer group">
            <div class="copyright">Copyright &copy; 2019. All rights reserved</div>
            <div class="footer-links">
                <ul>
                    <li><a href="taxcalculator.php">Tax Calculator</a></li>
                    <li><a href="userfeed.php">User Feed</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>

</html>