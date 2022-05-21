<?php

namespace App\Http\Controllers\Admin;

use App\Models\Complex;
use App\Http\Controllers\Controller;
use App\Models\Flat;
use Illuminate\Http\Request;
use Image;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flats = Flat::orderBy('id', 'ASC')->get();
        return view('admin.flats.index', compact('flats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $complexes = Complex::orderBy('id', 'ASC')->get();
        return view('admin.flats.create', compact('complexes'));
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
                'price_euro' => 'required',
                'square' => 'required',
                'flat_ru' => 'required',
                'flat_en' => 'required',
                'image1' => 'required|image|mimes:jpg,jpeg|max:20000',
                'image2' => 'required|image|mimes:jpg,jpeg|max:20000',
                'image3' => 'required|image|mimes:jpg,jpeg|max:20000',
                'image4' => 'image|mimes:jpg,jpeg|max:20000',
                'image5' => 'image|mimes:jpg,jpeg|max:20000',
                'image6' => 'image|mimes:jpg,jpeg|max:20000',
                'image7' => 'image|mimes:jpg,jpeg|max:20000',
                'image8' => 'image|mimes:jpg,jpeg|max:20000',
                'image9' => 'image|mimes:jpg,jpeg|max:20000',
                'image10' => 'image|mimes:jpg,jpeg|max:20000',
            ]
        );

        $fullImagePaths = [];
        for ($i = 1; $i < 11; $i++) {
            $image = $request->file('image' . $i);
            if ($image != null) {
                $imageNameGen = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
                $fullImagePath = 'images/flats/' . $imageNameGen;
                $img = Image::make($image);
                $img->resize(1200, 1200, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save($fullImagePath);
            } else {
                $fullImagePath = null;
            }
            $fullImagePaths[$i] = $fullImagePath;
        }



        $data = [
            'complex_id' => $request->complex,
            'price_euro' => $request->price_euro,
            'price_dollar' => $request->price_dollar,
            'price_tenge' => $request->price_tenge,
            'square' => $request->square,
            'flat_ru' => $request->flat_ru,
            'flat_en' => $request->flat_en,
            // 'desc1_ru' => $request->desc1_ru,
            // 'desc1_en' => $request->desc1_en,
            // 'desc2_ru' => $request->desc2_ru,
            // 'desc2_en' => $request->desc2_en,
            // 'desc3_ru' => $request->desc3_ru,
            // 'desc3_en' => $request->desc3_en,
            // 'desc4_ru' => $request->desc4_ru,
            // 'desc4_en' => $request->desc4_en,
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
        ];


        if ($request->furnished == null) {
            $myNull = 0;
        } else {
            $myNull = 1;
        }
        $data['furnished'] = $myNull;



        if ($request->first == null) {
            $myNull = 0;
        } else {
            $myNull = 1;
        }
        $data['first'] = $myNull;


        Flat::create($data);
        return Redirect()->back()->with('success', 'Flat added successfully');
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
        $flat = Flat::find($id);
        $complexes = Complex::all()->keyBy('id');
        return view('admin.flats.edit', compact(['flat', 'complexes']));
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
                'price_euro' => 'required',
                'square' => 'required',
                'flat_ru' => 'required',
                'flat_en' => 'required',
                'image1' => 'image|mimes:jpg,jpeg|max:20000',
                'image2' => 'image|mimes:jpg,jpeg|max:20000',
                'image3' => 'image|mimes:jpg,jpeg|max:20000',
                'image4' => 'image|mimes:jpg,jpeg|max:20000',
                'image5' => 'image|mimes:jpg,jpeg|max:20000',
                'image6' => 'image|mimes:jpg,jpeg|max:20000',
                'image7' => 'image|mimes:jpg,jpeg|max:20000',
                'image8' => 'image|mimes:jpg,jpeg|max:20000',
                'image9' => 'image|mimes:jpg,jpeg|max:20000',
                'image10' => 'image|mimes:jpg,jpeg|max:20000',
            ]
        );

        $flat = Flat::find($id);

        $fullImagePaths = [];
        for ($i = 1; $i < 11; $i++) {
            $image = $request->file('image' . $i);
            $imageName = "image" . $i;
            if ($image != null) {
                $old_image = $flat->{$imageName};
                unlink($old_image);
                $imageNameGen = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
                $fullImagePath = 'images/flats/' . $imageNameGen;
                $img = Image::make($image);
                $img->resize(1200, 1200, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save($fullImagePath);
            } else {
                $fullImagePath = $flat->{$imageName};
            }
            $fullImagePaths[$i] = $fullImagePath;
        }



        $data = [
            'complex_id' => $request->complex,
            'price_euro' => $request->price_euro,
            'price_dollar' => $request->price_dollar,
            'price_tenge' => $request->price_tenge,
            'square' => $request->square,
            'flat_ru' => $request->flat_ru,
            'flat_en' => $request->flat_en,
            // 'desc1_ru' => $request->desc1_ru,
            // 'desc1_en' => $request->desc1_en,
            // 'desc2_ru' => $request->desc2_ru,
            // 'desc2_en' => $request->desc2_en,
            // 'desc3_ru' => $request->desc3_ru,
            // 'desc3_en' => $request->desc3_en,
            // 'desc4_ru' => $request->desc4_ru,
            // 'desc4_en' => $request->desc4_en,
            // 'area_ru' => $request->area_ru,
            // 'area_en' => $request->area_en,
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
        ];


        if ($request->furnished == null) {
            $myNull = 0;
        } else {
            $myNull = 1;
        }

        $data['furnished'] = $myNull;



        if ($request->first == null) {
            $myNull = 0;
        } else {
            $myNull = 1;
        }
        $data['first'] = $myNull;



        $flat->update($data);
        return Redirect()->back()->with('success', 'Flat updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flat = Flat::find($id);
        for ($i = 1; $i < 11; $i++) {
            $imageName = "image" . $i;
            $old_image = $flat->{$imageName};
            if ($old_image) {
                unlink($old_image);
            }
        }
        $flat->delete();

        return Redirect()->back()->with('success', 'Flat deleted successfully');
    }
}
