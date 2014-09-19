{* Smarty *}
{extends 'base.tpl'}
{block name='body'}
<h1>PIC</h1>
<p class="important">
  Welcome {$picid}
</p>
<p><a href="/pic?id={$pic_info_pre}">Previous</a></p>
<img src="{$pic_url_current}">
<p><a href="/pic?id={$pic_info_next}">Next</a></p>
<p><a href="/album?id={$pic_album_id}">Go back to album</a></p>
{/block}