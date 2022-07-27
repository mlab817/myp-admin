<?php

namespace Database\Seeders;

use App\Models\ImplementingUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImplementingUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'Rice Program' => 'National Rice Program',
            'Corn Program' => 'National Corn Program',
            'Livestock Program' => 'National Livestock Program',
            'HVCDP' => 'National High Value Crops Development Program',
            'NOAP' => 'National Organic Agriculture Program',
            'Halal' => 'National Halal Food Industry Development Program',
            'NUPAP' => 'National Urban and Peri-Urban Agriculture Program',
            'ATI' => 'Agricultural Training Institute',
            'BAFE' => 'Bureau of Agricultural and Fisheries Engineering',
            'BAFS' => 'Bureau of Agriculture and Fisheries Standards',
            'BAI' => 'Bureau of Animal Industry',
            'BAR' => 'Bureau of Agricultural Research',
            'BSWM' => 'Bureau of Soils and Water Management',
            'FDC' => 'Food Development Center',
            'PRRI' => 'Philippine Rubber Research Institute',
            'ACPC' => 'Agricultural Credit Policy Council',
            'BFAR' => 'Bureau of Fisheries and Aquatic Resources',
            'FPA' => 'Fertilizer and Pesticide Authority',
            'NFRDI' => 'National Fisheries and Development Institute',
            'NMIS' => 'National Meat Inspection Service',
            'PCC' => 'Philippine Carabao Center',
            'PhilMech' => 'Philippine Center for Post-harvest Development and Mechanization',
            'PCAF' => 'Philippine Council for Agriculture and Fisheries',
            'PhilFIDA' => 'Philippine Fiber Industry Development Authority',
            'NDA' => 'National Dairy Authority',
            'NFA' => 'National Food Authority',
            'NIA' => 'National Irrigation Administration',
            'NTA' => 'National Tobacco Administration',
            'PFDA' => 'Philippine Fisheries Development Authority',
            'PCA' => 'Philippine Coconut Authority',
            'PhilRice' => 'Philippine Rice Research Institute',
            'SRA' => 'Sugar Regulatory Administration',
            'RFO CAR' => 'RFO CAR',
            'RFO I' => 'RFO I',
            'RFO II' => 'RFO II',
            'RFO III' => 'RFO III',
            'RFO IV-A' => 'RFO IV-A',
            'RFO IV-B' => 'RFO IV-B',
            'RFO V' => 'RFO V',
            'RFO VI' => 'RFO VI',
            'RFO VII' => 'RFO VII',
            'RFO VIII' => 'RFO VIII',
            'RFO IX' => 'RFO IX',
            'RFO X' => 'RFO X',
            'RFO XI' => 'RFO XI',
            'RFO XII' => 'RFO XII',
            'RFO XIII' => 'RFO XIII',
            'AMAS' => 'Agribusiness and Marketing Assistance Service',
            'SAAD' => 'Special Area for Agricultural Development',
            '4Ks' => 'Kabuhayan at Kaunlaran ng Kababayang Katutubo Program',
            'RCEF' => 'Rice Competitiveness Enhancement Program',
            'RSBSA' => 'Registry System for Basic Sectors in Agriculture',
            'BP2' => 'Balik Probinsya, Bagong Pag-asa Program',
            'AIDPro' => 'Agri-Fisheries Industrialization Development Program',
            'PRDP' => 'Philippine Rural Development Project',
            'CRAO' => 'Climate Resillient Agriculture Office',
        ];

        foreach ($items as $key => $item) {
            ImplementingUnit::create([
                'name' => $item,
                'label' => $key,
            ]);
        }
    }
}
