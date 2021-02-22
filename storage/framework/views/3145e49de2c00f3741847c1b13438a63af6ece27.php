<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
  
    <style>
      .vertical-center {
        min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
        min-height: 100vh; /* These two lines are counted as one :-)       */
        display: flex;
        align-items: center;
      }
      .content-center{
        width: 700px;
        height: auto;
        margin-left: 25%;
        margin-top: 5%;
        align-items: center
      }
      .logo{
        margin-left: 150px;
        color: white;
      }
      table, tr {  
        text-align: left;
      }

      table {
        border-collapse: collapse;
        width: 70%;
      }
      input{
        padding: 7px 30px
      }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>
    <div class="jumbotron vartical-center content-center" style="background-color: #529A50">
      <div class="container">
        <div class="row-md-6">
          <div class="content-center">
            <form method="POST" action="/registration">
              <h2 class="logo">Registration</h2>
              <br><br>
              <?php echo csrf_field(); ?>
              <table>
            <tr>
              <td style="color: white;font-size: 18px">First Name</td>
              <td style="padding: 5px"><input type="text" id="fname" name="fname" value="<?php echo e(old('fname')); ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td> 
                <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span style="color: #B42222;font-size: 14px">*The first name field is required.</span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </td>
            </tr>
            <tr>
              <td style="color: white;font-size: 18px">Last Name</td>
              <td style="padding: 5px"><input type="text" id="lname" name="lname" value="<?php echo e(old('lname')); ?>"></td>
            </tr>
            <tr>
              <td style="color: white;font-size: 18px">Name of Organization</td>
              <td style="padding: 5px"><input type="text" id="oname" name="oname" value="<?php echo e(old('oname')); ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td> 
                <?php $__errorArgs = ['oname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span style="color: #B42222;font-size: 14px">*The name of organization field is required</span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </td>
            </tr>
            <tr>
              <td style="color: white;font-size: 18px">Street</td>
              <td style="padding: 5px"><input type="text" id="street" name="street" value="<?php echo e(old('street')); ?>"></td>
            </tr>
            <tr>
              <td style="color: white;font-size: 18px">City</td>
              <td style="padding: 5px"><input type="text" id="city" name="city" value="<?php echo e(old('city')); ?>"></td>
            </tr>
            <tr>
              <td style="color: white;font-size: 18px">eMail</td>
              <td style="padding: 5px"><input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td> 
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span style="color: #B42222;font-size: 14px">*<?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </td>
            </tr>
            <tr>
                <td style="color: white;font-size: 18px">Mobile Number</td>
                <td style="padding: 5px"><input type="text" id="contact" name="contact" value="<?php echo e(old('contact')); ?>"></td>
              </tr>
              <tr>
                  <td></td>
                  <td> 
                    <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span style="color: #B42222;font-size: 14px">*The mobile number field is required</span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </td>
                </tr>
              <tr>
                <td style="color: white;font-size: 18px">Password</td>
                <td style="padding: 5px"><input type="password" id="password" name="password"></td>
              </tr>
              <tr>
              <td></td>
              <td> 
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span style="color: #B42222;font-size: 14px">*<?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </td>
            </tr>
              <tr>
                <td style="color: white;font-size: 18px">Confirm Password</td>
                <td style="padding: 5px"><input type="password" id="confirm-password" name="confirm-password"></td>
              </tr>
              <tr>
              <td></td>
              <td> 
                <?php $__errorArgs = ['confirm-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span style="color: #B42222;font-size: 14px">*<?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding: 5px"><button style="padding: 10px 85px;font-size: 16px" class="btn btn-primary">Sign Up</button></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
              <tr>
                <td></td>
                <td style="color: white;padding: 5px"><p style="font-size: 18px"> Return to<span><a href="/login" style="color: yellow;">Login</a>Page</span></p></td>
            </tr>
          </table>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  </body>
</html><?php /**PATH I:\laravel-code-test\resources\views/Registration.blade.php ENDPATH**/ ?>