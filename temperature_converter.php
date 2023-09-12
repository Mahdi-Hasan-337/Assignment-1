<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Temperature Converter</title>
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
                <form action="#" method="POST">
                    <h3 class="text-center mb-4">Temperature Converter</h3>
                    <div class="d-flex justify-content-between">
                        <input class="p-2" type="number" name="num" step="any" placeholder="Enter the temperature" style="border: none; width: 100%; margin-right: 2px;">
                        <select class="p-2" id="op1" name="op1" style="border: none;">
                            <option value="cel" class="text-center">Celsius</option>
                            <option value="fah" class="text-center">Fahrenheit</option>
                        </select>
                    </div><br>
                    <div class="d-flex justify-content-between">
                        <input class="p-2" type="number" name="num" step="any" placeholder="Convert to" style="border: none; width: 100%; margin-right: 2px;" readonly>
                        <select class="p-2" id="op2" name="op2" style="border: none;">
                            <option value="cel" class="text-center">Celsius</option>
                            <option value="fah" class="text-center">Fahrenheit</option>
                        </select>
                    </div><br>
                    <!-- <div>
                        <input class="p-2" type="number" name="num" step="any" placeholder="Select where you convert" style="border: none; margin-right: 2px;">
                        <select class="p-2" id="op2" name="op2" style="border: none;">
                            <option value="cel" class="text-center">Celsius</option>
                            <option value="fah" class="text-center">Fahrenheit</option>
                        </select>
                    </div> <br> -->
                    <div>
                        <button class="p-2 bg-info" type="submit" style="width: 100%; border: none; font-size: 1.1rem; font-weight:600; letter-spacing: 0.1rem;">Convert</button>
                    </div>
                </form>

                <div id="calcrslt">
                    <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $num = $_POST["num"];
                            $op1 = $_POST["op1"];
                            $op2 = $_POST["op2"];

                            $num = (float)$num;

                            if(($op1 == 'cel' && $op2 == 'cel') || ($op1 == 'fah' && $op2 == 'fah')){ 
                                $result = $num;                          
                                echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Result: $result</p>";
                            }elseif ($op1 == 'cel' && $op2 == 'fah') {
                                $result = ($num * 1.8) + 32;
                                echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Result: $result</p>";
                            } elseif($op1 == 'fah' && $op2 == 'cel'){
                                $result = ($num - 32) * 5/9;
                                echo "<p class='text-center bg-light p-2 mt-3' style='font-size: 1.1rem;'>Result: $result</p>";
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