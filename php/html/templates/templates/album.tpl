{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<h1>ALBUM</h1>
<p class="important">
 Welcome!
</p>
{if isset($pic_url)}
{if count($pic_url)==0}
<p>This is an empty Album.</p>
{else}
{foreach $pic_url as $item}
  	{$item}
  	<br>
{/foreach}
<br>
<a href="/album/edit?id={$album_id}">Edit photos</a>
{/if}
{/if}
{/block}