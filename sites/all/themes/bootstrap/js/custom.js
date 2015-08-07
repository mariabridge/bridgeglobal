jQuery(document).ready(function(){	
//	jQuery('.down-arrow1').on('click', function(event) {
//		jQuery('html, body').animate({
//			scrollTop: jQuery(".expert").offset().top
//		}, 920);
//	});
//		jQuery('.down-arrow2').on('click', function(event) {
//		jQuery('html, body').animate({
//			scrollTop: jQuery(".cases").offset().top
//		}, 920);
//	});
//	jQuery('.down-arrow3').on('click', function(event) {
//		jQuery('html, body').animate({
//			scrollTop: jQuery(".news").offset().top
//		}, 920);
//	});



        
        
    jQuery('.down-arrow a, .top-arrow a').click(function(e){
		e.preventDefault();
	
		var position = jQuery(this).attr('href');
	
		jQuery('html, body').animate({scrollTop: jQuery(position).offset().top -40 }, 800);

	});
        
        
   
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.goto-top').fadeIn(duration);
        } else {
            jQuery('.goto-top').fadeOut(duration);
        }
    });
    
    jQuery('.goto-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });  

    jQuery(window).on("load resize",function(){
            var innerbannerMargin=jQuery("header.top-bar").outerHeight();
            jQuery(".inner-banner").css({'margin-top':innerbannerMargin+'px'});
        });    
    
		
});	


/* career page Job Office filtering */
var jqJobOfficeFilter = jQuery.noConflict();

jqJobOfficeFilter(document).ready(function(){
	
	jqJobOfficeFilter('#edit-field-job-office-value').change(function(){
		
		jqJobOfficeFilter('#edit-reset').attr('disabled','disabled');
		
	});
	
});


/* Menu and Header section Fixed open*/
var jqFixMenu = jQuery.noConflict();
jqFixMenu(document).ready(function(){
	jqFixMenu(".top-bar").clone().appendTo("body").addClass("fixed"); 
});
/* Menu and Header section Fixed close*/


/* eBook page scroll effect : enable download all eBook link open here*/
jQuery(window).on("scroll",function(){
    var innerbannerMargin=jQuery(".header").outerHeight();
    jQuery(".down-btn-active").css({'top':'0px'});    

    var scroll = jQuery(window).scrollTop();   

     //>=, not <=
     if (scroll >= 200) {
      //clearHeader, not clearheader - caps H
      jQuery(".ebook-down-all").addClass("down-btn-active");
    }
    else {
      jQuery(".ebook-down-all").removeClass("down-btn-active");
    }

  });
/* eBook page scroll effect : enable download all eBook link close here*/



