@extends('layout.main')

@section('content')
  <div class="container d-flex justify-content-center my-5">
    <div class="card p-5">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
        </div>
        <div class="col d-flex align-items-center text-justify">
          <div class="card-body">
            <h5 class="card-title my-4"><strong>Title:</strong>  {{ $comic['title'] }}</h5>
            <span class="card-text"><strong>Series:</strong> {{ $comic['series'] }}</span>
            <span class="card-text my-2"><strong>Price:</strong> {{ $comic['price'] }}</span>
            <span class="card-text"><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</span>
            <span class="card-text my-2"><strong>Type:</strong> {{ $comic['type'] }}</span>
            <span class="card-text"><strong>Artists:</strong> {{ $comic['artists'] }}</span>
            <span class="card-text my-2"><strong>Writers:</strong> {{ $comic['writers'] }}</span>
            <span class="card-text"><strong>Description:</strong></span>
            <p class="card-text my-2">{{ $comic['description'] }}</p>
            <a href="{{ route('comics.index') }}" class="btn btn-primary my-4">Back</a>
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Edit</a>
            <form
              class="d-inline"
              action="{{ route('comics.destroy', $comic) }}"
              method="POST"
              onsubmit="return confirm('Confermi la cancellazione del dato?')"
            >
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
