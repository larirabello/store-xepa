$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal').modal({
		ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.	   
			let id = $(trigger).data("id");

			$.ajax({url	: "../api/produtos.php",
					type : "POST",
					dataType : "json",
					data : {id : id}
			}).then(data => {

					$(modal).find('div.modal-content').find('h4').html(data.name);

					$(modal).find('div.modal-content').find('p').html(data.description);

					$(modal).find('div.modal-content').find('p.price').html("R$ "+data.price);

					$(modal).find('div.modal-content').find('img').attr('src', '../assets/images/'+data.file);

			}) 
		}});

});