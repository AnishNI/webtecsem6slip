$(document).ready(function(){
    //Attach an event listner to the name input field
    $('#name').on('input',function(){
        //Get the name entered by the user
        var name = $(this).val();

        //Send an ajax request to server
        $ajax({
            url:'Slip13A.php',
            type:'POST',
            data:{name:name},
            success:function(response){
                //Update the response div with the server's response
                $('#response').html(response);
            }
        });
    });
});