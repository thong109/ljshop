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
                    <h2>Lấy lại mật khẩu</h2>
                    <form action="{{URL::to('/send-mail-to-customer')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="email" placeholder="Tài khoản" name="email_account"/>
                        <button type="submit" class="btn btn-default">Gửi</button>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@endsection
