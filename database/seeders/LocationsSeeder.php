<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Define la precarga de los lugares
        Location::insert([
            ['code' => 'AD', 'name' => 'Andorra', 'image' => 'https://flagcdn.com/w320/ad.png', 'created_at' => now()],
            ['code' => 'AR', 'name' => 'Argentina', 'image' => 'https://flagcdn.com/w320/ar.png', 'created_at' => now()],
            ['code' => 'AT', 'name' => 'Austria', 'image' => 'https://flagcdn.com/w320/at.png', 'created_at' => now()],
            ['code' => 'AW', 'name' => 'Aruba', 'image' => 'https://flagcdn.com/w320/aw.png', 'created_at' => now()],
            ['code' => 'BA', 'name' => 'Bosnia and Herzegovina', 'image' => 'https://flagcdn.com/w320/ba.png', 'created_at' => now()],
            ['code' => 'BB', 'name' => 'Barbados', 'image' => 'https://flagcdn.com/w320/bb.png', 'created_at' => now()],
            ['code' => 'BE', 'name' => 'Belgium', 'image' => 'https://flagcdn.com/w320/be.png', 'created_at' => now()],
            ['code' => 'BG', 'name' => 'Bulgaria', 'image' => 'https://flagcdn.com/w320/bg.png', 'created_at' => now()],
            ['code' => 'BH', 'name' => 'Bahrain', 'image' => 'https://flagcdn.com/w320/bh.png', 'created_at' => now()],
            ['code' => 'BI', 'name' => 'Burundi', 'image' => 'https://flagcdn.com/w320/bi.png', 'created_at' => now()],
            ['code' => 'BJ', 'name' => 'Benin', 'image' => 'https://flagcdn.com/w320/bj.png', 'created_at' => now()],
            ['code' => 'BO', 'name' => 'Bolivia', 'image' => 'https://flagcdn.com/w320/bo.png', 'created_at' => now()],
            ['code' => 'BR', 'name' => 'Brazil', 'image' => 'https://flagcdn.com/w320/br.png', 'created_at' => now()],
            ['code' => 'BS', 'name' => 'Bahamas', 'image' => 'https://flagcdn.com/w320/bs.png', 'created_at' => now()],
            ['code' => 'BT', 'name' => 'Bhutan', 'image' => 'https://flagcdn.com/w320/bt.png', 'created_at' => now()],
            ['code' => 'BY', 'name' => 'Belarus', 'image' => 'https://flagcdn.com/w320/by.png', 'created_at' => now()],
            ['code' => 'BZ', 'name' => 'Belize', 'image' => 'https://flagcdn.com/w320/bz.png', 'created_at' => now()],
            ['code' => 'CA', 'name' => 'Canada', 'image' => 'https://flagcdn.com/w320/ca.png', 'created_at' => now()],
            ['code' => 'CL', 'name' => 'Chile', 'image' => 'https://flagcdn.com/w320/cl.png', 'created_at' => now()],
            ['code' => 'CO', 'name' => 'Colombia', 'image' => 'https://flagcdn.com/w320/co.png', 'created_at' => now()],
            ['code' => 'CR', 'name' => 'Costa Rica', 'image' => 'https://flagcdn.com/w320/cr.png', 'created_at' => now()],
            ['code' => 'CU', 'name' => 'Cuba', 'image' => 'https://flagcdn.com/w320/cu.png', 'created_at' => now()],
            ['code' => 'CV', 'name' => 'Cape Verde', 'image' => 'https://flagcdn.com/w320/cv.png', 'created_at' => now()],
            ['code' => 'CX', 'name' => 'Christmas Island', 'image' => 'https://flagcdn.com/w320/cx.png', 'created_at' => now()],
            ['code' => 'CY', 'name' => 'Cyprus', 'image' => 'https://flagcdn.com/w320/cy.png', 'created_at' => now()],
            ['code' => 'CZ', 'name' => 'Czech Republic', 'image' => 'https://flagcdn.com/w320/cz.png', 'created_at' => now()],
            ['code' => 'DE', 'name' => 'Germany', 'image' => 'https://flagcdn.com/w320/de.png', 'created_at' => now()],
            ['code' => 'DO', 'name' => 'Dominican Republic', 'image' => 'https://flagcdn.com/w320/do.png', 'created_at' => now()],
            ['code' => 'DZ', 'name' => 'Algeria', 'image' => 'https://flagcdn.com/w320/dz.png', 'created_at' => now()],
            ['code' => 'EC', 'name' => 'Ecuador', 'image' => 'https://flagcdn.com/w320/ec.png', 'created_at' => now()],
            ['code' => 'EE', 'name' => 'Estonia', 'image' => 'https://flagcdn.com/w320/ee.png', 'created_at' => now()],
            ['code' => 'EG', 'name' => 'Egypt', 'image' => 'https://flagcdn.com/w320/eg.png', 'created_at' => now()],
            ['code' => 'ES', 'name' => 'Spain', 'image' => 'https://flagcdn.com/w320/es.png', 'created_at' => now()],
            ['code' => 'FI', 'name' => 'Finland', 'image' => 'https://flagcdn.com/w320/fi.png', 'created_at' => now()],
            ['code' => 'FM', 'name' => 'Micronesia', 'image' => 'https://flagcdn.com/w320/fm.png', 'created_at' => now()],
            ['code' => 'FO', 'name' => 'Faroe Islands', 'image' => 'https://flagcdn.com/w320/fo.png', 'created_at' => now()],
            ['code' => 'FR', 'name' => 'France', 'image' => 'https://flagcdn.com/w320/fr.png', 'created_at' => now()],
            ['code' => 'GA', 'name' => 'Gabon', 'image' => 'https://flagcdn.com/w320/ga.png', 'created_at' => now()],
            ['code' => 'GB', 'name' => 'United Kingdom', 'image' => 'https://flagcdn.com/w320/gb.png', 'created_at' => now()],
            ['code' => 'GD', 'name' => 'Grenada', 'image' => 'https://flagcdn.com/w320/gd.png', 'created_at' => now()],
            ['code' => 'GE', 'name' => 'Georgia', 'image' => 'https://flagcdn.com/w320/ge.png', 'created_at' => now()],
            ['code' => 'GH', 'name' => 'Ghana', 'image' => 'https://flagcdn.com/w320/gh.png', 'created_at' => now()],
            ['code' => 'GL', 'name' => 'Greenland', 'image' => 'https://flagcdn.com/w320/gl.png', 'created_at' => now()],
            ['code' => 'GM', 'name' => 'Gambia', 'image' => 'https://flagcdn.com/w320/gm.png', 'created_at' => now()],
            ['code' => 'GN', 'name' => 'Guinea', 'image' => 'https://flagcdn.com/w320/gn.png', 'created_at' => now()],
            ['code' => 'GQ', 'name' => 'Equatorial Guinea', 'image' => 'https://flagcdn.com/w320/gq.png', 'created_at' => now()],
            ['code' => 'GR', 'name' => 'Greece', 'image' => 'https://flagcdn.com/w320/gr.png', 'created_at' => now()],
            ['code' => 'GT', 'name' => 'Guatemala', 'image' => 'https://flagcdn.com/w320/gt.png', 'created_at' => now()],
            ['code' => 'GU', 'name' => 'Guam', 'image' => 'https://flagcdn.com/w320/gu.png', 'created_at' => now()],
            ['code' => 'GW', 'name' => 'Guinea-Bissau', 'image' => 'https://flagcdn.com/w320/gw.png', 'created_at' => now()],
            ['code' => 'GY', 'name' => 'Guyana', 'image' => 'https://flagcdn.com/w320/gy.png', 'created_at' => now()],
            ['code' => 'HN', 'name' => 'Honduras', 'image' => 'https://flagcdn.com/w320/hn.png', 'created_at' => now()],
            ['code' => 'HR', 'name' => 'Croatia', 'image' => 'https://flagcdn.com/w320/hr.png', 'created_at' => now()],
            ['code' => 'HT', 'name' => 'Haiti', 'image' => 'https://flagcdn.com/w320/ht.png', 'created_at' => now()],
            ['code' => 'HU', 'name' => 'Hungary', 'image' => 'https://flagcdn.com/w320/hu.png', 'created_at' => now()],
            ['code' => 'ID', 'name' => 'Indonesia', 'image' => 'https://flagcdn.com/w320/id.png', 'created_at' => now()],
            ['code' => 'IE', 'name' => 'Ireland', 'image' => 'https://flagcdn.com/w320/ie.png', 'created_at' => now()],
            ['code' => 'IL', 'name' => 'Israel', 'image' => 'https://flagcdn.com/w320/il.png', 'created_at' => now()],
            ['code' => 'IN', 'name' => 'India', 'image' => 'https://flagcdn.com/w320/in.png', 'created_at' => now()],
            ['code' => 'IQ', 'name' => 'Iraq', 'image' => 'https://flagcdn.com/w320/iq.png', 'created_at' => now()],
            ['code' => 'IR', 'name' => 'Iran', 'image' => 'https://flagcdn.com/w320/ir.png', 'created_at' => now()],
            ['code' => 'IS', 'name' => 'Iceland', 'image' => 'https://flagcdn.com/w320/is.png', 'created_at' => now()],
            ['code' => 'IT', 'name' => 'Italy', 'image' => 'https://flagcdn.com/w320/it.png', 'created_at' => now()],
            ['code' => 'JM', 'name' => 'Jamaica', 'image' => 'https://flagcdn.com/w320/jm.png', 'created_at' => now()]
        ]);
    }
}
