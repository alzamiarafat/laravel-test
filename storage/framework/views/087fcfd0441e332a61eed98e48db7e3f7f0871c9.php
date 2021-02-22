<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  
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
        margin-left: 20%;
        margin-top: 5%;
        align-items: center
      }
      .logo{
        margin-left: 150px;
        color: white;
      }
      table, td, tr {  
        text-align: left;
      }

      table {
        border-collapse: collapse;
        width: 60%;
      }
      tr, td {
        padding: 15px;
      }
      input{
        padding: 7px 30px
      }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>
    <div class="jumbotron vartical-center content-center" style="background-color: #81B278">
      <div class="container">
        <div class="row-md-6">
          <div class="content-center">
            <form method="POST" action="">
      
              <h2 class="logo">Login</h2>
              <br><br>
              <?php echo csrf_field(); ?>
              <span style="color: #BD0505;font-size: 18px"><?php echo e(session('msg')); ?></span>
              <table>
                <tr>
                  <td style="color: white;font-size: 18px">Mobile Number</td>
                  <td>
                    <input type="text" id="mobile_number" name="mobile_number" value="<?php echo e(old('mobile_number')); ?>">
                   
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td> 
                    <?php $__errorArgs = ['mobile_number'];
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
                  <td><br></td>
                </tr>
            
                <tr>
                  <td style="color: white;font-size: 18px">Password</td>
                  <td>
                    <input type="password" id="password" name="password" value="<?php echo e(old('password')); ?>">
                  </td>
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
                  <td><br></td>
                </tr>
                <tr>
                  <td></td>
                  <td><button style="padding: 10px 92px;font-size: 16px" class="btn btn-primary">Login</button></td>
                </tr>
                <tr>
                  <td></td>
                  <td><a style="color: blue;font-size: 16px" href="/registration">Not registered yet?</a></td>
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
</html><?php /**PATH I:\laravel-code-test\resources\views/Login.blade.php ENDPATH**/ ?>