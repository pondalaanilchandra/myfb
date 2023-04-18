
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .row {
                display: flex;
                justify-content: center;
            }
            
            .data{
                margin-top: 20px;
                margin-left: 600px;
                margin-right: 600px;
                margin-bottom: 20px;
                height: 500px;
                background-color: #f1f1f1;
                display: grid;
                grid-template-rows: 7% 86% 7%;
                
            }
            .upload-btn {
                background-color: black;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 20px;
                width: 100px;
                margin-left: 80px;
                text-align: center;

            }
            .upload-btn:hover {
                background-color: lightblue;
            }
            #file-input {
                display: none;
            }
            #uploaded-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                
            }

            .container {
                margin-top: 20px;
                margin-left: 600px;
                margin-right: 600px;
                margin-bottom: 20px;
                height: 500px;
                background-color: #f1f1f1;
                display: grid;
                grid-template-rows: 9% 7% 75% 9%;
                
            }
            #image {
                width: 100%;
                height: 100%;
            }
            button{
                background-color:transparent;
                border: 0%;
                border-color: transparent;
            }
            button:focus{
                outline: none;
            }
            .top{
                text-align: center;
                font-size: 30px;
                font-weight: 900;
                color: #343a40;
            }
            .bottom{
                font-size: 30px;
                font-weight: 900;
                color: #343a40;
            }
            .pic{
                border: 0px;
                border-color: transparent;
            }
nav {
    background-color: blue;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    font-size: 30px;
}
  
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    margin-left: auto;
}

li {
    margin-right: 20px;
}

a {
    color: #fff;
    text-decoration: none;
}

img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
body
{
    margin: 0;
}

#up{
    margin-left:-30px;
}




#l
      {
        margin-left: 20px;
        float: right;
      }
    </style>

  </head>
  <?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("location: login.php");
}
?>
  <body>
  <nav>
    <ul>
        <li id="l"><a href="posts.php">Posts</a></li>
        <li id="l"><a href="addpost.php">Add Post</a></li>
        <li id="l"><a href="profile.php">Profile</a></li>
    </ul>
    <ul>
        <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>   
     <form  class="container" action="add_postdb.php" method="post" enctype="multipart/form-data">   
        <input type="file" id="file-input"  name="photo" onchange="loadFile(event)"><label for="file-input" class="upload-btn">Add post</label></div>    
        <div class="top" ><?php echo $_SESSION['username']; ?> </div>
            <div class="pic"><img id="uploaded-image"></div>
            <div class="row"><input type="submit"  class="upload-btn" id="up" value="Upload"></div>
        </form>

            
        </div>
    

        <script>
            function f() {
                var x = document.getElementById("heart");
                if (x.style.color == "red") {
                    x.style.color = "black";
                    x.innerHTML = "<i class='fa fa-heart'> </i>";
                } else {
                    x.style.color = "red";
                    x.innerHTML = "<i class='fa fa-heart'> </i> liked!";
                }
            };
                function loadFile(event) {
          var uploadedImage = document.getElementById('uploaded-image');
          uploadedImage.src = URL.createObjectURL(event.target.files[0]);
                };
        </script>
    </body>

</html>
    