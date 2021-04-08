<?php

namespace App\Http\Controllers;

use App\Mail\TestEmailMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class TestEmailController extends Controller
{
    //Test Email Send

    public function testemail()
    {

        $email_data = [

                'name'      => 'Shohanur reza',
                'email'     => 'shuvo@gmail.com',
                'cell'      => '01714461547',

        ];



        Mail::to('cushytools20@gmail.com')->send(new TestEmailMail($email_data));
    }


}
