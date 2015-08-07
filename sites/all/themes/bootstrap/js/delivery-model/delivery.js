var jqDelivery = jQuery.noConflict();

jqDelivery(document).ready(function(){
	
			jqDelivery("#cdm-po").draggable({
				console.log("drag")
			});
        jqDelivery(".draggable").draggable({ 
        	cursor: "crosshair", revert: "invalid"
         });
       jqDelivery("#drop").droppable({ accept: ".draggable", 
            drop: function(event, ui) {

                console.log("drop");
                jqDelivery(this).removeClass("border").removeClass("over");
                var dropped = ui.draggable;
                var droppedOn = jqDelivery(this);

               jqDelivery(dropped).detach().css({top: 0,left: 0}).appendTo(droppedOn);
                var id_el=ui.draggable.attr("id");
                var drag_text=id_el+"-feature";  
                var x = jQuery('#'+drag_text).wrap('<p/>').parent().html();
                var y = jQuery('#'+drag_text).parent().html();
// var drag_text_value=drag_text.html();
                console.log(x);console.log("ppppp");   console.log(y);  
                jqDelivery(y).appendTo("#complete-delivery-model-div-one-feature");
                jqDelivery('#complete-delivery-model-div-two-feature #'+drag_text).remove();
               jqDelivery('#complete-delivery-model-div-two-feature p').remove();
//$('#'+drag_text).appendTo("#complete-delivery-model-div-one-feature");


                }, 
                over: function(event, elem) {
                    jqDelivery(this).addClass("over");
                    console.log("over");
                }
                ,
                out: function(event, elem) {
                    jqDelivery(this).removeClass("over");
                }
                });
                jqDelivery("#drop").sortable();

                jqDelivery("#origin").droppable({ accept: ".draggable", drop: function(event, ui) {
                // console.log("drop");
                jqDelivery(this).removeClass("border").removeClass("over");
                var dropped = ui.draggable;
                var droppedOn = jqDelivery(this);
                jqDelivery(dropped).detach().css({top: 0,left: 0}).appendTo(droppedOn);   
                var id_el=ui.draggable.attr("id");
                var drag_text=id_el+"-feature";  
                var x = jqDelivery('#'+drag_text).wrap('<p/>').parent().html();
                var y = jqDelivery('#'+drag_text).parent().html();
                //console.log(x);
                // var drag_text_value=drag_text.html();
                // 
                console.log("ppppp");   console.log(y);  
                jqDelivery(y).appendTo("#complete-delivery-model-div-two-feature");
                jqDelivery('#complete-delivery-model-div-one-feature #'+drag_text).remove(); 
                jqDelivery('#complete-delivery-model-div-one-feature p').remove();  


                }});
});