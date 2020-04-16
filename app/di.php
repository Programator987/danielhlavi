<?php
declare (strict_types=1);
class preklad {
   /**
    * 
    * @param string $text
    * @return string
    */
  public function preklad(string $text) : string {        
//preklada text
        $preklad_text = $this->ts->translate($text);

        return $preklad_text;
        }
       
}

class udalost {
   /**
    * 
    * @param array $event
    * @return array
    */
  public function pridatUdalost(array $event) : array {        
//prida udalost do array
        $array_event = $this->ts->array($event);

        return $array_event;
        }
       
}
