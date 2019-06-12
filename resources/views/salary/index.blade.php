@extends('layouts.master')
@section('title', 'Quản lý lương')
<?php
!isset($_GET['page']) ? $page = 0 : $page = $_GET['page']-1;
$pagination = 20;
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class=""></i>Quản lý lương</h1>
            <p>Lương theo tháng</p>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <a href="{{route('salary.create')}}" class="btn btn-primary btn-sm" style="float: right; "> 
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Create</a>
                        
                    <div class="table-responsive">
                    <table class="table table-bordered" id="sampleTable"  style="text-align: center;">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã NV</th>
                                <th>Họ tên</th>
                                <th>Lương cơ bản</th>
                                <th>Ngày công chuẩn</th>
                                <th>Ngày công thực</th>
                                <th>Thưởng</th>
                                <th>Kỷ luật</th>
                                <th>Tăng ca </th>
                                <th>Bảo hiểm(%)</th>
                                <th>Thuế (%)</th>
                                <th>Trợ cấp</th>
                                <th>Lương thực lĩnh</th> 
                                <th>Sửa</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach($salary as $salary )
                            <tr>
                                <td><?php echo $i+$page*$pagination;?></td>
                                <td>{{$salary->timekeeping->emp_id}}</td>
                                <td>{{$salary->timekeeping->fullname}}</td>
                                <td>{{$salary->salary}}</td>
                                <td>{{$salary->standard_workday}}</td>
                                <td>{{$salary->workday}}</td>
                                <td>{{$salary->bonus_id}}</td>
                                <td>{{$salary->discipline_id }}</td>
                                <td>{{$salary->OT}}</td>
                                <td>{{$salary->insurance}}</td>
                                <td>{{$salary->tax_code_tax}}</td>
                                <td>{{$salary->allowan}}</td>
                                <td>{{$salary->sum_salary}}</td>
                                <td>
                                    <!-- <a  href=""><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> -->
                                     <a  href="/salary/{{ $salary->id }}/edit"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                </td>
                                <td>
                                    <form action="{{ route('salary.destroy', ['id' => $salary->id]) }}" class="submitDelete" method="post" onsubmit="return confirm('Do you want to delete?')">
                                        {!! csrf_field() !!}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>  
                                    <!-- <form action="" class="submitDelete" method="post" onsubmit="return confirm('Do you want to delete?')">
                                        {!! csrf_field() !!}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form> -->
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

