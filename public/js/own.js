$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 3000,
  });
  $(".signup-btn").click(function(){
        $("#signup").modal('show');
        $("#login").modal('hide');
    });
  $("#login-btn").click(function(){
        $("#login").modal('show');
        $("#signup").modal('hide');
    });
	$("#sign-up").click(function(){
        $("#signup").modal('show');
    });
  
});