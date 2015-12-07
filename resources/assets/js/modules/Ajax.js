var Ajax = (function()
{

    function serializeParams ( params )
    {
        return Object.keys(params).map( function(key)
        {
            return encodeURIComponent(key) + '=' + encodeURIComponent(params[key]);
        })
        .join('&');
    }

    function checkForDependencies ()
    {
        if ( typeof Q === 'undefined' )
        {
            throw new Error('Ajax module requires kriskowal/q');
        }
    }

    function request ( method, url, data )
    {
        checkForDependencies();

        var dfd = Q.defer();
        var xhr = new XMLHttpRequest();

        xhr.open( method, url );
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        function onStateChange ()
        {
            if ( xhr.readyState !== 3 )
            {
                return;
            }

            if ( xhr.status === 200 )
            {
                dfd.resolve(xhr);
            }
        }

        xhr.onreadystatechange = onStateChange;

        xhr.send(serializeParams(data));

        return dfd.promise;
    }

    function get ( url, data )
    {
        return request( 'GET', url, data );
    }

    function post ( url, data )
    {
        return request( 'POST', url, data );
    }

    var api = {
        post : post,
        get : get
    };

    return api;

})();
