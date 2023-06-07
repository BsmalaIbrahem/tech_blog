
 @include('navbar')

<div style="width:50%; margin:20px auto 0">

@foreach($favPosts as $favpost)
    <article style="width:100%">
        <div class="row">
        <div class="span8">
            <div class="post-link">
            <div class="post-heading">
                <h3 style="color:#e96b56; display:inline">
                    {{$favpost->post->subject}}
                </h3>
                <form  action="{{route('storeFav',['post_id' => $favpost->post->id])}}"
                            method="post" style="display:inline-block; float:right">
                    @csrf
                    <button type="submit" style="border:0; background:white; font-size:15px">
                        <i class="icon-heart"></i>
                    </button>
                </form>

            </div>
            </div>
            <div class="meta-post">
            <ul>
                <li><i class="icon-link"></i></li>
                <li>By <a href="#" class="author">{{$favpost->post->admin->name}}</a></li>
                <li>On <a href="#" class="date">{{$favpost->post->updated_at}}</a></li>
                <li>Tag: <a href="#">{{$favpost->post->tag->name}}</a></li>
            </ul>
            </div>
            <div class="post-entry">
            @php($content = "")
            @for($i =0; $i<strlen($favpost->post->content); $i++)

                @if($i == 300)
                    @break
                @endif
                @php($content .=$favpost->post->content[$i])
            @endfor
            <p>{{$content}} ........</p>
            <a href="{{route('showPost', ['id'=> $favpost->post->id])}}" class="readmore">
                Read more <i class="icon-angle-right"></i>
            </div>
        </div>
        </div>
    </article>
@endforeach
</div>


