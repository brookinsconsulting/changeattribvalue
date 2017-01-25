{*cache-block expiry=3600}
<h1>Euro foreign exchange reference rates</h1>

{let rates=fetch( 'eurofxref', 'fxref' )}
Date: {$rates.date|l10n( 'date' )}<br />
<br />

<table border="1">
<tr><th> Currency </th><th> Value </th></tr>
{section loop=$rates.fx}
<tr><td> {$:key} </td><td> {$:item|l10n( 'number' )} </td></tr>
{/section}
</table>
{/let}
<br />

Source: <a href="http://www.ecb.int">European Central Bank</a>
{/cache-block*}
