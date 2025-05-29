<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Room;
use App\SchoolClass;  // Import model SchoolClass

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count(); // Mengambil jumlah total pengguna
        $totalRooms = Room::count(); // Mengambil jumlah total ruangan
        $totalCourses = \App\Course::count(); // Mengambil jumlah total course
        $totalClasses = SchoolClass::count(); // Mengambil jumlah total kelas

        return view('home', compact('totalUsers', 'totalRooms', 'totalCourses', 'totalClasses')); // Kirim totalCourses ke view
    }
}
