<?php

namespace App\Http\Controllers;

use App\Package\Menu\service\MenuService;
use App\Package\Profile\Model\Profile;
use App\Package\Profile\service\ProfileService;
use App\Package\Slide\Model\Slide;
use App\Package\Slide\service\SlideService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public ProfileService $profileService;
    public SlideService $slideService;
    public MenuService $menuService;

    /**
     * @param ProfileService $profileService
     * @param SlideService $slideService
     * @param MenuService $menuService
     */
    public function __construct(ProfileService $profileService, SlideService $slideService, MenuService $menuService)
    {
        $this->profileService = $profileService;
        $this->slideService = $slideService;
        $this->menuService = $menuService;
    }

    public function get(){

        return response()->json([
            'profile' => $this->profileService->get(),
            'slide' => $this->slideService->getAll(),
            'menu' => $this->menuService->getAll()
        ]);
    }
}