/* Contact us */
var jqCustom = jQuery.noConflict();
jqCustom(document).ready(function(){

	jqCustom('#edit-submitted-your-name').css('border','none');
	jqCustom('#edit-submitted-email-address').css('border','none');
	jqCustom('#edit-submitted-phone-number').css('border','none');
	jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
	jqCustom('#edit-captcha-response').css('border','none');

		jqCustom('#edit-submitted-your-name').focus(function(){
		if(jqCustom('#edit-submitted-your-name').val() == 'Your Name' ) {
			jqCustom('#edit-submitted-your-name').val('');
		}
	});
	

	jqCustom('#edit-submitted-your-name').blur(function(){
		if(jqCustom('#edit-submitted-your-name').val() == '' ) {
			//jqCustom('#edit-submitted-your-name').val('Your Name');
		}
	});

	jqCustom('#edit-submitted-email-address').focus(function(){
		if(jqCustom('#edit-submitted-email-address').val() == 'Email Address' || jqCustom('#edit-submitted-email-address').val() == 'Please fill a valid Email ID') {
			jqCustom('#edit-submitted-email-address').val('');
		}
	});
	
	jqCustom('#edit-submitted-email-address').blur(function(){
		if(jqCustom('#edit-submitted-email-address').val() == '' ) {
			//jqCustom('#edit-submitted-email-address').val('Email Address');
		}
	});
	
	jqCustom('#edit-submitted-phone-number').focus(function(){
		if(jqCustom('#edit-submitted-phone-number').val() == 'Phone Number' ) {
			jqCustom('#edit-submitted-phone-number').val('');
		}
	});
	
	jqCustom('#edit-submitted-phone-number').blur(function(){
		if(jqCustom('#edit-submitted-phone-number').val() == '' ) {
			//jqCustom('#edit-submitted-phone-number').val('Phone Number');
		}
	});
	
	jqCustom('#edit-submitted-your-question-request-or-remark').focus(function(){
		if(jqCustom('#edit-submitted-your-question-request-or-remark').val() == 'Your question, request or remark' ) {
			jqCustom('#edit-submitted-your-question-request-or-remark').val('');
		}
	});
	
	jqCustom('#edit-submitted-your-question-request-or-remark').blur(function(){
		if(jqCustom('#edit-submitted-your-question-request-or-remark').val() == '' ) {
			//jqCustom('#edit-submitted-your-question-request-or-remark').val('Your question, request or remark');
		}
	});
	
	jqCustom("#edit-submitted-phone-number").blur(function (e) {	    

		var phoneNumber = jqCustom("#edit-submitted-phone-number").val();
	    var filter = /^[0-9-+()]+$/;
	    if ( filter.test(phoneNumber ) ) {
	    	jqCustom('#edit-submitted-phone-number').css('border','none');
	    } else {
	    	jqCustom('#edit-submitted-phone-number').focus();
			jqCustom('#edit-submitted-phone-number').css('border-right','4px solid red');
			jqCustom('#edit-submitted-your-name').css('border','none');
			jqCustom('#edit-submitted-email-address').css('border','none');
			jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
			return false;
	    }
	});
	
	jqCustom("#edit-captcha-response").keypress(function (e) {
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			jqCustom('#edit-captcha-response').focus();
			jqCustom('#edit-captcha-response').css('border-right','4px solid red');
			jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
			jqCustom('#edit-submitted-your-name').css('border','none');
			jqCustom('#edit-submitted-email-address').css('border','none');
			jqCustom('#edit-submitted-phone-number').css('border','none');
			return false;
	    }else{
	    	jqCustom('#edit-captcha-response').css('border','none');
	    }
	});

	jqCustom('#webform-client-form-131').submit(function(){
			if(jqCustom('#edit-submitted-your-name').val() == 'Your Name' || jqCustom.trim( jqCustom('#edit-submitted-your-name').val() ) == '') {
			jqCustom('#edit-submitted-your-name').focus();
			jqCustom('#edit-submitted-your-name').css('border-right','4px solid red');
			jqCustom('#edit-submitted-email-address').css('border','none');
			jqCustom('#edit-submitted-phone-number').css('border','none');
			jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
			return false;
		}if(jqCustom('#edit-submitted-email-address').val() == 'Email Address' || jqCustom.trim( jqCustom('#edit-submitted-email-address').val() ) == ''  ) {
			jqCustom('#edit-submitted-email-address').focus();
			jqCustom('#edit-submitted-email-address').css('border-right','4px solid red');
			jqCustom('#edit-submitted-your-name').css('border','none');
			jqCustom('#edit-submitted-phone-number').css('border','none');
			jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
			return false;
		}else if(jqCustom('#edit-submitted-phone-number').val() == 'Phone Number' || jqCustom.trim( jqCustom('#edit-submitted-phone-number').val() ) == '' || !jqCustom.isNumeric(jqCustom('#edit-submitted-phone-number').val()) ) {
			console.log(jqCustom.isNumeric(jqCustom('#edit-submitted-phone-number').val()));
			jqCustom('#edit-submitted-phone-number').focus();
			jqCustom('#edit-submitted-phone-number').css('border-right','4px solid red');
			jqCustom('#edit-submitted-your-name').css('border','none');
			jqCustom('#edit-submitted-email-address').css('border','none');
			jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
			return false;
		}else if(jqCustom('#edit-submitted-your-question-request-or-remark').val() == 'Your question, request or remark' || jqCustom.trim( jqCustom('#edit-submitted-your-question-request-or-remark').val() ) == '' ) {
			jqCustom('#edit-submitted-your-question-request-or-remark').focus();
			jqCustom('#edit-submitted-your-question-request-or-remark').css('border-right','4px solid red');
			jqCustom('#edit-submitted-your-name').css('border','none');
			jqCustom('#edit-submitted-email-address').css('border','none');
			jqCustom('#edit-submitted-phone-number').css('border','none');
			return false;
		}else if( jqCustom('#edit-captcha-response').val() == '' ){
			jqCustom('#edit-captcha-response').focus();
			jqCustom('#edit-captcha-response').css('border-right','4px solid red');
			jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
			jqCustom('#edit-submitted-your-name').css('border','none');
			jqCustom('#edit-submitted-email-address').css('border','none');
			jqCustom('#edit-submitted-phone-number').css('border','none');
			return false;
			
		}else{
	
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqCustom('#edit-submitted-email-address').val() ) ) ) {
				jqCustom('#edit-submitted-email-address').val('Please fill a valid Email ID'); 
				jqCustom('#edit-submitted-email-address').css('border-right','4px solid red');
				jqCustom('#edit-submitted-your-name').css('border','none');
				jqCustom('#edit-submitted-phone-number').css('border','none');
				jqCustom('#edit-submitted-your-question-request-or-remark').css('border','none');
				return false;
			}else{
		
				var string 						= jQuery('.form-type-textfield').text();
				var captch_result 				= 0;
				var result 						= 0;
				var strArray 					= string.match(/(\d+)/g);
			    var i 							= 0;
			    var captacha_text_box_result 	= parseInt( jqCustom('#edit-captcha-response').val() , 10 ); 
			    
			    for(i=0; i<strArray.length;i++)
			    {
			    	captch_result = captch_result + parseInt( strArray[i] , 10 ); 
			    }

				
				if( captacha_text_box_result != captch_result ){
					
					jqCustom('#edit-captcha-response').css('border-right','4px solid red');
					
					return false;
					
				}else if( jqCustom('#edit-captcha-response').val() == captch_result ){
					
					
					jqCustom('.overlay-pop-up').show();
					jqCustom('.contact-us-success-message').show();
					
					jqCustom(".contact-us-success-message, .popupWrapper").fadeIn(500);
					jqCustom("body").css({ overflow: 'hidden' });
					
					var successMessage='<h2>Thank you for contacting us</h2><h3>A Bridge representative will contact you soon.</h2>';	
					
					jqCustom('.contact-us-success-message').html( successMessage );
					setTimeout(function(){
						return true;
					},1000);	
				
				}
			}

		}



	});


	});



/* Discuss Team with Bridge */ 

var jqDiscussTeamWithBridge = jQuery.noConflict();

