$(document).ready(function () {
    $('.sidebar-menu').tree()

    $('#registros').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language' : {
        paginate:{
            next: 'Siguiente',
            previous: 'Anterior',
            last: 'Último',
            first: 'Primero'
        },
        info: 'Mostrando _START_ - _END_ de _TOTAL_ resultados',
        emptyTable: 'No hay registros.',
        infoEmpty: 'Mostrando _END_ de _TOTAL_ resultados',
        search: 'Buscar:'
      }
    });
  })