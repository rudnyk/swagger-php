<?php

/**
 * @license Apache 2.0
 */

namespace Swagger\Annotations;

/**
 * @Annotation
 */
class Property extends Schema
{
    /**
     * The key into Schema->properties array.
     * @var string
     */
    public $property;

    /**
     * Property groups, to work with SWG_GROUP constant.
     * @var array
     */
    public $groups;

    /** @inheritdoc */
    public static $_parents = [
        'Swagger\Annotations\Definition',
        'Swagger\Annotations\Schema',
        'Swagger\Annotations\Property',
        'Swagger\Annotations\Items',
    ];
}
