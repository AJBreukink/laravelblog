
@extends ('layout')

@section ('content')
  <a href="/">BACK TO HOME PAGE</a><br />
<a href=" /posts/create/category">Add a category</a><br />

<div id="form">
<form action="/posts" method="POST">
  {{ csrf_field() }}

  <div id="inputfield"></div>
    <input placeholder="Title" name="title" type="text" id="title" required></br>
    Categorie:<br>

    @foreach ($categories as $category)
     <input type="radio" name="category" value="{{$category->name}}" checked>{{$category->name}}<br> 
@endforeach
   
    <textarea rows="20" placeholder="Blog tekst" name="body" type="text" required></textarea></br>
    <button type="submit">Plaats blog op de website!</button></br>
  </div>
</form>

</div>
@endsection
