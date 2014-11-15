var nb_sheet="1";

$(document).ready(function(){
	$('#sheet-head_'+nb_sheet).prop('contenteditable',true);
	$('#sheet-body_'+nb_sheet).prop('contenteditable',true); $('#sheet-body_'+nb_sheet).focus();
	$('#sheet-footer_'+nb_sheet).prop('contenteditable',true);
});

function newpage(){
	
}