<table class="table direction table-bordered table-hover">
    <thead>
    <tr>
        <th>User</th>
        <th>Time</th>
        <th>Request</th>
        <th>Response</th>
    </tr>
    </thead>
    <tbody>
    @foreach($packets as $packet)
        <tr>
            <td>{{$packet->user}}</td>
            <td>{{$packet->time}}</td>
            <td>{{(strlen($packet->request) > 100) ? substr($packet->request,0,100).'...' : $packet->request}}</td>
            <td><a href="{{url('packet/show/'.$packet->id)}}" target="_blank">View Response</a></td>
            {{--<td><img src="data:image/png;base64,{{base64_encode($packet->response)}}" /></td>--}}
        </tr>
    @endforeach
    </tbody>
</table>

<div id="pagination">
    @if(isset($filter))
        {{$packets->appends(['content_type'=>$filter['content_type'],'time'=>$filter['time']])->links()}}
    @else
        {{$packets->links()}}
    @endif
</div>

<script type="text/javascript">
    $('.pagination a').click(function (e) {
        e.preventDefault();
        var url = $(this).attr('href');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            cache: false,
            success: function(result){
                $('#packet_table').html(result.html);
            }
        });
    });
</script>