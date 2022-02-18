<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    
    /**
     * Create a new message instance.
     *
     * @return void
     * 
     */
    public function __construct($request)
    {
       // dd($request->all());
         $this->dados = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $dados = $this->dados;
//dd($dados->acompanhantes);

        /*foreach ($dados->acompanhantes as $acompanhante){
            dd($acompanhante->id);
        }*/
        //dd($dados->all());
        if(isset($dados->status)){//primeiro status
            //tipo de status conforme o envio de email
            if($dados->status == 'PAGO'){
                $assunto = '3º CBIGS 2022: Pagamento confirmado e inscrição efetivada.';
            }elseif($dados->status == 'REC'){
                $assunto = '3º CBIGS 2022: Pagamento recusado. Inscrição não efetivada.';
            }elseif($dados->status == 'ISENTO' && $dados->valor_total == 0){
                $assunto = '3º CBIGS 2022: Inscrição confirmada e efetivada.';
            }else{
                $assunto = '3º CBIGS 2022: Inscrição recebida. Aguardando confirmação pagamento.';
            }
            return $this->from(env('MAIL_FROM_ADDRESS', 'contato@sbahq.org'))
                    ->replyTo($dados->email_candidato)
                    ->subject($assunto)
                    ->view('site.pages.inscricao.mail.send', compact('dados'));
        }else{//demais status
            if($dados['status'] == 'PAGO'){
                $assunto = '3º CBIGS 2022: Pagamento confirmado e inscrição efetivada.';
            }elseif($dados['status'] == 'REC'){
                $assunto = '3º CBIGS 2022: Pagamento recusado. Inscrição não efetivada.';
            }elseif($dados['status'] == 'ISENTO' && $dados['valor_total'] == 0){
                $assunto = '3º CBIGS 2022: Inscrição confirmada e efetivada.';
            }else{
                $assunto = '3º CBIGS 2022: Inscrição recebida. Aguardando confirmação pagamento.';
            }
            return $this->from(env('MAIL_FROM_ADDRESS', 'contato@sbahq.org'))
                    ->replyTo($dados['email_candidato'])
                    ->subject($assunto)
                    ->view('site.pages.inscricao.mail.sendOtherStatus', compact('dados'));
        }

    }
}
