<?php
require '../../includes/head.php';
require '../../includes/menu.php';
?>

<body>
    <div class="container pagina-principal">
        <div class="row matrices">
            <!-- Section Matriz A -->
            <div class="col-md-6">
                <div class="form">
                    <h1 class="col-md-6 miTitulo">Matriz A</h1>
                    <div class="form-item">
                        <input type="text" id="numFilas" autocomplete="off" required>
                        <label>Número de filas</label>
                    </div>
                    <div class="form-item">
                        <input type="text" id="numColumnas" autocomplete="off" required>
                        <label>Número de columnas</label>
                    </div>
                </div>
            </div>
            <!-- Section Matriz B -->
            <div class="col-md-6">
                <div class="form">
                    <h1 class="col-md-6">Matriz B</h1>
                    <div class="form-item">
                        <input type="text" id="numFilasB" autocomplete="off" required>
                        <label>Número de filas</label>
                    </div>
                    <div class="form-item">
                        <input type="text" id="numColumnasB" autocomplete="off" required>
                        <label>Número de columnas</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Button Painter -->
        <div class="row">
            <label class="col-md-5"></label>
            <label class="col-md-2 dibujar">
                <button type="button" id="miBoton" onclick="dibujarInputs()">Dibujar</button>
            </label>
            <label class="col-md-2"></label>
            <label class="col-md-2 imgClear text-right">
                <h5>
                    Limpiar
                </h5>
                <img src="../../assets/images/boton-x.png" id="clearInputs" onclick="clearInputs()">
            </label>
        </div>
        <!-- Section Modal Matrices -->
        <div class="modal fade" id="mi-modal" tabindex="-1" role="dialog" aria-labelledby="mi-modal-titulo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content modalMatrices">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mi-modal-titulo">Matrices generadas</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="dMatriz">
                        <div class="row cardMatrices">
                            <div class="col-md-12">
                                <div class="row">
                                    <p>Ingrese los datos en las matrices generadas A y B. Despues de haber ingresado los valores en las matrices seleccione la operacion que desea realizar y despues dar clic en <span class="badge rounded-pill badge-primary">Calcular</span>.</p>
                                </div>
                            </div>
                            <div class="col-md-6 cardPainterLeft">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Matriz A</h5>
                                        </div>
                                        <div class="card-body" id="inputs"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 cardPainterRight">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Matriz B</h5>
                                        </div>
                                        <div class="card-body" id="inputsb"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3 text-center mt-4">
                                <select id="operacionMatriz">
                                    <option value="" selected disabled>Seleccione la operación</option>
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicacion">Multiplicación</option>
                                    <!-- <option value="escalar">Producto de un escalar por una matriz</option> -->
                                </select>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-3 mt-4 text-center">
                                <!-- Para buenas practicas, no es conveniente mezclar JS con HTML -->
                                <button type="button" class="btn btn-outline-primary" onclick="calcularMatriz(); document.getElementById('hello-text').style.display = 'block';">Calcular</button>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <hr>
                        <!-- Seccion para la matriz resultante -->
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12 text-center" id="hello-text">
                                        <h4>Matriz resultante</h4>
                                    </div>
                                </div>
                                <div align="center" id="resultados"></div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container opMatrices">
            <div class="row">
                <label class="col-sm-3"></label>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Elaborado por un integrante de:</h5>
                        </div>
                        <div class="card-body">
                            <img src="../../assets/images/software-master.gif">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
require '../../includes/footer.php';
?>