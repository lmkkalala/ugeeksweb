$(document).ready(function(){
	//
	
	var param="";

	// On the Intro form

	$('#add-new').click(function(){
		$('#new_form').load('views/dynamic_blocks.php #new_intro', param);
		$('#new_form').show();
		$(this).hide('slow');
		$('#tab div').hide('slow');
		$('#back a').css('display','block');
		
	});

	$('#back').on('click', function(){
			$('#back a').css('display','none');
			$('#new_form').html("");
			$('#add-new').show('fast');
			$('#tab div').show('fast');
		});

	$(document).on('click','#test', function(){
		$('#new_form').hide();
	});

	// On the about form

	$('#new-about').click(function(){
		$('#new_form').load('views/dynamic_blocks.php #new_about', param);
		$('#new_form').show();
		$(this).hide('slow');
		$('#tab div').hide('slow');
		$('#back a').css('display','block');
		
	});

	$('#back').on('click', function(){
			$('#back a').css('display','none');
			$('#new_form').html("");
			$('#new-about').show('fast');
			$('#tab div').show('fast');
		});

	// On the service form

	$('#new-service').click(function(){
		$('#new_form').load('views/dynamic_blocks.php #new_service', param);
		$('#new_form').show();
		$(this).hide('slow');
		$('#tab div').hide('slow');
		$('#back a').css('display','block');
		
	});

	$('#back').on('click', function(){
			$('#back a').css('display','none');
			$('#new_form').html("");
			$('#new-service').show('fast');
			$('#tab div').show('fast');
		});

	// On the works form

	$('#new-work').click(function(){
		$('#new_form').load('views/dynamic_blocks.php #new_work', param);
		$('#new_form').show();
		$(this).hide('slow');
		$('#tab div').hide('slow');
		$('#back a').css('display','block');
		
	});

	$('#back').on('click', function(){
			$('#back a').css('display','none');
			$('#new_form').html("");
			$('#new-work').show('fast');
			$('#tab div').show('fast');
		});

	// On the team form

	$('#new-team').click(function(){
		$('#new_form').load('views/dynamic_blocks.php #new_team', param);
		$('#new_form').show();
		$(this).hide('slow');
		$('#tab div').hide('slow');
		$('#back a').css('display','block');
		
	});

	$('#back').on('click', function(){
			$('#back a').css('display','none');
			$('#new_form').html("");
			$('#new-team').show('fast');
			$('#tab div').show('fast');
		});

	// On the story form

	$('#add-story').click(function(){
		$('#new_form').load('views/dynamic.php #new_story', param);
		$('#new_form').show();
		$(this).hide('slow');
		$('#tab div').hide('slow');
		$('#back a').css('display','block');
		
	});

	$('#back').on('click', function(){
			$('#back a').css('display','none');
			$('#new_form').html("");
			$('#new-story').show('fast');
			$('#tab div').show('fast');
		});	

		 // On the skill form

	$('#add-skill').click(function(){
		$('#new_form').load('views/dynamic.php #new_skill', param);
		$('#new_form').show();
		$(this).hide('slow');
		$('#tab div').hide('slow');
		$('#back a').css('display','block');
		
	});

	$('#back').on('click', function(){
			$('#back a').css('display','none');
			$('#new_form').html("");
			$('#add-skill').show('fast');
			$('#tab div').show('fast');
		});
});