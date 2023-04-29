<?php
require '../../includes/head.php';
require '../../includes/menu.php';
?>

<body>
    <div class="content">
        <div class="row icono-menu">
            <a href="#">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="../../assets/images/menu.png" alt="Boton" onclick="toggleSidebar()">
                        <label>Menú</label>
                    </div>
                </div>
            </a>
        </div>
        <div class="container-fluid" style="margin-top: 2rem;">
            <div class="row card-operaciones">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <label class="col-sm-12">
                                    <h2>Dibujo de matrices</h2>
                                </label>
                            </div>
                        </div>
                        <div class="card-body input-matrices">
                            <div class="matrizA">
                                <div class="row">
                                    <p>Para hacer operaciones con matrices ingrese primero el número de filas y columnas para ambas matrices A y B, para eso ingresar los valores en <span class="badge rounded-pill badge-primary">número de filas</span> y en <span class="badge rounded-pill badge-primary">número de columnas</span>. Y despues dar clic en <span class="badge rounded-pill badge-success">Dibujar matrices</span>.</p>
                                </div>
                                <br>
                                <div class="row text-center">
                                    <h4 class="col-md-6">Matriz A</h4>
                                    <h4 class="col-md-6">Matriz B</h4>
                                </div>
                                <div class="wrapper mb-12 row">
                                    <!-- Input para las filas de la matriz A -->
                                    <h5 class="col-sm-2 col-form-label"><span class="badge badge-secondary">N° filas</span></h5>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Número de filas" id="numFilas">
                                    </div>
                                    <label class="col-md-2"></label>
                                    <!-- Input para las filas de la matriz B -->
                                    <h5 class="col-sm-2 col-form-label"><span class="badge badge-secondary">N° filas</span></h5>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Número de filas" id="numFilasB">
                                    </div>
                                </div>
                                <br>
                                <div class="wrapper mb-12 row">
                                    <!-- Input para las columnas de la matriz A -->
                                    <h5 class="col-sm-2 col-form-label"><span class="badge badge-secondary">N° columnas</span></h5>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Número de columnas" id="numColumnas">
                                    </div>
                                    <label class="col-md-2"></label>
                                    <!-- Input para las columnas de la matriz B -->
                                    <h5 class="col-sm-2 col-form-label"><span class="badge badge-secondary">N° columnas</span></h5>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Número de columnas" id="numColumnasB">
                                    </div>
                                </div>
                                <br>
                                <div class="row text-center">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <button style="border-radius: 10px;" type="button" class="btn btn-outline-success" onclick="dibujarInputs()">Dibujar matrices</button>
                                    </div>
                                </div>
                            </div>
                            <hr style="border: 3px solid black; width: 100%;">
                            <br>
                            <div class="row">
                                <p>Seleccione la operación que realizará y despues ingrese los valores de cada matriz tanto para la matriz A y B, una vez hecho esto dar clic en <span class="badge rounded-pill badge-primary">Calcular</span>.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <select id="operacionMatriz">
                                        <option value="" selected disabled>Seleccione la operación</option>
                                        <option value="suma">Suma</option>
                                        <option value="resta">Resta</option>
                                        <option value="multiplicacion">Multiplicación</option>
                                        <option value="escalar">Producto de un escalar por una matriz</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <label for="escalarInput">Ingrese un escalar:</label>
                            <input type="text" id="escalarInput" name="escalarInput"> -->

                            <div class="dibujos-matrices">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 align="left" id="matrizA"></h5>
                                        <div align="left" id="inputs"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 align="right" id="matrizB"></h5>
                                        <div align="right" id="inputsb"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 text-center">
                                <button style="border-radius: 10px;" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal" id="" onclick="calcularMatriz()">Calcular</button>
                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div style="background-color: #1fde82;" class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Matriz resultante</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="matriz-generada">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- <div align="center" id="resultados"></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button style="border-radius: 10px;" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style=" background: rgb(5,0,83); background: linear-gradient(90deg, rgba(5,0,83,1) 0%, rgba(54,54,203,1) 29%, rgba(0,212,255,1) 100%); ">
                            <div class="row">
                                <div style="text-align: center;" class="col-sm-12">
                                    <label style="font-weight: bold; font-size: 23px; color: #000; font-family: cursive;">Elaborado por un integrante de:</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-sm-3"></label>
                                <div class="col-sm-6">
                                    <div class="image-container" id="imgMaster">
                                        <img src="../../assets/images/software-master.gif" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</body>

<?php
require '../../includes/footer.php';
?>