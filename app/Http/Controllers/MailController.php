<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"GS1 Uganda");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('bettinanaaki@gmail.com', 'Welcome to GS1 Uganda')->subject
            ('Thanks for joining GS1 Uganda');
         $message->from('kigandaivan32@gmail.com','GS1 Uganda');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"GS1 Uganda");
      Mail::send('mail', $data, function($message) {
         $message->to('bettinanaaki@gmail.com', 'Welcome to GS1 Uganda')->subject
            ('Thanks for joining GS1 Uganda');
         $message->from('kigandaivan32@gmail.com','GS1 Uganda');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   // public function attachment_email() {
   //    $data = array('name'=>"Virat Gandhi");
   //    Mail::send('mail', $data, function($message) {
   //       $message->to('abc@gmail.com', 'Tutorials Point')->subject
   //          ('Laravel Testing Mail with Attachment');
   //       $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
   //       $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
   //       $message->from('xyz@gmail.com','Virat Gandhi');
   //    });
   //    echo "Email Sent with attachment. Check your inbox.";
   // }
}