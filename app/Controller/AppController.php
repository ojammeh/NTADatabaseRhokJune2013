<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
     public $components = array(
        'Session',
        'RequestHandler',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'institutions', 'action' => 'index', 'home'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );
     
    public function beforeRender() {
        parent::beforeRender();
        $this->set('user_details', $this->Auth->user());
		$this->set('app_name', 'NTA Institution Management System');
		$this->set('institution_id', $this->getInstitutionId());
        
    }
	
	public function getInstitutionId($id = null) {
		if($id) {
			$this->Session->write('institution_id', $id);
		}
		return $this->Session->read('institution_id');
	}
     
}
