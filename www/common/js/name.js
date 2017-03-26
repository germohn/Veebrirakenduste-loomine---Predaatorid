$(document).ready(function(){
    $("button").click(function(){
        var x = $("form").serializeArray();
        $.each(x, function(i, field){
            $("#nameHere").append("Tere " + field.value);
        });
    });
});