<?php

// Display the images and like buttons
$conn=mysqli_connect('localhost',"root","","myfb");
$sql = "SELECT * FROM posts";
$files=glob("img/.");
$result = mysqli_query($conn, $sql);
if (mysqli_connect_error()){
    die('connection failed');
}
mysqli_close($conn);

session_start()
?>
<html>
<head>
    <style>
        div {
            color: darkblue;
            font-size: 30px;
            align-content: center;
            text-align: center;
            margin-top: 10px;}
        img {
            width: 300px;
            height: 300px;
            border-radius: 10px;
            display: cover;
        }
body
{
    margin: 0;
}
        body{
            background:url("d.jpg");
            background-size:cover;
                }
                h2{
                    margin-bottom: -5px;
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
#like {
    background-color: blue;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    margin-left: 10px;
}
#like:hover {
    background-color: red;
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
.row {
    display: grid;
grid-template-columns: 1fr 1fr 1fr;
column-gap: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;

}

#post {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
    padding: 10px;
    background-color: white;
    border-radius: 5%;
    box-shadow: 5px 5px 5px 5px grey;

}
#l
      {
        margin-left: 20px;
        float: right;
      }
    </style>
  </head>
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

 <div  class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div id="post">
            <h2><?php echo $row['user_name']; ?></h2>
                    <img src="<?php echo $row['image']; ?>" alt="User Image">
                    <form action="likes.php" method="post">
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                        <button type="submit" id="like">&#10084 <?php echo $row['likes']; ?></button>
                    </form>
                </div>
        <?php } ?>
    </body>
</html>