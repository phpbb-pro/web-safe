<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormsPurchase extends Mailable
{
    use Queueable, SerializesModels;

    protected $license;
    protected $name;
    protected $zip_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($license, $name, $zip_name)
    {
        $this->license = $license;
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
        return $this->subject('phpBB | Forms - ' . ucfirst($this->license) . ' license')
                    ->text('forms.emails.purchase')
                    ->with([
                        'name'  => $this->name,
                        'link'  => url('storage/' . $this->zip_name),
                    ]);
    }
}
