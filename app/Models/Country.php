<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property string $Code
 * @property string $Name
 * @property string $Continent
 * @property string $Region
 * @property float $SurfaceArea
 * @property int|null $IndepYear
 * @property int $Population
 * @property float|null $LifeExpectancy
 * @property float|null $GNP
 * @property float|null $GNPOld
 * @property string $LocalName
 * @property string $GovernmentForm
 * @property string|null $HeadOfState
 * @property int|null $Capital
 * @property string $Code2
 * 
 * @property Collection|City[] $cities
 * @property Collection|Countrylanguage[] $countrylanguages
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'country';
	protected $primaryKey = 'Code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SurfaceArea' => 'float',
		'IndepYear' => 'int',
		'Population' => 'int',
		'LifeExpectancy' => 'float',
		'GNP' => 'float',
		'GNPOld' => 'float',
		'Capital' => 'int'
	];

	protected $fillable = [
		'Code',
		'Name',
		'Continent',
		'Region',
		'SurfaceArea',
		'IndepYear',
		'Population',
		'LifeExpectancy',
		'GNP',
		'GNPOld',
		'LocalName',
		'GovernmentForm',
		'HeadOfState',
		'Capital',
		'Code2'
	];

	public function cities()
	{
		return $this->hasMany(City::class, 'CountryCode');
	}

	public function countrylanguages()
	{
		return $this->hasMany(Countrylanguage::class, 'CountryCode');
	}
}
