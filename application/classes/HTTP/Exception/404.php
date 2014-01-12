<?php

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
 
    /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     * 
     * @return Response
     */
    public function get_response()
    {
        // let's show the error message in development but redirect to a friendly error page in production
        if(Kohana::$environment === Kohana::PRODUCTION) {
             $response = Response::factory()
                ->status(404)
                ->headers('Location', URL::site('error/index'));
     
            return $response;
        }
       
    }
}

?>