<?php

namespace App\Repository\Team;

interface TeamInterface
{
    public function getAllMembers();
    public function storeMember($data);
    public function getMember($id);
    public function updateMember($data, $id = null);
    public function deleteMember($id);
    public function pendingMembers();
}
