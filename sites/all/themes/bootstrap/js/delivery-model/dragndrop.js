function allowDrop(ev) {
	ev.preventDefault();
}

function drag(ev) {
	console.log("OOOO");
	ev.dataTransfer.setData("text", ev.target.id);

}
function drop(ev) {
	console.log("AAAA");
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");
	var tg = ev.target.closest(".roles-box");
	tg.appendChild(document.getElementById(data));
}
function complete_delivery_model_capture() {
	
	jQuery('#complete-delivery-model').html2canvas({
		onrendered : function(canvas) {
			jQuery("#complete-delivery-model-image-val").val(canvas.toDataURL("image/png"));
			jQuery(".complete-delivery-model-popup, .overlay-pop-up").fadeIn(100);
			jQuery(".complete-delivery-model-popup .close-box-inner-page a, .popup-close-btn").click( function() {
				jQuery(".complete-delivery-model-popup, .overlay-pop-up").fadeOut(500);
			});

		}
	});
}

/*function resource_team_model_capture() {
	
	jQuery('#resource-team-model').html2canvas( {
		onrendered : function(canvas) {
			jQuery("#resource-team-model-image-val").val( canvas.toDataURL("image/png"));
			jQuery(".resource-team-model-popup, .overlay-pop-up").fadeIn(100);
			jQuery( ".resource-team-model-popup .close-box-inner-page a, .popup-close-btn") .click( function() {
				jQuery( ".resource-team-model-popup, .overlay-pop-up") .fadeOut(500);
			});
		}
	});
}

function resource_model_capture() {
	
	jQuery('#resource-model') .html2canvas( {
		onrendered : function(canvas) {
			jQuery("#resource-model-image-val").val( canvas.toDataURL("image/png"));
			jQuery(".resource-model-popup, .overlay-pop-up") .fadeIn(100);
			jQuery( ".resource-model-popup .close-box-inner-page a, .popup-close-btn").click( function() {
				jQuery( ".resource-model-popup, .overlay-pop-up").fadeOut(500);
			});
		}
	});
}*/
