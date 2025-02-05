<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product; // Pastikan model Product sudah dibuat

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $products = Product::paginate(5);
        return view('page.admin.product.index', compact('products'));
    }

    // Form untuk menambahkan produk baru
    public function create()
    {
        return view('page.admin.product.create', [
            'categories'=> Category::all(),
        ]);
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'stock'=> 'required|integer',
            'description' => 'nullable|string',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // Tampilkan detail produk
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Form untuk mengedit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('page.admin.product.edit', compact('product', 'categories'));
    }

    // Update data produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui');
    }

    // Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus');
    }
}
