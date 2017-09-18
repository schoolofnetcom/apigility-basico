<?php
return [
    'router' => [
        'routes' => [
            'son-basic.rest.categories' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/categories[/:categories_id]',
                    'defaults' => [
                        'controller' => 'SONBasic\\V1\\Rest\\Categories\\Controller',
                    ],
                ],
            ],
            'son-basic.rest.categories-has-products' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/categories_products[/:categories_products_id]',
                    'defaults' => [
                        'controller' => 'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Controller',
                    ],
                ],
            ],
            'son-basic.rest.products' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/products[/:products_id]',
                    'defaults' => [
                        'controller' => 'SONBasic\\V1\\Rest\\Products\\Controller',
                    ],
                ],
            ],
            'son-basic.rest.suppliers' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/suppliers[/:suppliers_id]',
                    'defaults' => [
                        'controller' => 'SONBasic\\V1\\Rest\\Suppliers\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'son-basic.rest.categories',
            1 => 'son-basic.rest.categories-has-products',
            2 => 'son-basic.rest.products',
            3 => 'son-basic.rest.suppliers',
        ],
    ],
    'zf-rest' => [
        'SONBasic\\V1\\Rest\\Categories\\Controller' => [
            'listener' => 'SONBasic\\V1\\Rest\\Categories\\CategoriesResource',
            'route_name' => 'son-basic.rest.categories',
            'route_identifier_name' => 'categories_id',
            'collection_name' => 'categories',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => '10',
            'page_size_param' => null,
            'entity_class' => \SONBasic\V1\Rest\Categories\CategoriesEntity::class,
            'collection_class' => \SONBasic\V1\Rest\Categories\CategoriesCollection::class,
            'service_name' => 'categories',
        ],
        'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Controller' => [
            'listener' => 'SONBasic\\V1\\Rest\\CategoriesHasProducts\\CategoriesHasProductsResource',
            'route_name' => 'son-basic.rest.categories-has-products',
            'route_identifier_name' => 'categories_products_id',
            'collection_name' => 'categories_has_products',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SONBasic\V1\Rest\CategoriesHasProducts\CategoriesHasProductsEntity::class,
            'collection_class' => \SONBasic\V1\Rest\CategoriesHasProducts\CategoriesHasProductsCollection::class,
            'service_name' => 'categories_has_products',
        ],
        'SONBasic\\V1\\Rest\\Products\\Controller' => [
            'listener' => 'SONBasic\\V1\\Rest\\Products\\ProductsResource',
            'route_name' => 'son-basic.rest.products',
            'route_identifier_name' => 'products_id',
            'collection_name' => 'products',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SONBasic\V1\Rest\Products\ProductsEntity::class,
            'collection_class' => \SONBasic\V1\Rest\Products\ProductsCollection::class,
            'service_name' => 'products',
        ],
        'SONBasic\\V1\\Rest\\Suppliers\\Controller' => [
            'listener' => 'SONBasic\\V1\\Rest\\Suppliers\\SuppliersResource',
            'route_name' => 'son-basic.rest.suppliers',
            'route_identifier_name' => 'suppliers_id',
            'collection_name' => 'suppliers',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \SONBasic\V1\Rest\Suppliers\SuppliersEntity::class,
            'collection_class' => \SONBasic\V1\Rest\Suppliers\SuppliersCollection::class,
            'service_name' => 'suppliers',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'SONBasic\\V1\\Rest\\Categories\\Controller' => 'HalJson',
            'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Controller' => 'HalJson',
            'SONBasic\\V1\\Rest\\Products\\Controller' => 'HalJson',
            'SONBasic\\V1\\Rest\\Suppliers\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'SONBasic\\V1\\Rest\\Categories\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SONBasic\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'SONBasic\\V1\\Rest\\Suppliers\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'SONBasic\\V1\\Rest\\Categories\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/json',
            ],
            'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/json',
            ],
            'SONBasic\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/json',
            ],
            'SONBasic\\V1\\Rest\\Suppliers\\Controller' => [
                0 => 'application/vnd.son-basic.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \SONBasic\V1\Rest\Categories\CategoriesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.categories',
                'route_identifier_name' => 'categories_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SONBasic\V1\Rest\Categories\CategoriesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.categories',
                'route_identifier_name' => 'categories_id',
                'is_collection' => true,
            ],
            \SONBasic\V1\Rest\CategoriesHasProducts\CategoriesHasProductsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.categories-has-products',
                'route_identifier_name' => 'categories_products_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SONBasic\V1\Rest\CategoriesHasProducts\CategoriesHasProductsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.categories-has-products',
                'route_identifier_name' => 'categories_products_id',
                'is_collection' => true,
            ],
            \SONBasic\V1\Rest\Products\ProductsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.products',
                'route_identifier_name' => 'products_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SONBasic\V1\Rest\Products\ProductsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ],
            \SONBasic\V1\Rest\Suppliers\SuppliersEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.suppliers',
                'route_identifier_name' => 'suppliers_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \SONBasic\V1\Rest\Suppliers\SuppliersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'son-basic.rest.suppliers',
                'route_identifier_name' => 'suppliers_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'SONBasic\\V1\\Rest\\Categories\\CategoriesResource' => [
                'adapter_name' => 'son_basic_adapter',
                'table_name' => 'categories',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SONBasic\\V1\\Rest\\Categories\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'SONBasic\\V1\\Rest\\Categories\\CategoriesResource\\Table',
            ],
            'SONBasic\\V1\\Rest\\CategoriesHasProducts\\CategoriesHasProductsResource' => [
                'adapter_name' => 'son_basic_adapter',
                'table_name' => 'categories_has_products',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'SONBasic\\V1\\Rest\\CategoriesHasProducts\\CategoriesHasProductsResource\\Table',
            ],
            'SONBasic\\V1\\Rest\\Products\\ProductsResource' => [
                'adapter_name' => 'son_basic_adapter',
                'table_name' => 'products',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SONBasic\\V1\\Rest\\Products\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'SONBasic\\V1\\Rest\\Suppliers\\SuppliersResource' => [
                'adapter_name' => 'son_basic_adapter',
                'table_name' => 'suppliers',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'SONBasic\\V1\\Rest\\Suppliers\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'zf-content-validation' => [
        'SONBasic\\V1\\Rest\\Categories\\Controller' => [
            'input_filter' => 'SONBasic\\V1\\Rest\\Categories\\Validator',
        ],
        'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Controller' => [
            'input_filter' => 'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Validator',
        ],
        'SONBasic\\V1\\Rest\\Products\\Controller' => [
            'input_filter' => 'SONBasic\\V1\\Rest\\Products\\Validator',
        ],
        'SONBasic\\V1\\Rest\\Suppliers\\Controller' => [
            'input_filter' => 'SONBasic\\V1\\Rest\\Suppliers\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'SONBasic\\V1\\Rest\\Categories\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'description',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
        'SONBasic\\V1\\Rest\\CategoriesHasProducts\\Validator' => [
            0 => [
                'name' => 'categories_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'son_basic_adapter',
                            'table' => 'categories',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'products_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'son_basic_adapter',
                            'table' => 'products',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
        ],
        'SONBasic\\V1\\Rest\\Products\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'price',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'supplier_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'son_basic_adapter',
                            'table' => 'suppliers',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
        ],
        'SONBasic\\V1\\Rest\\Suppliers\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'document',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '14',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