jqDiscussTeamWithBridge(document).ready(function(){ 
	
	jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-team').css('border','1px solid #E1E1E1');
	
	jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').val('Your Name');
	jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val('Email Address');
	
	jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').focus(function(){
		if(jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').val() == 'Your Name' ) {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').val('');
		}
	});
	
	jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').blur(function(){
		if( jqDiscussTeamWithBridge.trim( jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').val() ) == '' ) {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').val('Your Name');
		}
	});
	
	jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').focus(function(){
		if(jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val() == 'Email Address' ) {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val('');
		}
	});
	
	jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').blur(function(){
		if( jqDiscussTeamWithBridge.trim( jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val() ) == '' ) {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val('Email Address');
		}

		jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').click(function(){
		if(jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val() == 'Please fill a valid Email Address' ) {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val('');
		}
	});
	});
	
	jqDiscussTeamWithBridge('#webform-client-form-124').submit(function(){
		if( jqDiscussTeamWithBridge.trim( jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-team').val() ) == '' ) {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-team').focus();
			return false;
		}else if(jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').val() == 'Your Name' || jqDiscussTeamWithBridge.trim( jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').val() ) == '') {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-your-name').focus();
			return false;
		}else if(jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val() == 'Email Address' || jqDiscussTeamWithBridge.trim( jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val() ) == ''  ) {
			jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val() ) ) ) {
				jqDiscussTeamWithBridge('#edit-submitted-discuss-with-bridge-email-address').val('Please fill a valid Email Address'); 
				return false;
			}else{
				
				jqDiscussTeamWithBridge('.discuss-team-popup-close').hide();
				jqDiscussTeamWithBridge('.discuss-team-form').hide();
				
				var current_path_discuss      = jqDiscussTeamWithBridge(location).attr('pathname');

				jqDiscussTeamWithBridge.cookie("current_path_discuss", current_path_discuss, { expires : 1 });
				
				var bookCallMessage='<div class="bookCallMessage" style="text-align:center;  padding-bottom:40px;"><h2>Thanks for your interest</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;"> Our Sales Manager will contact you soon.</h3></div>';
				
				jqDiscussTeamWithBridge(bookCallMessage).appendTo(".discuss-team-popup");
				setTimeout(function(){
						return true;
				},2000);	
				
			}
		}
	});
	
});








/* Home Page : book a call open*/

var jqBookACall = jQuery.noConflict();

jqBookACall(document).ready(function(){
	
	jqBookACall('#edit-submitted-book-a-call-your-name').focus(function(){
		if(jqBookACall('#edit-submitted-book-a-call-your-name').val() == 'Your Name' ) {
			jqBookACall('#edit-submitted-book-a-call-your-name').val('');
		}
	});
	
	jqBookACall('#edit-submitted-book-a-call-your-name').blur(function(){
		if(jqBookACall('#edit-submitted-book-a-call-your-name').val() == '' ) {
			jqBookACall('#edit-submitted-book-a-call-your-name').val('Your Name');
		}
	});
	
	jqBookACall('#edit-submitted-book-a-call-your-email').focus(function(){
		if(jqBookACall('#edit-submitted-book-a-call-your-email').val() == 'Your Email' || jqBookACall('#edit-submitted-book-a-call-your-email').val() == 'Please fill a valid Email Address') {
			jqBookACall('#edit-submitted-book-a-call-your-email').val('');
		}
	});
	
	jqBookACall('#edit-submitted-book-a-call-your-email').blur(function(){
		if(jqBookACall('#edit-submitted-book-a-call-your-email').val() == '' ) {
			jqBookACall('#edit-submitted-book-a-call-your-email').val('Your Email');
		}
	});
	
	jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').focus(function(){
		if(jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').val() == 'What are you looking for' ) {
			jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').val('');
		}
	});
	
	jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').blur(function(){
		if(jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').val() == '' ) {
			jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').val('What are you looking for');
		}
	});
	
		
	jqBookACall('#webform-client-form-27').submit(function(){
		if(jqBookACall('#edit-submitted-book-a-call-your-name').val() == 'Your Name' || jqBookACall.trim( jqBookACall('#edit-submitted-book-a-call-your-name').val() ) == '') {
			jqBookACall('#edit-submitted-book-a-call-your-name').focus();
			return false;
		}
		if(jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').val() == 'What are you looking for' || jqBookACall.trim( jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').val() ) == '') {
			jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').focus();
			return false;
		}
		if(jqBookACall('#edit-submitted-book-a-call-your-email').val() == 'Your Email' || jqBookACall.trim( jqBookACall('#edit-submitted-book-a-call-your-email').val() ) == ''  ) {
			jqBookACall('#edit-submitted-book-a-call-your-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqBookACall('#edit-submitted-book-a-call-your-email').val() ) ) ) {
				jqBookACall('#edit-submitted-book-a-call-your-email').val('Please fill a valid Email Address'); 
				return false;
			}else{

				jqBookACall('#edit-submitted-book-a-call-your-name').hide();
				jqBookACall('#edit-submitted-book-a-call-your-email').hide();
				jqBookACall('#edit-submitted-book-a-call-what-are-you-looking').hide();
				jqBookACall('#edit-submit--2').hide();
				
				var Message='<div class="bookCallMessage" style="text-align:center;  padding-bottom:40px;"><h2>Thank You</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;"> A Bridge representative will contact you soon.</h3> <img src="http://bridge-global.com/sites/all/themes/bootstrap/images/smily.png"/></div>';
				
				jqBookACall(Message).appendTo(".book-a-call-form");

				setTimeout(function(){
						return true;
				},1000);	
						
			}
		}
	});
	
});


/* Client case webform open*/

var jqClientCase = jQuery.noConflict();

