{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<h1>PIC</h1>
<p class="important">
  Welcome
</p>
<p><a href="/pic?id={$pic_id_pre}">Previous</a></p>
<p><a href="/pic?id={$pic_id_next}">Next</a></p>
<p><a href="/album?id={$pic_album_id}">Go back to album</a></p>
<img src="{$pic_url_current}">

{/block}