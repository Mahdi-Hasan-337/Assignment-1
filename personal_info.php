<?php
    $name = "Mahdi Hasan";
    $age = 23;
    $country = "Bangladesh";
    $brief_introduction = "I am $name. I am $age years old. I am a citizen of $country.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Personal Information</title>
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>
    <?php include './nav.php'; ?>   
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center p-5">
            <div class="col-lg-6 col-md-12 p-5 mb-3 mt-5" style="background: rgba(0, 242, 255, 0.354);">
                <h3 class="text-center mb-3">Personal Information</h3>
                <div class="myname d-flex justify-content-around">
                    <p class="col-3">Name</p>
                    <p class="col-6"><?php echo $name ?></p>
                </div>
                <div class="myname d-flex justify-content-around">
                    <p class="col-3">Age</p>
                    <p class="col-6"><?php echo $age ?></p>
                </div>
                <div class="myname d-flex justify-content-around">
                    <p class="col-3">Country</p>
                    <p class="col-6"><?php echo $country ?></p>
                </div>
                <div class="myname d-flex justify-content-around">
                    <p class="col-3">Brief Introduction</p>
                    <p class="col-6"><?php echo $brief_introduction ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>