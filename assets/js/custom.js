/*global $, alert, console */

console.log("hiiiiiiiiiiiiiiiii");

$(function(){
    'use strict';
    var f_usererror = true,
        l_usererror= true,
        emailerror = true,
        msgerror = true;

     $('.username').blur(function(){
            if($(this).val().length < 4){ //show error
            $(this).css('border','3px solid #ff0018');
            $(this).parent().find('.custom-alert').fadeIn(100);
            f_usererror= true;
        }else{ //no error
            $(this).css('border','3px solid #83797e');
            $(this).parent().find('.custom-alert').fadeOut(100);
            f_usererror= false;

        }
     })  
     
     $('.lastusername').blur(function(){
        if($(this).val() === ''){ //show error
        $(this).css('border','3px solid #ff0018');
        $(this).parent().find('.custom-alert').fadeIn(100);
        l_usererror= true;
    }else{ //no error
        $(this).css('border','3px solid #83797e');
        $(this).parent().find('.custom-alert').fadeOut(100);
        l_usererror= false;

    }
    })

    $('.email').blur(function(){
        if($(this).val() === ''){ //show error
        $(this).css('border','3px solid #ff0018');
        $(this).parent().find('.custom-alert').fadeIn(100);
        emailerror= true;
    }else{ //no error
        $(this).css('border','3px solid #83797e');
        $(this).parent().find('.custom-alert').fadeOut(100);
        emailerror= false;

    }
    })

    $('.msg').blur(function(){
        if($(this).val().length < 11 ){ //show error
        $(this).css('border','3px solid #ff0018');
        $(this).parent().find('.custom-alert').fadeIn(100);
        msgerror= true;
    }else{ //no error
        $(this).css('border','3px solid #83797e');
        $(this).parent().find('.custom-alert').fadeOut(100);
        msgerror= false;

    }
    })

    //submit form validation
    $('.contact-form').submit(function(e){
        if($('.username').val().length < 4 || $('.lastusername').val() === '' || $('.email').val() === ''
         || $('.msg').val() === ''){

    
            e.preventDefault();
            $('.btn').css('border','3px solid #ff0018e');

            if($('.username').val().length < 4 ) {$('.username').blur();
           // $('.btn').css('border','3px solid green');
        }
            else if ($('.lastusername').val() === ''  ) {$('.lastusername').blur();
           // $('.btn').css('border','3px solid blue');
        }
            else if ($('.email').val() === ''){ $('.email').blur();
           // $('.btn').css('border','3px solid orange');
        }

            else if ( $('.msg').val() === ''){ $('.msg').blur();
        // $('.btn').css('border','3px solid yellow');
        }
            /*else{
                $('.msg').blur();
                $('.btn').css('border','3px solid brown');
            } */
        }else{
            $('.btn').css('border','3px solid #83797e');
            $(this).parent().find('.alertmsg').fadeIn(100);
        }
        
    })
 
   
}) 

