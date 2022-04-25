<?php 

    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " select * from user where User_ID='".$UserID."'"; //sua user thanh table cua ban
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['User_ID'];
        $UserName = $row['User_Name'];
        $UserEmail = $row['User_Email'];
        $UserAge = $row['User_Age'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            margin-top: 100px;
        }
        .bg-dark{
            background-color: #343a40;
        }
        .card{
            margin-top: 10px;
            background-color: #343a40;
            color: white;
        }
        .card-header{
            background-color: #343a40;
            color: white;
        }
        .card-body{
            background-color: #343a40;
            color: white;
        }
        .card-footer{
            background-color: #343a40;
            color: white;
        }
        .btn-primary{
            background-color: #343a40;
            color: white;
        }
        .btn-primary:hover{
            background-color: #343a40;
            color: white;
        }
        .btn-danger{
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $UserName ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $UserEmail ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="age" value="<?php echo $UserAge ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>