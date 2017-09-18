<?php
return [
    'SONBasic\\V1\\Rest\\Categories\\Controller' => [
        'description' => 'Recurso de categorias',
        'collection' => [
            'description' => 'Descrição de coleções de categorias',
            'GET' => [
                'description' => 'aaaaa',
                'response' => '{
   "_links": {
       "self": {
           "href": "/categories"
       },
       "first": {
           "href": "/categories?page={page}"
       },
       "prev": {
           "href": "/categories?page={page}"
       },
       "next": {
           "href": "/categories?page={page}"
       },
       "last": {
           "href": "/categories?page={page}"
       }
   }
   "_embedded": {
       "categories": [
           {
               "_links": {
                   "self": {
                       "href": "/categories[/:categories_id]"
                   }
               }
              "name": "",
              "description": ""
           }
       ]
   }
}',
            ],
        ],
    ],
];
