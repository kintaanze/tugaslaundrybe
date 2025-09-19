<?php
class Form {
    public function open($action, $method) {
        return "<form action='$action' method='$method'>";
    }

    public function close() {
        return "</form>";
    }

    public function text($name, $label) {
        return "<label>$label</label><br><input type='text' name='$name'><br><br>";
    }

    public function password($name, $label) {
        return "<label>$label</label><br><input type='password' name='$name'><br><br>";
    }

    public function radio($name, $label, $options) {
        $html = "<label>$label</label><br>";
        foreach ($options as $value => $text) {
            $html .= "<input type='radio' name='$name' value='$value'> $text<br>";
        }
        return $html . "<br>";
    }

    public function checkbox($name, $label, $options) {
        $html = "<label>$label</label><br>";
        foreach ($options as $value => $text) {
            $html .= "<input type='checkbox' name='{$name}[]' value='$value'> $text<br>";
        }
        return $html . "<br>";
    }

    public function select($name, $label, $options) {
        $html = "<label>$label</label><br><select name='$name'>";
        foreach ($options as $value => $text) {
            $html .= "<option value='$value'>$text</option>";
        }
        $html .= "</select><br><br>";
        return $html;
    }

    public function textarea($name, $label) {
        return "<label>$label</label><br><textarea name='$name'></textarea><br><br>";
    }

    public function submit($label) {
        return "<input type='submit' value='$label'>";
    }
}
