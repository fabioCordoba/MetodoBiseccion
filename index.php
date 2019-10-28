<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Biseccion PHP - Fabio Cordoba</title>
    <style>
     body{
         background-image: url('') !important;
         background-repeat: no-repeat;
         background-color: black;
         background-position: center 50%;
         height: 100vh;
         width: 100vw;
    }
    th, td{
        text-align: center;
        font-style: italic !important;
        font-size: 13px;
    }
    h3,h4{
        text-align: center;
        font-style: italic !important;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top:20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Metodo De Biseccion - PHP</h1>
                        <h6 class="font-italic"><strong>Desarrollador Por: </strong>Fabio Jair Cordoba Lagares. | Metodos Numericos | Ingenieria De sistemas | Universidad De Cordoba</h6>
                    </div>
                    <div class="card-body">
                        <!-- Body Form -->
                        <div class="row">
                            <div class="col-lg-4 col-md-12 ">
                                <form action="" method="POST">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text font-italic" id="inputGroup-sizing-sm">f(x) = </span>
                                        </div>
                                <!----> <input type="text" class="form-control" id="ecuacion" name="ecuacion" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        <div class="input-group-prepend input-group-append">
                                            <span class="input-group-text font-italic" id="inputGroup-sizing-sm">Ea=</span>
                                        </div>
                                <!----> <input type="text" class="form-control" aria-label="Sizing example input" id="error" name="error" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text font-italic" id="inputGroup-sizing-sm">Intervalo Izq</span>
                                        </div>
                            <!---->     <input type="text" class="form-control" aria-label="Sizing example input" id="int_a" name="int_a" aria-describedby="inputGroup-sizing-sm">
                                        <div class="input-group-prepend input-group-append">
                                            <span class="input-group-text font-italic" id="inputGroup-sizing-sm">Intervalo Der</span>
                                        </div>
                            <!---->     <input type="text" class="form-control" aria-label="Sizing example input" id="int_b" name="int_b" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" class="btn btn-sm btn-outline-success font-italic" name="calcular" id="calcular"  value="Calcular">
                                    </div> 
                                </form>  
                            </div>
                            <?php
                                if (isset($_POST["calcular"])) {
                                    $ecua=$_POST["ecuacion"];
                                    $inA = $_POST["int_a"];
                                    $inB = $_POST["int_b"];
                                    $er = $_POST["error"];
                                    if($ecua != "" && $inA != "" && $inB != ""){
                                        if($er != ""){
                                            echo '<div class="col-lg-8 col-md-12">
                                                    <h3><strong>'.$ecua.'</strong></h3>
                                                    <h4><strong>Intervalo ['.$inA.' , '.$inB.' ]</strong></h4>
                                                    <h4><strong>Error Aprox ='.$er.'</strong></h4>
                                                </div>';
                                        }else{
                                            echo '<div class="col-lg-8 col-md-12">
                                                    <h3><strong>'.$ecua.'</strong></h3>
                                                    <h4><strong>Intervalo ['.$inA.' , '.$inB.' ]</strong></h4>
                                                </div>';
                                        }   
                                    }
                                }
                            ?>
                        </div>
                        <!-- Body Form -->
                        <div class="row" style="margin-top:10px">
                            <div class="col-lg-12 col-md-12">
                                <table class="table table-hover table-sm table-striped table-bordered">
                                    <thead class="">
                                        <tr>
                                            <th>i</th>
                                            <th>a</th>
                                            <th>b</th>
                                            <th>f(a)</th>
                                            <th>f(b)</th>
                                            <th>xi</th>
                                            <th>f(xi)</th>
                                            <th>|xi-(xi-1)|</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!--php-->
                                    <?php
                                        include ("Operaciones.php");  
                                    ?>
                                    <!--php-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mCustomScrollbar.min.js"></script>
</body>
</html>
