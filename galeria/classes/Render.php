<?php

class Render {
    
    public static function input($type, $name, $value = '', $id = NULL, $classList=array(), $check=0) {
        $classStyle = ''; 
        $checked = '';
        if(count($classStyle) > 0){
            $classStyle = 'class="';
            foreach ($classList as $val) {
                $classStyle .= " $val";
            }
            $classStyle .= '" ';
        }
        if($id == NULL){
            $id = 'id="'.$name.'" ';
        }else{
            $id = 'id="'.$id.'" ';
        }        
        if($check != 0){
            $checked = ' checked ';
        }
        
        return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'" id="'.$id.'" '.$classStyle.' '.$checked.' />';
    }
    
    public static function select($options = array(), $name, $id = NULL, $classList = array(), $selected=-1) {
        $option='';
        $classStyle = ''; 
        if(count($classStyle) > 0){
            $classStyle = 'class="';
            foreach ($classList as $value) {
                $classStyle .= " $value";
            }
            $classStyle .= '" ';
        }
        if($id == NULL){
            $id = 'id="'.$name.'" ';
        }else{
            $id = 'id="'.$id.'" ';
        }        
        foreach ($option as $key => $value) {
            $option .= "<option value='$key' ";
            if($key == $selected){
                $option .= 'selected';
            }
            $option .= ">$value</option>";
        }
        
        return '<select name="'.$name.'" id="'.$id.'" '.$classStyle.' >'.$option.'</select>';
    }
}
