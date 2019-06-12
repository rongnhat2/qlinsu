@extends('layouts.master')

@section('title', 'Quản lý khen thưởng')

<?php
!isset($_GET['page']) ? $page = 0 : $page = $_GET['page']-1;
$pagination = 20;
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class=""></i> Quản lý thành tích</h1>
            <p>Danh sách khen thưởng</p>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <a href="{{route('bonus.create')}}" class="btn btn-primary btn-sm" style="float: right; "> <i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
                    <table class="table table-hover table-bordered" id="sampleTable" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã KT</th>
                                <th>Mã NV</th>
                                <th>Họ tên</th>
                                <th>Lý do </th>
                                <th>Mô tả</th>
                                <th>Giá trị</th>
                                <!-- <th>Ngày thưởng</th> -->
                                <th>Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach($bonus as $bonus)
                            <tr>
                                <td><?php echo $i+$page*$pagination;?></td>
                                <td>{{$bonus->id}}</td>
                                <td>{{$bonus->employee->emp_code}}</td>
                                <td>{{$bonus->employee->fullname}}</td>
                                <td>{{$bonus->cause_bonus}}</td>
                                <td>{{$bonus->describe}}</td>
                                <td>{{$bonus->money}}</td>
                                <!-- <td>{{$bonus->date_bonus}}</td> -->
                                <td>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <a  href="/bonus/{{ $bonus->id }}/edit"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> &nbsp;
                                        </div>
                                        <div class="col-md-5">
                                            <form action="{{ route('bonus.destroy', ['id' => $bonus->id]) }}" class="submitDelete" method="post" onsubmit="return confirm('Do you want to delete?')">
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

