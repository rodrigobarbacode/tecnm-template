$(document).ready(function() {
    // DataTable initialisation
    $('#example').DataTable({
      "dom": '<"dt-buttons"Bf><"clear">lirtp',
      "paging": true,
      "autoWidth": true,
      
      "buttons": [
                  'colvis',
                  'csvHtml5',
                  'excelHtml5',
                  'print'
              ]
    });
  });