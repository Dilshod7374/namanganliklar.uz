@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show posts</h4>
                            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Title_uz : </td>
                                            <td><b>{{ $posts->title_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Title_ru : </td>
                                            <td><b>{{ $posts->title_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>short_content_uz : </td>
                                            <td><b>{{ $posts->short_content_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>short_content_ru : </td>
                                            <td><b>{{ $posts->short_content_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>content_uz : </td>
                                            <td><b>{{ $posts->content_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>content_ru : </td>
                                            <td><b>{{ $posts->content_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>img : </td>
                                            <td><b> <img src="/images/{{ $posts->img }}" width="60" alt="">
                                                </b></td>
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
