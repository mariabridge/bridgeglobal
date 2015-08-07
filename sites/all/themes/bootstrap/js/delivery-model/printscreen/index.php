
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!-- <link rel="stylesheet" href="css/style.css"> -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<h2>Simple Implementation of html2canvas With JavaScript and PHP</h2>




<b>Div:</b>


<div id="target">


<div class="droppable">
<div id="draggable1" class="draggable">

</div>
</div>
<div class="droppable">
<div id="draggable2" class="draggable"></div>
<div id="draggable3" class="draggable"></div>
<div id="draggable4" class="draggable"></div>
</div>

</div>






<input type="submit" value="Take Screenshot" onclick="capture();" />

<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
<input type="hidden" name="img_val" id="img_val" value="" />
</form>

<script type="text/javascript">
function capture() {
$('#target').html2canvas({
onrendered: function (canvas) {
//Set hidden field's value to image data (base-64 string)
$('#img_val').val(canvas.toDataURL("image/png"));
//Submit the form manually
document.getElementById("myForm").submit();
}
});
}
</script>
<style type="text/css">
#target {
border: 1px solid #CCC;
padding: 5px;
margin: 5px;
}
h2, h3 {
color: #003d5d;
}
p {
color:#AA00BB;
}
#more {
font-family: Verdana;
color: purple;
background-color: #d8da3d;
}

.draggable
{
position: relative;
width: 50px;
height: 50px;
border: #333 solid 1px;
background: white;
}

.droppable
{
width: 300px;
height: 200px;
background: grey;
margin-bottom: 10px;
}
</style>
<script>
$(document).ready(function () {
$( "#draggable1" ).draggable();
$( "#draggable2" ).draggable();
$( "#draggable3" ).draggable();
$( "#draggable4" ).draggable();

$( ".droppable" ).droppable({
drop: function( event, ui ) {
//Get the position before changing the DOM
var p1 = ui.draggable.parent().offset();
//Move the element to the new parent
$(this).append(ui.draggable);
//Get the postion after changing the DOM
var p2 = ui.draggable.parent().offset();
//Set the position relative to the change
ui.draggable.css({
top: parseInt(ui.draggable.css('top')) + (p1.top - p2.top),
left: parseInt(ui.draggable.css('left')) + (p1.left - p2.left)
});
}
});
});

</script>