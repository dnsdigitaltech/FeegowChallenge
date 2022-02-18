<?php

namespace App\Http\Controllers\Clinical;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Clinical\Scheduling;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;
/* Comment from ClinicalExampleController
 * @author [DAVI BERNARDO]
 * @version 0.1
 * @copyright Clinical Example © 2022 - CORPORATIVO.
 * @package ClinicalExampleController
 * @access private
 * @extends Controller
 */

class ClinicalExampleController extends Controller {
    private $scheduling;

    /*
    * Construtor da classe
    * @access public
    * @subpackage Page
    * @param String $page
    * @return void
    */
    public function __construct(Scheduling $scheduling) {
        $this->scheduling = $scheduling;
    }
    /**
     * get data specialties
     *
     * @return GuzzleHttp\Client
     */
    public function specialties() {
        //get URL_API and TOKEN from constants file
        $URL_API = config("constants.URL_API");
        $TOKEN = config("constants.TOKEN");

        //instantiates GuzzleHttp\Client and returns the information
        $client = new Client();

        $request = $client->request(
            'GET',
            "{$URL_API}/specialties/list",
            ['headers'=> ['x-access-token' => "{$TOKEN}"]]
        );

        $data['content'] = json_decode($request->getBody(),true);
        return view('clinical.scheduling', $data);
    }

    /**
     * get data professional by specialties
     *
     * @return GuzzleHttp\Client
     */
    public function professional($specialty_id) {
        //get URL_API and TOKEN from constants file
        $URL_API = config("constants.URL_API");
        $TOKEN = config("constants.TOKEN");

        //instantiates GuzzleHttp\Client and returns the information
        $client = new Client();

        $request = $client->request(
            'GET',
            "{$URL_API}/professional/list",
            ['headers'=> ['x-access-token' => "{$TOKEN}"]]
        );

        $professionals = json_decode($request->getBody(),true);

        $i = 1;
        foreach($professionals['content'] as $professional){
            $photo = $professional['foto'];
            $photo = str_replace("&renderMode=download", "", $photo);
            $professional['foto'] = $photo;
            foreach($professional['especialidades'] as $specialty){

                if($specialty['especialidade_id'] == $specialty_id){
                    $specialty_type = $specialty['nome_especialidade'];
                    $total = $i++;
                    $professionalsBySpecialties[] = $professional;
                }
            }
        }

        return response()->json([
            'specialty_id' => $specialty_id,
            'specialty_type' => $specialty_type,
            'total' => $total,
            'professionals' => $professionalsBySpecialties
        ]);
    }

     /**
     * post data add scheduling
     *
     * @return true or false
     */
    public function addScheduling(Request $request) {

        //force validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'met' => 'required',
            'birth' => 'required',
            'cpf' => 'required',
        ],
        [
            'name.required' => "Campo <u>Nome completo</u> é obrigatório",
            'met.required' => "Campo <u>Como Conheceu</u> é obrigatório",
            'birth.required' => "Campo <u>Nascimento</u> é obrigatório",
            'cpf.required' => "Campo <u>CPF</u> é obrigatório",
        ]
        );

        if($validator->fails())
        {
            return response()->json([
            'status'=>400,
            'errors'=>$validator->messages()
            ]);
        }
        else
        {
            //muda o fomato da data nascimento
            $date = implode("-",array_reverse(explode("/",$request->birth)));
            $birth = date_create($date);
            $birth = date_format($birth,'Y-m-d');
            $request['birth'] = $birth;
            $data = $request->all();
            $this->scheduling->newScheduling($data);

            return response()->json([
                    'status'=>200,
                    'message'=>'Agendamento criado com sucesso!'
            ]);
        }



    }

}
