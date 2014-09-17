{* Smarty *}
{extends 'base.tpl'}
{block name='body'}

<head>
	<title>Group 76 Project1</title>
</head>
<boby>
	<header>Test header</header>
	<h1>INDEX</h1>
	<p class="center">
  		Welcome!
	</p>
	<p>This is Group 76's Photo Album!</p>
	{foreach from=$username item=item}
  		<a href="/albums?username={$item}">{$item}</a>
  		<br>
	{/foreach}
	<footer>Test footer</footer>
</body>

{/block}