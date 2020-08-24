<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;

class TopicPolicy extends Policy
{
    public function update(User $user, Topic $topic)
    {
<<<<<<< HEAD
        return $user->isAuthorOf($topic);
=======
        // return $topic->user_id == $user->id;
        return true;
>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
    }

    public function destroy(User $user, Topic $topic)
    {
<<<<<<< HEAD
        return $user->isAuthorOf($topic);
=======
        return true;
>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
    }
}
