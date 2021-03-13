<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

    <div class = "container">
        <br>
        <h1 class="text-white bg-dark text-center">
            Register for Employees
        </h1>
        <div class="col-lg-8 m-auto d-block">
            <form action="upload.php" method = "post" enctype= "multipart/form-data">

                <div class="form-group">
                    <label for="name">Enter Name: </label>
                    <input type="text" name="empname" id="name" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="phno">Enter Phone no: </label>
                    <input type="number" name="phno" id="phno" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="email">Enter Email: </label>
                    <input type="email" name="email" id="email" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="photo1">Upload Photo: </label>
                    <input type="file" name="file1" id="file1" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="photo2">Upload Doc: </label>
                    <input type="file" name="file2" id="file2" class="form-control"> 
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-success">

            </form>
        </div>
    </div>


</body>
</html>