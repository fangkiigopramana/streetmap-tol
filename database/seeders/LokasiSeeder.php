<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasiData = [
            // KM 189 - 190
            ['nama' => 'KM 189 - 190 A', 'latitude' => -6.689557132864854, 'longitude' => 108.43486571225687],
            ['nama' => 'KM 189 - 190 B', 'latitude' => -6.68951557983105, 'longitude' => 108.43340299647177],
            ['nama' => 'KM 189 - 190 C', 'latitude' => -6.689785457805846, 'longitude' => 108.43524727163006],
            ['nama' => 'KM 189 - 190 D', 'latitude' => -6.689733714455791, 'longitude' => 108.43888494536283],
            ['nama' => 'KM 189 - 190 E', 'latitude' => -6.689910551611283, 'longitude' => 108.43205441798966],

            // KM 190 - 191
            ['nama' => 'KM 190 - 191 A', 'latitude' => -6.689734907909126, 'longitude' => 108.43885081457677],
            ['nama' => 'KM 190 - 191 B', 'latitude' => -6.689956745144899, 'longitude' => 108.44474738844374],

            // KM 191 - 192
            ['nama' => 'KM 191 - 192 A', 'latitude' => -6.690017433676063, 'longitude' => 108.44746622248093],
            ['nama' => 'KM 191 - 192 B', 'latitude' => -6.690950980534571, 'longitude' => 108.45344448590616],
            ['nama' => 'KM 191 - 192 C', 'latitude' => -6.691148353430692, 'longitude' => 108.4546329914965],

            // KM 192 - 193
            ['nama' => 'KM 192 - 193 A', 'latitude' => -6.6923820802614795, 'longitude' => 108.46078394108524],
            ['nama' => 'KM 192 - 193 B', 'latitude' => -6.6931795712419255, 'longitude' => 108.46451054148015],
            ['nama' => 'KM 192 - 193 C', 'latitude' => -6.693977135756423, 'longitude' => 108.4678145677937],

            // KM 193 - 194
            ['nama' => 'KM 193 - 194 A', 'latitude' => -6.694792101216977, 'longitude' => 108.47184116706687],
            ['nama' => 'KM 193 - 194 B', 'latitude' => -6.6953498019246664, 'longitude' => 108.47431418396967],

            // KM 194 - 195
            ['nama' => 'KM 194 - 195 A', 'latitude' => -6.700237830819884, 'longitude' => 108.48489627930164],

            // KM 195 - 196
            ['nama' => 'KM 195 - 196 A', 'latitude' => -6.708802000358005, 'longitude' => 108.496528819418],

            // KM 196 - 197
            ['nama' => 'KM 196 - 197 A', 'latitude' => -6.713441906031727, 'longitude' => 108.50266541087267],

            // KM 197 - 198
            ['nama' => 'KM 197 - 198 A', 'latitude' => -6.713341869635217, 'longitude' => 108.50246234275525],
            ['nama' => 'KM 197 - 198 B', 'latitude' => -6.720212825603181, 'longitude' => 108.50840054972123],

            // KM 198 - 199
            ['nama' => 'KM 198 - 199 A', 'latitude' => -6.724883281062351, 'longitude' => 108.5107352338766],

            // KM 199 - 200
            ['nama' => 'KM 199 - 200 A', 'latitude' => -6.731096172302171, 'longitude' => 108.51342141521728],

            // KM 200 - 201
            ['nama' => 'KM 200 - 201 A', 'latitude' => -6.7312069296034105, 'longitude' => 108.513241511383],
            ['nama' => 'KM 200 - 201 B', 'latitude' => -6.7406546089556265, 'longitude' => 108.51717474985315],

            // KM 201 - 202
            ['nama' => 'KM 201 - 202 A', 'latitude' => -6.7436113042574375, 'longitude' => 108.51841633699362],
            ['nama' => 'KM 201 - 202 B', 'latitude' => -6.747060137474673, 'longitude' => 108.51972495521663],
            ['nama' => 'KM 201 - 202 C', 'latitude' => -6.738782086820695, 'longitude' => 108.51618273149553],
            ['nama' => 'KM 201 - 202 D', 'latitude' => -6.749904297431747, 'longitude' => 108.52064902569057],

            // KM 202 - 203
            ['nama' => 'KM 202 - 203 A', 'latitude' => -6.741357813134891, 'longitude' => 108.5174391704721],

            // KM 203 - 204
            ['nama' => 'KM 203 - 204 A', 'latitude' => -6.767791311237468, 'longitude' => 108.53314152608525],

            // KM 204 - 205 (kosong)

            // KM 205 - 206
            ['nama' => 'KM 205 - 206 A', 'latitude' => -6.774968425627821, 'longitude' => 108.55100295723688],

            // KM 206 - 207 (kosong)

            // KM 207 - 208
            ['nama' => 'KM 207 - 208 A', 'latitude' => -6.777844888440833, 'longitude' => 108.5686273542125],

            // KM 208 - 209 (kosong)

            // KM 209 - 210
            ['nama' => 'KM 209 - 210 A', 'latitude' => -6.786403926380857, 'longitude' => 108.58472669097173],

            // KM 210 - 211
            ['nama' => 'KM 210 - 211 A', 'latitude' => -6.783754500347063, 'longitude' => 108.5804634545952],

            // KM 211 - 212
            ['nama' => 'KM 211 - 212 A', 'latitude' => -6.792598926371135, 'longitude' => 108.59910301576954],

            // KM 212 - 213
            ['nama' => 'KM 212 - 213 A', 'latitude' => -6.794657541013511, 'longitude' => 108.60403798728728],

            // KM 213 - 214
            ['nama' => 'KM 213 - 214 A', 'latitude' => -6.797510280839771, 'longitude' => 108.61235598255455],

            // KM 214 - 215
            ['nama' => 'KM 214 - 215 A', 'latitude' => -6.798919245117044, 'longitude' => 108.61567709390151],
            ['nama' => 'KM 214 - 215 B', 'latitude' => -6.798626244566054, 'longitude' => 108.61461981896986],
            ['nama' => 'KM 214 - 215 C', 'latitude' => -6.79914771503297, 'longitude' => 108.61941966551805],
            ['nama' => 'KM 214 - 215 D', 'latitude' => -6.799347512628024, 'longitude' => 108.62193546873075],
        ];

        foreach ($lokasiData as $data) {
            Lokasi::create($data);
        }
    }
}
