<?php
require_once 'Field.php';
class SimpleField extends Field
{

    public function render()
    {
        if ($this->type == "checkbox") {
            if ($this->default == "true") {
                $value = "cheked";
            } else {
                $value = "";
            }
        } else {
            $valie = "value=\"$this->default\"";
        }
        echo
        "<p>
        <label for=\"id_$this->name\">$this->text: </label> \n
        <input id\"id_$this->name\" type=\"$this->type\" name =\"$this->name\" value></input> \n
        </p>";
    }
}
