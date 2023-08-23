{{-- no style --}}
{{-- <div>
    <input type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}" />
</div>
@error('title')
    <div>{{ $message }}</div>
@enderror
<div>
    <textarea name='content'>{{ old('content', optional($post ?? null)->content) }}</textarea>
</div>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


{{-- whit style --}}
<div class="form-group">
    <input type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}" class="form-control" />
</div>
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
    <textarea name="content" class="form-control">{{ old('content', optional($post ?? null)->content) }}</textarea>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
