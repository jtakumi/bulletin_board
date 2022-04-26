<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppMail;

class NoticeController extends Controller
{
   public function test()
   {
      $data=[];
      Mail::send('email.test',$data,function($message)
      {
         $message->to('testlaravel715@gmail.com','test')
                  ->subject('this is a test mail.');
      });
   }
   public function index()
   {
       return view('notices.index');
   }
   public function mailMake()
   {
       return view('notices.mails.make');
   }
   public function mailConfirm(MailRequest $mailRequest)
   {
       $post=$mailRequest->all();
       
       $viewData=[
           'postData' => $postData
           ];
           
        return view('notices.mails.confirm',['viewData'=> $viewData]);
   }
   public function mailSend(Request $request)
   {
       $postData=$request->all();
       Mail::to('testlaravel715@gmail.com')->send(new AppMail($postData));
       return redirect(route('notice.index'));
   }
}

