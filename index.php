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
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Styles */
        @media (max-width: 576px) {
            .carousel-item img {
                height: 250px;
            }
        }
    </style>
    <title>Welcome to iDiscuss-Coding forums</title>
</head>
 
<body>
   
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    
    <!--slider starts here-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/2.jpeg" class="d-block w-100" alt="..."> 
            </div>
            <div class="carousel-item">
                <img src="img/2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/1600x400/?coding,programmer " class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-3">
        <h2 class="text-center my-3">iDiscuss - Browse categories</h2>
        <div class="row">
          <!-- fetch all the categories-->
          
            <!-- use a for loop to iterate through categories-->
           <?php 
           $sql = "SELECT * FROM `categories`";
           $result = mysqli_query($conn,$sql);
           while($row = mysqli_fetch_assoc($result)){
           // echo $row['category_id'];
          // echo $row['category_name'];
          
          $id = $row['category_id'];
          $cat = $row['category_name'];
          $desc = $row['category_discription'];

          echo '   <div class="col-md-4 my-2">
          <div class="card" style="width: 18rem;">
              <img src="img/card-'.$id.'.jpg" class="card-img-top" alt="image for this category">
              <div class="card-body">
                  <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">'.$cat.'</a></h5>
                  <p class="card-text">'.substr($desc,0,90).'....</p>
                  <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">view Threads</a>
              </div>
          </div>
      </div>';
           }
           ?>

         
            

        </div>
        
    </div>
    



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