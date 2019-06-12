@extends('layouts.master')
@section('title', 'Quản lý nhân viên')
<?php
!isset($_GET['page']) ? $page = 0 : $page = $_GET['page']-1;
$pagination = 20;
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class=""></i> Quản lý nhân viên</h1>
            <p>Danh sách nhân viên chính thức</p>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <a href="{{route('employee.create')}}" class="btn btn-primary btn-sm" style="float: right; "> <i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
                    <table class="table table-hover table-bordered" id="sampleTable"  style="text-align: center;">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã NV</th>
                                <th>Họ tên</th>
                                <th>Ngày sinh</th>
                                <!-- <th>Giới tính</th> -->
                                <th>Phòng</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th>Chức vụ</th>
                                <th>Tuỳ chọn</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach($employee as $employee )
                            <tr>
                                <td><?php echo $i+$page*$pagination;?></td>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->fullname}}</td>
                                <td>{{$employee->birthday}}</td>
                                <!-- <td>{{$employee->gender}}</td> -->
                                <td>{{$employee->department->dep_name}}</td>
                                <td>{{$employee->address}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>{{$employee->possition}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <a  href="/employee/{{ $employee->id }}/edit"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        </div>
                                        <div class="col-md-5">
                                            <form action="{{ route('employee.destroy', ['id' => $employee->id]) }}" class="submitDelete" method="post" onsubmit="return confirm('Do you want to delete?')">
                                                {!! csrf_field() !!}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++;?>
                            @endforeach
                        </tbody>
                    </table> 
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/department\.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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

