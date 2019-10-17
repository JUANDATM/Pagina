$(init);
//var table = null;
//var cursos = null;

function init(){
    // Inicializa el NavBar
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });

    /* Configuración del DataTable
    table = $('#cur').DataTable({"aLengthMenu": 
           [[10,25,50,75,100],[10,25,50,75,100]],
           "iDisplaylength":15});

    //Llena el arrelo de cursos con la Información BD
    cargaCursos(); */      
    
    //Iniciliza la ventana Modal y la Validación
    $("#modalRegistro").modal();
    validateForm();

    // Clic del boton circular acceso a validar correo y contraseña
    $("#un-lock").on("click",function(){
        $('#frm-acceso').submit();
    });
    
    // Clic del boton circular Agregar Registro de Usuario
    $("#add_registro").on("click",function(){
        alert("Agregando Regustro");
        $("#correo").val("");
        $("#nom").val("");
        $("#pwd").val("");
        
        $("#modalRegistro").modal('open');
        $("#correo").focus();
    });

    // clic del boton de guardar de la ventana modal
    $('#guardar').on("click",function(){
        alert("Clic boton de gurdar registro");
        $("#frm-registro").submit();
    });
       
}

function validateForm(){
    $('#frm-acceso').validate({
        rules: {
            corr:{required:true,email:true, minlength:8, maxlength:120},
            cont:{required:true, minlength:4, maxlength:32},
        },
        messages: {
            corr:{required:"No puedes dejar este campo vacío",minlength:"Debes ingresar al menos 8 caracteres", maxlength:"No puedes ingresar más de 120 caracteres"},
            cont:{required:"No puedes dejar este campo vacío",minlength:"Debes ingresar al menos 8 caracteres", maxlength:"No puedes ingresar más de 32 caracteres"},
        },
        errorElement: "div",
        errorClass: "invalid",
        errorPlacement: function(error, element){
            error.insertAfter(element)                
        },
        submitHandler: function(form){
            validaAcceso();
        }
    });
    $('#frm-registro').validate({
        rules: {
            correo:{required:true,email:true, minlength:4, maxlength:120},
            nom:{required:true, minlength:4, maxlength:100},
            pwd:{required:true, minlength:4, maxlength:32},
        },
        messages: {
            correo:{required:"No puedes dejar este campo vacío",minlength:"Debes ingresar al menos 4 caracteres", maxlength:"No puedes ingresar más de 120 caracteres"},
            nom:{required:"El nombre completo es requerido",minlength:"Debes ingresar al menos 4 caracteres", maxlength:"No puedes ingresar más de 100 caracteres"},
            pwd:{required:"No puedes dejar este campo vacío",minlength:"Debes ingresar al menos 8 caracteres", maxlength:"No puedes ingresar más de 32 caracteres"},
        },
        errorElement: "div",
        errorClass: "invalid",
        errorPlacement: function(error, element){
            error.insertAfter(element)                
        },
        submitHandler: function(form){
            saveData();
        }
    });
}

function validaAcceso(){ 
    alert("Validando acceso");
}

function saveData(){ 
    var sURL="validaAcceso.php";
    
    parametros = new FormData($("#frm-cursos")[0]);
    
    $.ajax({
        type:"post",
        url:sURL,
        contentType: false,
        processData:false,
        dataType:'json',
        data: parametros,
        success: function(respuesta){
            alert(respuesta['status']);
            if (respuesta['status']){
                var nomtip = $('select[name="idtip"] option:selected').text();
                $("#pk").val('0');
                $("#tit").val('');
                $("#descrip").val('');
                $("#costo").val('0');
                $("#modalRegistro").modal('close');
                M.toast({html: 'Curso Guardado', classes: 'rounded', displayLength: 4000});
                //$("#tabla").load("CargaCursos.php");
                if (id == "0"){ // Insert
                    //actualizaDataTable(respuesta['data'],'insert',nomtip)
                }
                else // Update
                {
                    //actualizaDataTable(respuesta['data'],'delete')
                    //actualizaDataTable(respuesta['data'],'insert',nomtip)
                }
            }
            else{
                M.toast({html: 'Error al Agregar Curso', classes: 'rounded', displayLength: 4000});
            }
        }
    });
}

function deleteData(id){
    var boton = "&boton=Borrar";
    var parametros='pk='+ id + boton;
    $.ajax({
        type:"post",
        url:"actCursoEliminar.php",
        dataType:'json',
        data:parametros,
        success: function(respuesta){
            if (respuesta['status']){
                M.toast({html: 'Curso Eliminado', classes: 'rounded', displayLength: 4000});
                //actualizaDataTable(respuesta['data'],'delete');
            }
            else{
                //M.toast({html: 'Error al Eliminar Curso', classes: 'rounded', displayLength: 4000});
            }
        }
    });
}



