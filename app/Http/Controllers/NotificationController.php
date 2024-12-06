<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class NotificationController extends Controller
{
    // Fetch and display notifications
    public function notifications()
    {
        $userId = Auth::id();
        $notifications = Notification::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
        $unreadCount = Notification::where('user_id', $userId)->where('is_read', false)->count();

        Notification::where('user_id', $userId)->where('is_read', false)->update(['is_read' => true]);

        return view('notifications', compact('notifications', 'unreadCount'));
    }

    // Delete a notification
    public function destroy($id)
    {
        Notification::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Notification removed successfully');
    }
}