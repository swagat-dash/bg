

    $(document).ready(function(){

        


        $(".firstname").focusout(function(){
            var check = $(this).val().length;
            if(check <= 0){
                $(".error-fname").html("Empty field");
            }
            else{
                $(".error-fname").html("");
            }
        });
        $(".lastname").focusout(function(){
            var check = $(this).val().length;
            if(check <= 0){
                $(".error-lname").html("Empty field");
            }
            else{
                $(".error-lname").html("");
            }
        });
        $(".password").focusout(function(){
            var check = $(this).val().length;
            var data =$(this).val();
            var lowerCaseLetters = /[a-z]/g;
            var upperCaseLetters = /[A-Z]/g;
            var numbers = /[0-9]/g;
            if(check <= 0){
                $(".error-pass").html("Empty field");
            }
            else if(!data.match(lowerCaseLetters)){
                $(".error-pass").html("lowercase required");
                $(".password").val('');
            }
            else if(!data.match(upperCaseLetters)){
                $(".error-pass").html("Uppercase required");
            }
            else if(!data.match(numbers)){
                $(".error-pass").html("number required");
            }
            else if(check < 8){
                $(".error-pass").html("8 minimum characters");
            }
            else{
                $(".error-pass").html("");
            }
        });
        $(".confirmpassword").focusout(function(){
            var check = $(this).val().length;
            var data =$(this).val();
            var passdata = $(".password").val();
            if(check <= 0){
                $(".error-conpass").html("Empty field");
            }
            else if(!data.match(passdata)){
                $(".error-conpass").html("Password not matched");
            }
            else{
                $(".error-conpass").html("");
            }
        });
        $(".email").focusout(function(){
            var check = $(this).val().length;
            if(check <= 0){
                $(".error-email").html("Empty field");
            }
            else{
                $(".error-email").html("");
            }
        });
        $(".phone").focusout(function(){
            var check = $(this).val().length;
            if(check <= 0){
                $(".error-phone").html("Empty field");
            }
            else{
                $(".error-phone").html("");
            }
        });
        $(".referral").focusout(function(){
            var check = $(this).val().length;
            if(check <= 0){
                $(".error-referral").html("Empty field");
            }
            else{
                $(".error-referral").html("");
            }
        });

        
        $(function(){

            $("form[name='registration']").validate({

                rules: {
                    password2: {
                       
                        equalTo: ".password"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }

            });
            

        });


        
        
    });





