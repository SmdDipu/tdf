	$(document).ready(function() {

		/*  sticky menu */
		$(".header_area").sticky({topSpacing:0});

		$('.carousel').carousel({
			interval: 5000
		})

		$(".navbar-toggle").click(function(){
			if(!$(".navbar-collapse").hasClass("in"))
			{
				$(".navbar-collapse").addClass("in");
			}
			else{
				$(".navbar-collapse").removeClass("in");
			}
		});
		
		$(".mainmenu ul.nav.navbar-nav li a").click(function(){
			$(".navbar-collapse").removeClass("in");
		});


		/* scrool to */
		$('li.smooth_menu a').bind('click', function(event){
		    var $anchor = $(this);
			var headerH = '60';
			$('html,body').stop().animate({
			    scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
			}, 1200,'easeInOutExpo');
			
			event.preventDefault();
		});


		/*jquery scrollspy */
		$('body').scrollspy({
			target: '.header_area',
			offset: 95
		});

		// parallax effect
		$('.special_item_area').scrolly({bgParallax: true});
		$('.reserve_table_area').scrolly({bgParallax: true});
		$('.counter_area').scrolly({bgParallax: true});

		// counter up
		$('.count').counterUp({
		    delay: 10,
		    time: 1000
		});





		$('#regform').submit(function(event){
			event.preventDefault();
			var name = $('.name').val();
			var email = $('.email').val();
			var password = $('.password').val();
			var con_password = $('.confirm-password').val();
			if(password == con_password){
				$.ajax({
					method : "post",
					url : "reg_process.php",
					data : { 
								name  : name , 
								email : email ,
						 	password  : password
					},
					success : function(data){
/*						$('.regalert').empty();
						$('.regalert').append(data);*/
					}
				});				
			}else{
				alert('password not match');
			}
		});

/*		$('#loginform').submit(function(event){
			event.preventDefault();
			var logemail = $('.logemail').val();
			var logpass = $('.logpassword').val();
				$.ajax({
					method : "post",
					url : "login_process.php",
					data : { 
							logemail : logemail ,
						 	logpass  : logpass
					},
					success : function(data){
						$('.logalert').empty();
						$('.logalert').append(data);
					}
				});	
		});*/






		

    });
