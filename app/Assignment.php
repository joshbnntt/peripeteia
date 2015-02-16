<?php namespace Peri;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'outline_id', 'due_date', 'description', 'type'
   ];
    
   /**
	* The database table used by the model.
	*
	* @var string
	*/
   protected $table =  "assignments";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'outline_id'  => 'required|numeric',
      'due_date'    => 'date',
      'description' => 'required'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function getOutline(){
     return $this->belongsTo('Outline');
   }
}