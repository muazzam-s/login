<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <title>Document</title>
</head>
<body>
    
    <div class="container"> 
        <h1 class="text-center text-white bg-dark">Registered profiles</h1>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">

            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Phone no.</th>
                <th>Email ID</th>
                <th>Photo</th>
                <th>Document</th>          
            </thead>

            <tbody>

           <?php 

            require_once "config.php";
            if(isset($_POST['submit'])) { 

                //!all the elements of the form
                $name = $_POST['empname'];
                $phno = $_POST['phno'];
                $email = $_POST['email'];
                $file1 = $_FILES['file1'];
                $file2 = $_FILES['file2'];

                print_r($name);
                echo "<br>";
                // print_r($file1);

                $fileName1 = $file1['name'];
                $fileError1 = $file1['error'];
                $fileTmp1 = $file1['tmp_name'];
                $fileExt1 = explode('.',$fileName1);
                $fileCheck1 = strtolower(end($fileExt1));

                $fileName2 = $file2['name'];
                $fileError2 = $file2['error'];
                $fileTmp2 = $file2['tmp_name'];
                $fileExt2 = explode('.',$fileName2);
                $fileCheck2 = strtolower(end($fileExt2));


                //!types of files I need to store

                $fileExtStored1 = array('png', 'jpg', 'jpeg', 'pdf', 'docx');
                $fileExtStored2 = array('png', 'jpg', 'jpeg', 'pdf', 'docx');


                if (in_array($fileCheck1, $fileExtStored1)) {

                    $destinationFile1 = 'upload/'.$fileName1;
                    move_uploaded_file($fileTmp1, $destinationFile1);
                    $destinationFile2 = 'upload/'.$fileName2;
                    move_uploaded_file($fileTmp2, $destinationFile2);

                    $q1 = "INSERT INTO `emp`(`name`, `phone`, `email`, `photo`, `certificate`) 
                    VALUES ('$name', '$phno', '$email', '$destinationFile1', '$destinationFile2')";

                    $query1 = mysqli_query($conn, $q1);

                }


                // * for second file

                // $fileExtStored2 = array('png', 'jpg', 'jpeg', 'pdf', 'docx');
                // if (in_array($fileCheck2, $fileExtStored2)) {

                //     $destinationFile2 = 'upload/'.$fileName2;
                //     move_uploaded_file($fileTmp2, $destinationFile2);

                //     $q2 = "INSERT INTO `emp`(`certificate`) 
                //     VALUES ('$destinationFile2')";

                //     $query2 = mysqli_query($conn, $q2);
                    
                // }


            }

           ?>
            
            

            </tbody>

        </table>
    </div>
</body>
</html>