jqClientCase(document).ready(function(){ 
	
	jqClientCase('#edit-submitted-client-case-your-name').focus(function(){
		if(jqClientCase('#edit-submitted-client-case-your-name').val() == 'Your Name' ) {
			jqClientCase('#edit-submitted-client-case-your-name').val('');
		}
	});
	
	jqClientCase('#edit-submitted-client-case-your-name').blur(function(){
		if(jqClientCase('#edit-submitted-client-case-your-name').val() == '' ) {
			jqClientCase('#edit-submitted-client-case-your-name').val('Your Name');
		}
	});
	
	jqClientCase('#edit-submitted-client-case-your-email').focus(function(){
		if(jqClientCase('#edit-submitted-client-case-your-email').val() == 'Your Email' || jqClientCase('#edit-submitted-client-case-your-email').val() == 'Please fill a valid Email Address') {
			jqClientCase('#edit-submitted-client-case-your-email').val('');
		}
	});
	
	jqClientCase('#edit-submitted-client-case-your-email').blur(function(){
		if(jqClientCase('#edit-submitted-client-case-your-email').val() == '' ) {
			jqClientCase('#edit-submitted-client-case-your-email').val('Your Email');
		}
	});	
	
		
	jqClientCase('#webform-client-form-133').submit(function(){
		if(jqClientCase('#edit-submitted-client-case-your-name').val() == 'Your Name' || jqClientCase.trim( jqClientCase('#edit-submitted-client-case-your-name').val() ) == '') {
			jqClientCase('#edit-submitted-client-case-your-name').focus();
			return false;
		}
		
		if(jqClientCase('#edit-submitted-client-case-your-email').val() == 'Your Email' || jqClientCase.trim( jqClientCase('#edit-submitted-client-case-your-email').val() ) == ''  ) {
			jqClientCase('#edit-submitted-client-case-your-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqClientCase('#edit-submitted-client-case-your-email').val() ) ) ) {
				jqClientCase('#edit-submitted-client-case-your-email').val('Please fill a valid Email Address'); 
				return false;
			}else{
				setTimeout(function(){
						window.open('http://bridge-global.com/sites/default/files/client_cases_doc/client_cases.pdf','_blank');
						return true;
				},2000);		
			}
		}
	});
	
});

/* Client case close  */



/* Home Page : book a call close*/


/* All eBook download */ 

var jqAllEbookDownload = jQuery.noConflict();

jqAllEbookDownload(document).ready(function(){  
	jqAllEbookDownload('#webform-component-all-ebook-download-your-phone').css('display','none');
	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').val('Your Name');
	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val('Your Email');
	
	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').focus(function(){
		if(jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').val() == 'Your Name' ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').val('');
		}
	});
	
	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').blur(function(){
		if( jqAllEbookDownload.trim( jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').val() ) == '' ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').val('Your Name');
		}
	});
	
	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').focus(function(){
		if(jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val() == 'Your Email' ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val('');
		}
	});

	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').focus(function(){
		if(jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').val() == 'Your Phone' ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').val('');
		}
	});
	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').blur(function(){
		if( jqAllEbookDownload.trim( jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').val() ) == '' ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').val('Your Phone');
		}
	});

	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').click(function(){
		if(jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val() == 'Please fill a valid email' ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val('');
		}
	});
	
	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').blur(function(){
		if( jqAllEbookDownload.trim( jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val() ) == '' ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val('Your Email');
		}
	});
	
	jqAllEbookDownload('#edit-submitted-all-ebook-download-need-assistance-1').change(function(){
				if(this.checked==true){
jqAllEbookDownload('#webform-component-all-ebook-download-your-phone').css('display','block');
				}
				else
jqAllEbookDownload('#webform-component-all-ebook-download-your-phone').css('display','none');

		
	});
	
	jqAllEbookDownload('#webform-client-form-98').submit(function(){
		var allEbookPhone=jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').val();
		if(jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').val() == 'Your Name' || jqAllEbookDownload.trim( jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').val() ) == '') {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-name').focus();
			return false;
		}else if(jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val() == 'Your Email' || jqAllEbookDownload.trim( jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val() ) == ''  ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').focus();
			return false;
		}
		else if(jqAllEbookDownload('#edit-submitted-all-ebook-download-need-assistance-1').is(":checked")){
		 if(jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').val() == 'Your Phone' || jqAllEbookDownload.trim( jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').val() ) == ''  ) {
			jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').focus();
			alert("dfdd");
			return false;
		}
		else
		{
			 var filter = /^[0-9-+()]+$/;
				    if ( ! filter.test(allEbookPhone ) ) {
				    	jqAllEbookDownload('#edit-submitted-all-ebook-download-your-phone').focus();	
				    	return false;    	
				    }		

		}
	}
		else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val() ) ) ) {
				jqAllEbookDownload('#edit-submitted-all-ebook-download-your-email').val('Please fill a valid email'); 
				return false;
			}else{
				
				//window.open('http://bridge-global.com/sites/default/files/free_ebook/all-ebooks.zip','_blank');
				jQuery('.all-ebook-download-popup, .all-ebook-download-wrapper').fadeOut(500);
				return true;
				
			}
		}
	});
	
});


/* ebook1-How_to_not_screw_up_when_managaing_a_remote_team */ 

var jqEbook1 = jQuery.noConflict();

jqEbook1(document).ready(function(){ 
	
	jqEbook1('#edit-submitted-how-to-not-screw-name').val('');
	jqEbook1('#edit-submitted-how-to-not-screw-email').val('');
	
	jqEbook1('#edit-submitted-how-to-not-screw-name').focus(function(){
		if(jqEbook1('#edit-submitted-how-to-not-screw-name').val() == 'Your Name' ) {
			jqEbook1('#edit-submitted-how-to-not-screw-name').val('');
		}
	});
	
	jqEbook1('#edit-submitted-how-to-not-screw-name').blur(function(){
		if( jqEbook1.trim( jqEbook1('#edit-submitted-how-to-not-screw-name').val() ) == '' ) {
			jqEbook1('#edit-submitted-how-to-not-screw-name').val('Your Name');
		}
	});
	
	jqEbook1('#edit-submitted-how-to-not-screw-email').focus(function(){
		if(jqEbook1('#edit-submitted-how-to-not-screw-email').val() == 'Your Email' ) {
			jqEbook1('#edit-submitted-how-to-not-screw-email').val('');
		}
	});
	
	jqEbook1('#edit-submitted-how-to-not-screw-email').click(function(){
		if(jqEbook1('#edit-submitted-how-to-not-screw-email').val() == 'Please fill a valid email' ) {
			jqEbook1('#edit-submitted-how-to-not-screw-email').val('');
		}
	});
	
	jqEbook1('#edit-submitted-how-to-not-screw-email').blur(function(){
		if( jqEbook1.trim( jqEbook1('#edit-submitted-how-to-not-screw-email').val() ) == '' ) {
			jqEbook1('#edit-submitted-how-to-not-screw-email').val('Your Email');
		}
	});
	
	jqEbook1('#webform-client-form-92').submit(function(){
		if(jqEbook1('#edit-submitted-how-to-not-screw-name').val() == 'Your Name' || jqEbook1.trim( jqEbook1('#edit-submitted-how-to-not-screw-name').val() ) == '') {
			jqEbook1('#edit-submitted-how-to-not-screw-name').focus();
			return false;
		}else if(jqEbook1('#edit-submitted-how-to-not-screw-email').val() == 'Your Email' || jqEbook1.trim( jqEbook1('#edit-submitted-how-to-not-screw-email').val() ) == ''  ) {
			jqEbook1('#edit-submitted-how-to-not-screw-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqEbook1('#edit-submitted-how-to-not-screw-email').val() ) ) ) {
				jqEbook1('#edit-submitted-how-to-not-screw-email').val('Please fill a valid email'); 
				return false;
			}else{
				
				window.open('http://bridge-global.com/sites/default/files/free_ebook/How_to_not_screw_up_when_managaing_a_remote_team.pdf','_blank');
				return true;
				
			}
		}
	});
	
});

