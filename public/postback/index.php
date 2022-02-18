<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');

//$data = $_REQUEST;
$data = (array)json_decode(file_get_contents('php://input'));
//$myfile = fopen(date('Y-m-d H:i:s'). ".txt", "w");

//Não finalizei, então acesse o link abaixo e ele buscará o útimo status na API
print_r('Acesse o link: https://inscricoes.cbigs.com.br/status');
//var_dump($data);exit;

/*$transaction_guid =  $data['items'][0]->transaction_guid;
$date_pay_complet = date_create($data['items'][0]->change_date);
$date_pay = date_format($date_pay_complet,"Y-m-d");
$date_pay_comp = date_format($date_pay_complet,"Y-m-d H:i:s");
$key = $data['items'][0]->key;
$statusName= $data['items'][0]->name;
$guid = $transaction_guid;*/

/*$guid = '20220111164846-784A6FB6-CDBF-789A-9703-FD01A5A7A5EE';
//$guid = '20220110114310-20993486-9ABF-289A-B9FD-8CEC0CF2D142';

try {
    //dev
    /*$host = 'localhost';
    $dbname = 'projeto_SITE';
    $user = 'root';
    $username = 'sba3223!@';*/

    //homolog
    /*$host = 'node54502-bdg-clone080920.jelastic.saveincloud.net';
    $dbname = 'novo_cba';
    $user = 'root';
    $username = 'bntYPeXmJO';
    
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // fwrite($myfile, $guid);
    ////verifica a transação
    $transaction = $conn->query('SELECT * FROM transactions WHERE guid = ' . $conn->quote($guid));

    
    var_dump($transaction);
    



    foreach($transaction as $row) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    //fwrite($myfile, $e->getMessage()    );
}*/

/*return Http::withHeaders([
    'token' => env('API_TOKEN'),
])->post(env('URL_API') . 'third-party/v1/send-mail', [
    'subject'   => $subject,
    'email'     => $email,
    'message'   => $message,
])->json();*/





//$data = $_REQUEST;
/*$data = (array)json_decode(file_get_contents('php://input'));
$myfile = fopen(date('Y-m-d H:i:s'). ".txt", "w");*/


//var_dump($data);exit;

/*$transaction_guid =  $data['items'][0]->transaction_guid;
$date_pay_complet = date_create($data['items'][0]->change_date);
$date_pay = date_format($date_pay_complet,"Y-m-d");
$date_pay_comp = date_format($date_pay_complet,"Y-m-d H:i:s");
$key = $data['items'][0]->key;
$statusName= $data['items'][0]->name;
$guid = $transaction_guid;*/

//fwrite($myfile, 33232231321);

//fwrite($myfile, $data);

//fclose($myfile);

