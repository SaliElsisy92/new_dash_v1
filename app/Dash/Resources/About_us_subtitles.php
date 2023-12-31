<?php
namespace App\Dash\Resources;
use Dash\Resource;
use App\Models\About;

class About_us_subtitles extends Resource {

	/**
	 * define Model of resource
	 * @param Model Class
	 */
	public static $model = \App\Models\Aboutsubtitle::class ;


	/**
	 * Policy Permission can handel
	 * (viewAny,view,create,update,delete,forceDelete,restore) methods
	 * @param static property as Policy Class
	 */
	//public static $policy = \App\Policies\UserPolicy::class ;

	public static $policy = \App\Policies\showCustom::class;

	/**
	 * define this resource in group to show in navigation menu
	 * if you need to translate a dynamic name
	 * define dash.php in /resources/views/lang/en/dash.php
	 * and add this key directly users
	 * @param static property
	 */
	public static $group = 'About_us';

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
		'id',

	];

	/**
	 *  if you want define relationship searches
	 *  one or Multiple Relations
	 * 	Example: method=> 'invoices'  => columns=>['title'],
	 * @param static array
	 */
	public static $searchWithRelation = [
        'subtitleLangAll' => ['sub_title']
    ];

	/**
	 * if you need to custom resource name in menu navigation
	 * @return string
	 */
	public static function customName() {
		return __("dash::dash.about_us subtitles");
	}

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
            select()->make(__("dash::dash.main_title"),'parent_id')
           ->options(About::all()->pluck('title','id')->toArray())->hideInIndex(),



            text()->make(__("dash::dash.subtitle"), 'sub_title')
            ->translatable([
            'ar' => 'العربية',
            'en' => 'English',
            ]),

            textarea()->make(__("dash::dash.content"), 'content')
            ->translatable([
            'ar' => 'العربية',
            'en' => 'English',
            ])->hideInIndex(),

           // image()->make(__("dash::dash.image"),'image')->accept('image/*'),
            dropzone()->make('Upload Files', 'dropzone')
            // (dropzone) this for id not using a columns in current model
                          ->autoQueue(true)//true|false
                          ->maxFileSize(1000)//mb
                          ->maxFiles(30)// files
                          ->parallelUploads(20)//files
                          ->thumbnailWidth(80)//px
                          ->thumbnailHeight(80)//px
                          ->acceptedMimeTypes( 'image/*')
                          ->hideInIndex(),

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