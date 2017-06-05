$(document).ready(function() {
    $('select').material_select();
});

$('select[name="system"]').change(function(){
	if($(this).val() == 'PGSQL' && $('#port_database').val().length == 0){
		$('#port_database').val(5432);
		Materialize.updateTextFields();
	}
});