<?php
abstract class Field{

    protected $name;
    protected $type;
    protected $text;
    protected $default;

    public function __construct($name, $type, $text, $default='')
    {
        $this->name = $name;
        $this->type = $type;
        $this->text = $text;
        $this->default = $default;
    }

    public function render() 
    {
        if ($this -> type == "checkbox") {
            if ($this->default == "true"){
                $value = "cheked";
            } else{
                $value = "";
            }          
        }else{
                $valie = "value=\"$this->default\"";
            }
        echo 
        "<p>
        <label for=\"id_$this->name\">$this->text: </label> \n
        <input id\"id_$this->name\" type=\"$this->type\" name =\"$this->name\" value></input> \n
        </p>";
    }
}