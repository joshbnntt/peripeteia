<?php namespace Peri;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model {

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'outline_id', 'week', 'day', 'lecture', 'description'
   ];
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "summaries";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'outline_id'  => 'required|numeric',
      'description' => 'required',
      'week'        => 'numeric',
      'day'         => 'numeric',
      'lecture'     => 'numeric'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function outline(){
      return $this->belongsTo('Outline');
   }
}