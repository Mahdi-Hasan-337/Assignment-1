<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Comparison Tool</title>
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
        .reset-btn{
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
        <div class="row vh-100 justify-content-center align-items-center  p-5">
            <div class="col-lg-4 col-md-12 col-md-12 p-5 mb-3 shadow-lg" style="background: rgba(0, 242, 255, 0.354); ">
                <form action="#" method="POST">
                    <h3 class="text-center mb-4">Comparison Tool</h3>
                    <input class="input-field p-2 mb-3" type="number" name="num1" step="any" placeholder="Enter a number">
                    <input class="input-field p-2 mb-3" type="number" name="num2" step="any" placeholder="Enter a number">
                    <div>
                        <button class="btn-css p-2 bg-info" type="submit">Check</button>
                    </div>
                </form>

                <div id="calcrslt">
                    <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $num1 = isset($_POST["num1"]) && $_POST['num1'] !== "" ? (float)$_POST["num1"] : null;
                            $num2 = isset($_POST["num2"]) && $_POST['num2'] !== "" ? (float)$_POST["num2"] : null;
                            
                            $rslt = ($num1 == null && $num2 == null) ? 
                                    "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Empty Field...!!!</p>": 
                                    (($num1 > $num2) ? 
                                    "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>$num1 is the largest</p>": 
                                    "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>$num2 is the largest</p>");
                            echo $rslt;
                        }
                    ?>
                </div>
                <div>
                    <button class="reset-btn p-2 bg-secondary mt-2" type="button" onclick="resetResult()">Reset</button>
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