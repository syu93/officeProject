var nb_sheet=1;
var S_BODY_H=864;

$(document).ready(function(){
	$('#sheet-head_'+nb_sheet).prop('contenteditable',true);
	$('#sheet-body_'+nb_sheet).prop('contenteditable',true); $('#sheet-body_'+nb_sheet).focus();
	$('#sheet-footer_'+nb_sheet).prop('contenteditable',true);
	var height = $('#sheet-body_'+nb_sheet).height();
	console.log(height);
	$('#sheet-body_'+nb_sheet).keyup(function(){
		height = $('#sheet-body_'+nb_sheet).height();
		if(height > S_BODY_H){
			newpage(nb_sheet);
		}
	});
});

function newpage(nb_sheet){
	var new_sheet = nb_sheet+1;
	$('#sheet_'+nb_sheet).after('<div id="sheet_'+new_sheet+'" class="sheet"></div>');
	$('#sheet_'+new_sheet).load( "view/tpl/sheet.tpl",{page:nb_sheet} );
	
	$('#temp-head_').attr('id', '#sheet-head_');
	// $('#temp-head_').attr('id', '#sheet-head_'+new_sheet);
	// $('#temp-body_').attr('id', '#sheet-body_'+new_sheet);
	// $('#temp-footer_').attr('id', '#sheet-footer_'+new_sheet);
}