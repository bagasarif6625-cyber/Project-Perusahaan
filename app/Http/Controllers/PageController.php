<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;

class PageController extends Controller
{
    public function home()
    {
        $stats = [
            ['value' => now()->year - config('company.founded'), 'suffix' => '+', 'label' => 'Tahun pengalaman'],
            ['value' => Project::count(), 'suffix' => '+', 'label' => 'Proyek selesai'],
            ['value' => config('company.stats.clients'), 'suffix' => '+', 'label' => 'Klien aktif'],
            ['value' => config('company.stats.satisfaction'), 'suffix' => '%', 'label' => 'Kepuasan klien'],
        ];

        return view('pages.home', [
            'stats'    => $stats,
            'services' => Service::orderBy('sort')->take(3)->get(),
            'projects' => Project::latest('year')->latest('id')->take(3)->get(),
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'team' => TeamMember::orderBy('sort')->get(),
        ]);
    }

    public function services()
    {
        return view('pages.services', [
            'services' => Service::orderBy('sort')->get(),
        ]);
    }

    public function portfolio()
    {
        return view('pages.portfolio', [
            'projects'   => Project::latest('year')->latest('id')->get(),
            'categories' => Project::select('category')->distinct()->orderBy('category')->pluck('category'),
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
