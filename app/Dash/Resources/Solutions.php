<?php
namespace App\Dash\Resources;
use Dash\Resource;
use App\Models\Solution;
use App\Models\SolutionTranslation;
use App\Dash\Resources\Solution_subTitles;
use App\Dash\Resources\SolutionsubtitleTranslation;
use  App\Models\Solution_subTitle;
use Illuminate\Contracts\Database\Query\Builder;

class Solutions extends Resource {

	/**
	 * define Model of resource
	 * @param Model Class
	 */
	public static $model = \App\Models\Solution::class ;


	/**
	 * Policy Permission can handel
	 * (viewAny,view,create,update,delete,forceDelete,restore) methods
	 * @param static property as Policy Class
	 */
	//public static $policy = \App\Policies\UserPolicy::class ;

	/**
	 * define this resource in group to show in navigation menu
	 * if you need to translate a dynamic name
	 * define dash.php in /resources/views/lang/en/dash.php
	 * and add this key directly users
	 * @param static property
	 */
	public static $group = 'Solutions&Services';

	/**
	 * show or hide resouce In Navigation Menu true|false
	 * @param static property string
	 */
	public static $displayInMenu = true;

	/**
	 * change icon in navigation menu
	 * you can use font awesome icons LIKE (<i class="fa fa-users"></i>)
	 * @param static property string
	 */
	public static $icon = '<i class="fa fa-edit"></i>'; // put <i> tag or icon name

	/**
	 * title static property to labels in Rows,Show,Forms
	 * @param static property string
	 */
	public static $title = 'name';

	/**
	 * defining column name to enable or disable search in main resource page
	 * @param static property array
	 */
	public static $search = [
         "id"

	];

	/**
	 *  if you want define relationship searches
	 *  one or Multiple Relations
	 * 	Example: method=> 'invoices'  => columns=>['title'],
	 * @param static array
	 */
	public static $searchWithRelation = [
        'titleLangAll' =>['title']
    ];

	/**
	 * if you need to custom resource name in menu navigation
	 * @return string
	 */
	public static function customName() {
		return __("dash::dash.solutions&services_titles");
	}


    /* public function query($model) {

         $titles = Solution::select("*")->with([
            'sub_title' => function(){
                Solution_subTitle::with(['subtitleLangAll'])->pluck('sub_title','id');
            }
        ]);

     }*/

	/**
	 * you can define vertext in header of page like (Card,HTML,view blade)
	 * @return array
	 */
	public static function vertex() {
		return [];
	}

	/**
	 * define fields by Helpers
	 * @return array
	 */
	public function fields() {
		return [
			id()->make(__('dash::dash.id'), 'id')->hideInAll(),

            text()->make(__("dash::dash.main_title"), 'title')
            ->translatable([
            'ar' => 'العربية',
            'en' => 'English',
            ]),

          /*   textarea()->make(__("dash::dash.content"), 'content')
            ->translatable([
            'ar' => 'العربية',
            'en' => 'English',
            ])->hideInIndex()->default('null'),

            image()->make(__("dash::dash.image"),'image')->default('null')
            ->accept('image/*'),
          // hasMany()->make('subtitles','sub_title',Solution_subTitles::class),

          //  hasManyThrough()->make('subtitles', 'subtitles',SolutionsubtitleTranslation ::class)
         //   ->hideInIndex(), */



		];
	}

	/**
	 * define the actions To Using in Resource (index,show)
	 * php artisan dash:make-action ActionName
	 * @return array
	 */
	public function actions() {
		return [];
	}

	/**
	 * define the filters To Using in Resource (index)
	 * php artisan dash:make-filter FilterName
	 * @return array
	 */
	public function filters() {
		return [];
	}

}