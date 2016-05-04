<?php
namespace Air;

/**
 * Class ToType
 * @package Air
 */
trait ToType
{
    protected static $guarded = [];

    /**
     * @return string JSON
     */
    public function __toJSON()
    {
        return json_encode($this->__toArray());
    }

    /**
     * @return string XML
     */
    public function __toXML()
    {
        $xml = new \SimpleXMLElement('<root/>');
        $properties = $this->__toArray();
        array_walk_recursive($properties, function ($value, $property) use ($xml) {
            //resolve issues with <0/>...<n/>
            if (is_numeric($property)) {
                $property = 'item' . $property;
            }
            $xml->addChild($property, $value ?: '');
        });
        return $xml->asXML();
    }

    /**
     * @return array
     */
    public function __toArray()
    {
        $properties = get_object_vars($this);
        if (!empty(static::$guarded)) {
            $guarded = array_flip(static::$guarded);
            foreach ($properties as $property => $value) {
                if (isset($guarded[$property])) {
                    unset($guarded[$property]);
                } else {
                    $properties[$property] = is_string($value) ? trim($value) : $value;
                }
            }
        }
        return $properties;
    }
}