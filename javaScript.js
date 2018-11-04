$(document).ready(function() {
	$(".hidebook").click(function () {
		$(".divtablebook").hide(50);
	});
	$(".showbook").click(function () {
		$(".divtablebook").show(50);
	});
});
		
$(document).ready(function() {
	$(".hidefile").click(function () {
		$(".divtablefile").hide(50);
	});
	$(".showfile").click(function () {
		$(".divtablefile").show(50);
	});
});
		
$(document).ready(function() {
	$(".hidegame").click(function () {
		$(".divtablegame").hide(50);
	});
	$(".showgame").click(function () {
		$(".divtablegame").show(50);
	});
});
		
$(document).ready(function() {
	$(".hidemovie").click(function () {
		$(".divtablemovie").hide(50);
	});
	$(".showmovie").click(function () {
		$(".divtablemovie").show(50);
	});
});
		
$(document).ready(function() {
	$(".hidemusic").click(function () {
		$(".divtablemusic").hide(50);
	});
	$(".showmusic").click(function () {
		$(".divtablemusic").show(50);
	});
});
		
$(document).ready(function() {
	$(".hidephoto").click(function () {
		$(".divtablephoto").hide(50);
	});
	$(".showphoto").click(function () {
		$(".divtablephoto").show(50);
	});
});
		
$(document).ready(function() {
	$(".hideprogram").click(function () {
		$(".divtableprogram").hide(50);
	});
	$(".showprogram").click(function () {
		$(".divtableprogram").show(50);
	});
});

$(document).ready(function() {
	$(".hideTables").click(function () {
		$(".divtableprogram").hide(50);
		$(".divtablephoto").hide(50);
		$(".divtablemusic").hide(50);
		$(".divtablemovie").hide(50);
		$(".divtablegame").hide(50);
		$(".divtablefile").hide(50);
		$(".divtablebook").hide(100);
	});
	$(".showTables").click(function () {
		$(".divtableprogram").show(50);
		$(".divtablephoto").show(50);
		$(".divtablemusic").show(50);
		$(".divtablemovie").show(50);
		$(".divtablegame").show(50);
		$(".divtablefile").show(50);
		$(".divtablebook").show(50);
	});
});
// SEARCH mygtuko aktyvavimas
function enableSearchButton() {
	if(document.getElementById("search").value==="") { 
		document.getElementById('searchButton').disabled = true; 
    } else { 
		document.getElementById('searchButton').disabled = false;
    }
}

