<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProgramRegistration;
use App\Notifications\ApplicationAccepted;
use App\Notifications\ApplicationRejected;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.dashboard');
    }

    // Show pending applications
    public function pending()
    {
        $applications = ProgramRegistration::with('user')
            ->where('status', 'pending')
            ->get();
            
        return view('admin.pending', compact('applications'));
    }

    // Show accepted applications
    public function acceptedApplications()
    {
        $applications = ProgramRegistration::with('user')
            ->where('status', 'accepted')
            ->get();
            
        return view('admin.accepted', compact('applications'));
    }

    // Show rejected applications
    public function rejectedApplications()
    {
        $applications = ProgramRegistration::with('user')
            ->where('status', 'rejected')
            ->get();
            
        return view('admin.rejected', compact('applications'));
    }

    // Show missing documents applications
    public function missingDocuments()
    {
        $applications = ProgramRegistration::with('user')
            ->where('status', 'missing_documents')
            ->get();
            
        return view('admin.missing-docs', compact('applications'));
    }

    // Show all users with status
    public function allUsers()
    {
        $users = User::leftJoin('program_registrations', 'users.id', '=', 'program_registrations.user_id')
            ->select('users.*', 'program_registrations.status')
            ->get();
            
        return view('admin.users', compact('users'));
    }

    public function updateStatus(Request $request, ProgramRegistration $application)
    {
        $request->validate([
            'status' => 'required|in:accepted,missing_documents,rejected',
            'rejection_reason' => 'nullable|string|max:255' // Add this
        ]);

        $previousStatus = $application->status;
        $application->update(['status' => $request->status]);

        // Send notifications
        $user = $application->user;
        
        if ($request->status === 'accepted') {
            $user->notify(new ApplicationAccepted());
        } elseif ($request->status === 'rejected') {
            $user->notify(new ApplicationRejected($request->rejection_reason));
        }

        return redirect()->back()->with('success', 'Status updated successfully.');
    }
}
