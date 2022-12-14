<?php
    namespace Glowie\Controllers\Components;

    use Glowie\Plugins\Reactables\Controllers\BaseComponent;

    /**
     * Reactables component controller.
     * @category Controller
     * @package glowieframework/glowie-reactables
     * @author Glowie
     * @copyright Copyright (c) Glowie
     * @license MIT
     * @link https://glowie.tk
     */
    class __FIREFLY_TEMPLATE_NAME__ extends BaseComponent{

        /**
         * This method runs before the `make()` method, only when the component is **created for the first time**.\
         * Use this method as the component "constructor". **It will not be called when it's updated.**
         */
        public function create(){
            //
        }

        /**
         * This method runs before the `make()` method, only when the component is **updated**.\
         * **It will not be called when it's created.**
         */
        public function update(){
            //
        }

        /**
         * Use this method to set what the component does after it's **created or updated**.\
         * Here is where you should render the component view using the `render()` method.
         */
        public function make(){
            $this->render('__FIREFLY_TEMPLATE_VIEW__');
        }

    }

?>