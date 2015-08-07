<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Droppable - Shopping Cart Demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="http://bridge-global.com/sites/all/themes/bootstrap/css/bridge.css"> 
  <style>
  h1 { padding: .2em; margin: 0; }
  #products { float:left; width: 500px; margin-right: 2em; }
  #cart { width: 200px; float: left; margin-top: 1em; }
  /* style the list to maximize the droppable hitarea */
  #cart ol { margin: 0; padding: 1em 0 1em 3em; }

  #origin
{
  background-color: lightgreen;
}

#origin img, #drop img {
  margin-top: 3px;
  margin-left: 5px;
}

#drop
{
  background-color: red;
  min-height: 120px;
}
.over {
  border: solid 5px purple;
}
.draggable
{
  border: solid 2px gray;
}
  </style>
  <script>
  $(function() {

    $(".draggable").draggable({ cursor: "crosshair", revert: "invalid"});
$("#drop").droppable({ accept: ".draggable", 
           drop: function(event, ui) {
                    
                    console.log("drop");
                   $(this).removeClass("border").removeClass("over");
             var dropped = ui.draggable;
            var droppedOn = $(this);
         
            $(dropped).detach().css({top: 0,left: 0}).appendTo(droppedOn);
            var id_el=ui.draggable.attr("id");
              var drag_text=id_el+"-feature";  
                var x = $('#'+drag_text).wrap('<p/>').parent().html();
                var y = $('#'+drag_text).parent().html();
                // var drag_text_value=drag_text.html();
                 console.log(x);console.log("ppppp");   console.log(y);  
                 $(y).appendTo("#complete-delivery-model-div-one-feature");
                  $('#complete-delivery-model-div-two-feature #'+drag_text).remove();
                  $('#complete-delivery-model-div-two-feature p').remove();
                 //$('#'+drag_text).appendTo("#complete-delivery-model-div-one-feature");
             
             
                }, 
          over: function(event, elem) {
                  $(this).addClass("over");
                   console.log("over");
          }
                ,
                  out: function(event, elem) {
                    $(this).removeClass("over");
                  }
                     });
//$("#drop").sortable();

$("#origin").droppable({ accept: ".draggable", drop: function(event, ui) {
                   // console.log("drop");
                   $(this).removeClass("border").removeClass("over");
             var dropped = ui.draggable;
            var droppedOn = $(this);
            $(dropped).detach().css({top: 0,left: 0}).appendTo(droppedOn);   
            var id_el=ui.draggable.attr("id");
              var drag_text=id_el+"-feature";  
                var x = $('#'+drag_text).wrap('<p/>').parent().html();
                var y = $('#'+drag_text).parent().html();
                //console.log(x);
                // var drag_text_value=drag_text.html();
                // 
                console.log("ppppp");   console.log(y);  
                 $(y).appendTo("#complete-delivery-model-div-two-feature");
                  $('#complete-delivery-model-div-one-feature #'+drag_text).remove(); 
                   $('#complete-delivery-model-div-one-feature p').remove();  
             
             
                }});
  });
  </script>
</head>
<body>


==================================================
<div class="complete-delivery-model delivery-model" id="complete-delivery-model-box-draggable">
                    <div class="row">
                        <div class="col-md-12 how-it-box">
     <div class="outer-box">
                                <div class="mid-box">
                                    <div class="heading-bar">
                                        <div class="heading1">Client</div>
                                    </div>
                                    <div class="box1">
                                        <div id="drop"  style="border: 1px solid #ffffff;  ">
                                            <div class="col-box draggable" id="cdm-po">
                                                <span style="background-image: url(http://bridge-global.com/sites/all/themes/bootstrap/images/delivery-model-images/po-large.png);">&nbsp;</span>
                                                <div class="title-text">Product Owner</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box2" id="complete-delivery-model-div-one-feature" style="width: 58%;" >
                                        <h3>Requires from Client</h3>
                                        <div class="model-permissions blue-tick" id="cdm-po-feature">
                                            <span>Product knowledge</span>
                                        </div>
                                    </div>
                                </div>
  
                                <div class="mid-box">

                                    <div class="heading-bar heading-border">
                                        <div class="heading1">Bridge</div>
                                    </div>
                                    <div class="box1">
                                        <div id="origin" style="border: 1px solid #ffffff;height:120px;">
                                            <div class="col-box pm draggable" id="cdm-pm">
                                                <span style="background-image: url(http://bridge-global.com/sites/all/themes/bootstrap/images/delivery-model-images/pm-large.png);">&nbsp;</span>
                                                <div class="title-text">Project Manager</div>
                                            </div>
                                            <div class="col-box qa draggable" id="cdm-qa">
                                                <span style="background-image: url(http://bridge-global.com/sites/all/themes/bootstrap/images/delivery-model-images/qa-large.png);">&nbsp;</span>
                                                <div class="title-text">Quality Assurance</div>
                                            </div>
                                            <div class="col-box arch draggable" id="cdm-ar" >
                                                <span style="background-image: url(http://bridge-global.com/sites/all/themes/bootstrap/images/delivery-model-images/ar-large.png);">&nbsp;</span>
                                                <div class="title-text">Technical Architecture</div>
                                            </div>
                                            <div id="cdm-te-de" class="draggable">
                                                <div class="col-box test ">
                                                    <span style="background-image: url(http://bridge-global.com/sites/all/themes/bootstrap/images/delivery-model-images/te-large.png);">&nbsp;</span>
                                                    <div class="title-text">Testing</div>
                                                </div>
                                                <div class="col-box dev">
                                                    <span style="background-image: url(http://bridge-global.com/sites/all/themes/bootstrap/images/delivery-model-images/de-large.png);">&nbsp;</span>
                                                    <div class="title-text">Development</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box2" id="complete-delivery-model-div-two-feature" style="width: 58%;" >
                                        <h3>Provided by Bridge</h3>
                                        <div class="model-permissions yellow-tick" id="cdm-pm-feature">
                                            <span>Scope Management</span>
                                            <span>Strong project management</span>
                                            <span>Strong Cooperation</span>
                                        </div>
                                        <div class="model-permissions violet-tick" id="cdm-qa-feature">
                                            <span>Quality Analysis</span>
                                        </div>
                                        <div class="model-permissions orange-tick" id="cdm-ar-feature">
                                            <span>Specification and design</span>
                                            <span>Technology Expertise</span>
                                        </div>
                                        <div class="model-permissions double-tick" id="cdm-te-de-feature">
                                            <span>Qualified People, Execution Power</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                             </div>
                                </div>
                            </div>
 
 
</body>
</html>