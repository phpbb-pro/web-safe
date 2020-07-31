<?php

namespace App\Packers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZanySoft\Zip\Zip;

class Packer {
    public function pack($license, $name)
    {
        $timestamp = microtime(true);

        // copy the ext into the temporary directory
        File::copyDirectory(storage_path("app/exts/{$this->name}"), storage_path("app/tmp/$timestamp/senky/{$this->name}"));

        // perform additional tasks special to ext/license/name
        $this->additional_tasks($license, $name, $timestamp);

        // add licensee name
        foreach (Storage::allFiles("tmp/$timestamp/senky/{$this->name}") as $file) {
            $contents = Storage::get($file);
            $contents = str_replace('{{LICENSEE}}', $name, $contents);
            Storage::put($file, $contents);
        }

        // copy license
        File::copy(public_path("license/{$this->name}/$license-license.txt"), storage_path("app/tmp/$timestamp/$license-license.txt"));

        // copy readme
        File::copy(resource_path("views/{$this->name}/pages/docs.blade.php"), storage_path("app/tmp/$timestamp/README.html"));

        // zip it
        $safe_name = str_replace(' ', '_', $name);
        $zip_name = "{$this->name}_{$timestamp}_{$safe_name}.zip";
        $zip = Zip::create(storage_path("app/public/$zip_name"));
        $zip->add(storage_path("app/tmp/$timestamp"), true);
        $zip->close();

        // clean up
        Storage::deleteDirectory("tmp/$timestamp");

        return $zip_name;
    }
}
