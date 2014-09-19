{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<h1>ALBUMS</h1>
<p class="important">
 Welcome!
</p>
{if isset($album_title)}
{if count($album_title)==0}
<p>Empty Albums for {$user_id}</p>
{else}
{foreach $album_title as $item}
  	<a href="/album?id={$item@key}">{$item}</a>
  	<br>
{/foreach}
<br>
<p><a href="/albums/edit?username={$user_id}">Edit the albums</a></p>
<p><a href="/">Back to Index</a></p>
{/if}
{/if}
{/block}