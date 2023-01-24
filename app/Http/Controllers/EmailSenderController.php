<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSenderController extends Controller
{
    public function SendMessage(Request $request, EmailSender $emailsender)
    {
        $credentials = \Validator::make($request->all(), [
            'fullname' =>  'required',
            'email' => 'required',
            'object' => 'required',
            'message' => 'required',
        ], [
            'fullname.required' => "Le prénom et nom est requis",
            'email.required' => "L'adresse e-mail est requis",
            'email.email' => "L'adresse e-mail est invalide",
            'object.required' => "L'objet est requis",
            'message.required' => "Le message est requis",
        ]);

        $fullname = $request->fullname;
        $email = $request->email;
        $object = $request->object;
        $message = $request->message;

        if ($credentials->passes()) {
            $mail = $emailsender->create([
                'fullname' => $fullname,
                'email' => $email,
                'email' => $email,
                'object' => $object,
                'message' => $message,
            ]);

            Mail::send(new SendMessage($fullname, $email, $object, $message));

            return response()->json(['success' => true, 'info' => "Message envoyé avec succès. Merci."]);
        }

        return response()->json(['code' => 'CREDENTIALS', 'message' => $credentials->errors()]);
    }
}
