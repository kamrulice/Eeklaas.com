<?php 
namespace App\Helpers;
	/**
	 * Image Helper
	 */

	use App\User;
	use App\Helpers\GravatarHelper;


	class ImageHelper
	{
		
		public static function getUserImage($id)
		{
			$user = User::find($id);
			$avatar_url = "";
			if (!is_null($user)) {
				if ($user->avatar == NULL) {
					// Return Gravatara Image
					if (GravatarHelper::validate_gravatar($user->email)) {
						$avatar_url = GravatarHelper::gravatar_image($user->email, 40);
					}else{
						//When there is no gravatar image
						$avatar_url = url('uploads/defaults/def_user.png');
					}
				}else{
					// Return That image
					$avatar_url = url('images/users/' . $user->avatar);
				}
			}else{
				// return redirect('/');
			}
			return $avatar_url;
		}
	}