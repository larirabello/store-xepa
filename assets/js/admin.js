$(document).ready(function(){

	$('select').material_select();

	$('.modal').modal();
	
	$('body').on('click','.register-confirm', function(e) {
		e.preventDefault();
		var form = $(e.currentTarget).closest('div.modal').find('form')[0]; // You need to use standart javascript object here
		var formData = new FormData(form);


		//$('#loading').show();
		$.ajax({
			url: "../api/register.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,        // To send DOMDocument or non processed data file it is set to false
			success: function(data) {
				//$('#loading').hide();
				$("#message").html(data);
				//$('#modal2').modal('close');
			}
		});
	});
	

	// Function to preview image after validation
	
	$("#image").change(function() {
		$("#message").empty(); // To remove the previous error message

		var file = this.files[0];
		var imagefile = file.type;
		var match= ["image/jpeg","image/png","image/jpg"];

		if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))) {
			$('#previewing').attr('src','noimage.png');
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			return false;
		} else {
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
		} 
	});

	function imageIsLoaded(e) {

		$("#file").css("color","green");
		$('#image_preview').css("display", "block");
		$('#previewing').attr('src', e.target.result);
		$('#previewing').attr('width', '250px');
		$('#previewing').attr('height', '230px');

	};


	$('#btnSearch').on('click', e => {

		let modalConsulta = $('#modalConsulta');

		let id = $("#search").val();

		if (id != null && id !="") {

			modalConsulta.modal('open');


			$.ajax({url	: "../api/produtos.php",
				type : "POST",
				dataType : "json",
				data : {id : id}
			}).then(data => {

					modalConsulta.find('div.modal-content').find('input[name=name]').val(data.name);

					modalConsulta.find('div.modal-content').find('textarea[name=description]').val(data.description);

					modalConsulta.find('div.modal-content').find('input[name=price]').val(data.price);

					modalConsulta.find('div.modal-content').find('img').attr('src', '../assets/images/'+data.file);

			}) 

		} else {
			alert("Insira o ID do produto");
		}

		
	});
	
});