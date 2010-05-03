{*
 * a comment
 *}
{literal}
  some_js_var = { 'json' => 'cool' };
{/literal}

{def $a_var=1
     $another_var = $a_var.a.member[1]
     $with_arrays = hash( 'hi', 'there', no, quotes )}
{"a text"}
{'more text'}

{concat('A ', $var)}

{ldelim}$not_a_var{rdelim}

{whoami}
{"pipe to operator"|ezurl}
{'pipe to operator again' | ezurl() | ezurl | ezunknown}

{* bugs below *}

{include uri='design:.tpl' attribute='this is not the attribute operator!' attr2 = 'val2' attr3="val3" attr4 = val4}

{foreach $array as $key => $val offset $x limit $y}
    {break}
{/foreach}