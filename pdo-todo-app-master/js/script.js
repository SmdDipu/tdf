    
$(document).ready(function(){




	// form label animation
    var onClass = 'on';
    var showClass = 'show';var n = 0;
    $('input').bind('focus',function(){
        $(this).prev('label').addClass(showClass);
        $(this).prev('label').addClass(onClass);
    });

    $('input').bind('blur',function(){
       $('input').prev('label').removeClass(showClass);
    });








    // for commenting system

    $(".comment").load("comment_display.php");

	var update_comment = function(){
	    $(".comment").load("comment_display.php");
	}

	setInterval(update_comment,1000);

    //$('#comment_text').keyup(function(event){
    $('#comment').submit(function(event){
    	event.preventDefault();

		//if(event.keyCode == 13){
		    var hidden  =  $('input[type="hidden"]').val();
	    	var comment =  $('#comment_text').val();
	    	var url     =  $('#comment').attr('action');
	    	var data 	=  $('#comment').serialize();
	    	$.ajax({
	    		type 		:  'post',
	    		url			:  url,
	    		data 		: data,
	    		cache		: false,
	    		processData : false,
	    		success		: function(response){
	    			 //$(".comment").load("comment_display.php");
	    			//$('.comment').append(response);
	    			$('#comment_text').val("");
	    		}
	    	});
		//}

    });

    // End of commenting system








	// for registration system

	$('#reg_form').submit(function(event){

		event.preventDefault();
		var password     = $('#password').val();
		var email        = $('#email').val();
		var company_name = $('#company_name').val();
		var role		 = $('#role').val();
		var url			 = $('#reg_form').attr('action');
		var data 		 = $('#reg_form').serialize();

		$("#reg_form img").show();
		//$('#reg_sub_btn').html('SUBMITTING');

		$.ajax({

			type    	: 'post',
			url     	: url,
			data    	: data,
			cache       : false,
			processData : false,
 			success : function(response){
 				$("#reg_form img").hide();
                //$( '.success' ).append(response);
				$('.success').fadeIn("slow").append(response);
				//$('#reg_sub_btn').html('SUBMIT');
				//$('.nur').fadeIn("slow").html('<a href="index.php">Home</a>');
				setTimeout(function() {
					$('.success').fadeOut("slow");
					$('.success').html("");
				}, 2000 );
            }

		});

	});

	// End of registration system








	// load more button 

	//$('.load-more-btn').on('click',function(){
	$(document).on('click','.load-more-btn',function(){

		var last_add_id = $('.load-more-btn').attr('data-add-id');
		$('.load-more-btn').html('Loading...');
		console.log(last_add_id);
		$.ajax({

			url	    : 'load_more_process.php',
			method  : 'POST',
			data    : { last_add_id : last_add_id },
			success : function(data){

				if(data != 0){
					//$('.row_load_more').remove();
					//$('.products').append(data);
					var product_update = function(){
						$('.row_load_more').remove();
					    $('.products').append(data);
					}

					setTimeout(product_update,1000);
				}else{
					$('.load-more-btn').html('No more');
				}

			}
		
		});

	});






	// load more button for catagory page

	//$('.load-more-btn').on('click',function(){
	$(document).on('click','.load-more-btn_cat',function(){

		var last_add_id = $('.load-more-btn_cat').attr('data-add-id');
		$('.load-more-btn_cat').html('Loading...');
		console.log(last_add_id);
		$.ajax({

			url	    : 'load_more_process_cat.php',
			method  : 'POST',
			data    : { last_add_id : last_add_id },
			success : function(data){

				if(data != 0){
					var product_update = function(){
						$('.row_load_more_cat').remove();
					    $('.products').append(data);
					}

					setTimeout(product_update,1000);
				}else{
					$('.load-more-btn_cat').html('No more');
				}

			}
		
		});

	});


    
})










