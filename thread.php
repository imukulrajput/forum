<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
      
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .jumbotron {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .media {
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.1);
            padding: 1rem;
        }

        .media-body {
            padding-left: 1rem;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        /* Responsive Styles */
        @media (max-width: 576px) {
            .jumbotron {
                padding: 1rem;
            }
        }
    </style>
      </style>
    <title>Welcome to iDiscuss-Coding forums</title>
   
</head>

<body>
<?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
   
    <?php
    $id = $_GET['threadid'];
     $sql = " SELECT * FROM `thread` WHERE thread_id = $id";
     $result = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($result)){
         $title = $row['thread_title'];
         $desc = $row['thread_desc'];
         $thread_user_id = $row['thread_user_id'];

         //query the users table to find out the name of op
         $sql2 = "SELECT user_email FROM `users` WHERE sno = $thread_user_id";
         $result2 = mysqli_query($conn, $sql2);
         $row2 = mysqli_fetch_assoc($result2);
         $posted_by = $row2['user_email'];
         
     } 
     ?>  


<?php
     $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      //insert  into comment db
      $comment = $_POST['comment'];
      $comment =str_replace("<","&lt;",$comment);
      $comment =str_replace(">","&gt;",$comment);
      $sno = $_POST['sno'];
      
      $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$sno', current_timestamp())";
      $result = mysqli_query($conn,$sql);
      $showAlert = true;
      if($showAlert){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> Your comment has been added! 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    }
    ?>
    
   <!-- category container st arts here-->  
   <div class="container my-4 bg-light">
   <div class="jumbotron">
    <h1 class="display-4"><?php echo $title; ?></h1>
    <p class="lead"><?php echo $desc; ?></p>
    <hr class="my-4">
    <p>Be civil. Don't post anything that a reasonable person would consider offensive, abusive, or hate speech.
    Respect our forum.</p>
    <p>Posted by:<em><?php echo $posted_by; ?></em></p>
  </div>
   </div>


   <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
  echo'  <div class="container">
  <h1 class="py-2">Post a comment</h1>
<form action=" ' . $_SERVER['REQUEST_URI'] . ' " method="post">
 <div class="form-group">
   <label for="exampleFormControlTextarea1">Type your comment</label>
 
   <textarea class="form-control" id="comment" name = "comment" rows="3"></textarea>
   <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
   </div>
 
 <button type="submit" class="btn btn-success">Post Comment</button>
</form>
  </div>'
 ;
}
   else{
echo'<div class="container">
<h1 class="py-2">Post a Comment</h1>
<p class="lead">You are not logged in. Please login to be able to Post a comments.</p>
</div>';
   }
?>


<div class="container mb-5" id="ques">
  <h1 class="py-2">Discussions</h1>
    

  <?php
  $id = $_GET['threadid'];
     $sql = " SELECT * FROM `comments` WHERE thread_id = $id";
     $result = mysqli_query($conn,$sql);
     $noResult = true;
     while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
          $id = $row['comment_id'];
         $content = $row['comment_content'];
        $comment_time = $row['comment_time'];
        $thread_user_id = $row['comment_by'];
        $sql2 = "SELECT user_email FROM `users` WHERE sno = $thread_user_id";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        

         echo '<div class="media my-3">
         <img src="img/userdefault.png" width="54px" class="mr-3" alt="....">
         <div class="media-body">
         <p class="fw-bold my-0">'.$row2['user_email'].' at '.$comment_time.'</p>
           
            '.$content.'
           
         </div>
          
       </div>';
    
        }

        if($noResult){
            echo'<div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">No Comments found</h1>
              <p class="lead">Be the first person to comment.</p>
            </div>
          </div>';
        }
  
     ?>




  

    <?php include 'partials/_footer.php'; ?>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
</body>
</html>