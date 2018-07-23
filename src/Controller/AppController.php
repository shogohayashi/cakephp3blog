<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');

        // adminのみ認証する。
        if($this->request->getParam('prefix')){
            $this->loadComponent('Auth',[
                'authorize' => ['Controller'],
                'authenticate'=>[
                    'Form'=>[
                        'userModel'=>'Users',
                    ],
                ],
                'loginRedirect' => [
                    'controller' => 'Articles',
                    'action' => 'index',
                ],
                'unauthorizedRedirect' => [
                    'controller' => 'Users',
                    'action' => 'login',
                ],
                'authError'=>'ログインしてください。'
            ]);
        }
    }
    public function isAuthorized($user)
    {
        // Admin can access every action
        if ($user['role'] === 'admin') {
            return true;
        }
        return true;
        // // User access
        // if (isset($user['role'])) {
        //     if(
        //           $this->request->getParam('controller')==='Sections'
        //         ||($this->request->getParam('controller')==='Comments'&&$this->request->getParam('action')!=='add')
        //         ||($this->request->getParam('controller')==='News'&&($this->request->getParam('action')!=='view'))
        //         ||($this->request->getParam('controller')==='Users'
        //             &&(
        //                 $this->request->getParam('action')==='index'
        //                 ||$this->request->getParam('action')==='add'
        //             ))
        //     ){
        //         $this->Auth->config('authError','アクセス権限がありません。');
        //         return false;
        //     }
        //     return true;
        // }
        // // Default deny
        // return false;
    }

    public function beforeFilter(Event $event)
    {

    }

    // redirect dashboard if logged in
    public function logoutOnly(){
        if($this->Auth->user('id')){
            // return $this->redirect(['controller'=>'articles','action'=>'index']);
        }
    }
}
