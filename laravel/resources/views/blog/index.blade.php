{{ Session::get('Message') }}

List Post
<hr>

@foreach($blogs as $blogs)

	<p>{{$blogs->judul}}</p>
	<p>{{$blogs->isi}}</p>
	<hr>
@endforeach
