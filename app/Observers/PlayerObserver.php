<?php

namespace App\Observers;

use App\Models\Player;

class PlayerObserver
{
    /**
     * Handle the Player "created" event.
     *
     * @param  \App\Models\Player  $player
     * @return void
     */
    public function created(Player $player)
    {
        //
    }

    /**
     * Handle the Player "updated" event.
     *
     * @param  \App\Models\Player  $player
     * @return void
     */
    public function updated(Player $player)
    {
        //
    }

    /**
     * Handle the Player "deleted" event.
     *
     * @param  \App\Models\Player  $player
     * @return void
     */
    public function deleted(Player $player)
    {
        //
    }

    /**
     * Handle the Player "restored" event.
     *
     * @param  \App\Models\Player  $player
     * @return void
     */
    public function restored(Player $player)
    {
        //
    }

    /**
     * Handle the Player "force deleted" event.
     *
     * @param  \App\Models\Player  $player
     * @return void
     */
    public function forceDeleted(Player $player)
    {
        //
    }
}
