$(".login-wrap").on('submit', function(){
  event.preventDefault();
  $(this).addClass('loading');
  var username = $(".username").val();
  var password = $(".password").val();
  $(".primary").text('Processing...');
  /* Ajax */
  $.ajax({
      type: "POST",
      url: "module/login.php",
      data: "username="+ username +"&password="+ password,
      success: function(data) {
        if (data == "in") {
          $("input").val('');
          $(".primary").text('Logged in');
          window.location.href = "home.php";
        } else {
          $(".primary").text('Contact');
        }
      }
    });
});
