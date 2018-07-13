<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Model{
/**
 * App\Model\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $photo_url
 * @property bool $uses_two_factor_auth
 * @property string|null $authy_id
 * @property string|null $country_code
 * @property string|null $phone
 * @property string|null $two_factor_reset_code
 * @property int|null $current_team_id
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
 * @property string|null $last_read_announcements_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Model|null $current_team
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Spark\Invitation[] $invitations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Kudos[] $kudos
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Spark\LocalInvoice[] $localInvoices
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Team[] $ownedTeams
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Spark\Subscription[] $subscriptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Team[] $teams
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Spark\Token[] $tokens
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereAuthyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereBillingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereBillingAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereBillingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereBillingCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereBillingState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereBillingZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCardCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCardLastFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCurrentBillingPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereExtraBillingInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereLastReadAnnouncementsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User wherePhotoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereTwoFactorResetCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereUsesTwoFactorAuth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereVatId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Model{
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
 */
	class Team extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Kudos
 *
 * @property int $id
 * @property int $user_id
 * @property int $team_id
 * @property int $recognition_user_id
 * @property string $message
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Model\User $recognition
 * @property-read \App\Model\Team $team
 * @property-read \App\Model\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Kudos onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereRecognitionUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Kudos withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Kudos withoutTrashed()
 */
	class Kudos extends \Eloquent {}
}

