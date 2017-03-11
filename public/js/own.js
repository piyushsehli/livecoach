$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 3000,
  });
  $(".signup-btn").click(function(){
        $("#signup").modal('show');
    });
  $("#login-btn").click(function(){
        $("#login").modal('show');
    });
	$("#sign-up").click(function(){
        $("#signup").modal('show');
    });
  
});