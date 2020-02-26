<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\QuestionMail;
use App\Mail\OrderMail;
use App\Mail\WebinarMail;
use App\Mail\MeetingMail;
use App;
use Mail;
//we can use fasade Request

class SendController extends Controller
{
    private $request;
    private $options;
    private $data;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $options = App::make('options');
        $this->options = $options->getByGroup('contacts');

        $this->data = $this->request->all();
        $this->data['referer'] = $this->request->server('HTTP_REFERER');
    }

    public function index()
    {
        $status = true;
        switch($this->request->input('action') )
        {
            case 'question' : 
                $response = $this->question();
                break;
          
            case 'order' : 
                $response = $this->order();
                break;
    
            case 'webinar' : 
                $response = $this->webinar();
                break;
           
            case 'meeting' : 
                $response = $this->meeting();
                break;

            default : $response = "Method not found";
                $status = false;
        }

        if ($this->request->ajax()) {
            return ['status'=>$status, 'message'=> $response];
        } else {
            return $response;
        }
    } 

    public function question()
    {
        $email = new QuestionMail($this->data, $this->options);
        Mail::to($this->options['email_info'], '')->send($email);

        return $this->request->ajax()
            ? trans('mail.questionSent')
            : view('mail.responsepage',['message'=>trans('mail.questionSent')]);
    }

    public function order($data)
    {     
        $email = new OrderMail($this->data, $this->options);
        Mail::to($this->options['email_order'], '')->send($email);

        return $this->request->ajax()
            ? trans('mail.orderSent')
            : view('mail.responsepage', ['message'=>trans('mail.orderSent')]);
    }

    public function webinar($data)
    {
        $email = new WebinarMail($this->data,$this->options);
        Mail::to($this->options['email_webinar'], '')->send($email);

        return $this->request->ajax()
            ? trans('mail.webinarSent')
            : view('mail.responsepage', ['message'=>trans('mail.webinarSent')]);
    }

    public function meeting($data)
    {
        $email = new MeetingMail($this->data, $this->options);
        Mail::to($this->options['email_meeting'], '')->send($email);

        return $this->request->ajax() 
            ? trans('mail.meetingSent')
            : view('mail.responsepage', ['message'=>trans('mail.meetingSent')]);
    }
}
