<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Leader;
use App\Models\Service;
use App\Models\Banner;
use App\Models\Statik;
use App\Models\Category;
use App\Models\Dinasdetail;
use App\Models\Instansi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        $posts = Post::with('tags')->take(3)->latest()->get();
        $events = Event::take(3)->latest()->get();
        $sliders = Slider::latest()->get();
        $leaders = Leader::latest()->simplePaginate(3);
        $services1 = Service::where('posisi', 'atas')->get();
        $services2 = Service::where('posisi', 'bawah')->get();
        $banners1 = Banner::where('kolom', 'kolom1')->get();
        $banners2 = Banner::where('kolom', 'kolom2')->get();
        $banners3 = Banner::where('kolom', 'kolom3')->get();
        $visimisi = Statik::where('halaman', 'visimisi')->get();
        return view('bolmongkab/index',compact(
            'posts','events','sliders','leaders','services1','services2',
            'banners1','banners2','banners3','visimisi'));
    }

    public function eventDetail(Request $request, $id){
        $events = Event::where('id', $id)->firstOrFail();
        return view('bolmongkab/detail/agenda-detail',compact('events'));
    }
    
    public function visimisi(){
        $visimisi = Statik::where('halaman', 'visimisi')->get();
        return view('bolmongkab/detail/visimisi',compact('visimisi'));
    }

    public function bupati(){
        $bupati = Statik::where('halaman', 'bupati')->get();
        return view('bolmongkab/detail/bupati',compact('bupati'));
    }

    public function wakilBupati(){
        $wakilbupati = Statik::where('halaman', 'wakilbupati')->get();
        return view('bolmongkab/detail/wakilbupati',compact('wakilbupati'));
    }

    public function sekda(){
        $sekda = Statik::where('halaman', 'sekda')->get();
        return view('bolmongkab/detail/sekda',compact('sekda'));
    }

    public function event(){
        $events = Event::latest()->paginate(5);
        return view('bolmongkab/detail/agenda',compact('events'));
    }

    public function sejarah(){
        $sejarah = Statik::where('halaman', 'sejarah')->get();
        $detailsejarah = Statik::where('halaman', 'detailsejarah')->get();
        return view('bolmongkab/detail/sejarah',compact('sejarah','detailsejarah'));
    }

    public function dinas(){
        $dinasdetails = Instansi::where('kategori','dinas')->paginate(10);
        return view('bolmongkab/detail/dinas',compact('dinasdetails'));
    }

    public function kecamatan(){
        $kecamatan = Instansi::where('kategori','kecamatan')->paginate(10);
        return view('bolmongkab/detail/kecamatan',compact('kecamatan'));
    }

    public function puskesmas(){
        $puskesmas = Instansi::where('kategori','puskesmas')->paginate(10);
        return view('bolmongkab/detail/puskesmas',compact('puskesmas'));
    }

    public function badandaerah(){
        $badandaerah = Instansi::where('kategori','badandaerah')->paginate(10);
        return view('bolmongkab/detail/badandaerah',compact('badandaerah'));
    }

    public function desa(){
        $desa = Instansi::where('kategori','desa')->paginate(10);
        return view('bolmongkab/detail/desa',compact('desa'));
    }

    public function pengumuman(Request $request) {
        $kategori = Category::latest()->get();
        $posts = Post::latest()->Paginate(5);
        $sidebar = Post::skip(5)->Paginate(5);
        $tags = Tag::get();
        
        return view('bolmongkab/detail/pengumuman',compact('posts','kategori','sidebar','tags'));
    }
    
    public function pengumumanDetail(Request $request, $id){
        if($request->has('cari')){
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
            $posts = Post::where('title','LIKE','%'.$request->cari.'%')->with('kategori')->get();
            return view('bolmongkab/detail/pengumuman',compact('posts','kategori','sidebar','tags'));
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = Post::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
            return view('bolmongkab/detail/pengumuman-detail',compact('posts','sidebar','kategori','tags'));
        }

    }

    public function hascarpengumuman(Request $request) {
        if($request->has('cari')){
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
            $posts = Post::where('title','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = Post::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = Post::skip(5)->Paginate(5);
        }
        return view('bolmongkab/detail/hascarpengumuman',compact('posts','kategori','sidebar','tags'));
    }
}
