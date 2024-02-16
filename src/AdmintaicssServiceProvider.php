<?php

namespace Pedronicpa\Admintaicss;

use Illuminate\Support\ServiceProvider;

class AdmintaicssServiceProvider extends ServiceProvider
{
    
 public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admintaicss');        
    }
  
    
}
