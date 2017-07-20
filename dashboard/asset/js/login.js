function login() {
  event.preventDefault();
  // Get username and password from form field
  var username = $(".username").val();
  var password = $(".password").val();
  // Add Animate loader
  var login = $('.form');
  login.addClass('loading');
  // Ajax script to query login
  $.ajax({
        type: "POST",
        url: "module/login",
        data: "username=" + username + "&password=" + password,
        success: function(data) {
          if (data == "auth successfully") {
            login.removeClass('loading');
            console.log(data);
            window.location.replace('home');
          } else {
            login.removeClass('loading');
            console.log(data);
          }
        }
    });
}
