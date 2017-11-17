<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OffersTest
 *
 * @author emodatt08
 */
class OffersTest extends TestCase{
    
/**
 * Get all special offers testing
 *
 * @return void
 */
    public function testGetSpecialOffers(){
        
          $this->json('GET', '/api/v1/specialoffer', [])
             ->seeJson([
                 'responseCode'=>'200', 
                 'responseMessage' => 'Special offers fetched successfully', 
             ]);
    }
    
    
/**
 * Get one special offer testing
 *
 * @return void
 */
     public function testOneSpecialOffer(){
        
          $this->json('GET', '/api/v1/specialoffer/1', [])
             ->seeJson([
                 'responseCode'=>'200', 
                 'responseMessage' => 'Special offer fetched successfully', 
             ]);
    }
}
