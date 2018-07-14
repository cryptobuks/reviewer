<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Spark\Team as SparkTeam;

/**
 * App\Model\Team
 *
 * @property int $id
 * @property int $owner_id
 * @property string $name
 * @property string|null $slug
 * @property string|null $photo_url
 * @property string|null $stripe_id
 * @property string|null $current_billing_plan
 * @property string|null $card_brand
 * @property string|null $card_last_four
 * @property string|null $card_country
 * @property string|null $billing_address
 * @property string|null $billing_address_line_2
 * @property string|null $billing_city
 * @property string|null $billing_state
 * @property string|null $billing_zip
 * @property string|null $billing_country
 * @property string|null $vat_id
 * @property string|null $extra_billing_information
 * @property \Carbon\Carbon $trial_ends_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read string $email
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Spark\Invitation[] $invitations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Kudos[] $kudos
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Spark\LocalInvoice[] $localInvoices
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \App\Model\User $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Spark\TeamSubscription[] $subscriptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\User[] $users
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Team onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereBillingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereBillingAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereBillingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereBillingCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereBillingState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereBillingZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereCardCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereCardLastFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereCurrentBillingPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereExtraBillingInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team wherePhotoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Team whereVatId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Team withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Team withoutTrashed()
 * @mixin \Eloquent
 */
class Team extends SparkTeam
{
    use SoftDeletes;

    public function kudos()
    {
        return $this->hasMany(Kudos::class);
    }
}
