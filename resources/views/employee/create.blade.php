@extends('layouts.master')

@section('title', 'Quản lý nhân viên')
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Quản lý nhân viên</h1>
          <p>Thêm mới nhân viên </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3>Nhập thông tin nhân viên</h3>    
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('employee.store')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Mã NV</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="emp_code">
                                        @if($errors->has('emp_code'))
                                            <span class="text-danger">{{$errors->first('emp_code')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Họ tên</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fullname">
                                        @if($errors->has('fullname'))
                                            <span class="text-danger">{{$errors->first('fullname')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="input-group mb-3">
                                        <label >Giới tính:</label>                                        
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="optionsRadios1" type="radio" name="gender" value="0" checked="">Nam
                                                </label>
                                                @if($errors->has('gender'))
                                                    <span class="text-danger">{{$errors->first('gender')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="optionsRadios1" type="radio" name="gender" value="1" checked="">Nữ
                                                </label>
                                                @if($errors->has('gender'))
                                                    <span class="text-danger">{{$errors->first('gender')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Địa chỉ</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="address">
                                        @if($errors->has('address'))
                                            <span class="text-danger">{{$errors->first('address')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Quê quán</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="hometown">
                                        @if($errors->has('hometown'))
                                            <span class="text-danger">{{$errors->first('hometown')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Ngày sinh</span>
                                        </div>
                                        <input type="Date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="birthday">
                                        @if($errors->has('birthday'))
                                            <span class="text-danger">{{$errors->first('birthday')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Số ĐT</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="phone">
                                        @if($errors->has('birthday'))
                                            <span class="text-danger">{{$errors->first('birthday')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Email</span>
                                        </div>
                                        <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email">
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Chức vụ</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="possition">
                                        @if($errors->has('possition'))
                                            <span class="text-danger">{{$errors->first('possition')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Phòng ban</span>
                                        </div>
                                        <select class="form-control" name="dep_id">
                                            @foreach($getDep as $dep)
                                                <option value="{{$dep->id}}">
                                                    {{$dep->dep_name}}
                                                </option>  
                                            @endforeach
                                        </select>
                                        @if($errors->has('dep_id'))
                                            <span class="text-danger">{{$errors->first('dep_id')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Trình độ</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name='level'>
                                            <option selected></option>
                                            <option value="1">Đại học</option>
                                            <option value="2">Cao đẳng</option>
                                            <option value="3">Trung cấp</option>
                                        </select>
                                        @if($errors->has('level'))
                                            <span class="text-danger">{{$errors->first('level')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Mã số thuế</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tax_code">
                                        @if($errors->has('tax_code'))
                                            <span class="text-danger">{{$errors->first('tax_code')}}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
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
 