<?php

namespace App\Repository\Team;

use App\Models\Team;
use App\Repository\Team\TeamInterface;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\fileExists;

class TeamRepository implements TeamInterface
{
    public function getAllMembers()
    {
        // Show All Members for serveradmin and superadmin
        return $members = Team::where('status', '0')->orderBy('id', 'DESC')->get();
    }

    public function storeMember($data)
    {
        $image = Request::file('image');

        // Create Member
        if (fileExists($image)) {
            $newFile = time() . $image->getClientOriginalName();
            $image->storeAs('public/member_image', $newFile);
        }

        $members = Team::create([
            'user_id' => Auth::id(),
            'name' => Request::input('name'),
            'designation' => Request::input('designation'),
            'about_me' => Request::input('aboutme'),
            'image' => $newFile,
        ]);

        $members->save();

        return $members;
    }

    public function getMember($id)
    {
        // Edit Member for serveradmin and superadmin
        return Team::find($id);
    }

    public function updateMember($data, $id = null)
    {
        // Update Member
        $members = Team::find($id);
        $image = Request::file('image');
        $old_image = Request::input('h_image');

        // Update Single Image
        if (is_null($image)) {
            $members->image = $old_image;
        } else {
            $name = $image->getClientOriginalName();
            $newImage = $members->image =  time() . $name;
            $image->storeAs('public/member_image', $newImage);
            $path = public_path() . "/storage/member_image/";
            if (file_exists($path . $old_image)) {
                unlink($path . $old_image);
            }
        }

        $members->update([
            'name' => Request::input('name'),
            'designation' => Request::input('designation'),
            'about_me' => Request::input('aboutme'),
            'status' => Request::input('status'),
        ]);

        $members->update();

        return $members;
    }

    public function deleteMember($id)
    {
        // Delete Member
        $members = Team::where('id', $id)->firstOrFail();

        if (!$members) {
            return redirect()->route('newses.index')->with('error', 'Member not found !!');
        } else {
            $image = "/public/member_image/" . $members->image;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            if ($members) {
                $members->delete();
                cleanup($members->getTable());
            }

            return $members;
        }
    }

    public function pendingMembers()
    {
        // Display only pending members for serveradmin & superadmin
        return $pendingMembers = Team::where('status', '1')->orderBy('id', 'DESC')->get();
    }
}
