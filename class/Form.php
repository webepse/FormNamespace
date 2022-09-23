<?php
namespace Tutoriel;

class Form{

    private array $data;
    public string $surround = 'div';

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    private function surround(string $html): string
    {
        return "<".$this->surround.">".$html."</".$this->surround.">";
    }

    // private function getValue($index)
    // {
    //     if(isset($this->data[$index]))
    //     {
    //         return $this->data[$index];
    //     }else{
    //         return null;
    //     }
    // }

    private function getValue(string $index): ?string
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input(string $name, string $type = 'text',$label = ""): string
    {
        $types = ['text','password','email','date'];
        $myLabel = ($label == "")? $name : $label;
        if(in_array($type,$types))
        {
            return "<div><div><label for='".$name."'>".$myLabel."</label></div>".$this->surround("<input type='".$type."' name='".$name."' id='".$name."' value='".$this->getValue($name)."'>")."</div>";
        }else{
            return "<div><div><label for='".$name."'>".$myLabel."</label></div>".$this->surround("<input type='text' name='".$name."' id='".$name."' value='".$this->getValue($name)."'>")."</div>";
        }

    }


    public function submit(): string
    {
        return $this->surround("<button type='submit'>Envoyer</button>");
    }



}