<!DOCTYPE html>
<html>
    <head>
        <title>Tax Calculator</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    
    <body>
    
        <header class="main-header">
            <div class="container row">
                <div class="page-title">
                    <h1>Tax Calculator</h1>
                </div>
                <nav class="main-nav">
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="AdminPage.html">Admin</a></li>
                    </ul>
                </nav>
                              
                <div class="search-bar">
                    <input type="text" name="search" id="">
                    <button type="submit">Search</button>
                </div>
            </div>
        </header>
        
        <div class="container">
            @foreach ($news as $singleNews)
                {{ $singleNews->title }}
                {{ $singleNews->description }}
            @endforeach
            
            <section class="article-list group">
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
            </section>
            <section class="article-list group">
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
            </section>
            <section class="article-list group">
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
                </figure>
                <figure class="article-info">
                    <img src="http://placehold.jp/300x300.png" class="myDIV" alt="">
                    <div class="hide"><button type="submit">Edit</button> <button type="submit">Delete</button></div>
                    <figcaption>Placeholder</figcaption>
            </section>
            <button class="open-button" onclick="openForm()">Add News</button>

                <div class="chat-popup" id="myForm">
                    <form class="form-container" action="{{ route('news.store')}}" method="POST">
                        @csrf
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
                        <li><a href="home.html">Home</a></li>
                        <li><a href="login.html">Log In</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="AdminPage.html">Admin</a></li>
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