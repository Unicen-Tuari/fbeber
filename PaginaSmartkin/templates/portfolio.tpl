{include file="header.tpl"}
    
  
    <h3>Portfolio</h3>
    <p> 
    {section name=lnombres loop=$nombre_portfolio}
        <img src="./images/portfolio/{$img_portfolio[lnombres]}" width="200px" height="200px">
    {/section}  
    </p>


{include file="footer.tpl"}