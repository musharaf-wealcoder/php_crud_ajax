
(function($){
  $('.modal-btn').on('click',function(){
    $('.modal-bg').addClass("modal-active");
  });
  $('.modal-close').click(function(){
    $('.modal-bg').removeClass("modal-active");
  });

  // data insert
  $('.submit_btn').on('click',function(){
    var name     = $('#name').val();
    var email     = $('#email').val();
    var password     = $('#password').val();

    $.ajax({
      method : "POST",
      url : 'insert.php',
      data : {
        name    : name,
        email   : email,
        password: password,
      },
      success: function(data){
        read();
      }

    });
  });

  // data read

  function read() {
    var read = "";
    $.ajax({
      url : 'read.php',
      method : "POST",
      data : {read:read},
      success: function (data){
        $('#tbody').html(data);
      }
    })
  }

  read();

})(jQuery);