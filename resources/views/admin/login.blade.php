<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Admin | Home</title>
    @include( 'admin.common.header' )
</head>
<body>
    <div class="admin-login-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="margin-top: 100px; padding:20px;">
                    <div class="alert alert-primary">
                        @if(Session::get('loginFailed'))
                            <div class="alert alert-danger">
                                {{ Session::get('loginFailed') }}
                            </div>
                        @endif
                        <h1 class="heading">Admin  Login</h1>
                        
                        <form action="{{ route('admin.login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">email:</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


