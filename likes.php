<?php
session_start();
if (isset($_POST['image'])) {
    $image_id = $_POST['image'];
    $conn = mysqli_connect('localhost', 'root', '', 'myfb');
    if (mysqli_connect_error()) {
        die('connection failed');
    }
    $res="SELECT * FROM users WHERE email='".$_SESSION['login_user']."'";
        $result=mysqli_query($conn,$res);
        $result=mysqli_fetch_array($result);
        $result=$result['username'];
    $sql = "UPDATE posts SET likes = likes + 1 WHERE image = '$image_id' and user_name!='$result'";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
    
}
header("Location: posts.php");
?>
