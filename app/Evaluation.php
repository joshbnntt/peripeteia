<?php namespace Peri;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model {

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'outline_id', 'percent', 'name'
   ];
    
   /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table =  "evaluations";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'outline_id' => 'required|numeric',
      'name'       => 'required|alpha',
      'percent'    => 'required|numeric|between:0,100'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function outline(){
      return $this->belongsTo('Outline');
   }
}