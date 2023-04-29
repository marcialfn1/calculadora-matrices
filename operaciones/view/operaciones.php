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
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3 text-right">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                            Abrir Modal
                        </button>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Título del Modal</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Contenido del modal</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="container-fluid" style="margin-top: 2rem;">
            <div class="row card-multiplicacion">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <label class="col-sm-12">
                                    <h2>Producto de matrices (3X3)</h2>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <form name="matriza">
                                        <h5 style="margin-left: 130px; margin-bottom: -5px;">Matriz A</h5> <br>
                                        <input style="margin-left: 50px; margin-bottom: 5px;" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0"><br>
                                        <input style="margin-left: 50px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0"><br>
                                        <input style="margin-left: 50px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <form name="matrizb">
                                        <h5 style="margin-left: 130px; margin-bottom: -5px;">Matriz B</h5> <br>
                                        <input style="margin-left: 50px; margin-bottom: 5px;" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0"><br>
                                        <input style="margin-left: 50px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0"><br>
                                        <input style="margin-left: 50px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                    </form>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button style="border-radius: 15px;" type="button" class="btn btn-primary btn-block" onclick="producto()">Hallar el
                                        resultado <i class="fa-solid fa-check"></i></button>
                                </div>
                            </div>

                            <div class="linea-horizontal">
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div align="center" class="col-sm-6">
                                    <form name="matrizc">
                                        <h5 style="margin-bottom: -5px;">Matriz producto A x B</h5> <br>
                                        <input style="margin-bottom: 5px;" type="text" size="3" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0"><br>
                                        <input style="margin-bottom: 5px" type="text" size="3" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0"><br>
                                        <input style="margin-bottom: 5px" type="text" size="3" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                        <input style="margin-left: 20px; margin-bottom: 5px" type="text" size="1" placeholder="0">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: #a4f3fc;">
                            <div class="row">
                                <div style="text-align: center;" class="col-sm-12">
                                    <label style="font-weight: bold; font-size: 20px; color: #1323a5;">Elaborado por un integrante de:</label>
                                </div>
                            </div>
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
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</body>

<?php
require '../../includes/footer.php';
?>