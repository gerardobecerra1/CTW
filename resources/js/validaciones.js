//$(document).ready(function(){
//    // LOG IN
//    $("#btn_login").click(function(){
//        var _username = $("#log_username").val();
//        var _password = $("#log_password").val();
//
//        if(_username == "" || _password == ""){
//            Swal.fire({
//                title: 'Empty Requirements!',
//                text: 'Enter username and password',
//                icon: 'error',
//                confirmButtonText: 'Retry'
//              })
//        }
//
//        else{
//            Swal.fire({
//                title: 'It´s ok!',
//                text: 'Welcome!',
//                icon: 'success',
//                confirmButtonText: 'Retry'
//              })  
//        }
//    });
//
//
//    // SING IN 
//    $("#btn_signin").click(function(){
//        var _name = $("#sign_name").val();
//        var _username = $("#sign_username").val();
//        var _email = $("#sign_email").val();
//        var _password = $("#sign_password").val();
//        var _date = $("#sign_date").val();
//
//        if(_name == "" && _username == "" && _email == ""  && _password == "" && _date  == ""){
//            Swal.fire({
//                title: 'Empty Requirements!',
//                text: 'Enter all requeriments',
//                icon: 'error',
//                confirmButtonText: 'Retry'
//              })
//        }
//        else{
//            Swal.fire({
//                title: 'It´s ok!',
//                text: 'Welcome!',
//                icon: 'success',
//                confirmButtonText: 'Retry'
//              })  
//        }
//    });
//
//    // TOLTLIP
//    $( function() {
//        $("#sign_password").tooltip();
//      } );
//
//     //nombre
//     $( function() {
//        $("#sign_name").keyup(function() {
//          
//
//          //EXPRESIONES:
//          var val = $("#sign_name").val();
//          var numbers = new RegExp("^(?=.*[0-9])");
//
//  
//          if(numbers.test(val))
//          {
//              $("#border_name").removeClass( "Correcto" ).addClass( "incorrecto" );
//          }
//           else{
//            $("#border_name").removeClass( "incorrecto" ).addClass( "Correcto" );
//          }
//           });
//      } );
//
//    //CORREO
//    $( function() {
//      $("#sign_email").keyup(function() {        
//        //EXPRESIONES:
//        var mail = new RegExp("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\-]+\.[a-zA-Z0-9\-\.]+$/");
//        var correo = $("#sign_email").val();
//        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
//
//        if(reg.test(correo))
//        {
//            $("#border_mail").removeClass( "incorrecto" ).addClass( "Correcto" );
//        }
//         else{
//            $("#border_mail").removeClass( "Correcto" ).addClass( "incorrecto" );
//        }
//         });
//    } );
//
//    //CONTRASEÑA
//    $( function() {
//        $("#sign_password").keyup(function() {
//            
//          //EXPRESIONES:
//          var mayus = new RegExp("^(?=.*[A-Z])");
//          var special = new RegExp("^(?=.*[!@#$%&_*])");
//          var numbers = new RegExp("^(?=.*[0-9])");
//          var lower = new RegExp("^(?=.*[a-z])");
//          var len = new RegExp("^(?=.{8,})");
//          var pass = $("#sign_password").val();
//          
//           if(mayus.test(pass) && lower.test(pass) 
//              && special.test(pass) && numbers.test(pass)
//              &&  len.test(pass) ) {
//              $("#border_pass").removeClass( "incorrecto" ).addClass( "Correcto" );
//  
//          }
//           else{
//              $("#border_pass").removeClass( "Correcto" ).addClass( "incorrecto" );              
//          }
//      });
//      } );
//});
