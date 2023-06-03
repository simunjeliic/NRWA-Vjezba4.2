<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $ID
 * @property string $Name
 * @property string $CountryCode
 * @property string $District
 * @property int $Population
 * 
 * @property Country $country
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'city';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Population' => 'int'
	];

	protected $fillable = [
		'Name',
		'CountryCode',
		'District',
		'Population'
	];

	public function country()
	{
		return $this->belongsTo(Country::class, 'CountryCode');
	}
}
