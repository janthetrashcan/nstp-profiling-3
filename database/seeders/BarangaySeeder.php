<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barangay;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangays = [
            [ 'name' => 'Arena Blanco' ],
            [ 'name' => 'Ayala' ],
            [ 'name' => 'Baliwasan' ],
            [ 'name' => 'Baluno' ],
            [ 'name' => 'Boalan' ],
            [ 'name' => 'Bolong' ],
            [ 'name' => 'Buenavista' ],
            [ 'name' => 'Bunguiao' ],
            [ 'name' => 'Busay (Sacol Island)' ],
            [ 'name' => 'Cabaluay' ],
            [ 'name' => 'Cabatangan' ],
            [ 'name' => 'Cacao' ],
            [ 'name' => 'Calabasa' ],
            [ 'name' => 'Calarian' ],
            [ 'name' => 'Camino Nuevo' ],
            [ 'name' => 'Campo Islam' ],
            [ 'name' => 'Canelar' ],
            [ 'name' => 'Capisan' ],
            [ 'name' => 'Cawit' ],
            [ 'name' => 'Culianan' ],
            [ 'name' => 'Curuan' ],
            [ 'name' => 'Dita' ],
            [ 'name' => 'Divisoria' ],
            [ 'name' => 'Dulian (Upper Bunguiao)' ],
            [ 'name' => 'Dulian (Upper Pasonanca)' ],
            [ 'name' => 'Guisao' ],
            [ 'name' => 'Guiwan' ],
            [ 'name' => 'Kasanyangan' ],
            [ 'name' => 'La Paz' ],
            [ 'name' => 'Labuan' ],
            [ 'name' => 'Lamisahan' ],
            [ 'name' => 'Landang Gua' ],
            [ 'name' => 'Landang Laum' ],
            [ 'name' => 'Lanzones' ],
            [ 'name' => 'Lapakan' ],
            [ 'name' => 'Latuan (Curuan)' ],
            [ 'name' => 'Licomo' ],
            [ 'name' => 'Limaong' ],
            [ 'name' => 'Limpapa' ],
            [ 'name' => 'Lubigan' ],
            [ 'name' => 'Lumayang' ],
            [ 'name' => 'Lumbangan' ],
            [ 'name' => 'Lunzuran' ],
            [ 'name' => 'Maasin' ],
            [ 'name' => 'Malagutay' ],
            [ 'name' => 'Mampang' ],
            [ 'name' => 'Manalipa' ],
            [ 'name' => 'Mangusu' ],
            [ 'name' => 'Manicahan' ],
            [ 'name' => 'Mariki' ],
            [ 'name' => 'Mercedes' ],
            [ 'name' => 'Muti' ],
            [ 'name' => 'Pamucutan' ],
            [ 'name' => 'Pangapuyan' ],
            [ 'name' => 'Panubigan' ],
            [ 'name' => 'Pasilmanta (Sacol Island)' ],
            [ 'name' => 'Pasobolong' ],
            [ 'name' => 'Pasonanca' ],
            [ 'name' => 'Patalon' ],
            [ 'name' => 'Putik' ],
            [ 'name' => 'Quiniput' ],
            [ 'name' => 'Recodo' ],
            [ 'name' => 'Rio Hondo' ],
            [ 'name' => 'Salaan' ],
            [ 'name' => 'San Jose Cawa-Cawa' ],
            [ 'name' => 'San Jose Gusu' ],
            [ 'name' => 'San Ramon' ],
            [ 'name' => 'San Roque' ],
            [ 'name' => 'Sangali' ],
            [ 'name' => 'Santa Barbara' ],
            [ 'name' => 'Santa Catalina' ],
            [ 'name' => 'Santa Maria' ],
            [ 'name' => 'Santo Niño' ],
            [ 'name' => 'Sibulao (Caruan)' ],
            [ 'name' => 'Sinubung' ],
            [ 'name' => 'Sinunoc' ],
            [ 'name' => 'Tagasilay' ],
            [ 'name' => 'Taguiti' ],
            [ 'name' => 'Talabaan' ],
            [ 'name' => 'Talisayan' ],
            [ 'name' => 'Talon-Talon' ],
            [ 'name' => 'Taluksangay' ],
            [ 'name' => 'Tetuan' ],
            [ 'name' => 'Tictapul' ],
            [ 'name' => 'Tigbalabag' ],
            [ 'name' => 'Tigtabon' ],
            [ 'name' => 'Tolosa' ],
            [ 'name' => 'Tugbungan' ],
            [ 'name' => 'Tulungatung' ],
            [ 'name' => 'Tumaga' ],
            [ 'name' => 'Tumalutab' ],
            [ 'name' => 'Tumitus' ],
            [ 'name' => 'Victoria' ],
            [ 'name' => 'Vitali' ],
            [ 'name' => 'Zambowood' ],
            [ 'name' => 'Zone I (Poblacion)' ],
            [ 'name' => 'Zone II (Poblacion)' ],
            [ 'name' => 'Zone III (Poblacion)' ],
            [ 'name' => 'Zone IV (Poblacion)' ]
        ];

        foreach ($barangays as $barangay) {
            Barangay::create($barangay);
        }
    }
}
