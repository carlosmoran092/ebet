<?php 
namespace App\Models\Api;

use Validator;
use Illuminate\Database\Eloquent\Model;

class Services extends Model {

	protected $table='services';

	private $rules = array(
		'title'     => 'Required|Min:3',
		'rates'     => 'Required'               
		);

	public function validService($data) {

		$v = Validator::make($data, $this->rules);	
		if ($v->fails())
		{
			$this->errors = $v->errors();
			return false;
		}
		return true;	
	}

	public function errors()
	{
		return $this->errors;
	}

}
