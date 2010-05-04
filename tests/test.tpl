{*
 * a comment
 *}
{literal}
  some_js_var = { 'json' => 'cool' };
{/literal}

{"a text"}
{'more text'}
{' and then some: |, ; '}

{def $a_var=1
     $another_var = $a_var.a.member[1]
     $with_arrays = hash( 'hi', 'there', 1, array(false()) )}

{ def $a_var='a common error: space between bracket and operator'}

{concat('A ', $var, sum(1,2)}

{ldelim}$not_a_var{rdelim}

{these are_not_known_operators()}
{"pipe to operator"|ezurl()|ezurl}
{'pipe to operator again' | ezurl() | ezurl | ezunknown}

{include uri='design:.tpl' attribute='this is not the attribute operator!'  attr2 = 'val2' attr3="val3" attr4 = val4}

{* bugs below *}

{  def $a_var='it should not be highligted (see DISALLOWED_BEFORE)'}

{include uri='design:.tpl' attribute = 'this also is not the attribute operator! (see DISALLOWED_AFTER)'}

{foreach $array as $key => $val offset $x limit $y}
    {break}
{/foreach}

{def $with_arrays = hash( should, be, coloured, red )}