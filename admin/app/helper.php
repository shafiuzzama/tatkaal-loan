<?php 

use App\Models\Role;
use Pusher\Pusher;
use App\Models\RentalRealUserRedeem;
use App\Models\RentalUserRedeem;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;



function sendSMSToWhatsapp($template_name,$mobile_no,$msg,$image){
	
   $getdata = '{"messaging_product": "whatsapp",
	"to": "91'.$mobile_no.'",
	"type": "template",
	"template": {
		"name": "'.$template_name.'",
		"language": {
			"code": "en_US"
		},
		"components": [
			{
				"type": "body",
				"parameters": [
					
					{
						"type": "text",
						"text": '.$msg.'
					}
				]
			},
		
		]
	}
}';
      $getdata = json_decode($getdata,true);
       
          $headers = array
			(
				'Authorization: Bearer EAAWTST98LsoBO0rcxbPrDwvZAn0Rb8n9ILwU1h38t64MDHMsPDKPUhCyk2bJo7HWU2Wb9iPOHBVsdERvcOTrZBioxsQCZBhKvkopKHOUs5JRf0CG4uE2FPyNIwDo1jGQc8FwJOvIR7m2ZAZBSQuW8GkboEC1xrc7Fmz2iUazLyh6ZBHBUy3d4azFVvnzu3KSMFY8gCh6QbXyCLuXBTb3fNlgQb6rUZD',
				'Content-Type: application/json'
			);
		#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://graph.facebook.com/v17.0/184813874722804/messages' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $getdata ) );
		$result = curl_exec($ch );
		$result=json_decode($result, true);
       // dd($result["error"]['message']);
      
		curl_close( $ch );  
		return $result;


 }

   
/* get whatsapp   end code */ 