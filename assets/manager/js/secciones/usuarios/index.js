$(document).ready(function () {

	var base_url = $("body").data('base_url');

	$('#usuarios_dt').DataTable({
		language: {
			url: base_url + 'assets/manager/js/plugins/tables/translate/spanish.json'
		},
		serverSide: false,
		"type": "POST",
		dataSrc: '',
		ajax: {
			url: base_url + 'Manager/Usuarios/list_usuarios_dt',
			type: 'POST',
			error: function (jqXHR, textStatus, errorThrown) {
				alert(jqXHR.status + textStatus + errorThrown);
			}
		}
	});
});
