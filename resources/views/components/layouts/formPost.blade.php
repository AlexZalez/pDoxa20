<div class="mb-3">
    <label for="title" class="form-label" >Title</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control" id="title">
    @error('title')
      <div class="text-danger">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="body" class="form-label" >Body</label>
    <textarea  id="body" name="body" class="form-control" cols="30" rows="4">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <div class="text-danger">
            {{$message}}
        </div>
    @enderror
</div>