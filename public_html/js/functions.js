$(document).ready(function(){

		$('#customer-name').keyup(function(){

			var SortBy = $('[name=sort]:checked').val();

			// if there is nothing in the seach bar
			if ( $(this).val() == '' ) {

				return;
			}

			// Prepare Ajax
			$.ajax({
				type:'get',
				url: 'api/live-search.php?query='+ $(this).val(),

				data:{

					sort:SortBy

				},

				success:function(dataFromServer){
					console.log(dataFromServer);

					$('#results').html('');

					for (var i = 0 ; i < dataFromServer.length; i++) {
						
						$('#results').append('<ul>');
						$('#results').append('<li> First Name :' + dataFromServer[i][0]+ '</li>');
						$('#results').append('<li> Last Name :' + dataFromServer[i][1]+ '</li>');
						$('#results').append('<li> Email :' + dataFromServer[i][2]+ '</li>');
						$('#results').append('<li> Phone :' + dataFromServer[i][3]+ '</li>');

						$('#results').append('</ul>');









					}
				},
				error:function(){
					console.log("Cant Connect to Server");
				}

			});

		});



});