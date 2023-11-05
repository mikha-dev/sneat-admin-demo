<?php

use Dcat\Admin\Admin;

return [

    'footer' => [
        'powered_by' => env('POWERED_BY', 'Powered by <a class="footer-link fw-medium" target="_blank" href="https://dev4traders.com">dev4taders</a>'),
        'menu' => '<a href="#" class="footer-link me-4" target="_blank">Documentation</a><a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>'
    ],
    'meta' => [
        'description' => '',
        'keywords' => '',
        'disable_referrer' => true
    ],
    'layout' => [
        // modes: dark, light, system
        'mode' => 'light',
        // directions: ltr, rtl
        'dir' => 'ltr',

        //content types: container-xxl, layout-compact, layout-wide
        'content_type' => 'container-xxl',
    ],

    'auth' => [
        'allow_register' => true,
        'allow-reset-password' => true,
        'allow-socials'
    ],

    //todo::rm
    //'disable_no_referrer_meta' => true,
    'paginate-default' => env('PAGINATE_DEF', 20),
    'login-layout' => env('LOGIN_LAYOUT', 'primary'),
    'powered' => env('POWERED_BY', 'Powered by <a target="_blank" href="https://dev4traders.com">dev4taders</a>'),
    'allow-register' => env('ALLOW_REGISTER', false),
    'registration-activation-enabled' => env('REGISTRATION_ACTIVATION_ENABLED', false),
    'allow-reset-password' => env('ALLOW_RESET_PASSWORD', false),
    'login-image' => env('LOGIN_IMAGE', 'images/login.png'),
    'login-background-image' => env('LOGIN_BACKGROUND_IMAGE', 'images/login-bg.jpg'),

    'recaptch-enabled' => env('ENABLE_RECAPTCHA', false),
    'recaptch-site'   => env('RE_CAP_SITE', 'YOURGOOGLECAPTCHAsitekeyHERE'),
    'recaptch-secret' => env('RE_CAP_SECRET', 'YOURGOOGLECAPTCHAsecretHERE'),
    'version' => env('VERSION', 'v'.Dcat\Admin\Admin::VERSION),

    'supported_locales' => [
        'en' => 'English',
        'es' => 'Spain',
        'pt' => 'Portugal',
    ],
    /*
    |--------------------------------------------------------------------------
    | dcat-admin name
    |--------------------------------------------------------------------------
    |
    | This value is the name of dcat-admin, This setting is displayed on the
    | login page.
    |
    */
    'name'      => env('APP_NAME'),

    'version' => env('VERSION', 'v'.Admin::VERSION),
    /*
    |--------------------------------------------------------------------------
    | dcat-admin logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages. You can also set it as an image by using a
    | `img` tag, eg '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo-image'      => env('APP_LOGO_IMAGE', 'images/logo.png'),

    /*
    |--------------------------------------------------------------------------
    | dcat-admin mini logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages when the sidebar menu is collapsed. You can
    | also set it as an image by using a `img` tag, eg
    | '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo-mini' => env('APP_LOGO_MINI', 'images/logo-mini.png'),
    /*
    |--------------------------------------------------------------------------
    | dcat-admin favicon
    |--------------------------------------------------------------------------
    |
    */
    'icons' => [
        'icon-32' => 'images/icon-32.png',
        'icon-192' => 'images/icon-192.png'
    ],

    /*
     |--------------------------------------------------------------------------
     | User default avatar
     |--------------------------------------------------------------------------
     |
     | Set a default avatar for newly created users.
     |
     */
    'default_avatar' => '@admin/images/default-avatar.png',

    /*
    |--------------------------------------------------------------------------
    | dcat-admin route settings
    |--------------------------------------------------------------------------
    |
    | The routing configuration of the admin page, including the path prefix,
    | the controller namespace, and the default middleware. If you want to
    | access through the root path, just set the prefix to empty string.
    |
    */
    'route' => [
        'domain' => env('ADMIN_ROUTE_DOMAIN'),

        'prefix' => env('ADMIN_ROUTE_PREFIX', 'admin'),

        'namespace' => 'App\\Admin\\Controllers',

        'middleware' => ['web', 'admin'],
        'enable_session_middleware' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | dcat-admin install directory
    |--------------------------------------------------------------------------
    |
    | The installation directory of the controller and routing configuration
    | files of the administration page. The default is `app/Admin`, which must
    | be set before running `artisan admin::install` to take effect.
    |
    */
    'directory' => app_path('Admin'),

    /*
    |--------------------------------------------------------------------------
    | dcat-admin html title
    |--------------------------------------------------------------------------
    |
    | Html title for all pages.
    |
    */
    'title'  => env('APP_NAME'),

    /*
    |--------------------------------------------------------------------------
    | Assets hostname
    |--------------------------------------------------------------------------
    |
   */
    'assets_server' => env('ADMIN_ASSETS_SERVER'),

    /*
    |--------------------------------------------------------------------------
    | Access via `https`
    |--------------------------------------------------------------------------
    |
    | If your page is going to be accessed via https, set it to `true`.
    |
    */
    'https' => env('ADMIN_HTTPS', false),

    /*
    |--------------------------------------------------------------------------
    | dcat-admin auth setting
    |--------------------------------------------------------------------------
    |
    | Authentication settings for all admin pages. Include an authentication
    | guard and a user provider setting of authentication driver.
    |
    | You can specify a controller for `login` `logout` and other auth routes.
    |
    */
    'auth' => [
        'enable' => true,

        'controller' => App\Admin\Controllers\AuthController::class,

        'guard' => 'admin',

        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'admin',
            ],
        ],

        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => Dcat\Admin\Models\Administrator::class,
            ],
        ],

        // Add "remember me" to login form
        'remember' => true,

        // All method to path like: auth/users/*/edit
        // or specific method to path like: get:auth/users.
        'except' => [
            'auth/login',
            'auth/logout',
        ],
        'enable_session_middleware' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | The global Grid setting
    |--------------------------------------------------------------------------
    */
    'grid' => [

        // The global Grid action display class.
        'grid_action_class' => Dcat\Admin\Grid\Displayers\DropdownActions::class,

        // The global Grid batch action display class.
        'batch_action_class' => Dcat\Admin\Grid\Tools\BatchActions::class,

        // The global Grid pagination display class.
        'paginator_class' => Dcat\Admin\Grid\Tools\Paginator::class,

        'actions' => [
            'view' => Dcat\Admin\Grid\Actions\Show::class,
            'edit' => Dcat\Admin\Grid\Actions\Edit::class,
            'quick_edit' => Dcat\Admin\Grid\Actions\QuickEdit::class,
            'delete' => Dcat\Admin\Grid\Actions\Delete::class,
            'batch_delete' => Dcat\Admin\Grid\Tools\BatchDelete::class,
        ],

        // The global Grid column selector setting.
        'column_selector' => [
            'store' => Dcat\Admin\Grid\ColumnSelector\SessionStore::class,
            'store_params' => [
                'driver' => 'file',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | dcat-admin helpers setting.
    |--------------------------------------------------------------------------
    */
    'helpers' => [
        'enable' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | dcat-admin permission setting
    |--------------------------------------------------------------------------
    |
    | Permission settings for all admin pages.
    |
    */
    'permission' => [
        // Whether enable permission.
        'enable' => true,

        // All method to path like: auth/users/*/edit
        // or specific method to path like: get:auth/users.
        'except' => [
            '/',
            'auth/login',
            'auth/logout',
            'auth/setting',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | dcat-admin menu setting
    |--------------------------------------------------------------------------
    |
    */
    'menu' => [
        'cache' => [
            // enable cache or not
            'enable' => false,
            'store'  => 'file',
        ],

        // Whether enable menu bind to a permission.
        'bind_permission' => true,

        // Whether enable role bind to menu.
        'role_bind_menu' => false,

        // Whether enable permission bind to menu.
        'permission_bind_menu' => false,

        'default_icon' => 'fa icon-check',
    ],

    /*
    |--------------------------------------------------------------------------
    | dcat-admin upload setting
    |--------------------------------------------------------------------------
    |
    | File system configuration for form upload files and images, including
    | disk and upload path.
    |
    */
    'upload' => [

        // Disk in `config/filesystem.php`.
        'disk' => 'public',

        // Image and file upload path under the disk above.
        'directory' => [
            'image' => 'images',
            'file'  => 'files',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | dcat-admin database settings
    |--------------------------------------------------------------------------
    |
    | Here are database settings for dcat-admin builtin model & tables.
    |
    */
    'database' => [

        // Database connection for following tables.
        'connection' => '',

        // User tables and model.
        'users_table' => 'admin_users',
        'users_model' => Dcat\Admin\Models\Administrator::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => Dcat\Admin\Models\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => Dcat\Admin\Models\Permission::class,

        // Menu table and model.
        'menu_table' => 'admin_menu',
        'menu_model' => Dcat\Admin\Models\Menu::class,

        'domains_table' => 'admin_domains',
        'domains_model' => Dcat\Admin\Models\Domain::class,
        // Pivot table for table above.
        'role_users_table'       => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table'        => 'admin_role_menu',
        'permission_menu_table'  => 'admin_permission_menu',
        'settings_table'         => 'admin_settings',
        'extensions_table'       => 'admin_extensions',
        'extension_histories_table' => 'admin_extension_histories',
        'domain_role_defaults_table' => 'admin_domain_role_defaults'
    ],

    /*
    |--------------------------------------------------------------------------
    | Application layout
    |--------------------------------------------------------------------------
    |
    | This value is the layout of admin pages.
    */
    // 'layout' => [
    //     // default, blue, blue-light, green
    //     'color' => 'default',

    //     // sidebar-separate
    //     'body_class' => [''],
    //     'horizontal_menu' => false,

    //     'sidebar_collapsed' => false,

    //     // light, primary, dark
    //     'sidebar_style' => 'light',

    //     'dark_mode_switch' => true,

    //     // bg-primary, bg-info, bg-warning, bg-success, bg-danger, bg-dark
    //     'navbar_color' => '',
    // ],

    /*
    |--------------------------------------------------------------------------
    | The exception handler class
    |--------------------------------------------------------------------------
    |
    */
    'exception_handler' => Dcat\Admin\Exception\Handler::class,

    /*
    |--------------------------------------------------------------------------
    | Enable default breadcrumb
    |--------------------------------------------------------------------------
    |
    | Whether enable default breadcrumb for every page content.
    */
    'enable_default_breadcrumb' => true,

    /*
    |--------------------------------------------------------------------------
    | Extension
    |--------------------------------------------------------------------------
    */
    'extension' => [
        // When you use command `php artisan admin:ext-make` to generate extensions,
        // the extension files will be generated in this directory.
        'dir' => base_path('dcat-admin-extensions'),
    ],
];