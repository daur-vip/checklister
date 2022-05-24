<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use Image;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isSmi = 1;
        $manyNews = Media::orderBy('created_at', 'ASC')->get();
        return view('admin.news.index', compact(['manyNews', 'isSmi']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isSmi = 1;
        return view('admin.news.create', compact('isSmi'));
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
                'title_ru' => 'required',
                'title_en' => 'required',
                'smi_ru' => 'required',
                'smi_en' => 'required',
                'image1' => 'required|image|mimes:jpg,jpeg|max:20000',
                'image2' => 'required|image|mimes:jpg,jpeg|max:20000',
                'image3' => 'image|mimes:jpg,jpeg|max:20000',
                'image4' => 'image|mimes:jpg,jpeg|max:20000',
                'image5' => 'image|mimes:jpg,jpeg|max:20000',
                'image6' => 'image|mimes:jpg,jpeg|max:20000',
            ]
        );


        $fullImagePaths = [];
        for ($i = 1; $i < 7; $i++) {
            $image = $request->file('image' . $i);
            if ($image != null) {
                $imageNameGen = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
                $fullImagePath = 'images/media/' . $imageNameGen;
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
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_ru,
            'smi_ru' => $request->smi_ru,
            'smi_en' => $request->smi_en,
            'seo_desc_ru' => $request->seo_desc_ru,
            'seo_keywords_ru' => $request->seo_keywords_ru,
            'seo_desc_en' => $request->seo_desc_en,
            'seo_keywords_en' => $request->seo_keywords_en,
            'desc1_ru' => $request->desc1_ru,
            'desc1_en' => $request->desc1_en,
            'desc2_ru' => $request->desc2_ru,
            'desc2_en' => $request->desc2_en,
            'image1' => $fullImagePaths[1],
            'image1_desc_ru' => $request->image1_desc_ru,
            'image1_desc_en' => $request->image1_desc_en,
            'image2' => $fullImagePaths[2],
            'image2_desc_ru' => $request->image2_desc_ru,
            'image2_desc_en' => $request->image2_desc_en,
            'image3' => $fullImagePaths[3],
            'image4' => $fullImagePaths[4],
            'image5' => $fullImagePaths[5],
            'image6' => $fullImagePaths[6],
        ];

        Media::create($data);
        return Redirect()->back()->with('success', 'Media added successfully');
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
        $news = Media::find($id);
        $isSmi = 1;
        return view('admin.news.edit', compact(['news', 'isSmi']));
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
                'title_ru' => 'required',
                'title_en' => 'required',
                'smi_ru' => 'required',
                'smi_en' => 'required',
                'image1' => 'image|mimes:jpg,jpeg|max:20000',
                'image2' => 'image|mimes:jpg,jpeg|max:20000',
                'image3' => 'image|mimes:jpg,jpeg|max:20000',
                'image4' => 'image|mimes:jpg,jpeg|max:20000',
                'image5' => 'image|mimes:jpg,jpeg|max:20000',
                'image6' => 'image|mimes:jpg,jpeg|max:20000',
            ]
        );

        $media = Media::find($id);

        $fullImagePaths = [];
        for ($i = 1; $i < 7; $i++) {
            $image = $request->file('image' . $i);
            $imageName = "image" . $i;
            if ($image != null) {
                $old_image = $media->{$imageName};
                if ($media->{$imageName} != null) unlink($old_image);
                $imageNameGen = hexdec(uniqid()) . '.' . strtolower($image->getClientOriginalExtension());
                $fullImagePath = 'images/media/' . $imageNameGen;
                $img = Image::make($image);
                $img->resize(1200, 1200, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save($fullImagePath);
            } else {
                $fullImagePath = $media->{$imageName};
            }
            $fullImagePaths[$i] = $fullImagePath;
        }

        $data = [
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_ru,
            'smi_ru' => $request->smi_ru,
            'smi_en' => $request->smi_en,
            'seo_desc_ru' => $request->seo_desc_ru,
            'seo_keywords_ru' => $request->seo_keywords_ru,
            'seo_desc_en' => $request->seo_desc_en,
            'seo_keywords_en' => $request->seo_keywords_en,
            'desc1_ru' => $request->desc1_ru,
            'desc1_en' => $request->desc1_en,
            'desc2_ru' => $request->desc2_ru,
            'desc2_en' => $request->desc2_en,
            'image1' => $fullImagePaths[1],
            'image1_desc_ru' => $request->image1_desc_ru,
            'image1_desc_en' => $request->image1_desc_en,
            'image2' => $fullImagePaths[2],
            'image2_desc_ru' => $request->image2_desc_ru,
            'image2_desc_en' => $request->image2_desc_en,
            'image3' => $fullImagePaths[3],
            'image4' => $fullImagePaths[4],
            'image5' => $fullImagePaths[5],
            'image6' => $fullImagePaths[6],
        ];

        $media->update($data);
        return Redirect()->back()->with('success', 'Media updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::find($id);
        for ($i = 1; $i < 7; $i++) {
            $imageName = "image" . $i;
            $old_image = $media->{$imageName};
            if ($old_image) {
                unlink($old_image);
            }
        }
        $media->delete();

        return Redirect()->back()->with('success', 'Media deleted successfully');
    }
}
