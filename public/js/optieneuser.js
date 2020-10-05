$(document).ready(function(e){

    // Carga el ID del tipo de cuestionario en el modal de acuerdo al seleccionado con respecto al modal de Boostrap
    $('#edituser').on('show.bs.modal', function(e){
      // Obtiene el id de la lista de registros en el index
      var id = $(e.relatedTarget).data().id;
      // Ruta que trae el registro de la BD para llenar las cajas de texto en el modal
      var route = "http://108.175.15.78/listado/public/usuario/"+id+"/edit";

      // Llena el ID del registro de la lista del index en la ventana modal


      // Obtiene y llena las cajas de la ventana modal con los valores que corresponden al ID del registro
    	$.get(route, function(res){
        $(e.currentTarget).find('#id1').val(res.id);
          $(e.currentTarget).find('#name1').val(res.name);
          $(e.currentTarget).find('#apaterno1').val(res.apaterno);
          $(e.currentTarget).find('#amaterno1').val(res.amaterno);
          $(e.currentTarget).find('#rfc1').val(res.rfc);
          var dateString = res.fechanacimiento;
          var fecha = moment(dateString).format('DD-MM-YYYY');
          $(e.currentTarget).find('#fechanacimiento1').val(fecha);
    	});

    });





    // Redirecciona y muestra pestaña de tipo de cuestionario depende del estatus que se encuentre el registro
    if(status == 1){
      $('.nav-tabs a[href="#altas"]').tab('show')
    }
    if(status == 0){
      $('.nav-tabs a[href="#bajas"]').tab('show')
    }


});
