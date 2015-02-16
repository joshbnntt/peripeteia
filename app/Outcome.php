<?php namespace Peri;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model {

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'outline_id', 'description'
   ];
    
   /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table =  "outcomes";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'outline_id'  => 'required|numeric',
      'description' => 'required',
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function outline(){
      return $this->belongsTo('Outline');
   }
}