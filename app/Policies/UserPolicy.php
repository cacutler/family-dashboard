<?php
namespace App\Policies;
use App\Models\User;
class UserPolicy {
    public function viewAny(User $user): bool {
        return true;
    }
    /**
     * A user may view another profile if they are family members.
     */
    public function view(User $user, User $target): bool {
        return $user->id === $target->id || $user->isFamilyMember($target);
    }
    /**
     * A parent may link a child account that has fewer than 2 parents.
     */
    public function linkChild(User $user, User $target): bool {
        return $user->isParent() && $target->isChild() && ! $target->parents->contains('id', $user->id) && $target->parents->count() < 2;
    }
}