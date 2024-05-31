$(document).ready(function() {
    $('#no_control').on('change', function(){
      $('#result-no_control').html('<img src="img/images/loader.gif" />').fadeOut(1000);
      var no_control = $(this).val();
      var dataString = 'no_control='+no_control;

      $.ajax({
        type: "POST",
        url: "quejas/no_control_valido.php",
        data: dataString,
        success: function(data) {
          $('#result-no_control').fadeIn(1000).html(data);

        }
      });
    });

    $( "#m_quejas" ).submit(function() {
      var parametros = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "quejas/newqueja.php",
        data: parametros,
        success: function(resultado) {
            $('body').html(resultado);
                   }
      });
    });
  });