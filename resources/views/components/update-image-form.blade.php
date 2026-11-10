<h1>Ubah data gambar</h1>

<img src="{{ asset('storage/' . $image->path) }}" width="200">


<form action="{{ route('images.update', $image) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @include('components.image-form')


</form>