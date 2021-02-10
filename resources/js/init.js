$(document).ready(function(){
   
    $("form").on('submit', function(event){
        
       
        var reg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

        if($("input").val() == "" || $("textarea").val() == ""){
            $(".validate").text("All fields are required!");
            return false;
        }
        if(!$("input[name='email']").val().match(reg)){
            $(".validate").text("Mail address is invalid");
            return false;
        }
        
    });
});