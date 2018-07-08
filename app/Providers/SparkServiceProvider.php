<?php

namespace App\Providers;

use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'mquinn123',
        'product' => 'Reviewer',
        'street' => 'PO Box 111',
        'location' => 'Your Town, NY 12345',
        'phone' => '555-555-5555',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = null;

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        //
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = true;

    /**
     * Finish configuring Spark for the application.
     *
     * @return void
     */
    public function booted()
    {
        Spark::useStripe()->noCardUpFront()->teamTrialDays(360);

        Spark::freeTeamPlan()
            ->maxTeamMembers(5)
            ->features([
                'Supports 5 members.',
                'Second',
                'Third'
            ])
            ->maxTeams(1);

        Spark::teamPlan('Basic', 'provider-id-1')
            ->price(10)
            ->maxTeamMembers(100)
            ->features([
                'Support 100 members',
                'Second',
                'Third'
            ])
            ->maxTeams(1);
    }
}
