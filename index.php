<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <style>
        .container{
            background-color: rgba(0,0,0,0.5);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 100px;
        }
        .container h1{
            text-align: center;
        }
        .container p{
            text-align: center;
        }
        .container input{
            margin-bottom: 10px;
        }
        .container input[type="submit"]{
            margin-top: 10px;
        }
        .action{
            text-align: center;
        }
    </style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Registration Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="age">
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>