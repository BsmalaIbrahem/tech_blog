@include('admin.navbar')
<div style="width:50%; padding-top:20px; background:white; margin:auto">
    <div class="row">
        <div class="span8">
        <h3 class="text-center">Add post</h3>

        <div id="errormessage">
            @include('errors')
        </div>
        <form action="" method="post" role="form" class="contactForm"enctype="multipart/form-data">
        @csrf
            <div class="row">
            <div class="span8" style="width:90%" style="">
            <div style="padding-left:70px">
                <input type="text" name="subject" value="{{$post->subject}}" style=" width:43%" id="subject" placeholder="Subject"/>
                <select value="{{$post->tag->name}}" name="tag_id" style="background:white; width:48%; height:40px; border:1px solid #33333370;">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
                </select>
                <textarea name="content" rows="5" data-rule="required"placeholder="Write post">
                    {{$post->content}}
                </textarea>
            </div>
            </div>
</div>
            <div class="span8 form-group">

                <div class="text-center">
                @if($post->photo)
                <img src="{{asset('storage/posts/'. $post->photo)}}" style="height:200px"  id="Image">
                <input type="file" id="file" name="photo">
                <textarea style="display:none" readonly="" id="imagesrc" name="Oldphoto" >{{$tag->photo}}</textarea>
                <script src="{{asset('js/image.js')}}"></script>
                @endif
                <button class="btn btn-theme btn-medium margintop10" type="submit">Post</button>
                </div>
            </div>
            </div>
        </form>
        </div>
</div>


