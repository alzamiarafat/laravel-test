<!DOCTYPE html>
<html>
    <head>
        <meta name="_token" content="<?php echo e(csrf_token()); ?>">

        <title>Create License</title>

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
        margin-left: 100px;
        color: white;
      }
      table, td, tr {  
        text-align: left;
      }

      table {
        border-collapse: collapse;
        width: 80%;
      }
      tr, td {
        padding: 15px;
      }
      input{
        padding: 3px 30px;
      }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="  crossorigin="anonymous"></script>



    </head>
    <body>
    <div class="jumbotron vartical-center content-center" style="background-color: #81B278">
      <div class="container">
        <div class="row-md-6">
          <div class="content-center">
            <form method="POST" action="">
                <?php echo csrf_field(); ?>
                <h2 class="logo">Create License</h2>

                
                <div id="show-result" class="search-result" style="display: none;">
                    
                </div>
                <table>
                    <tr>
                        <td style="color: white;font-size: 18px">Client ID</td>
                            <td style="padding: 5px"><input class="client_ID" type="text" id="client_ID" name="client_ID" placeholder="Client ID" value="<?php echo e(old('client_ID')); ?>"></td>
                        </tr>
                    <tr>
                    <td style="color: white;font-size: 18px">License Key</td>
                        <td style="padding: 5px"><input type="text" id="license_key" name="license_key" value=""></td>
                    </tr>
                    <tr>
                  <td></td>
                  <td> 
                    <?php $__errorArgs = ['license_key'];
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
                        <td ></td>
                        <td style="padding: 5px;"><button style="padding: 5px 97px" class="btn btn-primary">Save</button></td>
                    </tr>
                    <tr>
                        <td style="color: white;font-size: 18px">License for</td>
                        <td style="padding: 5px">
                            <select style="padding: 5px 65px;" name="license-for" id="license-for">
                                <option value="" selected disabled hidden>choose one</option>
                                <option value="6">3</option>
                                <option value="6">6</option>
                                <option value="12">12</option>
                            </select><span style="color: white"> Months</span> 
                        </td>
                        <!-- //<td style="color: white;">Months</td> -->
                    </tr>
           
                    <tr>
                        <td></td>
                        
                        <td style="text-align: center;padding: 7px;"><p style="font-size: 14px;" class="btn btn-secondary" onclick="func()">Create Key</p></td>
                    </tr>
                    <tr>
                        <td></td>
                        
                        <td style="padding: 5px;text-align: center"><p style="color: white;font-size: 16px"> Return to<span><a href="/login" style="color: yellow">Login</a>Page</span></p></td>
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

    <script type="text/javascript">
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        function func(){
           $.ajax({
                    method:"post",
                    url: '/key',
                    headers:{
                        'Accept':'application/json',
                        'Content-Type': 'application/json'
                    },
                    success: function (res) {
                        document.getElementById("license_key").value = res.key;
                    }
                })
        
        //console.log(key);
        }
    </script>
    


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $('#client_ID').on('keyup',function () {
            $client_ID = $(this).val();
            if($client_ID==''){
                $('#show-result').html('');
                $('#show-result').hide();

            }else{
                $.ajax({
                    method:"post",
                    url: '/show',
                    data: JSON.stringify({
                        client_ID: $client_ID
                    }),
                    headers:{
                        'Accept':'application/json',
                        'Content-Type': 'application/json'
                    },
                    success: function (res) {
                        var showResult = '';
                
                        $('#show-result').show();
                         $.each(res.data,function (index,data) {
                            
                  
                        showResult=`<br>
                        <table border="1px" style="background-color: white;font-size: 16px; width: 70%;margin: -10px -70px">
                    <tr>
                        <td style="padding: 10px 29px">First Name</td>
                            <td style="padding: 10px 50px">`+res.data.first_name+`</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">Last Name</td>
                            <td style="padding: 10px 50px">`+res.data.last_name+`</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">Name Of Organization</td>
                            <td style="padding: 0px 50px;">`+res.data.organization_name+`</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">Street</td>
                            <td style="padding: 10px 50px">`+res.data.street+`</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">City</td>
                            <td style="padding: 10px 50px">`+res.data.city+`</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">Upazila</td>
                            <td style="padding: 10px 50px">1</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">District</td>
                            <td style="padding: 10px 50px">1</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">State</td>
                            <td style="padding: 10px 50px" >1</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">Phone</td>
                            <td style="padding: 10px 50px">`+res.data.mobile_number+`</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">Email</td>
                            <td style="padding: 10px 50px">`+res.data.email+`</td>
                        </tr>
                        <tr>
                        <td style="padding: 10px 29px">License Key</td>
                            <td style="padding: 10px 50px">`+res.data.license_key+`</td>
                        </tr>
                </table>
                <br><br>`});
                $('#show-result').html(showResult);
                    }
                })
            }
        })






        // var input = document.getElementById("client_ID");
        // input.addEventListener("keyup", function(event) {
        //     if (event.keyCode === 13) {
        //         event.preventDefault();
                /*$(document).ready(function(){
                $(".client_ID").on('keyup',function () {
                var _q=$(this).val();
                console.log(_q);
                var q;
                if(_q.length>=1){

                    $.ajax({
                        url: "/show",
                        data:{
                            q:_q
                        },

                        datatype:'json',
                        beforeSend:function () {

                           $(".search-result").html('<li class="list-group-item">Loading...</li>'); 
                        },
                        success: function (res) {
                            console.log("data");
                           var _html = '';
                           $.each(res.data,function (index,data) {

                              _html+='<li class="list-group-item">'+data.first_name+'</li>';
                           });
                           $(".search-result").html(_html);
                            
                        }
                    });
                }
            });
        });*/
                //a = document.getElementById("client_ID").value;
                //console.log(document.getElementById("client_ID").value);
                
        //     }
        // });

       
    </script>
          
    </body>
</html><?php /**PATH I:\laravel-code-test\resources\views/CreateLicense.blade.php ENDPATH**/ ?>