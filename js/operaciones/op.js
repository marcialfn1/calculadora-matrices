var validacionesCorrectas = false;

function dibujarInputs() {
    // ID para los inputs para el num. de filas y columnas de la matriz A
    var numFilas = document.getElementById("numFilas").value;
    var numColumnas = document.getElementById("numColumnas").value;

    // ID para los inputs para el num. de filas y columnas de la matriz B
    var numFilasB = document.getElementById("numFilasB").value;
    var numColumnasB = document.getElementById("numColumnasB").value;

    // Verificacion del numero de filas y columnas en ambas matrices
    if (numFilas != numFilasB || numColumnas != numColumnasB) {
        swal({
            title: "No se puede crear las matrices porque el número de filas y columnas no coinciden.",
            // text: "",
            icon: "error",
            button: "Aceptar",
            timer: 3000
        });
        return;
    } else if (numFilas == "" & numFilasB == "" & numColumnas == "" & numColumnasB == "") {
        swal({
            title: "Ingrese el N° de filas y columnas para las matrices.",
            // text: "",
            icon: "info",
            button: "Aceptar",
            timer: 3000
        });
        return;
    } else {
        validacionesCorrectas = true; //Establecer la variable en verdadero

        // Inputs para la matriz A
        var htmlInputs = "<table>";
        for (var i = 0; i < numFilas; i++) {
            htmlInputs += "<tr>";
            for (var j = 0; j < numColumnas; j++) {
                htmlInputs += `<td><input style="width: 50px; height: 40px; border-radius: 8px;" id="input_${i}_${j}"></td>`;
            }
            htmlInputs += "</tr>";
        }
        htmlInputs += "</table>";
        document.getElementById("inputs").innerHTML = htmlInputs;

        // Inputs para la matriz B
        var htmlInputsB = "<table>";
        for (var i = 0; i < numFilasB; i++) {
            htmlInputsB += "<tr>";
            for (var j = 0; j < numColumnasB; j++) {
                htmlInputsB += `<td><input style="width: 50px; height: 40px; border-radius: 8px;" id="inputb_${i}_${j}"></td>`;
            }
            htmlInputsB += "</tr>";
        }
        htmlInputsB += "</table>";
        document.getElementById("inputsb").innerHTML = htmlInputsB;

        // Si pasan todas las validaciones mandar a llamar la function para mostrar el modal
        mostrarModal();
    }
}

function calcularMatriz() {
    var numFilas = document.getElementById("numFilas").value;
    var numColumnas = document.getElementById("numColumnas").value;
    var numFilasB = document.getElementById("numFilasB").value;
    var numColumnasB = document.getElementById("numColumnasB").value;

    var sumas = [];
    for (var i = 0; i < Math.max(numFilas, numFilasB); i++) {
        sumas[i] = [];
        for (var j = 0; j < Math.max(numColumnas, numColumnasB); j++) {
            sumas[i][j] = 0;
        }
    }

    // Obtener el valor de la operacion que se seleccione
    var operacion = document.getElementById("operacionMatriz").value;

    // Recorrido de los inputs de las tablas
    for (var i = 0; i < Math.max(numFilas, numFilasB); i++) {
        for (var j = 0; j < Math.max(numColumnas, numColumnasB); j++) {
            var inputA = document.getElementById(`input_${i}_${j}`);
            var inputB = document.getElementById(`inputb_${i}_${j}`);

            switch (operacion) {
                case "suma":
                    if (inputA && inputA.value && !isNaN(parseInt(inputA.value))) {
                        sumas[i][j] += parseInt(inputA.value);
                    }

                    if (inputB && inputB.value && !isNaN(parseInt(inputB.value))) {
                        sumas[i][j] += parseInt(inputB.value);
                    }
                    break;
                case "resta":
                    if (inputA && inputA.value && !isNaN(parseInt(inputA.value))) {
                        sumas[i][j] += parseInt(inputA.value);
                    }

                    if (inputB && inputB.value && !isNaN(parseInt(inputB.value))) {
                        sumas[i][j] -= parseInt(inputB.value);
                    }
                    break;
                case "multiplicacion":
                    if (inputA && inputA.value && !isNaN(parseInt(inputA.value))) {
                        sumas[i][j] = parseInt(inputA.value);
                    }

                    if (inputB && inputB.value && !isNaN(parseInt(inputB.value))) {
                        sumas[i][j] *= parseInt(inputB.value);
                    }
                    break;
                case "escalar":
                    var escalarInput = document.getElementById("escalarInput");
                    var escalar = 1; // Valor por defecto en caso de que no se ingrese un escalar válido

                    if (escalarInput && escalarInput.value && !isNaN(parseInt(escalarInput.value))) {
                        escalar = parseInt(escalarInput.value);
                    }

                    for (var i = 0; i < filas; i++) {
                        for (var j = 0; j < columnas; j++) {
                            sumas[i][j] *= escalar;
                        }
                    }
                    break;
            }
        }
    }

    // Matriz resultante para la suma de la Matriz A y la Matriz B
    var htmlResultados = "<table>";
    for (var i = 0; i < numFilas; i++) {
        htmlResultados += "<tr>";
        for (var j = 0; j < numColumnas; j++) {
            htmlResultados += `<td><input style="width: 70px; height: 60px; border-radius: 8px;" id="resultados_${i}_${j}" value="${sumas[i][j]}"></td>`;
        }
        htmlResultados += "</tr>";
    }
    htmlResultados += "</table>";

    document.getElementById("resultados").innerHTML = htmlResultados;
}

function mostrarModal() {
    // Verificar si todas las validaciones son verdaderas
    if(!validacionesCorrectas) {
        swal({
            title: "¡Error!",
            text: "Debe completar las validaciones para mostrar el modal.",
            icon: "error",
            button: "Aceptar"
        });
        return;
    }
    // Mostrar el modal
    $('#mi-modal').modal('show');
}

function clearInputs() {
    document.getElementById("clearInputs").addEventListener("click", function() {
        document.getElementById("numFilas").value = "";
        document.getElementById("numColumnas").value = "";
        document.getElementById("numFilasB").value = "";
        document.getElementById("numColumnasB").value = "";
    });
}


