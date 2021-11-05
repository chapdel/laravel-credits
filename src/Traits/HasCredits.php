<?php

namespace Chapdel\Credits\Traits;

use Chapdel\Credit\Credit;

trait HasCredits
{

    /**
     * Get the credit amount for specified model
     * @return mixed
     */
    public function credit()
    {
        return $this->morphOne(Credit::class, "creditable");
    }

    /**
     * Init credits
     * @return mixed
     */
    public function initCredits()
    {
        return $this->credit()->create(["amount" => config("credit.initial")]);
    }

    /**
     * Handles updating the model's credits
     *
     * @param $amount
     * @return mixed
     */
    public function updateCredits($amount)
    {
        return $this->credit()->update(['amount' => $amount]);
    }

    /**
     * Handles adding more credits to the model
     * amount of credits.
     *
     * @param $amount
     * @return mixed
     */
    public function addCredits($amount)
    {
        $credit = $this->credit;
        $credit->amount = $credit->amount + $amount;
        $credit->save();
        return $credit;
    }

    /**
     * Handles deducting credits from the model
     * amount of credits
     *
     * @param $amount
     * @return mixed
     */
    public function deductCredits($amount)
    {
        $credit = $this->credit;
        $credit->amount = $credit->amount - $amount;
        $credit->save();
        return $credit;
    }

    /**
     * Get the credit amount for specified attribute
     * @return mixed
     */
    public function getCreditAttribute()
    {
        return $this->credit?->amount ?: null;
    }
}
