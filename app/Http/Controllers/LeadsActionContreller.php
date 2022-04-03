<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Mail\Leads;
use Illuminate\Support\Facades\Log;
use Mail;

class LeadsActionController extends Controller
{

    public function leads(){
        try {
            $lead = Lead::create(request()->except('_token'));
            dd($lead);

            if($lead){
                Mail::to(env('EMAIL_DESTINATARIO'))->send(new Leads([
                    $lead->nome,
                    $lead->email,
                    $lead->telefone,
                ], $lead->assunto, $lead->msg));
            }else{
                throw new \Exception("Erro no cadastro de informações");
            }
        } catch (\Throwable $th) {
            // Log::error($th);
            return redirect()->back()->with('erro', "Algo deu errado.");
        }

        return redirect()->back()->with('sucesso', 'Enviado com sucesso!');
    }

}
