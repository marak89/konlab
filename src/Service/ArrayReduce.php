<?php

declare(strict_types=1);

namespace App\Service;

class ArrayReduce
{
    private object $object;
    private function valueReduce($carry,$item)
    {
        $getMethod = 'get'.ucfirst($item);
        if (method_exists($this->object,$getMethod))
        {
            $propertyValue = call_user_func(array($this->object,$getMethod));
            switch(gettype($propertyValue)) {
                case 'string':
                case 'integer':
                case 'float':
                case 'double':
                    return $carry . $propertyValue . '| ';
                case 'NULL':
                    return $carry.'|';
                case 'object':
                    if($item == 'Time'){
                        return $carry  . $propertyValue->format('H:i:s'). '| ';
                    } else {
                        return $carry  . $propertyValue->format('d-m-Y'). '| ';
                    }
                default:
                    return $carry  . gettype($propertyValue). '| ';
            }
        }
        return $carry;
    }

    public function toString(array $arrayToReduce,object $object,?string $initial = null): string
    {
        $this->object = $object;
        return array_reduce($arrayToReduce,array($this,'valueReduce'),$initial ? $initial.'| ' : null);
    }
}