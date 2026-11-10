<a href="{{ route('images.edit', $image) }}">
    <div class="frame">
        <div class="ph">
            <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->title }}" width="800" height="800"
                loading="eager">

            <span class="frame-cap">{{ $image->title }}</span>
        </div>
    </div>

</a>