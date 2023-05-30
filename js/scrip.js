// //EJECUTAR AL CARGAR LA PAGINA
// $(document).ready(function()
// {
//   //Defino los totales de mis 2 columnas en 0
//   var totalPagar = 0;
//   //Recorro todos los tr ubicados en el tbody
//   $('#tblProductos tbody').find('tr').each(function (i, el) {
             
//         //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
//         totalPagar += parseFloat($(this).find('td').eq(0).text());
                
//     });
//     //Muestro el resultado en el th correspondiente a la columna
//     $('#tblProductos tfoot tr th').eq(0).text("Total " + totalPagar);
    
//     alert(totalPagar);
// });

function validarPass() {
    let correo = document.getElementById("email").value
    let usuario = document.getElementById("usuario").value
    let pass1 = document.getElementById("password").value
    let pass2 = document.getElementById("confiPassword").value

    if (!correo || !usuario || !pass1 || !pass2) {
        document.getElementById('resultado').innerHTML =
            "<span style = 'color: red;'>Ninguno de los campos debe ser vacio</span>";
    } else {
        if (pass1 != pass2) {
            document.getElementById('resultado').innerHTML =
                "<span style = 'color: red;'>Las contraseñas no coinciden</span>";
        } else {
            document.getElementById("formRegistro").submit()
        }
    }
}

function login(){
    let usuario = document.getElementById("usuario").value
    let pass = document.getElementById("password").value  
    
    if (!usuario || !pass) {
        document.getElementById('resultado').innerHTML =
            "<span style = 'color: red;'>Ninguno de los campos debe ser vacio</span>";
    }else{
        document.getElementById("formLogin").submit()   
    }
}



