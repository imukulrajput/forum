<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <style> 
   
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }

        /* Resource card styles */
        .resource-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
        }

        .resource-card-header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
        }

        .resource-card-header h2 {
            margin: 0;
            font-size: 20px;
        }

        .resource-card-body {
            padding: 20px;
        }

        .resource-card-body p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .resource-card-footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
        }

        .category-filter {
            text-align: center;
            margin-bottom: 20px;
        }

        .category-filter select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            background-color: #f9f9f9;
            border: 1px solid #ced4da;
        }

        /* Pagination styles */
        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            margin: 0 5px;
            border-radius: 5px;
        }

        .pagination a.active {
            background-color: #0056b3;
        }
    </style>
  </head>
  <body>
  
  <div class="container">
    <h1>Resource Library</h1>

    <!-- Category filter -->
    <div class="category-filter">
        <label for="category">Filter by Category:</label>
        <select name="category" id="category">
            <option value="all">All Categories</option>
            <option value="programming">Programming</option>
            <option value="web-development">Web Development</option>
            <option value="data-science">Data Science</option>
            <!-- Add more categories as needed -->
        </select>
    </div>

    <!-- Resource cards -->
    <div class="row">
        <div class="col-md-4">
            <div class="resource-card">
                <div class="resource-card-header">
                    <h2>DSA+JAVA</h2>
                </div>
                <div class="resource-card-body">
                    <p> Data Structures and Algorithms (DSA) guide using Java</p>
                </div>
                <div class="resource-card-footer">
                    <a href="https://www.youtube.com/playlist?list=PLfqMhTWNBTe3LtFWcvwpqTkUSlB32kJop" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="resource-card">
                <div class="resource-card-header">
                    <h2>Web-Development</h2>
                </div>
                <div class="resource-card-body">
                    <p>Web-Development course by code with Harry</p>
                </div>
                <div class="resource-card-footer">
                    <a href="https://www.youtube.com/playlist?list=PLu0W_9lII9agq5TrH9XLIKQvv0iaF2X3w" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="resource-card">
                <div class="resource-card-header">
                    <h2>Python</h2>
                </div>
                <div class="resource-card-body">
                    <p>Full Python course by Apna college</p>
                </div>
                <div class="resource-card-footer">
                    <a href="https://youtu.be/ERCMXc8x7mc?si=Y_1U_Jzlqg9Xw4Gy" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
         
        <!-- Add more resource cards here -->
    
   </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>



