<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$baranches = array(
    1=>array(1,'office1',
            array(
                array(12,'b1',array(
                    array(20,'b123',array()),
                    array(23,'b124',array()),
                    array(24,'b345',array())
                )),
                array(13,'b2',array()),
                array(14,'b3',array()),
                array(15,'b4',array())
                
            )
        
      ),
    2=>array(2,'office2',array())
  
);
if($_POST['action'] == "ok") {
  

  echo json_encode($baranches[$_POST['data_id']]);
}