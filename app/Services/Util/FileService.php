<?php

namespace App\Services\Util;

use Storage;
use Illuminate\Http\File;
use Response;
use Schema;

class FileService
{
    private $disk;

    public function __construct($disk = 'public_uploads')
    {
        $this->disk = Storage::disk($disk);
    }

    public function saveFiles($request, $input_files, $main_folder, $model)
    {
        $folder_id = $model->getFolderId();

        foreach ($input_files as $input_file) {
            if ($request->hasFile($input_file)) {
                //Delete old file
                $old_file_path = $main_folder . '/' . $folder_id . '/'. $model[$input_file];
                $this->deleteFile($old_file_path);

                //Add new file
                $file = $request->file($input_file);
                $new_file_path = $main_folder . '/' . $folder_id . '/';
                $response = $this->saveFileLaravelPutFile($file, $new_file_path);
                if ($response['state']) {
                    $model[$input_file] = $response['name'];

                    //Update mime field if exist
                    if (Schema::hasColumn($model->getTable(), $input_file . '_mime')) {
                        $model[$input_file . '_mime'] = $response['mime'];
                    }
                }
            }
        }
        $model->update();
    }


    public function deleteFile($file_path)
    {
        if ($this->disk->exists($file_path)) {
            return $this->disk->delete($file_path);
        }
        return 0;
    }

    public function deleteDirectory($path)
    {
        if ($this->disk->exists($path)) {
            return $this->disk->deleteDirectory($path);
        }
        return 0;
    }

    public function saveFileLaravelPutFile($file, $path)
    {
        $file_name = $file->getClientOriginalName();
        $mime = $file->getMimeType();
        $filePath = $path . $file_name;
        $state = false;

        $result = $this->disk->putFileAs($path, new File($file), $file_name);

        if ($result) {
            $state = true;
        }
        return ['state' => $state, 'name' => $file_name, 'mime' => $mime];
    }


    public function getFile($file_path, $file_name, $mime, $disposition = 'inline')
    {
        //attachment
        $headers = [
                    'Content-Type'        => $mime,
                    'Content-Disposition' => $disposition . '; filename="' . $file_name . '"',
        ];


        //return $file_path;
        return Response::make($this->disk->get($file_path . $file_name), 200, $headers);
    }
}
