<?php
namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Laravel\MyModel;

class DriverPaymentController extends controller
{
	private $_MyModel;

	function __construct(){
		$this->setMyModel();
	}

	public function setMyModel()
	{
      $local = new MyModel();
      $this->_MyModel = $local;
    }

	public function driverDetails(Request $request)
	{	
	   $driver=[];
	   $driverDetails=$this->_MyModel->getDriverOrders();
	   return response()->json($driverDetails);



	  /* foreach ($driverDetails as $key => $value) {
	   	# code...
	   	$driver[$value->payment_status] = $value->payment_status;

	   echo"<pre>";print_r($driver[$value->payment_status]);exit;
	   }
	   if($value->payment_status = 2){
	   	echo"here";exit;
	   }
	   else{
	   	echo"in else loop";exit;
	   }*/
	}
}
?>
