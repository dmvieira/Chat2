$(function() {
        	 
    $("#userid").keyup(function(event) { 
    
        var username = $(this).val();
        
        $.ajax({
            type: "POST",
            url: "jumpin.php",
            data: { userid : username },
            dataType: "json",
            success: function(data){
                $("#status").html(data.result);
                                
                 
            }
        });
    		
    });

});
