$(document).ready(function(){
	
	
	//kur perdoruesi klikon ne POST butoni
	$(document).on('click', '#submit_btn', function(){
		var name = $('#name').val();
		var comment = $('#comment').val();

		$.ajax({
			url: 'server.php',
			type: 'POST',
			data: {
				'save': 1,
				'name': name,
				'comment': comment
			},
			success: function(response){
				//zbrazi form fields pasi qe te behet post
				$('#name').val('');
				$('#comment').val('');

				$('#display_area').append(response);

			}
		});
	});
	//kur perdoruesi klikon ne delete butoni
	$(document).on('click', '.delete', function(){
		var id = $(this).data('id');
		var $clicked_btn = $(this);
		

		$.ajax({
			url: 'server.php',
			type: 'GET',
			data: {
				'delete': 1,
				'id': id
			},
			success: function(response){
				//largoj komentet e fshira
				$clicked_btn.parent().remove();


			}
		});
	});

	//kur perdoruesi klikon ne delete butoni
	var edit_id;
	var $edit_comment;
	$(document).on('click', '.edit', function(){
		//vendosi properties of comment being edited
		edit_id = $(this).data('id');
		$edit_comment = $(this).parent();

		//merri name dhe text qe te editohet
		var name = $(this).siblings('.display_name').text();
		var comment = $(this).siblings('.comment_text').text();

		//vendosi vlerat mbrenda formes
		$('#name').val(name);
		$('#comment').val(comment);

		//kur klikohet edit te shfaqet butoni per update
		$('#submit_btn').hide();
		$('#update_btn').show();
	});

	//pasi te behet update te mos mbetet versioni i vjeter i te dhenes
	$(document).on('click', '#update_btn', function(){
		var name = $('#name').val();
		var id = edit_id;
		var comment = $('#comment').val();

		$.ajax({
			url: 'server.php',
			type: 'POST',
			data: {
				'update': 1,
				'id': edit_id,
				'name': name,
				'comment': comment
			},
			success: function(response){
				//zbrazi form fields pasi qe te behet post
				$('#name').val('');
				$('#comment').val('');
				$('#submit_btn').show();
				$('#update_btn').hide();
				$edit_comment.replaceWith(response);

			}
		});
	
	});


});