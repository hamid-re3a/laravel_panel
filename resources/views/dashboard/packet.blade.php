@extends('layouts.home')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>پکت ها</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">پکت ها</h3>
                    </div>
                    <div class="filter-box">
                        <form class="form-inline" method="post" id="form-filter">
                            <div class="form-group">
                                <label for="content_type">نوع داده :</label>
                                <select name="content_type" id="content_type" class="form-control">
                                    <option value="">All Type</option>
                                    @foreach($contentTypes as $contentType)
                                        <option value="{{$contentType}}">{{$contentType}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="time">زمان :</label>
                                <input type="text" id="time" name="time" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-default">فیلتر</button>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="packet_table">
                        @include('dashboard.table')
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('foot')
    <script type="text/javascript">
        $("#form-filter").submit(function(e) {
            e.preventDefault();
            var content_type = $("#content_type").val();

            var dataString = 'content_type='+ content_type + '&time=' + time;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "filter",
                data: dataString,
                cache: false,
                success: function(result){
                    $('#packet_table').html(result.html);
                }
            });
        });
    </script>
@endsection