<?php

namespace App\Observers;

use App\Models\Barangay;
use App\Services\ActivityLogsService;

class BarangayObserver
{
    protected $service;

    public function __construct(ActivityLogsService $service)
    {
        $this->service = $service;
    }
    
    /**
     * Handle the Barangay "created" event.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return void
     */
    public function created(Barangay $barangay)
    {
        $this->service->log_activity(model:$barangay, event:'added', model_name:'Barangay', model_property_name: $barangay->name);
    }

    /**
     * Handle the Barangay "updated" event.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return void
     */
    public function updated(Barangay $barangay)
    {
        $this->service->log_activity(model:$barangay, event:'updated', model_name:'Barangay', model_property_name: $barangay->name);
    }

    /**
     * Handle the Barangay "deleted" event.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return void
     */
    public function deleted(Barangay $barangay)
    {
        $this->service->log_activity(model:$barangay, event:'deleted', model_name:'Barangay', model_property_name: $barangay->name);
    }

    /**
     * Handle the Barangay "restored" event.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return void
     */
    public function restored(Barangay $barangay)
    {
        //
    }

    /**
     * Handle the Barangay "force deleted" event.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return void
     */
    public function forceDeleted(Barangay $barangay)
    {
        //
    }
}