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
                            <h4>Show kategoriya</h4>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Name_uz : </td>
                                            <td><b>{{ $category->name_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Name_ru : </td>
                                            <td><b>{{ $category->name_ru }}</b></td>
                                        </tr>
                                        <tr>
                                          <td>Slug : </td>
                                          <td><b>{{ $category->slug }}</b></td>
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
