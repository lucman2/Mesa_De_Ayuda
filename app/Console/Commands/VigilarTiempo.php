<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Solicitud;
use App\Mail\SendMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class VigilarTiempo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vigilartiempo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para verificar tiempo de las solicitudes'; //Modificado

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        
        
        $solicitudes = Solicitud::all();

            $ahora = Carbon::now();
            $mail = new SendMail(" ", "lrodriguezetallereps@gmail.com");

            foreach($solicitudes as $solicitud){
                $diff = $ahora->diffInDays($solicitud->created_at);
                if($diff > 3){
                Mail::to('lrodrigueze@unicartagena.edu.co')->send($mail);

                }
            }

        //var_
        
        dump($ahora->diffInMinutes($solicitud->created_at));
       
    }
}
