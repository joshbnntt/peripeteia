<?php namespace Peri;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model {

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'outline_id', 'title', 'description'
   ];
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "requirements";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'outline_id'  => 'required|numeric',
      'title'       => 'required',
      'description' => 'required'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function outline(){
       return $this->belongsTo('Outline');
    }
}