//navbar
$('#costumenav').not('a').hide();
	
$(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 450) {
			$('.navbar').fadeIn();
		} else {
			$('.navbar').fadeOut();
		}
	});
});

//navigasi link
$('.page-scroll').on('click', function(e){
		
	var tribut = $(this).attr('href');
	var tujuan = $(tribut);
	// console.log(tujuan);
	$('#home, body').animate({
		scrollTop: tujuan.offset().top -40
		}, 1000, 'swing');

	e.preventDefault();

});

//hover poto cistik
$('.thumbnail').mouseenter(function(i){
	$(this).css('opacity', 0.7);
});

$('.thumbnail').mouseleave(function(i){
	$(this).css('opacity', 1);
});

//jumbotron effect
$(window).on('load', function(){
	$('.jumbotron img').addClass('logoMuncul');
	$('.jumbotron h1').addClass('tulisanatasMuncul');
	$('.jumbotron h2').addClass('tulisanbawahMuncul');
});



//parallax effect
$(window).scroll(function(){
	var siScroll = $(this).scrollTop();

	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ siScroll/5 +'%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ siScroll/1.5 +'%)'
	});

	$('.jumbotron h2').css({
		'transform' : 'translate(0px, '+ siScroll +'%)'
	});

	if (siScroll > $('.tentang').offset().top -200) {
		$('.tentang h3').addClass('isiMuncul');
	}

	if (siScroll > $('.produk').offset().top -350) {
		// console.log('ok');
		$('.produk .thumbnail').each(function(x){
			setTimeout(function(){
				$('.produk .thumbnail').eq(x).addClass('produkMuncul');
				$('.produk h4').eq(x).addClass('produkMuncul');
			}, 500 * x);
		});
	}

});