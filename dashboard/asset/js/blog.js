$(".blog-editor").on('keyup', function(){
  var blog = $(this).val();
  $(".result").html(blog);
});
