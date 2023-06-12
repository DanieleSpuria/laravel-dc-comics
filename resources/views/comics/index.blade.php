@extends('layout.main')

@section('content')
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Series</th>
        <th scope="col">Type</th>
        <th scope="col">Sale Date</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{ $comic->id }}</td>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->series }}</td>
          <td>{{ $comic->type }}</td>
          <td>{{ $comic->sale_date }}</td>
          <td>{{ $comic->price }}</td>
          <td><a href="{{ route('comics.show', $comic) }}" class="btn btn-info">View</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