/* ebook2-How_to_get_prepared_for_managing_a_remote_team */ 

var jqEbook2 = jQuery.noConflict();

jqEbook2(document).ready(function(){ 
	
	jqEbook2('#edit-submitted-how-to-get-prepared-name').val('');
	jqEbook2('#edit-submitted-how-to-get-prepared-email').val('');
	
	jqEbook2('#edit-submitted-how-to-get-prepared-name').focus(function(){
		if(jqEbook2('#edit-submitted-how-to-get-prepared-name').val() == 'Your Name' ) {
			jqEbook2('#edit-submitted-how-to-get-prepared-name').val('');
		}
	});
	
	jqEbook2('#edit-submitted-how-to-get-prepared-name').blur(function(){
		if( jqEbook2.trim( jqEbook2('#edit-submitted-how-to-get-prepared-name').val() ) == '' ) {
			jqEbook2('#edit-submitted-how-to-get-prepared-name').val('Your Name');
		}
	});
	
	jqEbook2('#edit-submitted-how-to-get-prepared-email').focus(function(){
		if(jqEbook2('#edit-submitted-how-to-get-prepared-email').val() == 'Your Email' ) {
			jqEbook2('#edit-submitted-how-to-get-prepared-email').val('');
		}
	});
	
	jqEbook2('#edit-submitted-how-to-get-prepared-email').click(function(){
		if(jqEbook2('#edit-submitted-how-to-get-prepared-email').val() == 'Please fill a valid email' ) {
			jqEbook2('#edit-submitted-how-to-get-prepared-email').val('');
		}
	});
	
	jqEbook2('#edit-submitted-how-to-get-prepared-email').blur(function(){
		if( jqEbook2.trim( jqEbook2('#edit-submitted-how-to-get-prepared-email').val() ) == '' ) {
			jqEbook2('#edit-submitted-how-to-get-prepared-email').val('Your Email');
		}
	});
	
	jqEbook2('#webform-client-form-93').submit(function(){ 
		if(jqEbook2('#edit-submitted-how-to-get-prepared-name').val() == 'Your Name' || jqEbook2.trim( jqEbook2('#edit-submitted-how-to-get-prepared-name').val() ) == '') {
			jqEbook2('#edit-submitted-how-to-get-prepared-name').focus();
			return false;
		}else if(jqEbook2('#edit-submitted-how-to-get-prepared-email').val() == 'Your Email' || jqEbook2.trim( jqEbook2('#edit-submitted-how-to-get-prepared-email').val() ) == ''  ) {
			jqEbook2('#edit-submitted-how-to-get-prepared-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqEbook2('#edit-submitted-how-to-get-prepared-email').val() ) ) ) {
				jqEbook2('#edit-submitted-how-to-get-prepared-email').val('Please fill a valid email'); 
				return false;
			}else{
				
				window.open('http://bridge-global.com/sites/default/files/free_ebook/How_to_get_prepared_for_managing_a_remote_team.pdf','_blank');
				return true;
				
			}
		}
	});
	
});


/* ebook3-How_to_organize_offshore_and_nearshore_collaboration */ 

var jqEbook3 = jQuery.noConflict();

jqEbook3(document).ready(function(){ 
	
	jqEbook3('#edit-submitted-how-to-organize-name').val('');
	jqEbook3('#edit-submitted-how-to-organize-email').val('');
	
	jqEbook3('#edit-submitted-how-to-organize-name').focus(function(){
		if(jqEbook3('#edit-submitted-how-to-organize-name').val() == 'Your Name' ) {
			jqEbook3('#edit-submitted-how-to-organize-name').val('');
		}
	});
	
	jqEbook3('#edit-submitted-how-to-organize-name').blur(function(){
		if( jqEbook3.trim( jqEbook3('#edit-submitted-how-to-organize-name').val() ) == '' ) {
			jqEbook3('#edit-submitted-how-to-organize-name').val('Your Name');
		}
	});
	
	jqEbook3('#edit-submitted-how-to-organize-email').focus(function(){
		if(jqEbook3('#edit-submitted-how-to-organize-email').val() == 'Your Email' ) {
			jqEbook3('#edit-submitted-how-to-organize-email').val('');
		}
	});
	
	jqEbook3('#edit-submitted-how-to-organize-email').click(function(){
		if(jqEbook3('#edit-submitted-how-to-organize-email').val() == 'Please fill a valid email' ) {
			jqEbook3('#edit-submitted-how-to-organize-email').val('');
		}
	});
	
	jqEbook3('#edit-submitted-how-to-organize-email').blur(function(){
		if( jqEbook3.trim( jqEbook3('#edit-submitted-how-to-organize-email').val() ) == '' ) {
			jqEbook3('#edit-submitted-how-to-organize-email').val('Your Email');
		}
	});
	
	jqEbook3('#webform-client-form-94').submit(function(){
		if(jqEbook3('#edit-submitted-how-to-organize-name').val() == 'Your Name' || jqEbook3.trim( jqEbook3('#edit-submitted-how-to-organize-name').val() ) == '') {
			jqEbook3('#edit-submitted-how-to-organize-name').focus();
			return false;
		}else if(jqEbook3('#edit-submitted-how-to-organize-email').val() == 'Your Email' || jqEbook3.trim( jqEbook3('#edit-submitted-how-to-organize-email').val() ) == ''  ) {
			jqEbook3('#edit-submitted-how-to-organize-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqEbook3('#edit-submitted-how-to-organize-email').val() ) ) ) {
				jqEbook3('#edit-submitted-how-to-organize-email').val('Please fill a valid email'); 
				return false;
			}else{
				
				window.open('http://bridge-global.com/sites/default/files/free_ebook/How_to_organize_offshore_and_nearshore_collaboration.pdf','_blank');
				return true;
				
			}
		}
	});
	
});


