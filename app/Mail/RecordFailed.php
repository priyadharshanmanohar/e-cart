<?php

namespace App\Mail;
use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RecordFailed extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $product_values = Product::all();
        return $this->from('priyadharshanm73@gmail.com')
                ->view('fail')
                ->with([
                    'users'=>$product_values,
                   
                    ]);
    }
}
