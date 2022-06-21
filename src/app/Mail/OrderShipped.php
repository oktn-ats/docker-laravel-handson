<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $order; 

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        // return $this->from('oktn.ats@gmail.com', 'Example')
                    // ->view('emails.orders.shipped');

        return $this->view('emails.orders.shipped')
        ->with([
            'orderName' => $this->order->name,
            'orderPrice' => $this->order->price,
        ]);
    }
}
