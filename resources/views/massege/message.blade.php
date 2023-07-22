@if ($message = Sessions::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>

    </div>
@endif
@if ($message = Sessions::get('error'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>

    </div>



@endif