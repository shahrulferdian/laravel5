<h1>{{ $cate->category_name }}</h1>
<form action="{{ $cate->id }}" method="POST">
    @method('delete')
    @csrf
    <button type="submit">delete</button>
</form>
<a href="/soloview/{{ $cate->id }}/edit">edit</a>
<a href="/">back</a>
