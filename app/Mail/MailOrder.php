<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $order_items;
    public $add;
    public $sum;
    public $noite;

    public function __construct($order_items, $add,$sum,$noite)
    {
        $this->order_items=$order_items;
        $this->add=$add;
        $this->sum=$sum;
        $this->noite=$noite;

    }

    public function build()
    {
        return $this->subject('طلب زبون')->view('email_order');
    }


}
