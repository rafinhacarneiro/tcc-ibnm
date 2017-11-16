        $(document).ready(function () {
           if (window.screen.availWidth < 768){
               document.getElementById("player").width = "640";
			   document.getElementById("player").height = "360";
           } else if ((window.screen.availWidth >= 768) && (window.screen.availWidth < 992)){
               document.getElementById("player").width = "854";
			   document.getElementById("player").height = "480";
		   } else if ((window.screen.availWidth >= 992) && (window.screen.availWidth < 1200)){
			   document.getElementById("player").width = "960";
			   document.getElementById("player").height = "540";
        })