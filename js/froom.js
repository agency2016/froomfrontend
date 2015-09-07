
      //search bar dropdown menu load
      $(document).ready(function(e){
          $('.search-panel .dropdown-menu').find('a').click(function(e) {
              e.preventDefault();
              var param = $(this).attr("href").replace("#","");
              var concept = $(this).text();
              $('.search-panel span#search_concept').text(concept);
              $('.input-group #search_param').val(param);
          });
      });


      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })


$(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});
