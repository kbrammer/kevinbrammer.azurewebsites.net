<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Use dashes instead of underscores
 * http://stackoverflow.com/questions/7404646/kohana-3-2-how-can-i-use-hyphens-in-uris
 */
class Request_Client_Internal extends Kohana_Request_Client_Internal {

    /**
     * We override this method to allow for dashes in the action part of the url
     * (See Kohana_Request_Client_Internal::execute_request() for the details)
     *
     * @param   Request $request
     * @return  Response
     */
    public function execute_request(Request $request, Response $response)
    {
        // Check the setting for dashes (the one set in bootstrap.php)
        if (defined('URL_WITH_DASHES_ONLY') and URL_WITH_DASHES_ONLY == TRUE) 
        {
            // Block URLs with underscore in the action to avoid duplicated content
            if (strpos($request->action(), '_') !== false)
            {
                throw new HTTP_Exception_404('The requested URL :uri was not found on this server.', array(':uri' => $request->uri()));
            }

            // Modify action part of the request: transform all dashes to underscores
            $request->action( strtr($request->action(), '-', '_') );
        }
        // We are done, let the parent method do the heavy lifting
        return parent::execute_request($request, $response);
    }

} // end_class Request_Client_Internal