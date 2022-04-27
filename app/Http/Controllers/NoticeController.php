<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppMail;

class NoticeController extends Controller
{
   public function index()
   {
      #メールテスト
       $data=[];
      Mail::send('email.test',$data,function($message)
      {
         $message->to('testlaravel715@gmail.com','test')
                  ->subject('this is a test mail.');
      });
      #お問い合わせフォームを表示
       return view('notices.index');
   }
   public function mailMake()
   {
      #メール作成画面表示
       return view('notices.mails.make');
   }
   public function mailConfirm(MailRequest $mailRequest)
   {
      #メール本文確認
       $post=$mailRequest->all();
       
       $viewData=[
           'postData' => $postData
           ];
           
        return view('notices.mails.confirm',['viewData'=> $viewData]);
   }
   public function mailSend(Request $request)
   {
      #メール送信
       $postData=$request->all();
       Mail::to('testlaravel715@gmail.com')->send(new AppMail($postData));
       return redirect(route('notice.index'));
   }
}

