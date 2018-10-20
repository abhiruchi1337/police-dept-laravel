@if(isset($posts))
    @foreach($posts as $p)
        <h1>{{$p}}</h1>
    @endforeach
@endif