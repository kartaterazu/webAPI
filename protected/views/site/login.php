<!-- Content -->
<!-- Login -->
<section class="static-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <div class="section-title mb40">
                    <span class="alert alert-success hide" role="alert">
                        
                    </span>    
                </div>
                <div class="section-title mb40">
                    <h3>Login</h3>
                    <small>Login with your email and password</small>
                    <img src="images/title-line.png" alt="title-line.png">
                </div>
                <div class="login">
                    <div class="form-group material">
                        <input type="text" name="email" id="email" class="form-control" required="required" />
                        <span class="bar"></span>
                        <label for="username">Email</label>
                    </div>
                    <div class="form-group material mb20">
                        <input type="password" name="password" id="password" class="form-control" required="required" />
                        <span class="bar"></span>
                        <label for="password">Password</label>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt20">
                            <button type="submit" class="btn btn-hijau btn-block btn-lg btn-login">Login</button>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <br/>
                            <div class="atau">OR</div>
                        </div>
                    </div>
                </div>

                <div class="section-title mb40">
                    <h3>Register</h3>
                    <img src="images/title-line.png" alt="title-line.png">
                </div>
                <div class="login">
                    <div class="form-group material">
                        <input type="text" name="email_register" id="email_register" class="form-control" required="required" />
                        <span class="bar"></span>
                        <label for="email_register">Email</label>
                    </div>
                    <div class="form-group material mb20">
                        <input type="password" name="password_register" id="password_register" class="form-control" required="required" />
                        <span class="bar"></span>
                        <label for="password_register">Password</label>
                    </div>
                    <div class="form-group material mb20">
                        <input type="password" name="confirmation_password" id="confirmation_password" class="form-control" required="required" />
                        <span class="bar"></span>
                        <label for="confirmation_password">Password Confirmation</label>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt20">
                            <button type="submit" class="btn btn-hijau btn-block btn-lg btn-register">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        $('.btn-login').click(function(){
            var email       = $('#email').val();
            var password    = $('#password').val();

            if(email == '' && password == '')
            {
                alert('Please fill the empty field!');
            }

            if(email != '' && password != '')
            {
                 $.ajax({
                    type        : 'POST',
                    url         : '/login',
                    data        : {email : email, password : password},
                    beforeSend  : function(){
                        $('.btn-login').html('Loading ... <img src="/images/balls.gif" style="height: 41px;position: absolute;bottom: -1px;">');
                    },
                    success     : function(data){
                        var response = JSON.parse(data);

                        if(response.success == 1)
                        {
                            $('.btn-login').text('Login');
                            $('#email').val('');
                            $('#password').val('');

                            location.href = '/dashboard';
                        }
                        else
                        {
                            $('.btn-register').text('Login');
                            
                            if(typeof response.error != 'undefined')
                            {
                                alert(response.error.message);   
                            }
                            else
                            {
                                if(typeof response.message != 'undefined')
                                {
                                    alert(response.message);
                                }
                                else
                                {
                                    alert("Something wrong with the system, please contact your administrator");
                                }
                            }
                        }
                    }
                });
            }
        });

        $('.btn-register').click(function(){
            var email                   = $('#email_register').val();
            var password                = $('#password_register').val();
            var confirmation_password   = $('#confirmation_password').val();

            if(email == '' && password == '' && confirmation_password == '')
            {
                alert('Please fill the empty field!');
                return false;
            }

            if(password != confirmation_password)
            {
                alert('Password and Password Confirmation is not match!');
                return false;
            }

            if(email != '' && password != '' && confirmation_password != '')
            {
                $.ajax({
                    type        : 'POST',
                    url         : '/register',
                    data        : {email : email, password : password, confirmation_password : confirmation_password},
                    beforeSend  : function(){
                        $('.btn-register').html('Loading ... <img src="/images/balls.gif" style="height: 41px;position: absolute;bottom: -1px;">');
                    },
                    success     : function(data){
                        var response = JSON.parse(data);

                        if(response.success == 1)
                        {
                            $('.btn-register').text('Register');
                            $('#email_register').val('');
                            $('#password_register').val('');
                            $('#confirmation_password').val('');
                            $('.alert-success').text(response.message).removeClass('hide');
                            $("html, body").animate({ scrollTop: 0 }, 1000);
                        }
                        else
                        {
                            $('.btn-register').text('Register');

                            if(typeof response.error != 'undefined')
                            {
                                alert(response.error.message);   
                            }
                            else
                            {
                                if(typeof response.message != 'undefined')
                                {
                                    alert(response.message);
                                }
                                else
                                {
                                    alert("Somethis's wrong with the system, please contact your administrator");
                                }
                            }
                        }
                    }
                });
            }
        });
    });
</script>