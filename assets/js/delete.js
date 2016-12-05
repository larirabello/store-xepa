$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.delete').on('click', function(e) {

		e.preventDefault();

		var id = $(e.currentTarget).data('id');

		$.ajax({
			url:'../api/delete.php',
			method: 'POST',
			data: {id: id}
		}).then(function(response) {
			alert(response);

			$(e.currentTarget).closest('tr').remove();
		});

	});

});
