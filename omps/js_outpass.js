$(function() {
         
    $("#demo0").hide();
    $("#demo1").hide();
    $("#demo2").hide();
    $("#demo3").hide();
    $("#demo4").hide();
    $("#demo5").hide();
    $("#demo6").hide();
    $("#demo7").hide();

    var error_fname = false;
    var error_phone = false;
    var error_age = false;
    var error_gender = false;
    var error_email = false;
    var error_aadhar_no= false;
    var error_place= false;
    var error_pass= false;
  

    $("#fname").focusout(function(){
       check_fname();
    });
    $("#phone").focusout(function(){
       check_phone();
    });
    $("#age").focusout(function() {
       check_age();
    });
    $("#gender").focusout(function() {
       check_gender();
    });
    $("#email").focusout(function() {
       check_email();
    });
    $("#aadhar_no").focusout(function() {
       check_aadhar_no();
    });
    $("#place").focusout(function() {
       check_place();
    });
    $("#pass").focusout(function() {
       check_pass();
    });

    function check_fname() {
       var pattern = /^[a-zA-Z]*$/;
       var fname = $("#fname").val();
       if (fname == '') {
          $("#demo0").show();
          $("#demo0").html("Please Enter First Name");
          $("#fname").css("border","3px solid #F90A0A");
          error_fname = false;
       }
       else if (!pattern.test(fname) ) {
          $("#demo0").show();
          $("#demo0").html("Should contain only Characters");
          $("#fname").css("border","3px solid #F90A0A");
          error_fname = false;
       } else {
          $("#demo0").hide();
          $("#fname").css("border","3px solid green");
       }
    }
    function check_phone() {
      var pattern = /^[1-9]\d{9}$/;
        var phone = $("#phone").val();
        if (phone == '') {
           $("#demo1").show();
           $("#demo1").html("Please Enter Phone Number");
           $("#phon1").css("border","3px solid #F90A0A");
           error_phone = false;
        }
        else if (!pattern.test(phone) ) {
           $("#demo1").show();
           $("#demo1").html("Should Contain 10 Digit");
           $("#phone").css("border","3px solid #F90A0A");
           error_phone = false;
        } else {
           $("#demo1").hide();
           $("#phone").css("border","3px solid green");
          
        }
     }
    
    function check_age() {
       var pattern = /^[a-zA-Z]*$/;
       var age = $("#age").val();
       if (age == '') {
          $("#demo2").show();
          $("#demo2").html("Please Enter Your Age");
          $("#age").css("border","3px solid #F90A0A");
          error_age = false;
       }
       else if (!pattern.test(age) ) {
          $("#demo2").show();
          $("#demo2").html("Should contain only Numbers");
          $("#age").css("border","3px solid #F90A0A");
          error_age = false;
       } else {
          $("#demo2").hide();
          $("#age").css("border","3px solid green");
       }
    }

    function check_gender() {
       var gender = $("#gender").vl();
       if (gender == '') {
          $("#demo3").show();
          $("#demo3").html("Please Enter Gender");
          $("#gender").css("border","3px solid #F90A0A");
          error_gender = false;
       }
     
       else {
          $("#demo3").hide();
          $("#gender").css("border","3px solid green");
          
       }
    }

    function check_email() {
       var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       var email = $("#email").val();
       if (email == '') {
          $("#demo4").show();
          $("#demo4").html("Please Enter Email");
          $("#email").css("border","3px solid #F90A0A");
          error_email= false;
       }
       else if (!pattern.test(email) ) {
          $("#demo4").show();
          $("#demo4").html("Invalid Email");
          $("#email").css("border","3px solid #F90A0A");
          error_email= false;
       } else {
          $("#demo4").hide();
          $("#email").css("border","3px solid green");
          
       }
    }

    function check_aadhar_no() {
     var pattern = /^[1-9]\d{11}$/;
       var aadhar_no = $("#aadhar_no").val();
       if (aadhar_no == '') {
          $("#demo5").show();
          $("#demo5").html("Please Enter aadhar_no");
          $("#aadhar_no").css("border","3px solid #F90A0A");
          error_aadhar_no = false;
       }
       else if (!pattern.test(phone) ) {
          $("#demo5").show();
          $("#demo5").html("Should Contain 12 Digit");
          $("#aadhar_no").css("border","3px solid #F90A0A");
          error_aadhar_no = false;
       } else {
          $("#demo5").hide();
          $("#aadhar_no").css("border","3px solid green");
         
       }
    }
 
   
   //  function check_uname() {
   //   var letters = /^[A-Za-z]+$/;
   //   var uname_length = $("#uname").val().length;
   //     var uname = $("#uname").val();
   //     if (uname == '') {
   //        $("#demo5").show();
   //        $("#demo5").html("Please Enter Username");
   //        $("#uname").css("border","3px solid #F90A0A");
   //        error_uname = false;
   //     }
   //     else if (uname_length <6 ) {
   //        $("#demo5").show();
   //        $("#demo5").html("Contain Atleast 6 Characters");
   //        $("#uname").css("border","3px solid #F90A0A");
   //        error_uname = false;
   //     } else {
   //        $("#demo5").hide();
   //        $("#uname").css("border","3px solid green");
          
   //     }
   //  }
    function check_place() {
       var place_length = $("#pass").val().length;
       var place= $("#place").val();
       if (place== '') {
          $("#demo6").show();
          $("#demo6").html("Please Enter place");
          $("#place").css("border","3px solid #F90A0A");
          error_place = false;
       }
       else if (place_length < 2) {
          $("#demo6").html("Atleast 3 Characters");
          $("#demo6").show();
          $("#place").css("border","3px solid #F90A0A");
          error_place = false;
       } else {
          $("#demo6").hide();
          $("#place").css("border","3px solid green");
          
       }
    }

    function check_pass() {
       var pass = $("#pass").val();
       var pass = $("#cpass").val();
       if (pass =='') {
          $("#demo7").html("Confirm Your Password");
          $("#demo7").show();
          $("#pass").css("border","3px solid #F90A0A");
          error_pass = false;
          
       }
       
       else {
          $("#demo7").hide();
          $("#pass").css("border","3px solid green");            
             error_pass = true;
       }
    }

    

    $("#form").submit(function() {
       error_fname = true;
       error_phone = true;
       error_age = true;
       error_gender = true;
       error_email = true;
       error_aadhar_no = true;
       error_place = true;
       error_pass= true;

       check_fname();
       check_phone();
       check_age();
       check_gender();
       check_email();
       check_aadhar_no();
       check_place();
       check_pass();

       if (error_fname === true && error_phone === true && error_age === true&& error_gender === true && error_email === true && error_aadhar_no === true &&  error_place === true && error_pass === true) {
          document.getElementById("demo").innerHTML = 'Thank You for registering';
          return true;
       } else {
          document.getElementById("demo").innerHTML = 'Please Fill All Fields';
          return false;
       }


    });
 });
 