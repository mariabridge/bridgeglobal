/*  Complete Delivery Models  */
var jqCompleteDeliveryModels = jQuery.noConflict();

jqCompleteDeliveryModels(document).ready(function(){
	
	jqCompleteDeliveryModels('#complete-delivery-model-image-val').val('');
	jqCompleteDeliveryModels('#complete-delivery-model-name').val('Your Name');
	jqCompleteDeliveryModels('#complete-delivery-model-email').val('Your Email');
	
	
	jqCompleteDeliveryModels('#complete-delivery-model-name').focus(function(){
		if(jqCompleteDeliveryModels('#complete-delivery-model-name').val() == 'Your Name' ) {
			jqCompleteDeliveryModels('#complete-delivery-model-name').val('');
		}
	});
	
	jqCompleteDeliveryModels('#complete-delivery-model-name').blur(function(){
		if( jqCompleteDeliveryModels.trim( jqCompleteDeliveryModels('#complete-delivery-model-name').val() ) == '' ) {
			jqCompleteDeliveryModels('#complete-delivery-model-name').val('Your Name');
		}
	});
	
	jqCompleteDeliveryModels('#complete-delivery-model-email').focus(function(){
		if(jqCompleteDeliveryModels('#complete-delivery-model-email').val() == 'Your Email' ) {
			jqCompleteDeliveryModels('#complete-delivery-model-email').val('');
		}
	});
	
	jqCompleteDeliveryModels('#complete-delivery-model-email').click(function(){
		if(jqCompleteDeliveryModels('#complete-delivery-model-email').val() == 'Please fill a valid Email Address' ) {
			jqCompleteDeliveryModels('#complete-delivery-model-email').val('');
		}
	});
	
	jqCompleteDeliveryModels('#complete-delivery-model-email').blur(function(){
		if( jqCompleteDeliveryModels.trim( jqCompleteDeliveryModels('#complete-delivery-model-email').val() ) == '' ) {
			jqCompleteDeliveryModels('#complete-delivery-model-email').val('Your Email');
		}
	});
	
	jqCompleteDeliveryModels('#complete-delivery-model-button').click(function(){
		if(jqCompleteDeliveryModels('#complete-delivery-model-name').val() == 'Your Name' || jqCompleteDeliveryModels.trim( jqCompleteDeliveryModels('#complete-delivery-model-name').val() ) == '') {
			jqCompleteDeliveryModels('#complete-delivery-model-name').focus();
			return false;
		}if((jqCompleteDeliveryModels('#complete-delivery-model-email').val() == 'Your Email' || jqCompleteDeliveryModels.trim( jqCompleteDeliveryModels('#complete-delivery-model-email').val() ) == '') && ( jqCompleteDeliveryModels("#complete-delivery-model-email").is(':focus')) ) {
			jqCompleteDeliveryModels('#complete-delivery-model-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqCompleteDeliveryModels('#complete-delivery-model-email').val() ) ) ) {
				jqCompleteDeliveryModels('#complete-delivery-model-email').val('Please fill a valid Email Address'); 
				return false;
			}else{

				jqCompleteDeliveryModels('.title-bar').hide();
				jqCompleteDeliveryModels('#complete-delivery-model-name').hide();
				jqCompleteDeliveryModels('#complete-delivery-model-email').hide();
				jqCompleteDeliveryModels('#complete-delivery-model-button').hide();
				
				var Message='<div class="bookCallMessage" style="text-align:center;  padding-bottom:40px;"><h2>Thank You</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;"> A Bridge representative will contact you soon.</h3> <img src="http://bridge-staffing.com/sites/all/themes/bootstrap/images/smily.png"/></div>';
				
				jqCompleteDeliveryModels(Message).appendTo(".complete-delivery-model-popup");
				
				setTimeout(function(){
					jqCompleteDeliveryModels('#complete-delivery-model-form').submit();
											
				},2000);		
				
				
			}
		}
	});
	
});


/*  Resource Team Models  */
var jqResourceTeamModels = jQuery.noConflict();