/* ebook4-How_to_overcome_cultural_differences_when_managing_offshore_or_nearshore_teams */ 

var jqEbook4 = jQuery.noConflict();

jqEbook4(document).ready(function(){ 
	
	jqEbook4('#edit-submitted-how-to-overcome-name').val('');
	jqEbook4('#edit-submitted-how-to-overcome-email').val('');
	
	jqEbook4('#edit-submitted-how-to-overcome-name').focus(function(){
		if(jqEbook4('#edit-submitted-how-to-overcome-name').val() == 'Your Name' ) {
			jqEbook4('#edit-submitted-how-to-overcome-name').val('');
		}
	});
	
	jqEbook4('#edit-submitted-how-to-overcome-name').blur(function(){
		if( jqEbook4.trim( jqEbook4('#edit-submitted-how-to-overcome-name').val() ) == '' ) {
			jqEbook4('#edit-submitted-how-to-overcome-name').val('Your Name');
		}
	});
	
	jqEbook4('#edit-submitted-how-to-overcome-email').focus(function(){
		if(jqEbook4('#edit-submitted-how-to-overcome-email').val() == 'Your Email' ) {
			jqEbook4('#edit-submitted-how-to-overcome-email').val('');
		}
	});
	
	jqEbook4('#edit-submitted-how-to-overcome-email').click(function(){
		if(jqEbook4('#edit-submitted-how-to-overcome-email').val() == 'Please fill a valid email' ) {
			jqEbook4('#edit-submitted-how-to-overcome-email').val('');
		}
	});
	
	jqEbook4('#edit-submitted-how-to-overcome-email').blur(function(){
		if( jqEbook4.trim( jqEbook4('#edit-submitted-how-to-overcome-email').val() ) == '' ) {
			jqEbook4('#edit-submitted-how-to-overcome-email').val('Your Email');
		}
	});
	
	jqEbook4('#webform-client-form-95').submit(function(){
		if(jqEbook4('#edit-submitted-how-to-overcome-name').val() == 'Your Name' || jqEbook4.trim( jqEbook4('#edit-submitted-how-to-overcome-name').val() ) == '') {
			jqEbook4('#edit-submitted-how-to-overcome-name').focus();
			return false;
		}else if(jqEbook4('#edit-submitted-how-to-overcome-email').val() == 'Your Email' || jqEbook4.trim( jqEbook4('#edit-submitted-how-to-overcome-email').val() ) == ''  ) {
			jqEbook4('#edit-submitted-how-to-overcome-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqEbook4('#edit-submitted-how-to-overcome-email').val() ) ) ) {
				jqEbook4('#edit-submitted-how-to-overcome-email').val('Please fill a valid email'); 
				return false;
			}else{
				
				window.open('http://bridge-global.com/sites/default/files/free_ebook/How_to_overcome_cultural_differences_when_managing_offshore_or_nearshore_teams.pdf','_blank');
				return true;
				
			}
		}
	});
	
});

/* ebook5-How_to_communicate_effectively_with_a_remote_team */ 

var jqEbook5 = jQuery.noConflict();

jqEbook5(document).ready(function(){ 
	
	jqEbook5('#edit-submitted-how-to-communicate-name').val('');
	jqEbook5('#edit-submitted-how-to-communicate-email').val('');
	
	jqEbook5('#edit-submitted-how-to-communicate-name').focus(function(){
		if(jqEbook5('#edit-submitted-how-to-communicate-name').val() == 'Your Name' ) {
			jqEbook5('#edit-submitted-how-to-communicate-name').val('');
		}
	});
	
	jqEbook5('#edit-submitted-how-to-communicate-name').blur(function(){ 
		if( jqEbook5.trim( jqEbook5('#edit-submitted-how-to-communicate-name').val() ) == '' ) {
			jqEbook5('#edit-submitted-how-to-communicate-name').val('Your Name');
		}
	});
	
	jqEbook5('#edit-submitted-how-to-communicate-email').focus(function(){
		if(jqEbook5('#edit-submitted-how-to-communicate-email').val() == 'Your Email' ) {
			jqEbook5('#edit-submitted-how-to-communicate-email').val('');
		}
	});
	
	jqEbook5('#edit-submitted-how-to-communicate-email').click(function(){
		if(jqEbook5('#edit-submitted-how-to-communicate-email').val() == 'Please fill a valid email' ) {
			jqEbook5('#edit-submitted-how-to-communicate-email').val('');
		}
	});
	
	jqEbook5('#edit-submitted-how-to-communicate-email').blur(function(){
		if( jqEbook5.trim( jqEbook5('#edit-submitted-how-to-communicate-email').val() ) == '' ) {
			jqEbook5('#edit-submitted-how-to-communicate-email').val('Your Email');
		}
	});
	
	jqEbook5('#webform-client-form-96').submit(function(){ 
		if(jqEbook5('#edit-submitted-how-to-communicate-name').val() == 'Your Name' || jqEbook5.trim( jqEbook5('#edit-submitted-how-to-communicate-name').val() ) == '') {
			jqEbook5('#edit-submitted-how-to-communicate-name').focus();
			return false;
		}else if(jqEbook5('#edit-submitted-how-to-communicate-email').val() == 'Your Email' || jqEbook5.trim( jqEbook5('#edit-submitted-how-to-communicate-email').val() ) == ''  ) {
			jqEbook5('#edit-submitted-how-to-communicate-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqEbook5('#edit-submitted-how-to-communicate-email').val() ) ) ) {
				jqEbook5('#edit-submitted-how-to-communicate-email').val('Please fill a valid email'); 
				return false;
			}else{
				
				window.open('http://bridge-global.com/sites/default/files/free_ebook/How_to_communicate_effectively_with_a_remote_team.pdf','_blank');
				return true;
				
			}
		}
	});
	
});


