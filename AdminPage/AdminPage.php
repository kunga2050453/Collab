<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <body>
    
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
                            <li><button type="button"><a href="login.php">Logout</a></button></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
        <div class="container">
            <section class="article-list group">
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
            </section>
            <section class="article-list group">
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
            </section>
            <section class="article-list group">
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="overlay"><button class="button">Edit</button> <button class="button">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
            </section>
            <button class="open-button" onclick="openForm()">Add News</button>

                <div class="chat-popup" id="myForm">
                    <form class="form-container">
                        <h1>News</h1>
                        <label for="title"><b>Title</b></label>
                        <textarea placeholder="Title" name="title" required></textarea>	
                        <label for="description"><b>Description</b></label>
                        <textarea placeholder="Description" name="description" required></textarea>
                        <label for="image"><b>Image</b></label>
                        <div class="drag-area">
                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <header>Drag & Drop to Upload Image</header>
                            <span>OR</span>
                            <button>Browse File</button>
                            <input type="file" hidden>
                        </div>
                        <button type="submit" class="btn">Post</button>
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