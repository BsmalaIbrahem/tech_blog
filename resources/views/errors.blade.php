@if($errors->any())
    <div style="color:red; width:400px; margin:auto">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif



