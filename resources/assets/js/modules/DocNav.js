var DocNav = (function()
{

    var container = null,
        links = null,
        responseContainer = null;

    function init ()
    {
        return construct();
    }

    function construct ()
    {
        container = document.getElementById('header-nav');
        links = container.querySelectorAll ('li > a');
        responseContainer = document.getElementById('response');

        for ( var i = 0 ; i < links.length ; i++ )
        {
            links[i].addEventListener( 'click', onLinkClick );
        }

        return api;
    }

    function onLinkClick (e)
    {
        e.preventDefault();

        links.querySelector('.active').classList.remove('active');
        console.log(links);
        e.target.classList.add('active');

        var method = e.target.dataset.method,
            url = e.target.href,
            type = e.target.dataset.type,
            xhr = null;

        switch (method)
        {
            case 'GET'  : request = Ajax.get(  url, {} ); break;
            case 'POST' : request = Ajax.post( url, {} ); break;
        }

        function onRequestDone (xhr)
        {
            if ( type === 'text' )
            {
                responseContainer.textContent = xhr.responseText;
            }
            else if ( type === 'html' )
            {
                responseContainer.innerHTML = xhr.responseText;
            }
        }

        request.then( onRequestDone );
    }

    var api = { init : init };

    return api;

})();
