$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
	if (results==null)
	   return null;
	else
	   return results[1] || 0;
}

function nl2br (str) {
	var str1 = (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1</p><p>$2');
    return str1;
}

function getRandomNums(end, count){
	var temp = [];
	var num;
	var i=0;

	while(i<count){
		num = Math.floor(Math.random() * end) + 1;

		if(jQuery.inArray(num, temp) !== -1)
			continue;

		temp.push(num);
		i++;
	}

	return temp;
}

function n2comm(x){
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

$(document).ready(function(){
	$("#header").load("header.html", function(){
		var url = window.location.href;
		url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
		url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
		url = url.substr(url.lastIndexOf("/") + 1);

		if(url == '')
			url = 'index.html';

		$('.nav-bar a').each(function(){
			var href = $(this).attr('href');
			if(url == href)
				$(this).addClass('active');
		});
	});
	$("#footer").load("webfooter.htm");
});