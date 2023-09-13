<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Weather Report</title>
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
        .input-field{
            border: none; 
            width: 100%; 
            margin-right: 2px;
        }
        .rslt-field{
            width:100%; 
            font-size: 1.2rem;
        }
        .btn-css{
            width: 100%; 
            border: none; 
            font-size: 1.1rem; 
            font-weight:600; 
            letter-spacing: 0.1rem;
        }
    </style>
</head>
<body>
    <?php include './nav.php'; ?>   
    <div class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center p-5">
            <div class="col-lg-4 col-md-12 col-md-12 p-5 mb-3" style="background: rgba(0, 242, 255, 0.354); ">
                <form action="#" method="POST">
                    <h3 class="text-center mb-4">Weather Report</h3>
                    <div class="d-flex justify-content-between">
                        <input class="p-2" type="number" name="num" step="any" placeholder="Enter the temperature" style="border: none; width: 100%; margin-right: 2px;">
                        <select class="p-2" id="op1" name="op1" style="border: none;">
                            <option value="cel" class="text-center">Celsius</option>
                            <option value="fah" class="text-center">Fahrenheit</option>
                        </select>
                    </div><br>
                    <div>
                        <button class="btn-css p-2 bg-info" type="submit">Check</button>
                    </div>
                </form>

                <div id="calcrslt">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $num = isset($_POST["num"]) && $_POST['num'] !== "" ? (float)$_POST["num"] : null;

                            if ($num === null) {
                                echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Input fields maybe empty</p>";
                            } else {
                                $scale = $_POST['op1'];

                                if ($scale == 'fah') {
                                    $num = ($num - 32) * 5 / 9; // Convert Fahrenheit to Celsius
                                } 

                                if ($num <= 0) {
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>It's freezing</p>";
                                } elseif ($num > 0 && $num <= 10) {
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>It's cool</p>";
                                } elseif ($num > 10 && $num <= 20) {
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>It's cold</p>";
                                } elseif ($num > 20 && $num <= 30) {
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>It's warm</p>";
                                } else {
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>It's hot</p>";
                                }
                            }
                        }
                    ?>
                </div>
                <div>
                    <button class="p-2 bg-secondary mt-2" type="button" onclick="resetResult()" style="width: 100%; border: none; font-size: 1.1rem; font-weight:600; letter-spacing: 0.1rem;">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript function to reset the result -->
    <script>
        function resetResult() {
            document.getElementById('calcrslt').innerHTML = "";
        }
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>