jqResourceTeamModels(document).ready(function(){
	
	jqResourceTeamModels('#resource-team-model-image-val').val('');
	jqResourceTeamModels('#resource-team-model-name').val('Your Name');
	jqResourceTeamModels('#resource-team-model-email').val('Your Email');
	
	
	jqResourceTeamModels('#resource-team-model-name').focus(function(){
		if(jqResourceTeamModels('#resource-team-model-name').val() == 'Your Name' ) {
			jqResourceTeamModels('#resource-team-model-name').val('');
		}
	});
	
	jqResourceTeamModels('#resource-team-model-name').blur(function(){
		if( jqResourceTeamModels.trim( jqResourceTeamModels('#resource-team-model-name').val() ) == '' ) {
			jqResourceTeamModels('#resource-team-model-name').val('Your Name');
		}
	});
	
	jqResourceTeamModels('#resource-team-model-email').focus(function(){
		if(jqResourceTeamModels('#resource-team-model-email').val() == 'Your Email' ) {
			jqResourceTeamModels('#resource-team-model-email').val('');
		}
	});
	
	jqResourceTeamModels('#resource-team-model-email').click(function(){
		if(jqResourceTeamModels('#resource-team-model-email').val() == 'Please fill a valid Email Address' ) {
			jqResourceTeamModels('#resource-team-model-email').val('');
		}
	});
	
	jqResourceTeamModels('#resource-team-model-email').blur(function(){
		if( jqResourceTeamModels.trim( jqResourceTeamModels('#resource-team-model-email').val() ) == '' ) {
			jqResourceTeamModels('#resource-team-model-email').val('Your Email');
		}
	});
	
	jqResourceTeamModels('#resource-team-model-button').click(function(){


		if(jqResourceTeamModels('#resource-team-model-name').val() == 'Your Name' || jqResourceTeamModels.trim( jqResourceTeamModels('#resource-team-model-name').val() ) == '') {
			jqResourceTeamModels('#resource-team-model-name').focus();
			return false;
		}if((jqResourceTeamModels('#resource-team-model-email').val() == 'Your Email' || jqResourceTeamModels.trim( jqResourceTeamModels('#resource-team-model-email').val() ) == '') && (jqResourceTeamModels("#resource-team-model-email").is(':focus'))) {
				jqResourceTeamModels('#resource-team-model-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqResourceTeamModels('#resource-team-model-email').val() ) ) ) {
				jqResourceTeamModels('#resource-team-model-email').val('Please fill a valid Email Address'); 
				return false;
			}else{				
				jqResourceTeamModels('.title-bar').hide();
				jqResourceTeamModels('#resource-team-model-name').hide();
				jqResourceTeamModels('#resource-team-model-email').hide();
				jqResourceTeamModels('#resource-team-model-button').hide();
				
				
				var Message='<div class="bookCallMessage" style="text-align:center;  padding-bottom:40px;"><h2>Thank You</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;"> A Bridge representative will contact you soon.</h3> <img src="http://bridge-staffing.com/sites/all/themes/bootstrap/images/smily.png"/></div>';
				
				jqResourceTeamModels(Message).appendTo(".resource-team-model-popup");
				
				setTimeout(function(){
					jqResourceTeamModels('#resource-team-model-form').submit();
										
				},2000);
				
				
			}
		}
	});
	
});


/*  resource Models  */
var jqResourceModels = jQuery.noConflict();

jqResourceModels(document).ready(function(){
	
	jqResourceModels('#resource-model-image-val').val('');
	jqResourceModels('#resource-model-name').val('Your Name');
	jqResourceModels('#resource-model-email').val('Your Email');
	
	
	jqResourceModels('#resource-model-name').focus(function(){
		if(jqResourceModels('#resource-model-name').val() == 'Your Name' ) {
			jqResourceModels('#resource-model-name').val('');
		}
	});
	
	jqResourceModels('#resource-model-name').blur(function(){
		if( jqResourceModels.trim( jqResourceModels('#resource-model-name').val() ) == '' ) {
			jqResourceModels('#resource-model-name').val('Your Name');
		}
	});
	
	jqResourceModels('#resource-model-email').focus(function(){
		if(jqResourceModels('#resource-model-email').val() == 'Your Email' ) {
			jqResourceModels('#resource-model-email').val('');
		}
	});
	
	jqResourceModels('#resource-model-email').click(function(){
		if(jqResourceModels('#resource-model-email').val() == 'Please fill a valid Email Address' ) {
			jqResourceModels('#resource-model-email').val('');
		}
	});
	
	jqResourceModels('#resource-model-email').blur(function(){
		if( jqResourceModels.trim( jqResourceModels('#resource-model-email').val() ) == '' ) {
			jqResourceModels('#resource-model-email').val('Your Email');
		}
	});
	
	jqResourceModels('#resource-model-button').click(function(){
		if(jqResourceModels('#resource-model-name').val() == 'Your Name' || jqResourceModels.trim( jqResourceModels('#resource-model-name').val() ) == '') {
			jqResourceModels('#resource-model-name').focus();
			return false;
		}if( (jqResourceModels('#resource-model-email').val() == 'Your Email' || jqResourceModels.trim( jqResourceModels('#resource-model-email').val() ) == '' ) && ( jqResourceModels("#resource-model-email").is(':focus'))  ) {
			jqResourceModels('#resource-model-email').focus();
			return false;
		}else{
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (! filter.test( ( jqResourceModels('#resource-model-email').val() ) ) ) {
				jqResourceModels('#resource-model-email').val('Please fill a valid Email Address'); 
				return false;
			}else{				
				jqResourceModels('.title-bar').hide();
				jqResourceModels('#resource-model-name').hide();
				jqResourceModels('#resource-model-email').hide();
				jqResourceModels('#resource-model-button').hide();
				
				
				var Message='<div class="bookCallMessage" style="text-align:center;  padding-bottom:40px;"><h2>Thank You</h2><h3 style="text-align:center;font: 400 15px \'Open Sans\', sans-serif; color: #999;"> A Bridge representative will contact you soon.</h3> <img src="http://bridge-staffing.com/sites/all/themes/bootstrap/images/smily.png"/></div>';
				
				jqResourceModels(Message).appendTo(".resource-model-popup");
				
				setTimeout(function(){
					jqResourceModels('#resource-model-form').submit();
					
				},2000);
				
			}
		}
	});
	
});