$(document).ready(function(){
	var myaudio = document.getElementById("audioID");

    $("#key_search").keyup(function(){
        var key_search_content = $(this).val();
        if(key_search_content.length > 0)myaudio.play(); 
        else myaudio.pause(); 
    })
})