/* eBook6-How_to_manage_people_in_a_remote_team */ 

var jqEbook6 = jQuery.noConflict();

jqEbook6(document).ready(function(){ 
	
	jqEbook6('#edit-submitted-how-to-manage-name').val('');
	jqEbook6('#edit-submitted-how-to-manage-email').val('');
	
	jqEbook6('#edit-submitted-how-to-manage-name').focus(function(){
		if(jqEbook6('#edit-submitted-how-to-manage-name').val() == 'Your Name' ) {
			jqEbook6('#edit-submitted-how-to-manage-name').val('');
		}
	});
	
	jqEbook6('#edit-submitted-how-to-manage-name').blur(function(){
		if( jqEbook6.trim( jqEbook6('#edit-submitted-how-to-manage-name').val() ) == '' ) {
			jqEbook6('#edit-submitted-how-to-manage-name').val('Your Name');
		}
	});
	
	jqEbook6('#edit-submitted-how-to-manage-email').focus(function(){
		if(jqEbook6('#edit-submitted-how-to-manage-email').val() == 'Your Email' ) {
			jqEbook6('#edit-submitted-how-to-manage-email').val('');
		}
	});
	
	jqEbook6('#edit-submitted-how-to-manage-email').click(function(){
		if(jqEbook6('#edit-submitted-how-to-manage-email').val() == 'Please fill a valid email' ) {
			jqEbook6('#edit-submitted-how-to-manage-email').val('');
		}
	});
	
	jqEbook6('#edit-submitted-how-to-manage-email').blur(function(){
		if( jqEbook6.trim( jqEbook6('#edit-submitted-how-to-manage-email').val() ) == '' ) {
			jqEbook6('#edit-submitted-how-to-manage-email').val('Your Email');
		}
	});
	
	jqEbook6('#webform-client-form-97').submit(function(){ 
		if(jqEbook6('#edit-submitted-how-to-manage-name').val() == 'Your Name' || jqEbook6.trim( jqEbook6('#edit-submitted-how-to-manage-name').val() ) == '') {
			jqEbook6('#edit-submitted-how-to-manage-name').focus();
			return false;
		}else if(jqEbook6('#edit-submitted-how-to-manage-email').val() == 'Your Email' || jqEbook6.trim( jqEbook6('#edit-submitted-how-to-manage-email').val() ) == ''  ) {
			jqEbook6('#edit-submitted-how-to-manage-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqEbook6('#edit-submitted-how-to-manage-email').val() ) ) ) {
				jqEbook6('#edit-submitted-how-to-manage-email').val('Please fill a valid email'); 
				return false;
			}else{
				
				window.open('http://bridge-global.com/sites/default/files/free_ebook/How_to_manage_people_in_a_remote_team.pdf','_blank');
				return true;
				
			}
		}
	});
	
});


/* Leave your CV popup */

var jqLeaveYourCV = jQuery.noConflict();

