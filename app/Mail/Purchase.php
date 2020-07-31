<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Purchase extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $zip_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $zip_name)
    {
        $this->name = $name;
        $this->zip_name = $zip_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('forms.emails.purchase', [
            'name'  => $this->name,
            'link'  => url('storage/' . $this->zip_name),
        ]);
    }
}
