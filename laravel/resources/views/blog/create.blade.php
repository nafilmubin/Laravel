
Create New Post
<hr>
<form action="/blog" method="POST">
	<input type="text" name="judul" placeholder="Judulmu?">
	{{ ($errors->has('judul')) ? $errors->first('judul') : ''}}<br>
	<textarea name="isi" placeholder="Isikan isimu" cols="22" rows="3"></textarea>
	{{ ($errors->has('isi')) ? $errors->first('isi') : ''}}<br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="tombolsubmit">
</form>