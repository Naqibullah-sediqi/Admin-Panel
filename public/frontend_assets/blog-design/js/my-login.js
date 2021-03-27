
'use strict';

$(function() {

	// author badge :)
	// var author = '<div style="position: fixed;bottom: 0;right: 20px;background-color: #fff;box-shadow: 0 4px 8px rgba(0,0,0,.05);border-radius: 3px 3px 0 0;font-size: 12px;padding: 5px 10px;">By <a href="https://twitter.com/mhdnauvalazhar">@mhdnauvalazhar</a> &nbsp;&bull;&nbsp; <a href="https://www.buymeacoffee.com/mhdnauvalazhar">Buy me a Coffee</a></div>';
	// $("body").append(author);

	$("input[type='password'][data-eye]").each(function(i) {
		var $this = $(this),
			id = 'eye-password-' + i,
			el = $('#' + id);

		$this.wrap($("<div/>", {
			style: 'position:relative',
			id: id
		}));

		$this.css({
			paddingRight: 60
		});
		
		$this.after($("<div/>", {
			html: '<span class="eye-open"><i class="fa">&#xf06e;</i></span>',
			// class: 'btn btn-primary btn-sm',
			id: 'passeye-toggle-'+i,
		}).css({
				position: 'absolute',
				right: 10,
				top: ($this.outerHeight() / 2) - 12,
				padding: '2px 7px',
				fontSize: 12,
				cursor: 'pointer',
		}));
		// new 
		$this.after($("<div/>", {
			html: '<span class="close-eye"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>',
			// class: 'btn btn-primary btn-sm',
			id: 'passeye-toggle2-'+i,
		}).css({
				display:"none",
				position: 'absolute',
				right: 10,
				top: ($this.outerHeight() / 2) - 12,
				padding: '2px 7px',
				fontSize: 12,
				cursor: 'pointer',
		}));

		$this.after($("<input/>", {
			type: 'hidden',
			id: 'passeye-' + i
		}));

		var invalid_feedback = $this.parent().parent().find('.invalid-feedback');

		if(invalid_feedback.length) {
			$this.after(invalid_feedback.clone());
		}

		$this.on("keyup paste", function() {
			$("#passeye-"+i).val($(this).val());
		});
		$("#passeye-toggle-"+i).on("click", function() {
			if($this.hasClass("show")) {
				$this.attr('type', 'password');
				$this.removeClass("show");
				$(this).removeClass("btn-outline-primary");
				$("#passeye-toggle2-"+i).css("display","block");
				$("#passeye-toggle-"+i).css("display","none")
			
			}else{
				$this.attr('type', 'text');
				$this.val($("#passeye-"+i).val());				
				$this.addClass("show");
				console.log("2");

				$("#passeye-toggle2-"+i).css("display","block");
				$("#passeye-toggle-"+i).css("display","none");
			}
		});

		$("#passeye-toggle2-"+i).on("click", function() {
			if($this.hasClass("show")) {
				$this.attr('type', 'password');
				$this.removeClass("show");
				$(this).removeClass("btn-outline-primary");
				console.log("1");
				$("#passeye-toggle2-"+i).css("display","none");
				$("#passeye-toggle-"+i).css("display","block");
			
			}else{
				$this.attr('type', 'text');
				$this.val($("#passeye-"+i).val());				
				$this.addClass("show");
				console.log("2");
				$("#passeye-toggle2-"+i).css("display","none");
				$("#passeye-toggle-"+i).css("display","block");

			}
		});
	});

	$(".my-login-validation").submit(function() {
		var form = $(this);
        if (form[0].checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
		form.addClass('was-validated');
	});


	// var i = 0;
	// $(document).on('click','.eye-open',function(e)
    // {
	// 	if(i == 0){
	// 	$(".eye-open").css("display","none");
	// 	$(".close-eye").css("display","inline");
	// 	i =1;
	// 	}

	// });	

	// $(document).on('click','.close-eye',function(e)
    // {
	// 	if(i == 1){
	// 	$(".eye-open").click();
	// 	i =0;
	// 	}
	// 	$(".eye-open").css("display","inline");
	// 	$(".close-eye").css("display","none");
		

	// });	

});
