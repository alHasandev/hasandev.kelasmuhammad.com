// membuat navbar fixed
function makeFixed(){
	$("aside").addClass("fixed");
	$(".container").addClass("none");	
}

// menghilangkan style Fixed 
function outFixed(){
	$("aside").removeClass("fixed");
	$(".container").removeClass("none");
}
// membuka navbar responsive
function responseNav(){
	// membuka navbar
	$("aside").addClass("open");	
}

// menutup navbar responsive
function closeResponseNav(){
	$("aside").removeClass("open");
}

function hasilKalkulator(ope) {
	var bil1 = $(".demoKalkulator input[name='input1']").val();
	var bil2 = $(".demoKalkulator input[name='input2']").val();
	var hasil; 
	if( ope == 'tambah' ){
		hasil = Number(bil1) + Number(bil2);
	} else 
	if( ope == 'kurang' ){
		hasil = Number(bil1) - Number(bil2);
	} else
	if( ope == 'kali' ){
		hasil = Number(bil1) * Number(bil2);
	} else
	if( ope == 'bagi' ){
		hasil = Number(bil1) / Number(bil2);
	} else {
		hasil = 'operasi gagal';
	}
	$(".demoKalkulator input[name='hasil']").val(hasil);
}
//saat halaman selesai loading / selalu aktif
$(document).ready(function(){

	// cek page url search
	len = (window.location.search).length;
	coba = (window.location.search).slice(6,len);
	// coba = $(loaction).attr("search");

	// akan menambahkan class active kepada id dari url yang didapatkan
	$( "#"+ coba ).addClass("active");

	var hasBeenClicked = false;
	$(".ReadMore").click(function(){
		if( hasBeenClicked ){
			$(".readMore").css({"height":"210px"});
			$(this).html("Read More");
			hasBeenClicked = false;
		} else {
			$(".readMore").css({"height":"unset"});
			$(this).addClass("closeReadMore");
			$(this).html("Close");
			hasBeenClicked = true;
		}
	});
	
	
		// if($(".closeReadMore").click()){
		// 	$(".readMore").css({"height":"210px"});
		// 	$("span.closeReadMore").addClass("openReadMore");
		// 	$("span.openReadMore").removeClass("closeReadMore");
		// }

	

	$(".container .header p").hover(function(){
		$(this).css({"position":"relative"});
		$("i.fa.fa-angle-double-right.dua").css({"display":"inline-block","transform":"translate(-10px, 0)", "transition":"0.5s"});
		setTimeout(function(){
			$("i.fa.fa-angle-double-right.dua").css({"transform":"translate(0, 0)"});
		}, 500);
	});
	$(".container .header p").mouseout(function(){
		$("i.fa.fa-angle-double-right.dua").css({
			"transform":"translate(-10px, 0)"
		});

		setTimeout(function(){
			$("i.fa.fa-angle-double-right.dua").css({"display":"none"}, 500);
		});
	});
	
});
