<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complex;
use Illuminate\Http\Request;
use Image;


class ComplexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complexes = Complex::orderBy('id', 'ASC')->get();
        return view('admin.complexes.index', compact('complexes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.complexes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:complexes|max:50',
                'image1' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image2' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image3' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image4' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image5' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image6' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image7' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image8' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image9' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image10' => 'required|image|mimes:jpg,jpeg|max:10000',
                'image11' => 'required|image|mimes:jpg,jpeg|max:10000',

            ]
        );

        $fullImagePaths = [];

        for ($i = 1; $i < 12; $i++) {
            $image = $request->file('image' . $i);
            $imageNameGen = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
            $fullImagePath = 'images/complexes/' . $imageNameGen;
            $img = Image::make($image);
            $img->resize(1200, 1200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save($fullImagePath);
            $fullImagePaths[$i] = $fullImagePath;
        }




        Complex::create([
            'name' => $request->name,
            'desc1_ru' => $request->desc1_ru,
            'desc1_en' => $request->desc1_en,
            'desc2_ru' => $request->desc2_ru,
            'desc2_en' => $request->desc2_en,
            'desc3_ru' => $request->desc3_ru,
            'desc3_en' => $request->desc3_en,
            'desc4_ru' => $request->desc4_ru,
            'desc4_en' => $request->desc4_en,
            'desc5_ru' => $request->desc5_ru,
            'desc5_en' => $request->desc5_en,
            'desc6_ru' => $request->desc6_ru,
            'desc6_en' => $request->desc6_en,
            'image1' => $fullImagePaths[1],
            'image2' => $fullImagePaths[2],
            'image3' => $fullImagePaths[3],
            'image4' => $fullImagePaths[4],
            'image5' => $fullImagePaths[5],
            'image6' => $fullImagePaths[6],
            'image7' => $fullImagePaths[7],
            'image8' => $fullImagePaths[8],
            'image9' => $fullImagePaths[9],
            'image10' => $fullImagePaths[10],
            'image11' => $fullImagePaths[11],
        ]);
        return Redirect()->back()->with('success', 'Complex added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complex = Complex::find($id);
        return view('admin.complexes.edit', compact('complex'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:50',
                'image1' => 'image|mimes:jpg,jpeg|max:10000',
                'image2' => 'image|mimes:jpg,jpeg|max:10000',
                'image3' => 'image|mimes:jpg,jpeg|max:10000',
                'image4' => 'image|mimes:jpg,jpeg|max:10000',
                'image5' => 'image|mimes:jpg,jpeg|max:10000',
                'image6' => 'image|mimes:jpg,jpeg|max:10000',
                'image7' => 'image|mimes:jpg,jpeg|max:10000',
                'image8' => 'image|mimes:jpg,jpeg|max:10000',
                'image9' => 'image|mimes:jpg,jpeg|max:10000',
                'image10' => 'image|mimes:jpg,jpeg|max:10000',
                'image11' => 'image|mimes:jpg,jpeg|max:10000',

            ]
        );

        $complex = Complex::find($id);

        $fullImagePaths = [];

        for ($i = 1; $i < 12; $i++) {
            $image = $request->file('image' . $i);
            $imageName = "image" . $i;
            if ($image == null) {
                $fullImagePath = $complex->{$imageName};
            } else {
                $old_image = $complex->{$imageName};
                unlink($old_image);
                $imageNameGen = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
                $fullImagePath = 'images/complexes/' . $imageNameGen;
                $img = Image::make($image);
                $img->resize(1400, 1400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save($fullImagePath);
            }
            $fullImagePaths[$i] = $fullImagePath;
        }
        $complex->update([
            'name' => $request->name,
            'desc1_ru' => $request->desc1_ru,
            'desc1_en' => $request->desc1_en,
            'desc2_ru' => $request->desc2_ru,
            'desc2_en' => $request->desc2_en,
            'desc3_ru' => $request->desc3_ru,
            'desc3_en' => $request->desc3_en,
            'desc4_ru' => $request->desc4_ru,
            'desc4_en' => $request->desc4_en,
            'desc5_ru' => $request->desc5_ru,
            'desc5_en' => $request->desc5_en,
            'desc6_ru' => $request->desc6_ru,
            'desc6_en' => $request->desc6_en,
            'image1' => $fullImagePaths[1],
            'image2' => $fullImagePaths[2],
            'image3' => $fullImagePaths[3],
            'image4' => $fullImagePaths[4],
            'image5' => $fullImagePaths[5],
            'image6' => $fullImagePaths[6],
            'image7' => $fullImagePaths[7],
            'image8' => $fullImagePaths[8],
            'image9' => $fullImagePaths[9],
            'image10' => $fullImagePaths[10],
            'image11' => $fullImagePaths[11],
        ]);
        return Redirect()->back()->with('success', 'Complex updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complex = Complex::find($id);
        for ($i = 1; $i < 12; $i++) {
            $imageName = "image" . $i;
            $old_image = $complex->{$imageName};
            unlink($old_image);
        }
        $complex->delete();

        return Redirect()->back()->with('success', 'Complex deleted successfully');
    }
}
