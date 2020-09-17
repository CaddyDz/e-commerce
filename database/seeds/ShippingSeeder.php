<?php

declare(strict_types=1);

use App\Shipping;
use Illuminate\Database\Seeder;

class ShippingSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$wilayas = [
			'Adrar',
			'Chlef',
			'Laghouat',
			'Oum El Bouaghi',
			'Batna',
			'Béjaïa',
			'Biskra',
			'Béchar',
			'Blida',
			'Bouira',
			'Tamanrasset',
			'Tébessa',
			'Tlemcen',
			'Tiaret',
			'Tizi Ouzou',
			'Alger',
			'Djelfa',
			'Jijel',
			'Sétif',
			'Saïda',
			'Skikda',
			'Sidi Bel Abbès',
			'Annaba',
			'Guelma',
			'Constantine',
			'Médéa',
			'Mostaganem',
			'M\'Sila',
			'Mascara',
			'Ouargla',
			'Oran',
			'El Bayadh',
			'Illizi',
			'Bordj Bou Arreridj',
			'Boumerdès',
			'El Tarf',
			'Tindouf',
			'Tissemsilt',
			'El Oued',
			'Khenchela',
			'Souk Ahras',
			'Tipaza',
			'Mila',
			'Aïn Defla',
			'Naâma',
			'Aïn Témouchent',
			'Ghardaïa',
			'Relizane',
		];
		foreach ($wilayas as $wilaya) {
			Shipping::create([
				'state' => $wilaya,
				'price' => 100
			]);
		}
	}
}
