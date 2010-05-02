{if and(is_set($errormsg), ne($errormsg, ''))}
    <div class="message-warning">
    <h2><span class="time">[{currentdate()|l10n( shortdatetime )}]</span> {$errormsg|wash()}</h2>
    </div>
{else}

<div class="context-block">

{* DESIGN: Header START *}<div class="box-header"><div class="box-tc"><div class="box-ml"><div class="box-mr"><div class="box-tl"><div class="box-tr">

<h1 class="context-title">{$language|wash()} file [{$filename|wash()}]</h1>

{* DESIGN: Mainline *}<div class="header-mainline"></div>

{* DESIGN: Header END *}</div></div></div></div></div></div>

{* DESIGN: Content START *}<div class="box-ml"><div class="box-mr"><div class="box-content">

{$highlighted}

{* DESIGN: Content END *}</div></div></div>

{/if}