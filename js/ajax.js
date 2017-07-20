$(".contactform").on('submit', function(){
  event.preventDefault();
  var name = $(".name").val();
  var email = $(".email").val();
  var subject = $(".subject").val();
  var msg = $(".msg").val();
  $(".btn-submit").val('Submitting...');
  /* Ajax */
  $.ajax({
      type: "POST",
      url: "module/contactmodule.php",
      data: "name="+ name +"&email="+ email +"&subject="+ subject +"&msg="+ msg,
      success: function(data) {
        if (data == "sent") {
          $("input").val('');
          $("textarea").val('');
          $(".btn-submit").val('Submitted');
        } else {
          $(".btn-submit").val('Contact');
        }
      }
    });
  });
