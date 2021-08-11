<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFileRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function store(UploadFileRequest $request, $model, $id)
    {
        $upload = app('App\\Models\\'.$model)::find($id);

        $upload->addMedia($request->file)->toMediaCollection('default', 's3');

        return redirect()->route(strtolower($model).'s.edit', $id);
    }

    public function download(Media $mediaItem)
    {
        return $mediaItem;
    }

    public function destroy($model, $id, Media $mediaItem)
    {
        $mediaItem->delete();

        return redirect()->route(strtolower($model).'s.edit', $id);
    }
}
