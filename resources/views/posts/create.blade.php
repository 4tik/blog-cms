@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Post Create</h3>
                        <form method="POST" action="{{ route('posts.store') }}" class="p-5 bg-light">
                            @csrf
                            <div class="form-group">
                                <label>Title *</label>
                                <input type="text" name="title" class="form-control" value="{{old('title', optional($post ?? null)->title)}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input id="description" name="description" type="text" class="form-control value="{{ old('description') }}">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input id="category" name="category" type="text" class="form-control value="{{ old('category') }}">
                            </div>

                            <br/>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
