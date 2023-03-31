<div>
    <div class="body">
        <div class="container">
            @if (session()->has('message'))
                <div class="alert mt-3 alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            <div class="float-end mt-3">
                <h1 class="text-white">This my Posts</h1>
            </div> <br> <br> <br>
            <div class="d-flex mt-4">

                <input type="text" class="form-control me-2" placeholder="Search Author" wire:model="postSearch">

                <select class="form-select " wire:model="postCategory">
                    <option value="" disabled>Select a Category</option>
                    <option value="all">All</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>



            </div>


            @foreach ( $posts as $post )
            <div class="card mt-3 shadow">
                <div class="card-header d-flex text-center">
                    <h5>Title: {{ $post->title }}</h5>

                </div>

                <div class="card-body text-center postcardbdclr">
                    <h3>Author: {{ $post->author }}</h3>
                    <h6>Category: {{ $post->category->category }}</h6>
                    <h4>{{ $post->content }}</h4>
                </div>
            </div>
        @endforeach

        <div class="pagination justify-content-center mt-3">
            {{ $posts }}

        </div>

        </div>
        <style>
            .body{
                display: grid;
                place-content: center;
            }


        </style>

    </div>

</div>

