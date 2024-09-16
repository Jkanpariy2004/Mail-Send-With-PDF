<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class TestController extends Controller
{
    public function SendMailWithPdf(){
        $data['email']="jainishkanpariya@gmail.com";
        $data['title']="Test Email";
        $data['body']="This Is Test Mail With Pdf.";

        if (view()->exists('mail')) {
            $pdf = PDF::loadview('mail', $data);
        } else {
            dd("View 'mail' does not exist.");
        }

        Mail::send('mail', $data, function($message) use ($data, $pdf) {
            $message->to($data['email'])->subject($data['title'])->attachData($pdf->output(), "test.pdf");
        });

        dd("Email has been sent");
    }
}
