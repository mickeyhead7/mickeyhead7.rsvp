<?php

namespace Responsible\Rsvp\Resource;

class Item extends ResourceAbstract
{

    /**
     * Included resources
     *
     * @var array
     */
    protected $included = [];

    /**
     * Set the resource included data
     *
     * @param array $value
     * @return $this
     */
    public function setIncluded(Array $value)
    {
        $this->included = $value;

        return $this;
    }

    /**
     * Set a specified resource included data by key
     *
     * @param $key
     * @param $value
     * @return $this
     */
    public function setIncludedValue($key, $value)
    {
        $this->included[$key] = $value;

        return $this;
    }

    /**
     * Get the resource included data
     *
     * @return array
     */
    public function getIncluded()
    {
        return $this->included;
    }

}