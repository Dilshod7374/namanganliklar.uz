@extends('admin.layouts.layout')

@section('posts')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Postlar</h4>
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Title_uz</th>
                                            <th>Title_ru</th>
                                            <th>Short_content_uz</th>
                                            <th>Short_content_ru</th>
                                            <th>Content_uz</th>
                                            <th>Content_ru</th>
                                            <th>Category</th>
                                            <th>img</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($posts as $item)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>

                                                <td>{{ $item->title_uz }}</td>
                                                <td>{{ $item->title_ru }}</td>

                                                <td>{{ $item->short_content_uz }}</td>
                                                <td>{{ $item->short_content_ru }}</td>
                                                <td>{{ $item->content_uz }}</td>
                                                <td>{{ $item->content_ru }}</td>
                                                <td>{{ $item->category->slug ?? 'Sotib olinmagan' }}</td>
                                                <td><img src="/images/{{ $item->img }}" width="60" alt="">
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.posts.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.posts.show', $item->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.posts.edit', $item->id) }}"
                                                            class="btn btn-primary">
                                                            <ion-icon class="far fa-edit"></ion-icon>
                                                        </a>
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Rostdan o`chirmoqchimisiz ?')">
                                                            <ion-icon class="fas fa-times"></ion-icon>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                        {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
