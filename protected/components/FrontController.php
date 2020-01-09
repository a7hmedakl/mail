<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class FrontController extends Controller {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/main';

   
    public function init() {
        
    }
    
    
    
     protected function registerMainScripts() {
        /**
         * libs
         */
        //Yii::app()->clientScript->registerCoreScript('jquery'); //jQuery
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/libs/bootstrap/bootstrap.js', CClientScript::POS_END); //Bootstrab
        /**
         * ui files
         */
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/front/jquery.transit.min.js', CClientScript::POS_END);
        /**
         * dev files
         */
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/front/dev.js', CClientScript::POS_END); //Custom js file for developers
    }

    

    protected function beforeAction($action) {

        ///////////////////////////error//////////////////////////////////////
       /* $parameters = Errormessage::model()->findByPk(1);
        Yii::app()->params['error_heading'] = $parameters['error_heading'];
        Yii::app()->params['error_subhead'] = $parameters['error_subhead'];
        Yii::app()->params['error_image'] = $parameters['error_image'];
        Yii::app()->params['error_home'] = $parameters['error_home'];
        Yii::app()->params['error_homeactive'] = $parameters['error_homeactive'];
        Yii::app()->params['error_prev'] = $parameters['error_prev'];
        Yii::app()->params['error_prevactive'] = $parameters['error_prevactive'];*/
        //////////////////////////////////error////////////////////////////////////
        
        
        
        return parent::beforeAction($action);
    }

}
