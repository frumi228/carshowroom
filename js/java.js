$(document).ready(function(){
 		var jVal = {
			
    	'fullName' : function() {
			$('body').append('<div id="nameInfo" class="info"></div>');
				var nameInfo = $('#nameInfo');
				var ele = $('#textfield');
				var pos = ele.offset();
				
				nameInfo.css({
    			top: pos.top-3,
    			left: pos.left+ele.width()+15

				});
				if(ele.val().length < 6) {
				jVal.errors = true;
				 nameInfo.removeClass('correct').addClass('error').html('&larr; at least 6 characters').show();
				ele.removeClass('normal').addClass('wrong');
			    } else {
				nameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
				}
		},

			'fullName' : function() {
				$('body').append('<div id="nameInfo" class="info"></div>');
				var nameInfo = $('#nameInfo');
				var ele = $('#textfield2');
				var pos = ele.offset();
				
				nameInfo.css({
    			top: pos.top-3,
    			left: pos.left+ele.width()+15

				});
				if(ele.val().length < 6) {
				jVal.errors = true;
				 nameInfo.removeClass('correct').addClass('error').html('&larr; at least 6 characters').show();
				ele.removeClass('normal').addClass('wrong');
			    } else {
				nameInfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
				}



    	},
		
			
    	'birthdate' : function() {
			$('body').append('<div id="birthinfo" class="info"></div>');
				var birthinfo = $('#birthinfo');
				var ele = $('#textfield2');
				var pos = ele.offset();
				
				birthinfo.css({
    			top: pos.top-3,
    			left: pos.left+ele.width()+15

				});
				 var patt = /^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$/i;

				
				if(!patt.test(ele.val())){
				jVal.errors = true;
				birthinfo.removeClass('correct').addClass('error').html('&larr; this is not the right format').show();
				ele.removeClass('normal').addClass('wrong');
			    } else {
				birthinfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
				}

},

			'gender' : function() {
			$('body').append('<div id="genderinfo" class="info"></div>');
				var birthinfo = $('#genderinfo');
				var ele = $('#textfield3');
				var pos = ele.offset();
				
				genderinfo.css({
        		top: pos.top-10,
        		left: pos.left+ele.width()+60


				});
				 

				
				if($('input[name="gender"]:checked').length === 0)
				{
				jVal.errors = true;
				genderinfo.removeClass('correct').addClass('error').html('&larr; select atleast one').show();
				ele.removeClass('normal').addClass('wrong');
			    } else {
				genderinfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
				}

},

			'vehicle' : function() {
			$('body').append('<div id="vehicleinfo" class="info"></div>');
				var vehicleinfo = $('#vehicleinfo');
				var ele = $('#radio');
				var pos = ele.offset();
				
			 vehicleinfo.css({
        		top: pos.top-10,
        		left: pos.left+ele.width()+40


				});
				

				
				if($('input[name="vehicle"]:checked').length <= 1)
				 {
				jVal.errors = true;
				vehicleinfo.removeClass('correct').addClass('error').html('&larr; choose atleast two').show();
				ele.removeClass('normal').addClass('wrong');
			    } else {
				vehicleinfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
				}

},

			'email' : function() {
			$('body').append('<div id="emailinfo" class="info"></div>');
				var emailinfo = $('#emailinfo');
				var ele = $('#radio2');
				var pos = ele.offset();
				
			 	emailinfo.css({
        		top: pos.top-10,
        		left: pos.left+ele.width()+40


				});
				
				var patt = /^.+@.+[.].{2,}$/i;

				
				if(!patt.test(ele.val()))
				 {
				jVal.errors = true;
				emailinfo.removeClass('correct').addClass('error').html('&larr; at this is not the right formet').show();
				ele.removeClass('normal').addClass('wrong');
			    } else {
				rmailinfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
				}

},

			'about' : function() {
			$('body').append('<div id="aboutinfo" class="info"></div>');
				var aboutinfo = $('#aboutinfo');
				var ele = $('#textfield4');
				var pos = ele.offset();
				
			aboutinfo.css({
        		top: pos.top-3,
        		left: pos.left+ele.width()+15



				});
				

				
				if(ele.val().length < 75)

				 {
				jVal.errors = true;
				aboutinfo.removeClass('correct').addClass('error').html('&larr; at least 6 characters').show();
				ele.removeClass('normal').addClass('wrong');
			    } else {
				aboutinfo.removeClass('error').addClass('correct').html('&radic;').show();
				ele.removeClass('wrong').addClass('normal');
				}

},
		

		'sendIt' : function (){
    	if(!jVal.errors) {
        $('#jform').submit();
    }
		
}
		};
		
		
		
		
		 $('#send').click(function (){
        var obj = $.browser.webkit ? $('body') : $('html');
        obj.animate({ scrollTop: $('#jform').offset().top }, 01, function (){
            jVal.errors = false;
            jVal.fullName();
            jVal.birthDate();
            jVal.gender();
            jVal.vehicle();
            jVal.email();
            jVal.about();
            jVal.sendIt();
        });
        return false;
    });

// bind jVal.fullName function to "Full name" form field
    $('#fullname').change(jVal.fullName);
	$('#birthday').change(jVal.birthdate);
	$('input[name="gender"]').change(jVal.gender);
	$('input[name="vehicle"]').change(jVal.vehicle);
	$('#email').change(jVal.email);
	$('#about').change(jVal.about);





});
