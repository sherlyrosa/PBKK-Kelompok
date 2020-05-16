$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    $('#btnDaftar2').prop('disabled', false);
  } else {
    $('#message').html('Not Matching').css('color', 'red');
    $('#btnDaftar2').prop('disabled', true);
  }
});