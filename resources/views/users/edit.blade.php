@extends('layouts.master')

@section('title', 'Quản lý người dùng')

<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Quản lý người dùng</h1>
          <p>Cập nhật thông tin người dùng </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3>Nhập thông tin người dùng</h3>    
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('users.store')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputId">Mã người dùng</label>
                                    <input type="text" class="form-control" name="id" id="exampleInputName" aria-describedby="" placeholder="ID" value="{{$users->id}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="mail_address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$users->mail_address}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" value="{{$users->password}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName">User name</label>
                                    <input type="text" class="form-control" name="username" id="exampleInputName" aria-describedby="" placeholder="User name" value="{{$users->username}}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Role</label>
                                    <select class="form-control" name="role" value="{{$users->role}}">
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
  if(document.location.hostname == 'pratikborsadiya.in') {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>
