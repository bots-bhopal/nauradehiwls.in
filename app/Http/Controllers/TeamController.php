<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Repository\Team\TeamInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class TeamController extends Controller
{
     // Manage Member by Admin Portal
     protected $member;

     public function __construct(TeamInterface $member)
     {
         $this->member = $member;
     }

     public function index()
     {
         $members = $this->member->getAllMembers();

         // Show Member
         if (Auth::user()->role->id == '3' && View::exists('admin.member.index')) {
             return view('admin.member.index', compact('members'));
         } else if (Auth::user()->role->id == '2' && View::exists('superadmin.member.index')) {
             return view('superadmin.member.index', compact('members'));
         } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.member.index')) {
             return view('serveradmin.member.index', compact('members'));
         }
     }

     public function create()
     {
         // Create Member
         if (Auth::user()->role->id == '3' && View::exists('admin.member.create')) {
             return view('admin.member.create');
         } else if (Auth::user()->role->id == '2' && View::exists('superadmin.member.create')) {
             return view('superadmin.member.create');
         } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.member.create')) {
             return view('serveradmin.member.create');
         } else {
             return view('errors.404');
         }
     }

     public function store(StoreMemberRequest $request)
     {
         // Store Member
         $this->member->storeMember($request->validated());

         if (Auth::user()->role->id == '3') {
             return redirect()->route('admin.member.pending')->with('success', __('message.member-success'));
         } else if (Auth::user()->role->id == '2') {
             return redirect()->route('superadmin.member.pending')->with('success', __('message.member-success'));
         } else if (Auth::user()->role->id == '1') {
             return redirect()->route('serveradmin.member.pending')->with('success', __('message.member-success'));
         }
     }

     public function edit($id)
     {
         $members = $this->member->getMember($id);

         // Edit Member
         if ($members) {
             if (Auth::user()->role->id == '3') {
                 return view('admin.member.edit', compact('members'));
             } else if (Auth::user()->role->id == '2') {
                 return view('superadmin.member.edit', compact('members'));
             } else if (Auth::user()->role->id == '1') {
                 return view('serveradmin.member.edit', compact('members'));
             }
         } else {
             if (Auth::user()->role->id == '3') {
                 return redirect()->route('admin.member.index')->with('error', __('message.member-error'));
             } else if (Auth::user()->role->id == '2') {
                 return redirect()->route('superadmin.member.index')->with('error', __('message.member-error'));
             } else if (Auth::user()->role->id == '1') {
                 return redirect()->route('serveradmin.member.index')->with('error', __('message.member-error'));
             }
         }
     }

     public function update(UpdateMemberRequest $request, $id)
     {
         // Update Member
         $this->member->updateMember($request->validated(), $id);

         if (Auth::user()->role->id == '3') {
             return redirect()->route('admin.member.index')->with('success', __('message.member-update'));
         } else if (Auth::user()->role->id == '2' && $request->status == '0') {
             return redirect()->route('superadmin.member.index')->with('success', __('message.member-update'));
         } else if (Auth::user()->role->id == '2' && $request->status == '1') {
             return redirect()->route('superadmin.member.pending')->with('success', __('message.member-update'));
         } else if (Auth::user()->role->id == '1') {
             return redirect()->route('serveradmin.member.index')->with('success', __('message.member-update'));
         }
     }

     public function destroy($id)
     {
         // Delete Member
         $this->member->deleteMember($id);

         if (Auth::user()->role->id == '3') {
             return redirect()->back()->with('error', __('message.member-delete'));
         } else if (Auth::user()->role->id == '2') {
             return redirect()->back()->with('error', __('message.member-delete'));
         } else if (Auth::user()->role->id == '1') {
             return redirect()->back()->with('error', __('message.member-delete'));
         }
     }

     public function pendingMembers()
     {
         // Display Pending Members
         $pendingMember = $this->member->pendingMembers();

         if (Auth::user()->role->id == '3' && View::exists('admin.member.pending')) {
             return view('admin.member.pending', compact('pendingMember'));
         } else if (Auth::user()->role->id == '2' && View::exists('superadmin.member.pending')) {
             return view('superadmin.member.pending', compact('pendingMember'));
         } else if (Auth::user()->role->id == '1' && View::exists('serveradmin.member.pending')) {
             return view('serveradmin.member.pending', compact('pendingMember'));
         }
     }
}
