<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from laravel.pixelstrap.com/viho/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 01:48:35 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    @include('template.admin.include.head')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- error page start //-->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form class="theme-form login-form" action="{{ route('postLogin') }}" method="POST">
                            @csrf
                            <h4>Login</h4>
                            <h6>Welcome back! Log in to your account.</h6>
                            @include('template.admin.component.alert')
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-email"></i></span>
                                    <input class="form-control" type="email" name="email" required=""
                                        placeholder="Test@gmail.com" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********" />
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                            </div>
                            <p>Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('template.admin.include.javascript')
</body>

<!-- Mirrored from laravel.pixelstrap.com/viho/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 01:48:35 GMT -->

</html>
