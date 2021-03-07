<?php

namespace App\Observers;

use App\Models\Plan;

class PlanObserver
{

    public function creating(Plan $plan)
    {
        $plan->url = \Str::kebab($plan->name);
    }

    public function created(Plan $plan)
    {
        //
    }

    public function updated(Plan $plan)
    {
        //
    }

    public function deleted(Plan $plan)
    {
        //
    }


    public function restored(Plan $plan)
    {
        //
    }


    public function forceDeleted(Plan $plan)
    {
        //
    }
}
