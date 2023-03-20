@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kategoriya qo'shish</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_uz">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title_ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_ru">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short_content_uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="short_content_uz">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short_content_ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="short_content_ru">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="content_uz">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content_ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="content_ru">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategoriyasini belgilang</label>
                                    <div class="col-sm-12 col-md-7">
                                      <select class="form-control selectric" name="category_id">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->slug }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">img</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="img" id="image-upload" />
                                         
                                        </div>
                                        @error('img')
                                        {{$message}}
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
