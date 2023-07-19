$(document).ready(function() {
  $('#feedback-form').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var formData = form.serialize();
    
  // ($('#form-messages').html(`<p class="success-message">${formData.substring(5,formData.indexOf("%",5))} Thank you for your feedback!</p>`));
    alert(`${formData.substring(5,formData.indexOf("%",5))} Thank you for your feedback!`)
    form[0].reset();
  });
});
