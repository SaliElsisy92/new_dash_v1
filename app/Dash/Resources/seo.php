<?php
namespace App\Dash\Resources;
use Dash\Resource;

class seo extends Resource {

	/**
	 * define Model of resource
	 * @param Model Class
	 */
	public static $model = \App\Models\Seo::class ;


	/**
	 * Policy Permission can handel
	 * (viewAny,view,create,update,delete,forceDelete,restore) methods
	 * @param static property as Policy Class
	 */
    public static $policy = \App\Policies\Custom::class ;

	/**
	 * define this resource in group to show in navigation menu
	 * if you need to translate a dynamic name
	 * define dash.php in /resources/views/lang/en/dash.php
	 * and add this key directly users
	 * @param static property
	 */
	public static $group = 'seo';

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
	public static $icon = '<i class="fa fa-search"></i>'; // put <i> tag or icon name

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
		'name',
	];

	/**
	 *  if you want define relationship searches
	 *  one or Multiple Relations
	 * 	Example: method=> 'invoices'  => columns=>['title'],
	 * @param static array
	 */
	public static $searchWithRelation = [];

	/**
	 * if you need to custom resource name in menu navigation
	 * @return string
	 */
    public static function customName() {
        return __('dash.seo');
    }

	/**
	 * you can define vertext in header of page like (Card,HTML,view blade)
	 * @return array
	 */
	public static function vertex() {
		return [];
	}

    public static $paging=false;

	/**
	 * define fields by Helpers
	 * @return array
	 */
	public function fields() {
        return [
            id()->make(__('dash::dash.id'), 'id') ->hideInIndex(),
            text() ->make(__('dash::dash.url'), 'url')
                ->ruleWhenCreate('string', 'min:4')
                ->ruleWhenUpdate('string', 'min:4')
                ->columnWhenCreate(6)
                ->showInShow()
                ->hideInIndex()
            ,
            text() ->make(__('dash::dash.author'), 'author')
                ->ruleWhenCreate('string', 'min:4')
                ->ruleWhenUpdate('string', 'min:4')
                ->columnWhenCreate(6)
                ->showInShow()
                ->hideInIndex(),
            text() ->make(__('dash::dash.name'), 'name')
                ->translatable([
                    'ar' => 'العربية',
                    'en' => 'English',
                ])
                ->ruleWhenCreate('string', 'min:4')
                ->ruleWhenUpdate('string', 'min:4')
                ->columnWhenCreate(6)
                ->showInShow(),

            ckeditor() ->make(__('dash::dash.desc'), 'desc')
                ->translatable([
                    'ar' => 'العربية',
                    'en' => 'English',
                ])
                ->ruleWhenCreate('string', 'min:4')
                ->ruleWhenUpdate('string', 'min:4')
                ->columnWhenCreate(6)
                ->showInShow()
                ->hideInIndex(),
            text() ->make(__('dash::dash.keys'), 'keys')
                ->translatable([
                    'ar' => 'العربية',
                    'en' => 'English',
                ])
                ->ruleWhenCreate('string', 'min:4')
                ->ruleWhenUpdate('string', 'min:4')
                ->columnWhenCreate(6)
                ->showInShow()
                ->hideInIndex(),
            image()->make(__('dash::dash.image'), 'image')
                ->path('storage//storage/app/improvement')
                ->column(6)
                ->accept('image/png', 'image/jpeg'),
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
