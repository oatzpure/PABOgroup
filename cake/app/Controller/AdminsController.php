<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 11:08
 */
class AdminsController extends AppController {
    public function index() {
        $User = $this->Session->read('User');
        $this->set('User', $User);
    }

    public function deck() {
        $this->loadModel('Deck');
        $disable = $this->Deck->find('all',array(
            'conditions' => array('Deck.status' => 'Disable')
        ));
        $this->set('disable', $disable);

        $able = $this->Deck->find('all',array(
            'conditions' => array('Deck.status' => 'Able')
        ));
        $this->set('able',$able);

        $block = $this->Deck->find('all',array(
            'conditions' => array('Deck.status' => 'Block')
        ));
        $this->set('block', $block);

    }

    public function able($id=null){
        $this->loadModel('Deck');
        pr($id);
            $data = [
                'Deck' => [
                    'id' => $id,
                    'status' => 'Able'
                ]
            ];
            if ($this->Deck->save($data)) {
                $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
            } else {
                $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-danger', 'style' => 'position:'));
            }
            //pr($this->request->data);
        $this->set('id', $id);

    }

    public function disable($id=null){
        $this->loadModel('Deck');
        pr($id);
        $data = [
            'Deck' => [
                'id' => $id,
                'status' => 'Block'
            ]
        ];
        if ($this->Deck->save($data)) {
            $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
        } else {
            $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-danger', 'style' => 'position:'));
        }
        //pr($this->request->data);
        $this->set('id', $id);
    }

    public function approve($id=null){
        $this->loadModel('Deck');
        pr($id);
        $data = [
            'Deck' => [
                'id' => $id,
                'status' => 'Able'
            ]
        ];
        if ($this->Deck->save($data)) {
            $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
        } else {
            $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-danger', 'style' => 'position:'));
        }
        //pr($this->request->data);
        $this->set('id', $id);
    }
}
?>