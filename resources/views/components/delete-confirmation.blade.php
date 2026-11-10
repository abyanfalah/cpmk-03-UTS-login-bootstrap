<button type="button" class="btn-solid theme-danger" data-bs-toggle="dialog" data-bs-target="#delete-dialog">
    Hapus gambar
</button>

<dialog class="dialog" id="delete-dialog">
    <div class="dialog-header">
        <h1 class="dialog-title">Hapus gambar?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="dialog" aria-label="Close"></button>
    </div>
    <div class="dialog-body">
        <p>Gambar akan terhapus secara permanen.</p>
    </div>
    <div class="dialog-footer">

        <form action="{{ route('images.destroy', $image) }}" method="POST">
            <button type="button" class="btn-solid theme-secondary" data-bs-dismiss="dialog">
                Batal
            </button>
            @csrf
            @method('DELETE')

            <button type="submit" class="btn-solid theme-danger">
                Hapus
            </button>
        </form>
    </div>
</dialog>