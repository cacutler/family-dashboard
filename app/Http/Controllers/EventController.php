<?php
namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class EventController extends Controller {
    /**
     * Return all events visible to the authenticated user (own events + family members' events).
     */
    public function index() {}
    public function show() {}
    public function store() {}
    public function update() {}
    public function destroy() {}
}