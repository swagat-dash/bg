var password = document.getElementById("password");
var password2 = document.getElementById("password2");

function validatePassword(){
  if(password.value != password2.value) {
    password2.setCustomValidity("Passwords Don't Match");
  } else {
    password2.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

jQuery(document).ready(function() {
    
    // 1 Capitalize string - convert textbox user entered text to uppercase
    jQuery('.txtupper').keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });

    jQuery('input[type=text]').keyup(function() {
        $(this).val($(this).val().toLowerCase());
    });

    jQuery('input[type=email]').keyup(function() {
        $(this).val($(this).val().toLowerCase());
    });

    
    // 2 Capitalize string first character to uppercase
    jQuery('.txtfirst').keyup(function() {
        var caps = jQuery('.txtfirst').val(); 
        caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('.txtfirst').val(caps);
    });
    
    // 3 Capitalize string every 1st chacter of word to uppercase
    jQuery('.txtcamel').keyup(function() 
    {
        var str = jQuery('.txtcamel').val();
       
        
        var spart = str.split(" ");
        for ( var i = 0; i < spart.length; i++ )
        {
            var j = spart[i].charAt(0).toUpperCase();
            spart[i] = j + spart[i].substr(1);
        }
      jQuery('.txtcamel').val(spart.join(" "));
    
    });
   
});