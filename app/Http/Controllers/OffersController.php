<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
/**
 * Description of OffersController
 *
 * @author emodatt08
 */
class OffersController extends Controller{
    
    
 
        /**
 *Get all resources
 *
 * @return Illuminate\Http\JsonResponse
 */
    public function index(Request $request){
        $specialOffers = \App\Offer::all();
        
        if($specialOffers){
             return response()->json([
            'responseCode'=>'200', 
            'responseMessage' => 'Special offers fetched successfully', 
            'data' => $specialOffers]);
        }else{
              return response()->json([
            'responseCode'=>'404', 
            'responseMessage' => 'Failed to fetch special offers', 
                 ]);
        }
       
    }
    
/**
 * Get one resource
 *
 * @return Illuminate\Http\JsonResponse
 */
    
     public function getOne(Request $request, $id){
        $specialOffer = \App\Offer::find($id);
        
        if($specialOffer){
             return response()->json([
            'responseCode'=>'200', 
            'responseMessage' => 'Special offer fetched successfully', 
            'data' => $specialOffer]);
        }else{
              return response()->json([
            'responseCode'=>'404', 
            'responseMessage' => 'Failed to fetch special offer', 
                 ]);
        }
       
    }
        
    }

