{*
 * a comment
 *}
{literal}
  some_js_var = { 'json' => 'cool' };
{/literal}

{def $a_var=1
     $another_var = 2}
{"a text"}
{'more text'}

{concat('A ', $var)}

{ldelim}$not_a_var{rdelim}

{"pipe to operator"|ezurl}
{'pipe to operator again' | ezurl() | ezurl | ezunknown}

{* bugs below *}
{include uri='design:.tpl' attribute='this is not the attribute operator!' attr2 = 'val2' attr3='val3' }

{foreach $array as $key => $val offset $x limit $y}
    {break}
{/foreach}