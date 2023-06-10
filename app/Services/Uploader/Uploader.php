<?php

namespace App\Services\Uploader;


use App\Models\File;
use Illuminate\Http\Request;

class Uploader
{
    private $request;
    private $storageManager;
    private $file;

    public function __construct(Request $request, StorageManager $storageManager)
    {
        $this->request = $request;
        $this->storageManager = $storageManager;
        $this->file = $request->file;
    }

    public function upload()
    {
        $this->putFileInStorage();
        return $this->saveFileIntoDatabase();
    }

    private function saveFileIntoDatabase()
    {
        $file = new File([
            'name' => $this->file->getClientOriginalName(),
            'size' => $this->file->getSize(),
            'type' => $this->getType(),
            'is_private' => $this->isPrivate()
        ]);
        $file->save();
    }

    private function putFileInStorage()
    {

        $method = $this->isPrivate() ? 'putFileAsPrivate' : 'putFileAsPublic';
        $this->storageManager->$method($this->file->getClientOriginalName(), $this->file, $this->getType());

    }

    private function isPrivate()
    {
        return $this->request->has('is-private');
    }

    private function getType()
    {
        return [
            'image/jpeg' => 'image',
            'image/png' => 'image',
            'video/mp4' => 'video'
        ][$this->file->getClientMimeType()];
    }

}