jqLeaveYourCV(document).ready(function(){

	jqLeaveYourCV('#edit-submitted-leave-your-cv-name').val('Your Name');
	jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val('Preferred Position');
	jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val('Email ID');
	jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val('Phone Number');
	jqLeaveYourCV('#edit-submitted-leave-your-cv-message').val('Message');

	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-name').focus(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-name').val() == 'Your Name' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-name').val('');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-name').blur(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-name').val() == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-name').val('Your Name');
		}
	});

	jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').focus(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val() == 'Preferred Position' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val('');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').blur(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val() == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val('Preferred Position');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').focus(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val() == 'Email ID' || jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val() == 'Please fill a valid Email ID') {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val('');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').blur(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val() == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val('Email ID');
		}
	});
	
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').blur(function(){
		if( jqLeaveYourCV.trim( jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val() ) == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val('Company Name');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').focus(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val() == 'Phone Number' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val('');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').blur(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val() == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val('Phone Number');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-message').focus(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-message').val() == 'Message' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-message').val('');
		}
	});
	
	jqLeaveYourCV('#edit-submitted-leave-your-cv-message').blur(function(){
		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-message').val() == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-message').val('Message');
		}
	});
	
	
	jqLeaveYourCV('#webform-client-form-132').submit(function(){


		if(jqLeaveYourCV('#edit-submitted-leave-your-cv-name').val() == 'Your Name' || jqLeaveYourCV.trim( jqLeaveYourCV('#edit-submitted-leave-your-cv-name').val() ) == '') {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-name').focus();
			return false;
		}else if(jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val() == 'Preferred Position' || jqLeaveYourCV.trim( jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').val() ) == '') {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-preferred-position').focus();
			return false;
		}else if(jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val() == 'Phone Number' || jqLeaveYourCV.trim( jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val() ) == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').focus();
			return false;
		}else if(jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val() == 'Email ID' || jqLeaveYourCV.trim( jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val() ) == ''  ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').focus();
			return false;
		}else if(jqLeaveYourCV('#edit-submitted-leave-your-cv-upload-upload').val() == '' ) {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-upload-upload').focus();
			return false;
		}else if(jqLeaveYourCV('#edit-submitted-leave-your-cv-message').val() == 'Message' || jqLeaveYourCV.trim( jqLeaveYourCV('#edit-submitted-leave-your-cv-message').val() ) == '') {
			jqLeaveYourCV('#edit-submitted-leave-your-cv-message').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val() ) ) ) {
				jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').val('Please fill a valid Email ID'); 
				jqLeaveYourCV('#edit-submitted-leave-your-cv-email-id').focus();
				return false;
			}else{


				if(jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val() != 'Phone Number' || jqLeaveYourCV.trim( jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').val() ) != '' ) {
					var phoneNumber = jqLeaveYourCV("#edit-submitted-leave-your-cv-phone-number").val();
				    var filter = /^[0-9-+()]+$/;
				    if ( ! filter.test(phoneNumber ) ) {
				    	jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').focus();
				    	jqLeaveYourCV('#edit-submitted-leave-your-cv-phone-number').select();		
				    	return false;    	
				    }				    
				}
				
				jqLeaveYourCV('.leave-your-cv-popup-close').hide();
				jqLeaveYourCV('.leave-your-cv-form').hide();
				
				var bookCallMessage='<div class="bookCallMessage" style="text-align:center;  padding-bottom:40px;"><h2>Thanks for sending the CV</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;"> Our HR Manager will contact you soon.</h3><img src="http://bridge-global.com/sites/all/themes/bootstrap/images/smily.png"/></div>';
				
				jqLeaveYourCV(bookCallMessage).appendTo(".leave-your-cv-popup");
//				jqLeaveYourCV("#block-webform-client-block-220").animate({"marginTop":"-425px"});
				setTimeout(function(){
						return true;
				},2000);	
				
			}
		}
	});
	
	
});

/* Bridge Method Page : Contact Solution Architect open*/

var jqContactArchitect = jQuery.noConflict();

jqContactArchitect(document).ready(function(){
	
	jqContactArchitect('#edit-submitted-contact-architect-your-name').focus(function(){
		if(jqContactArchitect('#edit-submitted-contact-architect-your-name').val() == 'Your Name' ) {
			jqContactArchitect('#edit-submitted-contact-architect-your-name').val('');
		}
	});
	
	jqContactArchitect('#edit-submitted-contact-architect-your-name').blur(function(){
		if(jqContactArchitect('#edit-submitted-contact-architect-your-name').val() == '' ) {
			jqContactArchitect('#edit-submitted-contact-architect-your-name').val('Your Name');
		}
	});
	
	jqContactArchitect('#edit-submitted-contact-architect-your-email').focus(function(){
		if(jqContactArchitect('#edit-submitted-contact-architect-your-email').val() == 'Your Email' || jqContactArchitect('#edit-submitted-contact-architect-your-email').val() == 'Please fill a valid Email Address') {
			jqContactArchitect('#edit-submitted-contact-architect-your-email').val('');
		}
	});
	
	jqContactArchitect('#edit-submitted-contact-architect-your-email').blur(function(){
		if(jqContactArchitect('#edit-submitted-contact-architect-your-email').val() == '' ) {
			jqContactArchitect('#edit-submitted-contact-architect-your-email').val('Your Email');
		}
	});
	
	jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').focus(function(){
		if(jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').val() == 'What are you looking for' ) {
			jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').val('');
		}
	});
	
	jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').blur(function(){
		if(jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').val() == '' ) {
			jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').val('What are you looking for');
		}
	});
	
		
	jqContactArchitect('#webform-client-form-137').submit(function(){
		if(jqContactArchitect('#edit-submitted-contact-architect-your-name').val() == 'Your Name' || jqContactArchitect.trim( jqContactArchitect('#edit-submitted-contact-architect-your-name').val() ) == '') {
			jqContactArchitect('#edit-submitted-contact-architect-your-name').focus();
			return false;
		}
		if(jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').val() == 'What are you looking for' || jqContactArchitect.trim( jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').val() ) == '') {
			jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').focus();
			return false;
		}
		if(jqContactArchitect('#edit-submitted-contact-architect-your-email').val() == 'Your Email' || jqContactArchitect.trim( jqContactArchitect('#edit-submitted-contact-architect-your-email').val() ) == ''  ) {
			jqContactArchitect('#edit-submitted-contact-architect-your-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqContactArchitect('#edit-submitted-contact-architect-your-email').val() ) ) ) {
				jqContactArchitect('#edit-submitted-contact-architect-your-email').val('Please fill a valid Email Address'); 
				return false;
			}else{

				jqContactArchitect('#edit-submitted-contact-architect-your-name').hide();
				jqContactArchitect('#edit-submitted-contact-architect-your-email').hide();
				jqContactArchitect('#edit-submitted-contact-architect-what-are-you-looking').hide();
				jqContactArchitect('#edit-submit--9').hide();
				jqContactArchitect('.block-title').hide();
				
				
				var Message='<div class="bookCallMessage" style="text-align:center;  padding-bottom:40px;"><h2>Thank You</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;"> A Bridge representative will contact you soon.</h3> <img src="http://bridge-global.com/sites/all/themes/bootstrap/images/smily.png"/></div>';
				
				jqContactArchitect(Message).appendTo(".book-a-call-form");

				setTimeout(function(){
						return true;
				},1000);	
						
			}
		}
	});
	
});







