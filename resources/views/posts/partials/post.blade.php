{{-- no style  --}}

{{-- @if ($loop->even)
    <div>
        {{ $key }}.{{ $post->title }}
    </div>
@else
    <div style="background-color: silver">{{ $key }}.{{ $post->title }}</div>
@endif


<div>
    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" />
    </form>
</div> --}}


{{-- using bootstrap style  --}}


@if ($loop->even)
    <div class="bg-white p-3">
        {{ $key }} {{ $post->title }}

    </div>
@else
    <div class="bg-silver p-3">
        {{ $key }}. {{ $post->title }}
    </div>
@endif

<div class="  mt-3">
    <div class="btn-group" role="group" aria-label="Post Actions">
        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary mx-2">Show</a>
        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-warning mx-2">Update</a>

        <a>
            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mx-2">Delete</button>
            </form>
    </div>
</div>
