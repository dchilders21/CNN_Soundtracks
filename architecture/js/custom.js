var isMob;

function divResize() {
	ht = $('html').innerHeight();
	wd = $('html').innerWidth();
	console.log('ht: ' + ht);
	console.log('wd: ' + wd);
	aspect_ratio = (wd/ht)

    if (aspect_ratio <= 1.3333333333333) {

    	$("#introVideo").height($('html').innerHeight())
    	$('#introVideo').css("width","auto");
    	
    } else {

    	$("#introVideo").width($('html').innerWidth())
    	$('#introVideo').css("height","auto");
    }
}



function showPlayer() {
	console.log(window.location.href);
	l = window.location.href.split("/");
	page = l[l.length - 1];
	console.log(page)
	if (page == 'episode-1') {

		$('#mlk_playlist').css('display', 'block');
	} else {
		$('#season_playlist').css('display', 'block');
	}

	$('#apple-player').removeClass('move-down');
	$('#apple-player').addClass('move-up');
	//$('#apple-player').css("bottom","-6px");
}

function closePlayer() {
	$('#mlk_playlist').css('display', 'none');
	$('#season_playlist').css('display', 'none');
	$('#apple-player').removeClass('move-up');
	$('#apple-player').addClass('move-down');
	//$('#apple-player').css("bottom","-506");
}

