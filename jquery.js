
$(function() {
    $('#homeScreenContinue').click(function(){
            $('#hoverScreen').animate({'top':'-100vh','left':'0vw'},1000, function() {
				$("#mainPage").css("opacity","1");
				$("#mainPage").css("height","auto");
			});
        });
});

function introducéFunction() {
	$(".introducé").toggle();
};


