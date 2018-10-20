$(document).ready(function() {
 
  $('#myform').submit(function(e) {
    e.preventDefault();
    var uname = $('#name').val();
    var mobile =$('#mob').val();
    var aadh=$('#aadhar').val();
    var uemail = $('#email').val();
    var passwd = $('#pwd').val();
    var conpwd=$('#cpass').val();
    var chk=$('#chk').val();
    
 
    $(".error").remove();
 
    if (uname == "") {
      $('#name').after('<span class="error">This field is required</span>');
      window.alert("please enter name");
      return false;
    }
    
    if (mobile == "") {
      $('#mob').after('<span class="error">This field is required</span>');
      return false;
    }
    if (aadh.length < 12||aadh.length>12) {
        $('#aadhar').after('<span class="error">Incorrect aadhar number</span>');
        return false;
      }
    if (uemail == "") {
        $('#email').after('<span class="error">This field is required</span>');
        return false;
      }
      if (uemail.length < 1) {
        $('#email').after('<span class="error">This field is required</span>');
        return false;
      } else {
        var regEx =/^.+@[^\.].*\.[a-z]{2,}$/;
        var validEmail = regEx.test(uemail);
        if (!validEmail) {
          $('#email').after('<span class="error">Enter a valid email</span>');
          return false;
        }
      }
    if(passwd == ""){
        $('#pass').after('<span class="error">This field is required</span>');
        return false;
      }
      if (passwd.length < 8) {
        $('#pass').after('<span class="error">Password must be at least 8 characters long</span>');
        return false;
      }
      if(conpwd == ""){
        $('#cpass').after('<span class="error">This field is required</span>');
        return false;
      }
      if (conpwd.length < 8) {
        $('#cpass').after('<span class="error">Retry Password</span>');
        return false;
      }
      if($("#chk:checked").length==0){
        alert("Declaration required");
        return false;
      }
  
  });
 
});
 
