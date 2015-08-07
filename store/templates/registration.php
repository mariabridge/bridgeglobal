<?php
php_session_start();

if (isset($_SESSION ['user_registration_post']) && count($_SESSION ['user_registration_post']) > 0)
{
    $post = $_SESSION ['user_registration_post'];
}
?>
<script>
    $(function() {
        $("#registration-error-banner").hide();
<?php
if (isset($_SESSION ['user_registration_password_error']) && $_SESSION ['user_registration_password_error'] == 1)
{
    ?>
            $("#registration-banner").hide();
            $("#registration-error-banner").show();
            $("#registration-error-banner").html('<div class="col-lg-4"></div><div class="col-lg-4"><div class="alert alert-danger alert-dismissable"><h3><b>Registration :</b> Password not matched !!!</h3></div></div><div class="col-lg-4"></div>');
           // $("#registration-error-banner").effect("shake");
           // setTimeout(function() {
              //  $("#registration-error-banner").hide('blind', {}, 500);
            //    $("#registration-banner").show('blind', {}, 500)
           // }, 2500);
    <?php
}
if (isset($_SESSION ['user_registration_username_error']) && $_SESSION ['user_registration_username_error'] == 1)
{
    ?>
            $("#registration-banner").hide();
            $("#registration-error-banner").show();
            $("#registration-error-banner").html('<div class="col-lg-4"></div><div class="col-lg-4"><div class="alert alert-danger alert-dismissable"><h3><b>Registration :</b> Email id is already Registered!</h3></div></div><div class="col-lg-4"></div>');
            //$("#registration-error-banner").effect("shake");
           /* setTimeout(function() {
                $("#registration-error-banner").hide('blind', {}, 500);
                $("#registration-banner").show('blind', {}, 500)
            }, 2500);*/
    <?php
}
if (isset($_SESSION ['user_registration_error']) && $_SESSION ['user_registration_error'] == 1)
{
    ?>
            $("#registration-banner").hide();
            $("#registration-error-banner").show();
          //  $("#registration-error-banner").effect("shake");
           // setTimeout(function() {
              //  $("#registration-error-banner").hide('blind', {}, 500);
              //  $("#registration-banner").show('blind', {}, 500)
           // }, 2500);
    <?php
}
?>

      

    });
</script>
<div class="login-section">
<div class="row" id="registration-banner">
        <div class="alert alert-success alert-dismissable">
            <h2>Registration</h2>
        </div>
</div>
<div class="row" id="registration-error-banner" style="display:none;">
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable">
            <h2>
                Registration : Error occurred !!!
            </h2>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">

    <div class="col-lg-12">
        <form name="frmRegistration" id="frmRegistration" action="post-handler.php?action=REGISTRATION" onsubmit="return regSubmit();"  method="post" enctype="multipart/form-data">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-xs-12">
                            <div class="form-group"></div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>First name</label>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter First name" name="firstname" id="firstname" value="<?php if (isset($post['firstname']) && $post['firstname'] != '')
                                    {
                                        echo $post['firstname'];
                                    } ?>" onblur="regSubmit();">
									  <label id="firstname-error" class='error_msg'></label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Last name</label>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                               <input class="form-control" placeholder="Enter Last name" name="lastname" id="lastname" value="<?php if (isset($post['lastname']) && $post['lastname'] != '')
                                {
                                    echo $post['lastname'];
                                } ?>" onblur="regSubmit();">
								  <label id="lastname-error" class='error_msg'></label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Enter Email" name="email"  id="email" value="<?php if (isset($post['email']) && $post['email'] != '')
									{
										echo $post['email'];
									} ?>" onblur="regSubmit();">
									 <label id="email-error" class='error_msg'></label>
                            </div>
                        </div>
                       
                       <!-- <div class="col-xs-4">
                            <div class="form-group">
                                <label>Username</label>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="form-group">
                                <input required="required" class="form-control" placeholder="Enter Username" name="username" value="<?php //if (isset($post['username']) && $post['username'] != '')
//{
  //  echo $post['username'];
//} ?>">
                            </div>
                        </div>-->
                        
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Password</label>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                 <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password"  onblur="regSubmit();">
                                <label id="password-error" class='error_msg'></label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Re-enter password</label>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                             <input  type="password" class="form-control" placeholder="Enter Confirm password" name="confirmpassword" id="confirmpassword" >
                            <label id="confirmpassword-error" class='error_msg'></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group"></div>
                        </div>

                    </div>
                </div>

                <div class="panel-footer announcement-bottom">
                    <div class="row">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-1 text-right">
                            <input type="submit" class="btn btn-info" name="btnRegisterSubmit" id="btnRegisterSubmit" value="Register">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<script>
        
function regSubmit(){
  
  var firstname = $('#firstname').val();
  var lastname = $('#lastname').val();
  var email = $('#email').val();
  var password = $('#password').val();
  var confirmpassword = $('#confirmpassword').val();
  var flag;
 var flag1=true;
var flag2=true;
var flag3=true;
var flag4=true;
var flag5=true;
var flag6=true;
  
  if(requireValidation(firstname)==false)
  {
      $('#firstname-error').text('First name cannot be Empty');
      
      flag1 = false;
	  return flag1;
  }
    else
    {
    $('#firstname-error').text("");

    flag1 = true;
    }
  if(requireValidation(lastname)==false)
  {
      $('#lastname-error').text('Last name cannot be Empty');
      flag2 = false;
	  return flag2;
  }
   else
    {
    $('#lastname-error').text("");

    flag2 = true;
    }
  
  if(requireValidation(email)==false)
  {
      $('#email-error').text('email cannot be Empty');
      flag3 = false;
	  return flag3;
  }
    else
    {
    $('#email-error').text("");

    flag3 = true;
    }
   if(validateEmail(email)==false)
  {
     
      $('#email-error').text('Email Invalid');
      flag6 = false;
	  return flag6;
  }
  
else
    {
    $('#email-error').text("");

    flag6 = true;
    }  
  
  if(requireValidation(password)==false)
  {
      $('#password-error').text('Password cannot be Empty');
      flag4 = false;
	  return flag4;
  }
  else
    {
    $('#password-error').text("");

    flag4 = true;
    }
  
  if(pvalidate(password, confirmpassword)==false)
  {
      $('#confirmpassword-error').text('Passwords doesnot match');
      flag5 = false;
	  return flag5;
  }
  
else
    {
    $('#confirmpassword-error').text("");

    flag5 = true;
    }
    
if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true )
flag=true;
else
flag=false;
console.info(flag);
// }

return flag;
    
 

}
</script>