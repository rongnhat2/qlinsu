@extends('layouts.master')



<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Quản lý nhân viên</h1>
          <p>Cập nhật thông tin nhân viên </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3>Nhập thông tin nhân viên</h3>    
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('salary.update', $salary->id) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Lương cơ bản</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="salary" value="{{$salary->salary}}">
                                    </div>
                                </div>

                               <!--  <div class="form-group col-md-6">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Ngày công chuẩn</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="standard_workday" value="{{$salary->standard_workday}}">
                                    </div>
                                </div> -->

                                <div class="form-group col-md-6">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Thưởng</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="bonus_id" value="{{$salary->bonus_id}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Kỉ Luật</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="discipline_id" value="{{$salary->discipline_id}}">
                                    </div>
                                </div>

                                <!-- <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Bảo Hiểm</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="insurance " value="{{$salary->insurance }}">
                                    </div>
                                </div> -->

                                <div class="form-group col-md-3">
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Trợ Cấp</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="allowan" value="{{$salary->allowan}}">
                                    </div>
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
