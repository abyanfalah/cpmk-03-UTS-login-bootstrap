<div class="mb-3">
    <label for="title" class="form-label">Judul</label>

    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title', $image->title ?? '') }}">

    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="image" class="form-label">Gambar</label>

    <input type="file" id="image" name="image" accept="image/*"
        class="form-control @error('image') is-invalid @enderror">

    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn-solid theme-primary">
    Simpan
</button>