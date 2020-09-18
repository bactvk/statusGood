$(document).ready(function(){
	var myaudio = document.getElementById("audioID");

    $("#key_search").keyup(function(){
        var key_search_content = $(this).val();
        if(key_search_content.length > 0){
        	myaudio.play(); 
        	$(".music_block").css('display','flex');
        	var status = 0;
        	$('.btn_play_pause').click(function(){
        		if(status == 0){
        			$(this).attr('src',"assets/images/play.png");
        			myaudio.pause();
        			status = 1;
        		}else if(status == 1){
        			$(this).attr('src',"assets/images/pause.png");
        			myaudio.play();
        			status = 0 ;
        		}
        	})
        	// src="assets/images/pause.png"
       	}
        
    })

    $('.alert').fadeOut(5000);
})