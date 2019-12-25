<?php

namespace AviationCode\Elasticsearch\Query\Dsl\Term;

use Illuminate\Contracts\Support\Arrayable;

class Exists implements Arrayable
{
    const KEY = 'exists';

    /**
     * Name of the field you wish to search.
     *
     * @var string
     */
    private $field;

    /**
     * Exists constructor.
     *
     * @param string $field
     */
    public function __construct(string $field)
    {
        $this->field = $field;
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return [
            self::KEY => ['field' => $this->field],
        ];
    }
}
