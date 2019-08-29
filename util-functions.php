
<?php

$GLOBALS['colors'] = array('string' => 'red', 

                          'integer' => 'blue', 

                          'float' => 'green', 

                          'double' => 'green', 

                          'boolean' => 'lightgreen', 

                          'type' =>'orange',

                          'resource' => '#f0f',

                          'unknown' => 'violet');



function vardump($var, $type='nd', $level=0, $no_type=''){

  if($type=='array' || $type=='object'){

     if($type=='array')

        $str = '<font color="orange">'.$type.' ('.count($var).')</font>';

     if($type=='object'){

        $str = '<font color="orange">'.$type.'('.get_class($var).') ['.count($var).']</font>';

        $var = get_object_vars($var);

     }

     foreach($var as $key => $value) {

         $str .= '<div style="margin-left: 40px;"">['.vardump($key, gettype($key), $level+1, true).'] <big>&#8658;</big> '.' '.vardump($value, gettype($value), $level+1).'</div>';

     }

     return $str.'';

  }

  else if($type=='string')

     if($no_type)

        return '<font color="'.$GLOBALS['colors'][$type].'">"'.$var.'"</font>';

     else

        return '<font color="orange">'.$type.'('.strlen($var).')</font>'.' <font color="'.$GLOBALS['colors'][$type].'">"'.$var.'"</font>';

  else if($type=='resource')

     if($no_type)

        return '<font color="'.$GLOBALS['colors'][$type].'">"'.$var.'"</font>';

     else

        return '<font color="orange">'.$type.' of type "'.get_resource_type($var).'"</font>'.' <font color="'.$GLOBALS['colors'][$type].'">"'.$var.'"</font>';

  else if(isset($GLOBALS['colors'][$type]))

     if($no_type)

        return '<font color="'.$GLOBALS['colors'][$type].'">'.$var.'</font>';

     else

        return '<font color="orange">'.$type.'</font>'.' <font color="'.$GLOBALS['colors'][$type].'">'.$var.'</font>';

  else if($type=='nd') //type not specified

     return vardump($var, gettype($var), $level);

  else                    //type unknown

     if($no_type)

        return '<font color="'.$GLOBALS['colors']['unknown'].'">"'.$var.'</font>';

     else

        return '<font color="orange">'.$type.'</font>'.' <font color="violet">'.$var.'</font>';

     //return vardump($var, gettype($var));

}

function vardump_block($var, $type=false){

  return '<div style="background: rgba(234, 150, 150, 0.2); margin-top:10px; padding: 5px; border-radius: 5px;">'.vardump($var, gettype($var)).'</div>';

}

function vardump_block_tagged($var, $var_name="", $type=false){

  return   '<div style="background: rgba(234, 150, 150, 0.2); margin-top:10px; padding: 5px; border-radius: 5px;">'.

              ' &lt;<font color="bronze">var_dump</font> variable_name=<font color="gray">"'.$var_name.'"</font>&gt;<br />'.

              '<span style="padding-left:20px;">'.

                 vardump($var, gettype($var)).

              '</span><br />'.

           '&lt;/<font color="bronze">var_dump</font>&gt;<br />'.'</div>';

}

function flatten_object($obj){

  if(gettype($obj) != 'object')

     return $obj;

  $var = get_object_vars($obj);



  foreach($var AS $key => $value){

     if(gettype($value) == 'object')

        $var[$key] = flatten_object($value);

  }

  return $var;

}

?>

