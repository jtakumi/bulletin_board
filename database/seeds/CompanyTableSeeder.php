<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /* $client = new \GuzzleHttp\Client();
        
        $url='https://job.yahooapis.jp/v1/furusato/company/?appid=dj00aiZpPTNQeTY1eVdmOTNMZiZzPWNvbnN1bWVyc2VjcmV0Jng9Yjg-';
        $respose=$client->request(
            'GET',
            $url,);
            $results=json_decode($respose->getBody(),true);
        foreach($results['results'] as $result)
        { 
                Company::create([
                'name'=> $result['name'],
                'address'=>$result['prefecture']]);    
            
            
        }*/
    }
}
