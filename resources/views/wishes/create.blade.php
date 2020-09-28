@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create a Wish
                    </div>
                    <div class="card-body">
                        <form action="/wishes" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">What would you like?</label>
                                <input class="form-control" type="text" name="name">
                                @error('name') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>


                            <div class="form-group">
                                <label for="image">Photo of what you would like</label>
                                <input type="file" name="image">
                                @error('image') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description of what you would like</label>
                                <input class="form-control" type="text" name="description">
                                @error('description') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input class="form-control" type="number" name="price" step="any">
                                @error('price') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group">
                                <label for="link">Link to wish</label>
                                <input class="form-control" type="text" name="link">
                                @error('link') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>

                            @csrf
                            <button>Create Wish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
