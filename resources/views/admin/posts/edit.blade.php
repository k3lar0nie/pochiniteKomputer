@extends('admin.layouts.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Редактирование постс</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Бланк Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">маялва {{ $post->title }}</h3>
                    </div>
                    <!-- ... card-header ... -->
                    <form role="form" method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" class="form-control @error('title') is-invalid
                                    @enderror" id="title" name="title" value="{{ $post->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">описание</label>
                                <textarea name="description" id="" class="form-control @error('description') is-invalid
                                    @enderror" id="description" rows="3" placeholder="опишание...">{{ $post->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">кантент</label>
                                <textarea name="content" id="" class="form-control @error('content') is-invalid
                                @enderror" id="content" rows="7" placeholder="кантеент...">{{ $post->content }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="category_id">категория</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $k => $v)
                                        <option value="{{ $k }}" @if($k == $post->category_id) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tags">тэги</label>
                                <select name="tags[]" id="tags" class="select2" multiple="multiple" data-placeholder="выбор тегов" style="width:100%">

                                    @foreach ($tags as $k => $v)
                                        <option value="{{ $k }}" @if(in_array($k, $post->tags->pluck('id')->all() )) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="thumbnail">картинки</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                        <label class="custom-file-label" for="thumbnail">выберитети катртинку</label>
                                    </div>
                                </div>
                            </div>
                            <div><img src="{{ $post->getImage() }}" alt="" class="img-thumbnail mt-2" width="200"></div>

                        </div>
                        <!-- ... card-body ... -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-default">Отмена</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection