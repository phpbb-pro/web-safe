<?php

namespace App\Packers;

use Illuminate\Support\Facades\Storage;

class FormsPacker extends Packer {
    protected $name = 'forms';

    public function additional_tasks($license, $name, $timestamp)
    {
        if ($license == 'basic') {
            Storage::delete([
                "tmp/$timestamp/senky/forms/config/controls_extended.yml",
                "tmp/$timestamp/senky/forms/controls/type/captcha.php",
                "tmp/$timestamp/senky/forms/controls/type/checkbox.php",
                "tmp/$timestamp/senky/forms/controls/type/radio.php",
                "tmp/$timestamp/senky/forms/extended.php",
            ]);
        }
    }
}
