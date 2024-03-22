<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataProduct = Product::all();
        // return view('' compact('dataProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);
        
        // image 1
        $image_1 = $request->file('image_1');
        $imgName_1 = time() . rand() . '.' . $image_1->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_1->move($dPath, $imgName_1);

        // image 2
        $image_2 = $request->file('image_2');
        $imgName_2 = time() . rand() . '.' . $image_2->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_2->move($dPath, $imgName_2);

        
        // image 3
        $image_3 = $request->file('image_3');
        $imgName_3 = time() . rand() . '.' . $image_3->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_3->move($dPath, $imgName_3);

        
        // image 4
        $image_4 = $request->file('image_4');
        $imgName_4 = time() . rand() . '.' . $image_4->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_2->move($dPath, $imgName_4);


        Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'no_telp' => $request->no_telp,
            'price' => $request->price,
            'unit' => $request->unit,
            'stock' => $request->stock,
            'image_1' => $imgName_1,
            'image_2' => $imgName_2,
            'image_3' => $imgName_3,
            'image_4' => $imgName_4,
        ]);
        // return redirect()->route('')->with('add', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataProduct = Product::where('id', $id)->first();
        // return view('' compact('dataProduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);
        
        // image 1
        $image_1 = $request->file('image_1');
        $imgName_1 = time() . rand() . '.' . $image_1->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_1->move($dPath, $imgName_1);

        // image 2
        $image_2 = $request->file('image_2');
        $imgName_2 = time() . rand() . '.' . $image_2->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_2->move($dPath, $imgName_2);

        
        // image 3
        $image_3 = $request->file('image_3');
        $imgName_3 = time() . rand() . '.' . $image_3->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_3->move($dPath, $imgName_3);

        
        // image 4
        $image_4 = $request->file('image_4');
        $imgName_4 = time() . rand() . '.' . $image_4->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image_2->move($dPath, $imgName_4);


        Product::where('id', $id)->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'no_telp' => $request->no_telp,
            'price' => $request->price,
            'unit' => $request->unit,
            'stock' => $request->stock,
            'image_1' => $imgName_1,
            'image_2' => $imgName_2,
            'image_3' => $imgName_3,
            'image_4' => $imgName_4,
        ]);
        // return redirect()->route('')->with('edit', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        // return redirect()->route('')->with('delete', 'Data berhasil dihapus');
    }
}
