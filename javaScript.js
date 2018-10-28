$(document).ready(function() {
	$(".hidebook").click(function () {
		$(".divtablebook").hide("fast");
	});
	$(".showbook").click(function () {
		$(".divtablebook").show(200);
	});
});
		
$(document).ready(function() {
	$(".hidefile").click(function () {
		$(".divtablefile").hide("fast");
	});
	$(".showfile").click(function () {
		$(".divtablefile").show(200);
	});
});
		
$(document).ready(function() {
	$(".hidegame").click(function () {
		$(".divtablegame").hide("fast");
	});
	$(".showgame").click(function () {
		$(".divtablegame").show(200);
	});
});
		
$(document).ready(function() {
	$(".hidemovie").click(function () {
		$(".divtablemovie").hide("fast");
	});
	$(".showmovie").click(function () {
		$(".divtablemovie").show(200);
	});
});
		
$(document).ready(function() {
	$(".hidemusic").click(function () {
		$(".divtablemusic").hide("fast");
	});
	$(".showmusic").click(function () {
		$(".divtablemusic").show(200);
	});
});
		
$(document).ready(function() {
	$(".hidephoto").click(function () {
		$(".divtablephoto").hide("fast");
	});
	$(".showphoto").click(function () {
		$(".divtablephoto").show(200);
	});
});
		
$(document).ready(function() {
	$(".hideprogram").click(function () {
		$(".divtableprogram").hide("fast");
	});
	$(".showprogram").click(function () {
		$(".divtableprogram").show(200);
	});
});

$(document).ready(function() {
	$(".hideTables").click(function () {
		$(".divtableprogram").hide("fast");
		$(".divtablephoto").hide("fast");
		$(".divtablemusic").hide("fast");
		$(".divtablemovie").hide("fast");
		$(".divtablegame").hide("fast");
		$(".divtablefile").hide("fast");
		$(".divtablebook").hide("fast");
	});
	$(".showTables").click(function () {
		$(".divtableprogram").show(200);
		$(".divtablephoto").show(200);
		$(".divtablemusic").show(200);
		$(".divtablemovie").show(200);
		$(".divtablegame").show(200);
		$(".divtablefile").show(200);
		$(".divtablebook").show(200);
	});
});