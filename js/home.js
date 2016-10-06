$(document).ready(function() {
    $("#sub").click(function() {
      if ($('#status-message').css('display') != 'none') {
         $('#status-message').hide();
      }

      $.ajax({
         type: 'POST',
         url: 'contact.php',
         dataType: 'json',
         data: {
            name: $('#inputName').val(),
            email: $('#inputEmail').val(),
            content: $('#inputMessage').val()
         },
         success: function(data){
            $('#status-message').removeClass()
                                .addClass((data.error === true) ? 'error' : 'success')
                                .text(data.msg).show(500);

            if( data.error === false ) {
               $('#inputName').val('');
               $('#inputEmail').val('');
               $('#inputMessage').val('');
            }
         },
         error: function(XMLHttpRequest, textStatus, errorThrown) {
            var message = 'There was an problem sending the message, please try again in just a little while.';
            $('#status-message').removeClass()
                                .addClass('error')
                                .text(message)
                                .show(500);
         }
      });

      return false;
   });
});
