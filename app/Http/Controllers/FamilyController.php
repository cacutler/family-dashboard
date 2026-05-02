<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class FamilyController extends Controller {
    /**
     * List the authenticated parent's children.
     */
    public function index() {}
    /**
     * Link an existing child account to this parent by username.
     * A child may have at most 2 parents.
     * POST /family/link
     * { "username": "child_username" }
     */
    public function link() {}
    /**
     * Remove a child from this parent's family.
     * DELETE /family/{user}
     */
    public function unlink() {}
    /**
     * List the parents linked to a child account (visible to the child and their parents).
     * GET /family/{user}/parents
     */
    public function parents() {}
}