<?php

abstract class Entity
{
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $key = explode('_',$key);
            $method = count($key) == 1 ? "set" . ucfirst($key[0]) : "set" . ucfirst($key[0]) . ucfirst($key[1]);
            // if(count($key) == 4):
            //     {
            //          $method = "set" . ucfirst($key[0]) . ucfirst($key[1]) . ucfirst($key[2]) . ucfirst($key[3]);
            //     }
            // endif;
            // $method = "set";
            // for($i = 1; $i = count($key); $i++):
            //     {
            //         $method .= ucfirst($key[$i]);          
            //     }
            // $method = (count($key) == 1) ? "set" . ucfirst($key[0]) : (count($key) == 2) ? "set" . ucfirst($key[0]) . ucfirst($key[1]) : (count($key) == 3) ? "set" . ucfirst($key[0]) . ucfirst($key[1]) . ucfirst($key[2]);
            // $method = count($key) == 1 ? "set" . ucfirst($key[0]) : "set" . ucfirst($key[0]) . ucfirst($key[1]);

            // $method = count($key) == 3 ? "set" . ucfirst($key[0]) . ucfirst($key[1]) . ucfirst($key[2]);

            $this->$method($value);
        }

        return $this;
    }
}