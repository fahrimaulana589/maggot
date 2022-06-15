<?php

namespace App\Package\Profile\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Profile\Http\Requsets\ProfileEditRequest;
use App\Package\Profile\Model\Profile;
use App\Package\Profile\Orchid\Layouts\ProfileEdit1Layout;
use App\Package\Profile\Orchid\Layouts\ProfileEdit2Layout;
use App\Package\Profile\service\ProfileService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ProfileEditScreen extends Screen
{
    public $permission = "platform.websites.profile";
    public OrchidComponent $orchidComponent;
    public ProfileService $profileService;

    /**
     * @param OrchidComponent $orchidComponent
     */
    public function __construct(OrchidComponent $orchidComponent,ProfileService $profileService)
    {

        $this->orchidComponent = $orchidComponent;
        $this->profileService = $profileService;

    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $profile = Profile::find(1);
        return [
            "profile" => $profile
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ProfileController';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->orchidComponent->buttonEdit()
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::columns([
                ProfileEdit1Layout::class,
                ProfileEdit2Layout::class,
            ]),

        ];
    }

    public function edit(ProfileEditRequest $request){

        $this->profileService->edit($request);

        $this->orchidComponent->toastSukses("Edit","ProfileController");
    }
}
