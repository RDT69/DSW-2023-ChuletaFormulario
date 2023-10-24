<?php
class MultipleField extends Field{

    protected $options = [];
    
    public function __construct($name, $type, $text, $default='', $options = [])
    {
        parent::__construct($name, $type, $text, $default);
        $this->options = $options;
    }
    public function addOption(string $text, string $value)
    {
        $this->options[$text] = $value;
    }

    public function render() {
        if ($this->type == "select") $this->renderSelect();
        else $this->renderRadio();
    }
    private function renderSelect(){
        echo "
        <p> <label for=\"id_$this->name\">$this->text: </label> </p>\n
        <select id=\"id_$this->name\" name =\"$this->name\">";

        foreach ($this->options as $text => $value) {
            $selected = ($text == $this->default) ? 'selected' : "";
            echo "\t <p><option value=\"$value\" $selected>$text</option></p>";
        }
        echo "</select>";
    }
    private function renderRadio(){
        echo "<p>$this->text: </p>";
        foreach ($this->options as $text => $value) {
            $id = str_replace(" ", "-", $text);
            echo "<p><input id=\"$id\" type=\"radio\" name=\"$this->name\" value=\"$value\"/>
            <label for=\"$id\">$text</label>
            </p>";
        }


    }
}