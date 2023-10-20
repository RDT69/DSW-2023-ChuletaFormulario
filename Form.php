<?php 
class Form{
    private $action;
    private $title;
    private $method;
    private $fields;

    public function __construct($action, $title, $method)
    { 
       
        $this->action = $action;   
        $this->title = $title;    
        $this->method = $method;
        $this->fields = [];

    }

    public function add(Field $field)
    {
    $this->fields[] = $field;    
    }
    public function render(){
        echo "<form action=\"$this->action\" method=\"$this->method\">\n 
        <h2>$this->title</h2> 
        Esto es un formulario \n";

        foreach($this->fields as $field) {
            $field->render();

        }

        echo "<br> <input type=\"submit\" value =\"enviar\">\n 
        </form>\n";
    }

}