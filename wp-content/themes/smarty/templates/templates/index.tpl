Hello {$name}, welcome to Smarty!

<ul>
    {foreach $PostTitles as $item}
        <li>{$item.title}</li>
    {/foreach}    
</ul>
