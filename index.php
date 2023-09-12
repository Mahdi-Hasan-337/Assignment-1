<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment - 1</title>
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
        .all-task-link{
            /* font-size: 1.2rem;  */
            color: black; font-weight: bold; text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include './nav.php'; ?>
    <div class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center p-5">
            <div class="col-lg-4 col-md-12 col-md-12 p-5 mb-3" style="background: rgba(0, 242, 255, 0.354); ">
                <h1 class="text-center">Assignment - 1</h1> <hr>
                <a class="all-task-link" href="./personal_info.php">Task 1 : Personal Information Page</a><br>
                <a class="all-task-link" href="./temperature_converter.php">Task 2 : Temperature Converter</a><br>
                <a class="all-task-link" href="./grade_calculator.php">Task 3 : Grade Calculator</a><br>
                <a class="all-task-link" href="./even_odd_checker.php">Task 4 : Even or Odd Checker</a><br>
                <a class="all-task-link" href="./weather_report.php">Task 5 : Weather Report</a><br>
                <a class="all-task-link" href="./comparison_tool.php">Task 6 : Comparison Tool</a><br>
                <a class="all-task-link" href="./simple_calculator.php">Task 7 : Simple Calculator</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>