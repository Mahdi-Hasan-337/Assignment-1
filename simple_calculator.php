<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Normal Calculator</title>
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body>
    <?php include './nav.php'; ?>   
    <div class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center p-5">
            <div class="col-lg-4 col-md-12 col-md-12 p-5 mb-3" style="background: rgba(0, 242, 255, 0.354); ">
                <form action="" method="POST">
                    <h3 class="text-center mb-4">Normal Calculator</h3>
                    <div>
                        <input class="p-2" type="number" name="num1" step=any placeholder="Enter a number" style="width: 100%;border: none; font-size: 1.2rem;">
                    </div> <br>
                    <div>
                        <input class="p-2" type="number" name="num2" step=any placeholder="Enter a number" style="width: 100%; border: none; font-size: 1.2rem;">
                    </div> <br>
                    <div>
                        <select class="p-2" id="operation" name="operation" style="width: 100%; border: none; font-size: 1.2rem;">
                            <option value="addition" class="text-center">Addition</option>
                            <option value="substract" class="text-center">Substraction</option>
                            <option value="multiplication" class="text-center">Multiplication</option>
                            <option value="division" class="text-center">Division</option>
                        </select>
                    </div> <br>
                    <div>
                        <button class="p-2 bg-primary" type="submit" style="width: 100%; border: none; font-size: 1.2rem;">Calculate</button>
                    </div>
                </form>

                <div id="calcrslt">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $num1 = $_POST["num1"];
                            $num2 = $_POST["num2"];
                            $operation = $_POST["operation"];

                            $num1 = (float)$num1;
                            $num2 = (float)$num2;

                            switch ($operation) {
                                case "addition":
                                    $result = $num1 + $num2;
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Result: $result</p>";
                                    break;
                                case "substract":
                                    $result = $num1 - $num2;
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Result: $result</p>";
                                    break;
                                case "multiplication":
                                    $result = $num1 * $num2;
                                    echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Result: $result</p>";
                                    break;
                                case "division":
                                    if ($num2 != 0) {
                                        $result = $num1 / $num2;
                                        echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Result: $result</p>";
                                    } else {
                                        echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Divide by zero is not possible</p>";
                                    }
                                    break;
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