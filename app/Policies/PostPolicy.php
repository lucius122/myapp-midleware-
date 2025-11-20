<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function viewAny(User $user) {
        // semua terautentikasi bisa lihat list; atau jika ingin publik, kembalikan true tanpa user
        return true;
    }

    public function view(User $user, Post $post) {
        return true; // semua authenticated bisa lihat detail
    }

    public function create(User $user) {
        // hanya admin boleh create
        return $user->role === 'admin';
    }

    public function update(User $user, Post $post) {
        // hanya admin (atau owner) boleh edit
        return $user->role === 'admin';
        // atau: return $user->role === 'admin' || $user->id === $post->user_id;
    }

    public function delete(User $user, Post $post) {
        return $user->role === 'admin';
    }
}
