@extends('layout')
@section('content')
<?php
        $message = Session::get('message');
        if ($message) {
            echo "<script>alert('$message')</script>";
            Session::put('message',null);
        }
        $error = Session::get('error');
        if ($error) {
            echo "<script>alert('$error')</script>";
            Session::put('error',null);
        }
?>
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-form"><!--login form-->
                    <?php
                        $token = $_GET['token'];
                        $email = $_GET['email'];
                    ?>
                    <h2>Đặt lại mật khẩu mới</h2>
                    <form action="{{URL::to('/reset-new-pass')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="email" value="{{$email}}"/>
                        <input type="hidden" name="token" value="{{$token}}"/>
                        <input type="password" placeholder="Mật khẩu mới" name="password_account"/>
                        <button type="submit" class="btn btn-default">Gửi</button>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@endsection
