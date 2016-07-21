<?php

namespace App;

use Request;
use Exception;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;


class iPlayerApi
{

    /**
     * Base Url
     * @const string BASE_URL 
     */
    const BASE_URL = 'https://ibl.api.bbci.co.uk/';

    /**
     * Array for the image sizes
     * @const Array BASE_URL 
     */
    const IMAGE_SIZES = [
        'SMALL' => '192x108',
        'REGULAR' => '406x228',
        'BIG' => '560x315'
    ];

    /**
     * Client http for calling API
     * @var \GuzzleHttp\Client $client
     *
     * 
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => self::BASE_URL
        ]);
    }

    /**
     * Gets programmes by letter divided by page
     * @param  string  $letter 
     * @param  integer $page   
     * @return Illuminate\Pagination\LengthAwarePaginator 
     */
    public function getProgrammesByLetter($letter = 'a', $page = 1) 
    {
        try {

            //TODO add a search for 0-9 programmes and mix them together
            $response = $this->client->request('GET',
                "ibl/v1/atoz/${letter}/programmes",
                ['query' => ['page' => $page] ]
            );

            $programmes = json_decode($response->getBody())->atoz_programmes;

            return new Paginator($programmes->elements, 
                $programmes->count, 
                $programmes->per_page, 
                $page, 
                ['path' => Request::path()]
            ); 
        //TODO more exception to catch   
        } catch (ClientException $e) {
            //send error
        }
        
    }

    public static function getImageSize($size = 'REGULAR')
    {
        return self::IMAGE_SIZES[$size];
    }

}
