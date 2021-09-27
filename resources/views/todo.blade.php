@include('header')
<h4>Todo List  </h4>

@if($user=='Ram ')
<h3>Hello {{$user}} </h3>
@elseif($user=='Sam')
<h3>Hello {{$user}} </h3>
@else
<h3>Unknown User</h3>
@endif


@for($i = 0; $i<10; $i++)
<h4> {{$i}} </h4>
@endfor

@foreach($array as $user)
<h5> {{$user}} </h5>
@endforeach

@foreach($array as $data)
<h5> {{$data}} </h5>
@endforeach

@csrf
<script>
    var data = @json($array);
    console.log(data[0]);
</script>