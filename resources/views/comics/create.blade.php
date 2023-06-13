@extends('layout.main')

@section('content')
  <div class="container my-5">
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" aria-describedby="emailHelp" placeholder="@error('title') {{ $message }} @enderror" value="{{ old('title') }}">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"name="series" placeholder="@error('series') {{ $message }} @enderror" value="{{ old('series') }}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="@error('price') {{ $message }} @enderror" value="{{ old('price') }}">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="@error('sale_date') {{ $message }} @enderror" value="{{ old('sale_date') }}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="@error('type') {{ $message }} @enderror" value="{{ old('type') }}">
      </div>

      <div class="mb-3">
        <label for="artists" class="form-label">Artists</label>
        <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="@error('artists') {{ $message }} @enderror" value="{{ old('artists') }}">
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Writers</label>
        <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="@error('writers') {{ $message }} @enderror" value="{{ old('writers') }}">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="@error('thumb') {{ $message }} @enderror" value="{{ old('thumb') }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" style="height: 100px" placeholder="@error('description') {{ $message }} @enderror" value="{{ old('description') }}"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
