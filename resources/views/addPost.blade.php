@extends('common.main')
@section('title', 'Community Posts')
@section('content')

<div class = "container py-5">
    <div class = "row g-4">
        <div class = "col-lg-4">
            <div class = "card shadow">
                <div class= "custom-header">
                    COMMUNITY FORM
                </div>
                <div class = "card-body">
                    <form method = "POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class = "mb-3">
                            <label class = "custom-label">Title</label>
                            <input
                            type = "text"
                            class = "form-control"
                            name = "title"
                            >
                        </div>
                        <div class = "mb-3">
                            <label class = "custom-label">Description</label>
                            <textarea
                            class="form-control"
                            rows="6"
                            name="description"
                            ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for ="status" class="custom-label">Status</label>
                            <select class="form-select" name="status">
                                <option value=""></option>
                                @foreach($statuses as $status)
                                <option value="{{ $status->id }}">{{$status->display_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button
                        type="submit"
                        class="btn btn-primary w-100"
                        >
                        Submit
                        </button>
                    </form>
                </div> 
            </div>
        </div>
        <div class = "col-lg-8">
            <div class = "card shadow">
                <div class = "custom-header">
                    COMMUNITY POSTS
                </div>
                <div class = "card-body">

                <div class="navbar p-0 mb-3"> <div class="container-fluid p-0">
                    <form class="d-flex w-100" role="search" action="/search" method="GET">
                        <input class="form-control me-2"
                        type="search"
                        name="param"
                        placeholder="Is pandesal a sexuality or a breed?"
                        aria-label="Search"
                        value="{{ request('param') }}"
                        />
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
                </div>
                    <div class = "table-responsive">
                        <table class = "table glass-table align-middle text-center">
                            <thead class="custom-table-head">
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post) 
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->created_by }}</td>
                                    <td>{{ $post->status_display_name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        @if($post->status_name != 'published')
                                        <a href="{{ route('posts.edit-form', $post->id) }}" class="bi bi-pencil-square custom-icon"></a>
                                        @endif
                                        <form action = "{{route('posts.delete', $post->id)}}"
                                        method = "POST" class="flex d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type = "submit" class="custom-delete-btn">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .custom-header{
        background-color: #47230f;
        border-radius: 12;
        color: #a2b9d5;
        font-family: 'Comic Neue', cursive;
        font-size: 23px;
        font-weight: bold;
        text-align: center;
        padding: 15px;
        letter-spacing: 1px;
    }

    .card{
        background-color: #a2b9d5 !important;
        border-radius: 16px;
        overflow: hidden;
    }

    .custom-table-head th{
        background-color: #4b2e21;
        color: #47230f !important;
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        letter-spacing: 1px;
    }

    .custom-label{
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #45271a;
        letter-spacing: 0.5px;
    }

    .btn-primary{
        background-color: #020259 !important;
        border-color: #020259 !important;
    }

    .custom-warning{
        background-color: #a2b9d5 !important;
    }

    .custom-success{
        background-color: #020259 !important;
    }

    .custom-icon{
        color: #020259 !important;
    }

    .custom-delete-btn{
        background: none;
        color: #721c24 !important;
        border: none;

    }
</style>