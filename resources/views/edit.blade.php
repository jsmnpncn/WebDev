@extends('common.main')
@section('title', 'Edit Form')
@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow" style="width: 100%; max-width: 550px;">
        <div class= "custom-header">
            COMMUNITY FORM
        </div>
        <div class="card-body p-4">
            <form method="POST" action="{{ route('posts.edit-submit', $post->id) }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold custom-label">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        value="{{ $post->title }}"
                    >
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold custom-label">Description</label>
                    <textarea
                        class="form-control"
                        rows="6"
                        name="description"
                    >{{ $post->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label for ="status" class="custom-label">Status</label>
                    <select class="form-select" name="status">
                        @foreach($statuses as $status)
                            @if($post->status == $status->id)
                                <option value="{{ $status->id }}" selected>{{ $status->display_name }}</option>
                            @else
                                <option value="{{ $status->id }}">{{ $status->display_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div> 
                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">
                    Submit
                </button>
            </form>
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

</style>