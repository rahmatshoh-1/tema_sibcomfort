 <?php

use App\Http\Controllers\Auth\AdminAuthController;
    use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrusController;
use App\Http\Controllers\CatalogController;
    use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\AddInfoController;
use App\Http\Controllers\Dashboard\AdminController;
    use App\Http\Controllers\Dashboard\CategoryController;
    use App\Http\Controllers\Dashboard\ContactController as DashboardContactController;
    use App\Http\Controllers\Dashboard\EditorUploadController;
    use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\PDFUploadController;
use App\Http\Controllers\Dashboard\PostController as DashboardPostController;
use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\Dashboard\ProjectController;
    use App\Http\Controllers\Dashboard\ReviewsController;
    use App\Http\Controllers\FrameHouseController;
    use App\Http\Controllers\IpotekaController;
    use App\Http\Controllers\HomeController;
use App\Http\Controllers\LumberController;
use App\Http\Controllers\ManualCuttingController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\MoldedHouseController;
    use App\Http\Controllers\PartnerController;
    use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductionController;
    use App\Http\Controllers\ReadyProjectController;
    use App\Http\Controllers\SliderController;
    use App\Mail\SendCatalogProjectsMail;
    use App\Mail\SendClientInfoMail;
    use App\Models\Post;
    use App\Models\Project;
    use App\Models\Review;
    use App\Models\Slider;
    use Illuminate\Foundation\Application;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Session;
    use Inertia\Inertia;

    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/underdevelopment', function () {
        return view('underdevelopment');
    });
    Route::get('/social', function () {
        return inertia('Social');
    });


    Route::get('/', HomeController::class)->name('home');
    Route::get('/posts', [PostController::class, 'index'])->name("posts");
    Route::get('/post/{slug}', [PostController::class, 'single'])->name('post.single');
     Route::get('/partners', PartnerController::class)->name('partners');
    Route::get('/production', ProductionController::class)->name('production');
    Route::get('/ready-project', ReadyProjectController::class)->name('ready.project');

    Route::get('/karkas', FrameHouseController::class)->name('frame.house');
    Route::get('/brus', BrusController::class)->name('brus');
    Route::get('/module', ModuleController::class)->name('module');
    Route::get('/ruchnaya-rubka', ManualCuttingController::class)->name('manual.cutting');


    Route::get('/pogonazh', MoldedHouseController::class)->name('molded.house');
    Route::get('/pilomaterial', LumberController::class)->name('lumber');
    Route::get('/product/{id}', ProductController::class)->name('product.single');

    Route::get('/catalog', [CatalogController::class, 'index'])->name('projects');
    Route::get('/catalog/{id}', [CatalogController::class, 'single'])->name('project.single');
    Route::post('/send-catalog', [CatalogController::class, 'sendCatalog'])->name('send.catalog');

    Route::get('/contact', ContactController::class)->name('contacts');
    Route::get('/ipoteka', IpotekaController::class)->name('ipoteka');

    // Route::post('login', AuthController::class)->name('login.post');

    Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'store'])->name('admin.login.store');
    Route::post('/admin/logout', [AdminAuthController::class, 'logoutAdmin'])->name('admin.logout');


    Route::middleware([
        'auth:admin',
    ])->prefix('dashboard')->group(function () {
        Route::get('/', function () {
            return Inertia::render(
                'Dashboard',
                [
                    'projects' => Project::where('type', 'building')->count(),
                    'posts' => Post::count(),
                    'reviews' => Review::count(),
                    'readyProject' => Project::where('type', 'ready')->count(),
                    'sliders' => Slider::count(),
                ]
            );
        })->name('dashboard');

        Route::resources([
            'projects'      =>          ProjectController::class,
            'products'      =>          DashboardProductController::class,
            'posts'         =>          DashboardPostController::class,
            'sliders'       =>          SliderController::class,
            'contacts'      =>          DashboardContactController::class,
            'add-info'      =>          AddInfoController::class,
            'categories'    =>          CategoryController::class,
            'admins'        =>          AdminController::class,
            'reviews'       =>          ReviewsController::class,
            'faqs'          =>          FaqController::class,
        ]);

        Route::post('editor/upload', EditorUploadController::class);
        Route::post('pdf/upload', PDFUploadController::class)->name('upload.file');
    });



    Route::get('test', function () {
        Mail::to('infosibcomfort@gmail.com')->send(new SendClientInfoMail('TEST', '+7 967 555 35 49', 'infosibcomfort@gmail.com'));
    });
