$(document).ready(function(){
    $error = $('<center> <h2> Invalid Student ID <h2> <center>');
    $error1 = $('<center> <h2> Please enter field <h2><center>');
$('#login').click(function(){
    $error.remove();
    $error1.remove();
    $student = $('#student').val();
        if($student == ""){
            $error1.appendTo('#error');
        }else{
            $.post('idcheck.php', {student: $student},
            function(show){
         if(show == "Success"){
            $.ajax({
                type: 'POST',
                 url: 'stlogin.php',
                 data:{
                     student: $student
                     },
                
              success: function(result){
                    $result = $('<h2> You are Marked Here: <h2>' + result).appendTo('#result');
                    $('#student').val('');
					setTimeout(function(){
					$result.remove();
				    }, 10000);
                }
    
            });
        }else{
            $('#student').val('');
            $error.appendTo('#error');
        }
             }       
            )
          }
    });
});
