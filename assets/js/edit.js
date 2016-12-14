$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.edit').on('click', function(e) {

		e.preventDefault();

		var id = $(e.currentTarget).data('id');

		let modalEditar= $('#modalEditar');

		$.ajax({url	: "../api/produtos.php",
				type : "POST",
				dataType : "json",
				data : {id : id}
			}).then(data => {

					modalEditar.find('div.modal-content').find('input[name=id]').val(data.id);

					modalEditar.find('div.modal-content').find('input[name=name]').val(data.name);

					modalEditar.find('div.modal-content').find('textarea[name=description]').val(data.description);

					modalEditar.find('div.modal-content').find('input[name=price]').val(data.price);

					modalEditar.find('div.modal-content').find('select[name=type]').val(data.type);

					modalEditar.find('div.modal-content').find('input[name=file]').val(data.file);

					modalEditar.find('div.modal-content').find('img').attr('src', '../assets/images/'+data.file);

			}) 

	});

});
