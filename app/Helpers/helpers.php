<?php

use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (!function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}

if (!function_exists('activeMenu')) {
    function activeMenu($uri = '', $strToreturn = null)
    {
        if (Request::is($uri)) {
            // $active = 'active';
            return $strToreturn == null ? 'active' : $strToreturn;
        }
        return false;
        // if($strToreturn == null) { return $strToreturn; }
        // else { return $active;}
    }
}

if (!function_exists('adminSideBarMenu')) {
    function adminSideBarMenu($id = null)
    {
        if (auth()->user()) {
            if( $id ) {
                return App\Models\AdminSidebarMenu::where([
                  ['status', '=', 1],
                  ['parent_menu_id', '=', $id],
                ])->get()->toArray();
            }

            $userWithSideBarMenuPermission = auth()->user()->getAllPermissions()
                                            ->filter(
                                                fn($p) => Str::startsWith($p->name, 'admin_sidebarmenu')
                                            )
                                            ->pluck('name')->toArray();

            return App\Models\AdminSidebarMenu::where('status', 1)
                        ->whereIn('permission_value', $userWithSideBarMenuPermission)
                        ->get()->toArray();
        }
        return false;
    }
}
