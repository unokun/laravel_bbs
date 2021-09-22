<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    //
    public function index() {
        $messages = Message::all();
        return view('message.index', [
            'title' => 'ひとこと掲示板',
            'messages' => $messages,
        ]);
    }
    public function store(MessageRequest $request){
         
        $message = Message::create(
            $request->only([
              'name',
              'body'
            ])
          );

        // // Messageモデルを利用して空のMessageオブジェクトを作成
        // $message = new Message();
 
        // // フォームから送られた値でnameとbodyを設定
        // $message->name = $request->name;
        // $message->body = $request->body;
 
        // // messagesテーブルにINSERT
        // $message->save();

        session()->flash('success', '投稿しました！');
 
        // メッセージ一覧ページにリダイレクト
        return redirect('/messages');
    }
}
