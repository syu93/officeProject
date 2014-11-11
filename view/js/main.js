var nb_sheet="1";

$(document).ready(function(){
	$('#sheet_'+nb_sheet).attr('contenteditable','true');
	$('#main-sheet-container').css('height',window.innerHeight);
});