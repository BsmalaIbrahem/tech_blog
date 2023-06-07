@if(@$admin)
    @include('admin.navbar')
@else
    @include('navbar')
@endif
<div style="width:50%; margin:20px auto 0">
@foreach($posts as $post)
    <article style="width:100%">
        <div class="row">
        <div class="span8">
            <div class="post-link">
            <div class="post-heading">
                <h3 style="color:#e96b56; display:inline">
                    {{$post->subject}}
                </h3>
                    @if(@auth()->guard('admin')->user()->id == $post->admin_id)
                    <ul style="display:inline-block"class="nav topnav" >
                        <li class="dropdown">
                            <a href="">
                                <i style="color:#e96b56;" class="icon-ellipsis-horizontal"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('admin.editPost', ['id' => $post->id])}}">Update</a></li>
                                    <li>
                                        <form action="{{route('admin.deletePost', ['id'=>$post->id])}}"method="post">
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                    </li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                    @elseif(! @$admin)
                        <form  action="{{route('storeFav',['post_id' => $post->id])}}"
                                 method="post" style="display:inline-block; float:right">
                            @csrf
                            @if($post->favourite->isEmpty() || ! auth()->check())
                            <button type="submit" style="border:0; background:white; font-size:15px">
                                <i class="icon-heart-empty"></i>
                            @else
                            <button type="submit" style="border:0; background:white; font-size:15px">
                                <i class="icon-heart"></i>
                            </button>
                            @endif
                            </button>
                        </form>
                    @endif

            </div>
            </div>
            <div class="meta-post">
            <ul>
                <li><i class="icon-link"></i></li>
                <li>By <a href="#" class="author">{{$post->admin->name}}</a></li>
                <li>On <a href="#" class="date">{{$post->updated_at}}</a></li>
                <li>Tag: <a href="#">{{$post->tag->name}}</a></li>
            </ul>
            </div>
            <div class="post-entry">
            @php($content = "")
            @for($i =0; $i<strlen($post->content); $i++)

                @if($i == 300)
                    @break
                @endif
                @php($content .=$post->content[$i])
            @endfor
            <p>{{$content}} ........</p>
            @if(@$admin)
                <a href="{{route('admin.showPost', ['id'=> $post->id])}}" class="readmore">
                    Read more <i class="icon-angle-right"></i>
                </a>
            @else
            <a href="{{route('showPost', ['id'=> $post->id])}}" class="readmore">
                Read more <i class="icon-angle-right"></i>
            </a>
            @endif
            </div>
        </div>
        </div>
    </article>
@endforeach
</div>


