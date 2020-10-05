
  // Crea un cuestionario desde la ventana modal al editar el giro
  $("#btnCreate").click(function(){

    		var route = "http://108.175.15.78/listado/public/usuario";
        var name = $("#name").val();
        var apaterno = $("#apaterno").val();
        var amaterno = $("#amaterno").val();
        var rfc = $("#rfc").val();
        var fechanacimiento = $("#fechanacimiento").val();
  		var token = $("#token").val();

  		 $.ajax({
  					url: route,
  					headers: {'X-CSRF-TOKEN':token},
  					type: 'POST',
  					dataType: 'json',
  					data: { name:name, apaterno:apaterno, amaterno:amaterno, rfc:rfc, fechanacimiento:fechanacimiento },
  					success: function(){
  						const swalWithBootstrapButtons = Swal.mixin({
  							customClass: {
  								confirmButton: 'btn btn-outline-dark ',
  								cancelButton: 'btn btn-outline-danger campo'
  							},
  							buttonsStyling: false,
  						});
  						swalWithBootstrapButtons.fire({
  							type: 'success',
  							text: 'Se ha agregado el registro correctamente.',
  							onClose: function(){
  								carga();
  							}
  						})
  					},
  					error:function(msj){
              // console.log(msj);
  						if(msj.responseJSON.errors.name ==  undefined){
  								$("#msj-error").fadeOut();
  						}else {
  							$("#msj").html(msj.responseJSON.errors.name);
            				$("#msj-error").fadeIn();
  						}
              if(msj.responseJSON.errors.apaterno ==  undefined){
  								$("#msj-error1").fadeOut();
  						}else {
  							$("#msj1").html(msj.responseJSON.errors.apaterno);
            				$("#msj-error1").fadeIn();
  						}
              if(msj.responseJSON.errors.amaterno ==  undefined){
                  $("#msj-error2").fadeOut();
              }else {
                $("#msj2").html(msj.responseJSON.errors.amaterno);
                    $("#msj-error2").fadeIn();
              }
              if(msj.responseJSON.errors.rfc ==  undefined){
                  $("#msj-error3").fadeOut();
              }else {
                $("#msj3").html(msj.responseJSON.errors.rfc);
                    $("#msj-error3").fadeIn();
              }
              if(msj.responseJSON.errors.fechanacimiento ==  undefined){
                  $("#msj-error4").fadeOut();
              }else {
                $("#msj4").html(msj.responseJSON.errors.fechanacimiento);
                    $("#msj-error4").fadeIn();
              }

              setTimeout(function () {
							$("#agregaruser").modal("show");
						}, 500);
            			//$('#agregargiro').modal('show');
            }
  			});
  });



  // Funcio  que envia datos de la ventana modal y actualiza un registro
  $("#editar").click(function(){
  	var id = $("#id1").val();
    var name = $("#name1").val();
    var apaterno = $("#apaterno1").val();
    var amaterno = $("#amaterno1").val();
    var rfc = $("#rfc1").val();
    var fecha = $("#fechanacimiento1").val();
    var fechanacimiento = moment(fechanacimiento).format('YYYY-MM-DD');
    	var route = "http://108.175.15.78/listado/public/usuario/"+id;
    var token = $("#token").val();
console.log(id);
console.log(name);
  	 $.ajax({
  			url: route,
  			headers: {'X-CSRF-TOKEN':token},
  			type: 'PUT',
  			dataType: 'json',
  				data: { id:id,name:name, apaterno:apaterno, amaterno:amaterno, rfc:rfc, fechanacimiento:fechanacimiento },
  			success: function(){
  				const swalWithBootstrapButtons = Swal.mixin({
  					customClass: {
  						confirmButton: 'btn btn-outline-dark ',
  						cancelButton: 'btn btn-outline-danger campo'
  					},
  					buttonsStyling: false,
  				});
  				swalWithBootstrapButtons.fire({
  					type: 'success',
  					title: 'Registro actualizado',
  					text: 'Se ha actualizado el registro correctamente.',
  					onClose: function(){
  						carga();
  					}
  				})

  			},
  			error:function(msj){
          // console.log(msj);
          if(msj.responseJSON.errors.name ==  undefined){
              $("#msj-error").fadeOut();
          }else {
            $("#msj").html(msj.responseJSON.errors.name);
                $("#msj-error").fadeIn();
          }
          if(msj.responseJSON.errors.apaterno ==  undefined){
              $("#msj-error1").fadeOut();
          }else {
            $("#msj1").html(msj.responseJSON.errors.apaterno);
                $("#msj-error1").fadeIn();
          }
          if(msj.responseJSON.errors.amaterno ==  undefined){
              $("#msj-error2").fadeOut();
          }else {
            $("#msj2").html(msj.responseJSON.errors.amaterno);
                $("#msj-error2").fadeIn();
          }
          if(msj.responseJSON.errors.rfc ==  undefined){
              $("#msj-error3").fadeOut();
          }else {
            $("#msj3").html(msj.responseJSON.errors.rfc);
                $("#msj-error3").fadeIn();
          }
          if(msj.responseJSON.errors.fechanacimiento ==  undefined){
              $("#msj-error4").fadeOut();
          }else {
            $("#msj4").html(msj.responseJSON.errors.fechanacimiento);
                $("#msj-error4").fadeIn();
          }

          setTimeout(function () {
          $("#edituser").modal("show");
        }, 500);

  			}
  	});

  });

  function eliminarRegistro(id){
    	var route = "http://108.175.15.78/listado/public/usuario/"+id;
      var id = id;
    	var token = $("#token").val();

    	 $.ajax({
    			url: route,
    			headers: {'X-CSRF-TOKEN':token},
    			type: 'DELETE',
    			dataType: 'json',
    			data: { id: id},
    			success: function(){
    				const swalWithBootstrapButtons = Swal.mixin({
    					customClass: {
    						confirmButton: 'btn btn-outline-dark ',
    						cancelButton: 'btn btn-outline-danger campo'
    					},
    					buttonsStyling: false,
    				});
    				swalWithBootstrapButtons.fire({
    					type: 'success',
    					title: 'Eliminar registro',
    					text: 'Se ha eliminado el registro correctamente.',
    					onClose: function(){
    						carga();
    					}
    				})

    			},
    			error:function(msj){
    				if(msj.responseJSON.errors.id!=undefined && msj.responseJSON.errors.id!='') {
    					const swalWithBootstrapButtons = Swal.mixin({
    						customClass: {
    							confirmButton: 'btn btn-outline-dark ',
    							cancelButton: 'btn btn-outline-danger campo'
    						},
    						buttonsStyling: false,
    					});
    					swalWithBootstrapButtons.fire(
    						'No se ha eliinado el registro.',
    						'' + msj.responseJSON.errors.id,
    						'error'
              );
            }
          }
      });

    }




  // Vuelve a actualizar la pagina
  function carga(){

  	location.href='http://108.175.15.78/listado/public/usuario';
  }
