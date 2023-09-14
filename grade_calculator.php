<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Grade Calculator</title>
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
        <div class="row vh-100 justify-content-center align-items-center p-5">
            <div class="col-lg-4 col-md-12 col-md-12 p-5 mb-3 shadow-lg" style="background: rgba(0, 242, 255, 0.354); ">
                <form action="#" method="POST">
                    <h3 class="text-center mb-4">Grade Calculator</h3>
                    <input class="input-field p-2 mb-3" type="number" name="sub1" step="any" placeholder="Enter the mark of test 1">
                    <input class="input-field p-2 mb-3" type="number" name="sub2" step="any" placeholder="Enter the mark of test 2">
                    <input class="input-field p-2 mb-3" type="number" name="sub3" step="any" placeholder="Enter the mark of test 3">
                    <div>
                        <button class="p-2 bg-info" type="submit" style="width: 100%; border: none; font-size: 1.1rem; font-weight:600; letter-spacing: 0.1rem;">Find the Grade</button>
                    </div>
                </form>

                <div id="calcrslt">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $sub1 = isset($_POST["sub1"]) && $_POST['sub1'] !== "" ? (float)$_POST["sub1"] : null; /// null checking
                            $sub2 = isset($_POST["sub2"]) && $_POST['sub2'] !== "" ? (float)$_POST["sub2"] : null;
                            $sub3 = isset($_POST["sub3"]) && $_POST['sub3'] !== "" ? (float)$_POST["sub3"] : null;

                            // Check if any of the input fields are empty or not valid numbers
                            if ($sub1 === null || $sub2 === null || $sub3 === null ||
                                $sub1 > 100 || $sub2 > 100 || $sub3 > 100 ||
                                $sub1 < 0 || $sub2 < 0 || $sub3 < 0) {
                                echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Something went wrong...<br>Please, try again...!!!;</p>";
                            } else {
                                $rslt = ($sub1 + $sub2 + $sub3) / 3;
                                
                                if ($rslt >= 70 && $rslt <= 100) { /// 70 -100 => A
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Average : $rslt <br> Grade : A</p>";
                                } elseif ($rslt >= 55 && $rslt <= 69) {  /// 55 - 69 => B
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Average : $rslt <br> Grade : B</p>";
                                } elseif ($rslt >= 45 && $rslt <= 54) {  /// 45 - 54 => C
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Average : $rslt <br> Grade : C</p>";
                                } elseif ($rslt >= 40 && $rslt <= 44) {  /// 40 - 44 => D 
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Average : $rslt <br> Grade : D</p>";
                                } elseif ($rslt >= 0 && $rslt <= 39) {   /// 00 - 39 => F
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Average : $rslt <br> Grade : F</p>";
                                }
                            }
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