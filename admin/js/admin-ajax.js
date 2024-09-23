$(document).ready(function(){
    $('#crear-admin').on('submit', function(e){
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var resultado = data;
                if(resultado.respuesta == 'exito'){
                    swal(
                        'Correcto',
                        'El administrador se creo correctamente',
                        'success'
                      )
                }else{
                    swal(
                        "Error",
                        "No se pudo crear el administrador",
                        "error"
                      )
                }
            }
        })
    });

    
    $(document).ready(function(){
        $('#login-admin').on('submit', function(e){
            e.preventDefault();
    
            var datos = $(this).serializeArray();
    
            $.ajax({
                type: $(this).attr('method'),
                data: datos,
                url: $(this).attr('action'),
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    var resultado = data;
                    if(resultado.respuesta == 'exito'){
                        swal(
                            'Login Correcto',
                            'Bienvenido',
                            'success'
                        )
                        setTimeout(function(){
                            window.location.href = 'admin-area.php';
                        }, 2000);
                    }else{
                        swal(
                            "Error!",
                            "Usuario o Contraseña incorrectos",
                            "error"
                        )
                    }
                }
            })
        });
    });
});