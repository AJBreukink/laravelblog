<?php

namespace App;



use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
<<<<<<< HEAD
=======

  public function AttachRole($id){

    $user = User::find($id)->get();

// role attach alias
$user->attachRole($admin); // parameter can be an Role object, array, or id

// or eloquent's original technique
$user->roles()->attach($admin->id); // id only
  }
>>>>>>> 197cac121c58e31b785aa133495de658041caf41
}

/* use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    $this->belongsTo(User::class);
}*/
