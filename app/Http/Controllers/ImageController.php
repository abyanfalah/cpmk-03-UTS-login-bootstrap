<?php
namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::latest()->get();

        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'max:2048'],
        ]);

        $path = $request->file('image')->store('images', 'public');

        Image::create([
            'title' => $validated['title'],
            'path' => $path,
        ]);

        return redirect()->route('home')
            ->with('success', 'Gambar berhasil disimpan!');
    }

    public function show(Image $image)
    {
        return redirect()->route('home');
    }

    public function edit(Image $image)
    {
        return view('components.edit-image-form', compact('image'));
    }

    public function update(Request $request, Image $image)
    {

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $image->title = $validated['title'];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($image->path);

            $image->path = $request->file('image')
                ->store('images', 'public');
        }

        $image->save();


        return redirect()->route('home')
            ->with('success', 'Gambar berhasil diedit!');
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->path);

        $image->delete();

        return redirect()->route('home')
            ->with('success', 'Gambar berhasil dihapus!');
    }
}
