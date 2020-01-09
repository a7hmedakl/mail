<?php

class HomeController extends FrontController {

   /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {       
        $this->render('index');
    }

}
