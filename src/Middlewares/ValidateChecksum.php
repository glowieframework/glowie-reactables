<?php
    namespace Glowie\Plugins\Reactables\Middlewares;

    use Glowie\Core\Http\Middleware;
    use Glowie\Core\Http\Session;

    /**
     * Reactables checksum validation middleware.
     * @category Middleware
     * @package glowieframework/glowie-reactables
     * @author Glowie
     * @copyright Copyright (c) Glowie
     * @license MIT
     * @link https://glowie.tk
     */
    class ValidateChecksum extends Middleware{

        /**
         * The middleware handler.
         * @return bool Should return true on success or false on fail.
         */
        public function handle(){
            // Retrieves the token from POST field
            $token = $this->request->getJson('checksum');

            // Validates the token
            if(empty($token)) return false;

            // Compare to the session token
            $session = new Session();
            if(!$session->has('REACTABLES_CHECKSUM')) return false;
            return hash_equals($session->get('REACTABLES_CHECKSUM'), $token);
        }

    }

?>