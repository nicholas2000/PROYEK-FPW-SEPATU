<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="/styleLogReg.css">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="/" class="" id="">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="/register" style="color:#59B2E0" id="active">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="/cekRegister"role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" tabindex="1"
                                            class="form-control" placeholder="Fullname" value="">
                                    </div>
                                    @error('name')
                                        <div style="color: red;font-weight:700;">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1"
                                            class="form-control" placeholder="Username" value="">
                                    </div>
                                    @error('username')
                                        <div style="color: red;font-weight:700;">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" tabindex="1"
                                            class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    @error('email')
                                        <div style="color: red;font-weight:700;">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2"
                                            class="form-control" placeholder="Password">
                                    </div>
                                    @error('password')
                                        <div style="color: red;font-weight:700;">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="confirm-password"
                                            tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    @error('password_confirmation')
                                        <div style="color: red;font-weight:700;">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit"
                                                    tabindex="4" class="form-control btn btn-login" value="Register">
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(function() {
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });
</script>
