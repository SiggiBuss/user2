<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RbacController extends CController {
    
    
    public function filters()
    {
        return array(
            'accessControl',
            );
    }
    
    public function accessRules() {
        return array(
            array(
              'allow',
              'actions' => array('deletePost'),
              'roles' => array('deletePost'),  
            ),
            array(
              'allow',
              'actions' => array('init', 'test'),
            ),
            array('deny'),
        );
    }
    
    public function actionInit() {
        
        $auth=Yii::app()->authManager;
 
        $auth->createOperation('createPost','create a post');
        $auth->createOperation('readPost','read a post');
        $auth->createOperation('updatePost','update a post');
        $auth->createOperation('deletePost','delete a post');
        
        //settings
        $auth->createOperation('createAccount','Settings erstellen');
        $auth->createOperation('viewAccount','Settings anschauen');
        $auth->createOperation('updateAccount','Settings ändern');
        $auth->createOperation('listAccount','list Settings');
        $auth->createOperation('manageAccount','manage Settings');
        $auth->createOperation('deleteAccount','Settings löschen'); 
        
        //Kunden
        $auth->createOperation('createClient','Kunden erstellen');
        $auth->createOperation('viewClient','Kunden anschauen');
        $auth->createOperation('updateClient','Kunden ändern');
        $auth->createOperation('emailClient','Kunden Email senden');
        $auth->createOperation('archiveClient','Kunden archivieren');
        $auth->createOperation('importClient','Kunden importieren');
        $auth->createOperation('trashClient','Kunden in den Papierkorb');
        $auth->createOperation('deleteClient','Kunden löschen');
        
        // Angebote
        $auth->createOperation('createEstimate','Angebot erstellen');
        $auth->createOperation('readEstimate','Angebot anschauen');
        $auth->createOperation('updateEstimate','Angebot ändern');
        $auth->createOperation('commentEstimate','Angebot kommentieren');
        $auth->createOperation('copyEstimate','Angebot kopieren');
        $auth->createOperation('archiveEstimate','Angebot archivieren');
        $auth->createOperation('printEstimate','Angebot drucken');
        $auth->createOperation('sendEstimate','Angebot versenden');
        $auth->createOperation('acceptEstimate','Angebot akzeptieren');
        $auth->createOperation('convertEstimatetoInvoice','aus den Angebot eine Rechnung erstellen');
        $auth->createOperation('trashEstimate','Angebot in den Papierkorb');
        $auth->createOperation('deleteEstimate','Angebot löschen');
        
        // Kosten
        $auth->createOperation('createExpense','Kostenbeleg erstellen');
        $auth->createOperation('readExpense','Kostenbeleg anschauen');
        $auth->createOperation('updateExpense','Kostenbeleg ändern');
        $auth->createOperation('commentExpense','Kostenbeleg kommentieren');
        $auth->createOperation('archiveExpense','Kostenbeleg archivieren');
        $auth->createOperation('printExpense','Kostenbeleg drucken');
        $auth->createOperation('copyExpense','Kostenbeleg kopieren');
        $auth->createOperation('convertExpensetoInvoice','aus den Kostenbeleg eine Rechnung erstellen');
        $auth->createOperation('trashExpense','Kostenbeleg in den Papierkorb');
        $auth->createOperation('deleteExpense','Kostenbeleg löschen');
        $auth->createOperation('bookExpense','Kostenbeleg buchen');
       
        //Projekte
        $auth->createOperation('createProject','Projekt erstellen');
        $auth->createOperation('readProject','Projekt anschauen');
        $auth->createOperation('updateProject','Projekt ändern');
        $auth->createOperation('commentProject','Projekt kommentieren');   
        $auth->createOperation('archiveProject','Projekt archivieren');
        $auth->createOperation('printProject','Projekt drucken');
        $auth->createOperation('convertProjecttoInvoice','aus den Projekt eine Rechnung erstellen');
        $auth->createOperation('trashProject','Projekt in den Papierkorb');
        $auth->createOperation('deleteProject','Projekt löschen');
        
        // Timesheet
        $auth->createOperation('logHours','Stunden erstellen');
        $auth->createOperation('readTimesheet','Stunden anschauen');
        $auth->createOperation('updateHours','Stunden ändern');
        $auth->createOperation('commentHours','Stunden kommentieren');   
        $auth->createOperation('invoiceHours','Stunden archivieren');
        $auth->createOperation('marktHours_asUnbilled','Stunden drucken');
        $auth->createOperation('startTimer','Stunden in den Papierkorb');
        $auth->createOperation('deleteHours','Stunden löschen');
        $auth->createOperation('readTeamTimesheet','Teamstunden anschauen');
        
       
        $role=$auth->createRole('Kunde');
        $role->addChild('readEstimate');        
        $role->addChild('commentEstimate');
        $role->addChild('acceptEstimate');
        $role->addChild('printEstimate');
        
        $role=$auth->createRole('Steuerberater');
        $role->addChild('readExpense'); 
        $role->addChild('commentExpense');
        $role->addChild('printExpense');
        $role->addChild('bookExpense');
        
        $role=$auth->createRole('Mitarbeiter'); // on his own created
        $role->addChild('viewClient');
        $role->addChild('readEstimate');
        $role->addChild('createExpense'); 
        $role->addChild('readExpense');
        $role->addChild('updateExpense');
        $role->addChild('commentExpense');
        $role->addChild('printExpense');
        $role->addChild('trashExpense');
        $role->addChild('readProject'); 
        $role->addChild('commentProject');
        $role->addChild('printProject');
        $role->addChild('logHours');
        $role->addChild('readTimesheet');
        $role->addChild('updateHours');
        $role->addChild('commentHours');
        $role->addChild('startTimer');
        $role->addChild('deleteHours');
        $role->addChild('viewAccount');
        $role->addChild('listAccount');
        
        $role=$auth->createRole('Teamleiter');
        $role->addChild('Kunde');
        $role->addChild('Mitarbeiter');
        $role->addChild('createClient');
        $role->addChild('updateClient');
        $role->addChild('emailClient');
        $role->addChild('archiveClient');
        $role->addChild('importClient');
        $role->addChild('trashClient');
        $role->addChild('deleteClient');
        $role->addChild('createEstimate');
        $role->addChild('updateEstimate');
        $role->addChild('copyEstimate');
        $role->addChild('sendEstimate');
        $role->addChild('trashEstimate');  
        $role->addChild('archiveExpense');
        $role->addChild('copyExpense');
        $role->addChild('deleteExpense'); 
        $role->addChild('createProject');
        $role->addChild('updateProject');
        $role->addChild('archiveProject');
        $role->addChild('deleteProject');
        $role->addChild('trashProject');
        $role->addChild('marktHours_asUnbilled');
        $role->addChild('readTeamTimesheet');
        
        
        $role=$auth->createRole('Buchhaltung');
        $role->addChild('Kunde');
        $role->addChild('Mitarbeiter');
        
        $role->addChild('convertEstimatetoInvoice');
        $role->addChild('archiveExpense');
        $role->addChild('copyExpense');
        $role->addChild('deleteExpense');
        $role->addChild('convertExpensetoInvoice');
        $role->addChild('archiveProject');
        $role->addChild('printProject');
        $role->addChild('convertProjecttoInvoice');
        $role->addChild('invoiceHours');
        $role->addChild('marktHours_asUnbilled');
        $role->addChild('readTeamTimesheet');
        

        $bizRule='return Yii::app()->user->id==$params["post"]->authID;';
        $task=$auth->createTask('updateOwnPost','update a post by author himself',$bizRule);
        $task->addChild('updatePost');

        $role=$auth->createRole('reader');
        $role->addChild('readPost');

        $role=$auth->createRole('author');
        $role->addChild('reader');
        $role->addChild('createPost');
        $role->addChild('updateOwnPost');

        $role=$auth->createRole('editor');
        $role->addChild('reader');
        $role->addChild('updatePost');

        $role=$auth->createRole('admin');
        $role->addChild('editor');
        $role->addChild('author');
        $role->addChild('deletePost');
        
        $role=$auth->createRole('Administrator');
        $role->addChild('Kunde');
        $role->addChild('Steuerberater');
        $role->addChild('Mitarbeiter');
        $role->addChild('Teamleiter');
        $role->addChild('Buchhaltung');
        $role->addChild('deleteEstimate');
        $role->addChild('createAccount');
        $role->addChild('manageAccount');
        $role->addChild('deleteClient');
        
        
        
        $auth->assign('reader',6); //readerA
        $auth->assign('author',12); //authorB
        $auth->assign('editor',8); //editorC
        $auth->assign('admin','adminD'); //adminD
        
        $auth->assign('Kunde',3); //BMW
        $auth->assign('Kunde',5); //Porsche
        $auth->assign('Kunde',4); //Audi
        $auth->assign('Steuerberater',15); //Frank
        $auth->assign('Mitarbeiter',14); //Norbert
        $auth->assign('Mitarbeiter',13); //Hans
        $auth->assign('Mitarbeiter',9); //Windbühl
        $auth->assign('Teamleiter',10); //Thomas
        $auth->assign('Buchhaltung',11); //Paula
        $auth->assign('Administrator',2); 
        
        
        echo 'Done.';
    }
    
    public function actionDeletePost()
    {
        echo 'Post deleted.';
    }
    
    public function actionTest() {
        $post = new stdClass();
        $post->authID = 12;
        $params=array('post'=>$post);
        $domain = $_SERVER['HTTP_HOST'];
        $subdomain = implode(array_slice(array_reverse(explode('.', $_SERVER['SERVER_NAME'])),2));
    
        echo 'Domain :'.$domain.'<br>';
        echo 'servername :'.$_SERVER['SERVER_NAME'].'<br>';
        echo 'subdomain :'.$subdomain.'<br>';
        
        //echo 'Phphinfo:'.phpinfo().'<br>';
       // echo 'in Title gespeicher (UserIdentity) :'.yii::app()->user->title.'<br>';

       
        echo 'user id :'.yii::app()->user->id.'<br>';
         
        echo 'current permissions : <br />';
        //print_r(yii::app()->authManager->getRoles());
       // $q = Users::model()->findByPk(Yii::app()->user->id);
        //                echo $q->getRole();
        
        $q = User::model()->findByPk(yii::app()->user->id);
        echo 'ahoj, meine Name ist :'.$q->username.'<br>';
        echo 'Meine Rolle ist :'.$q->getRole().'<br>';
        
        /*
        $v = Yii::app()->authManager->getRoles(yii::app()->user->id);
        $v = CHtml::listData($v,'name','name'); 
        print_r($v); */
        
        echo '<ul>';
        echo "<li>Create post: ".yii::app()->user->checkAccess('createPost')."</li>";
        echo "<li>Read post: ".yii::app()->user->checkAccess('readPost')."</li>";
        echo "<li>able to update his own Post: ".Yii::app()->user->checkAccess('updateOwnPost',$params)."</li>";
        //echo "<li>User Id:".Yii::app()->user->id."</li>";
        //echo "<li>Params :".$params["post"]->authID."</li>";
        //print_r($params);
        echo "<li>Update post: ".yii::app()->user->checkAccess('updatePost')."</li>";
        echo "<li>Delete post: ".yii::app()->user->checkAccess('deletePost')."</li>";
        
        echo "<li>Delete post: ".yii::app()->user->checkAccess('deletePost')."</li>"; 
        
        echo'<h3> Kunden</h3>';
        echo '<li>Kunden erstellen :'.yii::app()->user->checkAccess('createClient');
        
        echo '<li>Kunden anschauen :'.yii::app()->user->checkAccess('viewClient');
        echo '<li>Kunden ändern :'.yii::app()->user->checkAccess('updateClient');
        echo '<li>Kunden Email senden :'.yii::app()->user->checkAccess('emailClient');
        echo '<li>Kunden archivieren :'.yii::app()->user->checkAccess('archiveClient');
        echo '<li>Kunden importieren :'.yii::app()->user->checkAccess('importClient');
        echo '<li>Kunden in den Papierkorb :'.yii::app()->user->checkAccess('trashClient');
        echo '<li>Kunden löschen :'.yii::app()->user->checkAccess('deleteClient');
        
        echo '<h3> Angebote</h3>';
        echo '<li>Angebot erstellen :'.yii::app()->user->checkAccess('createEstimate')."</li>";
        echo '<li>Angebot anschauen: '.yii::app()->user->checkAccess('readEstimate')."</li>";
        echo '<li>Angebot ändern: '.yii::app()->user->checkAccess('updateEstimate')."</li>";
        echo '<li>Angebot kommentieren: '.yii::app()->user->checkAccess('commentEstimate')."</li>";
        echo '<li>Angebot kopieren: '.yii::app()->user->checkAccess('copyEstimate')."</li>";
        echo '<li>Angebot archivieren: '.yii::app()->user->checkAccess('archiveEstimate')."</li>";
        echo '<li>Angebot drucken: '.yii::app()->user->checkAccess('printEstimate')."</li>";
        echo '<li>Angebot versenden: '.yii::app()->user->checkAccess('sendEstimate')."</li>";
        echo '<li>Angebot akzeptieren: '.yii::app()->user->checkAccess('acceptEstimate')."</li>";
        echo '<li>aus den Angebot eine Rechnung erstellen: '.yii::app()->user->checkAccess('convertEstimatetoInvoice')."</li>";
        echo '<li>Angebot in den Papierkorb: '.yii::app()->user->checkAccess('trashEstimate')."</li>";
        echo '<li>Angebot löschen: '.yii::app()->user->checkAccess('deleteEstimate')."</li>";
        echo'<h3> Kostenbelege</h3>';
        // Kosten
        echo '<li>Kostenbeleg erstellen: '.yii::app()->user->checkAccess('createExpense')."</li>";
        echo '<li>Kostenbeleg anschauen: '.yii::app()->user->checkAccess('readExpense')."</li>";
        echo '<li>Kostenbeleg ändern: '.yii::app()->user->checkAccess('updateExpense')."</li>";
        echo '<li>Kostenbeleg kommentieren: '.yii::app()->user->checkAccess('commentExpense')."</li>";
        echo '<li>Kostenbeleg archivieren: '.yii::app()->user->checkAccess('archiveExpense')."</li>";
        echo '<li>Kostenbeleg drucken: '.yii::app()->user->checkAccess('printExpense')."</li>";
        echo '<li>Kostenbeleg kopieren: '.yii::app()->user->checkAccess('copyExpense');
        echo '<li>aus den Kostenbeleg eine Rechnung erstellen: '.yii::app()->user->checkAccess('convertExpensetoInvoice')."</li>";
        echo '<li>Kostenbeleg in den Papierkorb: '.yii::app()->user->checkAccess('trashExpense')."</li>";
        echo '<li>Kostenbeleg löschen: '.yii::app()->user->checkAccess('deleteExpense')."</li>";
        echo '<li>Kostenbeleg buchen: '.yii::app()->user->checkAccess('bookExpense')."</li>";
        
       /*
        //Projekte
        $auth->createOperation('createProject','<li>Projekt erstellen');
        $auth->createOperation('readProject','<li>Projekt anschauen');
        $auth->createOperation('updateProject','<li>Projekt ändern');
        $auth->createOperation('commentProject','<li>Projekt kommentieren');   
        $auth->createOperation('archiveProject','<li>Projekt archivieren');
        $auth->createOperation('printProject','<li>Projekt drucken');
        $auth->createOperation('convertProjecttoInvoice','<li>aus den Projekt eine Rechnung erstellen');
        $auth->createOperation('trashProject','<li>Projekt in den Papierkorb');
        $auth->createOperation('deleteProject','<li>Projekt löschen');
        
        // Timesheet
        $auth->createOperation('logHours','<li>Stunden erstellen');
        $auth->createOperation('readTimesheet','<li>Stunden anschauen');
        $auth->createOperation('updateHours','<li>Stunden ändern');
        $auth->createOperation('commentHours','<li>Stunden kommentieren');   
        $auth->createOperation('invoiceHours','<li>Stunden archivieren');
        $auth->createOperation('marktHours_asUnbilled','<li>Stunden drucken');
        $auth->createOperation('startTimer','<li>Stunden in den Papierkorb');
        $auth->createOperation('deleteHours','<li>Stunden löschen');
        $auth->createOperation('readTeamTimesheet'<li>
        */
        
        echo '</ul>';
    }
    
}

