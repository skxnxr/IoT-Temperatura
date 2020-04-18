$(document).ready(function() {
    var table = $('#data').DataTable( {
        'paging'      : true,
        'pageLenght'  : 3,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false,
        rowReorder: {
          selector: 'td:nth-child(2)'
      },
      responsive: true,
        'language' : {
          paginate : {
            next: 'Siguiente',
            previous: 'Anterior',
            last: 'Último',
            first: 'Primero'
          },
          info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
          emptyTable: 'No hay registros',
          infoEmpty: '0 registros',
          search: 'Buscar'
        }
    } );
} );