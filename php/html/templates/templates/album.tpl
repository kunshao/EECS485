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
  	<a href="/pic?id={$item@key}">{$item}</a>
  	<br>
{/foreach}
<br>
<a href="/album/edit?id={$album_id}">Edit photos</a>
{/if}
{/if}
{/block}