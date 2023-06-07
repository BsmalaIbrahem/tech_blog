@include('admin.navbar')
<div  style="width:50%;margin:20px auto; background:white;padding:5px; padding-top:30px;" >
    <div class="row">
        <div class="span8">
        <h4 class="text-center">Update Tag</h4>
        <div >@include('errors')</div>
        <form action="{{route('admin.updateTag', ['id' => $tag->id])}}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
            @csrf
            <div class="">
                <input type="text"  name="name" value="{{$tag->name}}"  placeholder="Tag Name" style="width:60%;display:block; margin:10px auto"/>

            </div>
            <div class="span8 form-group">
                <div class="text-center" >
                <img src="{{asset('storage/tags/'. $tag->photo)}}" style="height:200px"  id="Image">
                <input type="file" id="file" name="photo">
                <textarea style="display:none" readonly="" id="imagesrc" name="Oldphoto" >{{$tag->photo}}</textarea>
                <button class="btn btn-theme btn-medium margintop10" type="submit">update tag</button>
                </div>
            </div>
        </form>
        </div>

</div>
</div>
<script src="{{asset('js/image.js')}}"></script>
