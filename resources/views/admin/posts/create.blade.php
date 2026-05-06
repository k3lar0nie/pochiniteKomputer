@extends('admin.layouts.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>черкание малявы</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">черкание малявы</h3>
                    </div>
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="title">кликуха малявы</label>
                                <input type="text" class="form-control 
                                    @error('title') is-invalid @enderror" id="title" name="title" placeholder="Введите название поста" required>
                            </div>

                            <div class="form-group">
                                <label for="description">описание</label>
                                <textarea name="description" id="" class="form-control" id="description" rows="3" placeholder="опишание..."></textarea>
                            </div>


                            <div class="form-group">
                                <label for="description">кантент</label>
                                <textarea name="content" id="" class="form-control" id="content" rows="7" placeholder="кантеент..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="category_id">категория</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="tags">тэги</label>
                                <select name="tags[]" id="tags" class="select2" multiple="multiple" data-placeholder="выбор тегов" style="width:100%">

                                    @foreach ($tags as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
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


                        </div>
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
@endsection