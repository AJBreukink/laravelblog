@extends ('layout')

@section ('content')

@foreach ($posts as $post)
  @include ('posts.articles')
@endforeach

@foreach ($categories as $category)
  <a href="posts/{{$category->category}}">{{$category->category}}</a><br />
@endforeach

@endsection
