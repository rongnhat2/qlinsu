@extends('layouts.master')

@section('title', 'Chấm công')
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Chấm công</h1>
          <!-- <p>Thêm mới phòng ban</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <!-- <h3>Nhập vào form các thông tin dưới đây để tạo mới 1 phòng ban</h3>  -->   
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('timekeeping.store')}}" method="POST">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input">Mã NV</label>
                                      <input type="text" class="form-control" name="emp_id" placeholder="" value="">
                                  </div>

                                  <!-- <div class="form-group col-md-6">
                                      <label for="input">Mã NV</label>
                                      <input type="text" class="form-control" name="emp_code" placeholder="" value="">
                                  </div>
 -->
                                  <!-- <div class="form-group col-md-6">
                                      <label for="input">Họ tên</label>
                                      <input type="text" class="form-control" name="fullname" placeholder="" value="">
                                  </div> -->

                                  <div class="form-group col-md-6">
                                      <label for="input">Ngày công</label>
                                      <input type="text" class="form-control" name="workday" placeholder="" value="">
                                  </div>

                                  <div class="form-group col-md-6">
                                      <label for="input">Giờ tăng ca</label>
                                      <input type="text" class="form-control" name="OT" placeholder="" value="">
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