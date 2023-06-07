<div class="container " style="width:80%">
@foreach($tags as $tag)
    <div class="span3">
        <div class="service-box aligncenter flyLeft">
            <div class="icon">
            @if(@$admin)
            <a href="{{route('admin.postsByTag', ['tag_id' => $tag->id])}}">
                <img class="circled" style="width:100%; height:200px" src="{{asset('storage/tags/'.$tag->photo)}}">
            </a>
            @else
            <a href="{{route('postsByTag', ['tag_id' => $tag->id])}}">
                <img class="circled" style="width:100%; height:200px" src="{{asset('storage/tags/'.$tag->photo)}}">
            </a>
            @endif
            </div>
            <h5><span class="colored">{{$tag->name}}</span></h5>
            @if(@$admin)
                <a  href="{{route('admin.editTag', ['id' => $tag->id])}}">update</a>
            @endif
        </div>
    </div>
@endforeach
</div>
