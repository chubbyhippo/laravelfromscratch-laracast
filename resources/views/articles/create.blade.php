@extends('layout')
@section('content')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
@endsection
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">
            New Article
        </h1>

        <form action="/articles" method="POST">
            @csrf
            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" name="title" id="title" class="input @error('title') is-danger @enderror" value="{{old('title')}}">
                    @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>


            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>

                <div class="control">
                    <textarea name="excerpt" id="excerpt" class="textarea @error('excerpt') is-danger @enderror">{{old('excerpt')}}</textarea>
                    @error('excerpt')
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>

                <div class="control">
                    <textarea name="body" id="id" class="textarea @error('body') is-danger @enderror">{{old('body')}}</textarea>
                    @error('body')
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button" type="submit">Submit</button>
                </div>
            </div>

        </form>

    </div>

</div>
@endsection