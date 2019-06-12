@extends('layouts.master')

@section('title', 'Quản lý phòng ban')


<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Quản lý phòng ban</h1>
          <p>Chỉnh sửa thông tin phòng ban</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <!-- <h3>Nhập thông tin phòng ban</h3>   -->  
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{url('/department', $department->id) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="input">Mã phòng</label>
                                  <input type="text" class="form-control" name="dep_code" placeholder="" value="{{$department->dep_code}}">
                                  @if($errors->has('dep_code'))
                                      <span class="text-danger">{{$errors->first('dep_code')}}</span>
                                  @endif
                              </div>

                              <div class="form-group col-md-6">
                                  <label for="input">Tên phòng</label>
                                  <input type="text" class="form-control" name="dep_name" placeholder="" value="{{$department->dep_name}}">
                                  @if($errors->has('dep_name'))
                                      <span class="text-danger">{{$errors->first('dep_name')}}</span>
                                  @endif
                              </div>

                              <div class="form-group col-md-6">
                                  <label for="input">Trưởng phòng</label>
                                  <input type="text" class="form-control" name="dep_manager" placeholder="" value="{{$department->dep_manager}}">
                                  @if($errors->has('dep_manager'))
                                      <span class="text-danger">{{$errors->first('dep_manager')}}</span>
                                  @endif
                              </div>

                              <div class="form-group col-md-6">
                                  <label for="input">Số nhân viên</label>
                                  <input type="text" class="form-control" name="dep_emp_total" placeholder="" value="{{$department->dep_emp_total}}">
                                  @if($errors->has('dep_emp_total'))
                                      <span class="text-danger">{{$errors->first('dep_emp_total')}}</span>
                                  @endif
                              </div>
                            </div>
                            
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
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
