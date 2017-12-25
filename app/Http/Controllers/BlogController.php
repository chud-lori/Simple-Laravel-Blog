<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      // insert biasa
      // $blog = new Blog;
      // $blog->judul = 'Halo Lori';
      // $blog->deskripsi = 'Lori halo ganteng';
      // $blog->save();

      //insert mass asignment
      // Blog::create([
      //   'judul' => 'Halo lah saja hahsid',
      //   'deskripsi' => 'Isi dari lah sajasdkbja yang tadi itu lho',
      //   'created_at' => '12-32-123',
      //   'updated_at' => '2016-12-13 00:12:42',
      // ]);

      // update biasa
      // $blog = Blog::where('judul', 'Halo Lori')->first();
      // $blog->judul = 'Halo Lori update';
      // $blog->save();

      // update mass asignment
      // Blog::find(9)->update([
      //   'judul' => 'Sudah Terganti judulnya',
      //   'deskripsi' => 'Ini juga terganti gan',
      // ]);

      // Delete
      // $blog = Blog::find(1);
      // $blog->delete();

      //Delete kedua, Destroy, bisa make array destroy([1,3])
      // Blog::destroy([8,9]);

      // SoftDeletes
      // $blog = Blog::find(2);
      // $blog->delete();

      // nampilin yang udah dihapus
      // $blogs = Blog::withTrashed()->get();

      // restore soft deletes
      // Blog::withTrashed()->restore();


      $blogs = Blog::paginate(5);
      // dd($blogs);


      return view('blog/beranda', ['blogs' => $blogs]);
    }



    public function tampil($id)
    {
      // $nilai = 'Ini adalah halaman ke ' . $id;
      // $aku = 'Lori';
      // $orang = ['Lori', 'Nur', 'Saya'];
      // $orang = DB::table('orang')->where('nama','like', '%a%')->get();

      //insert database
      // DB::table('orang')->insert([
      //   ['nama' => 'bambaksdjang', 'pass' => '4421eqw']
      // ]);

      // DB::table('orang')->where('nama', 'bambang')->update([
      //   'nama' => 'bambangNew'
      // ]);

      // DB::table('orang')->where('id', '>', 10)->delete();


      // $orang = DB::table('orang')->get();

      // dd($orang);

      // $alert = '<script> alert("Hai Lori!") </script>';

      $blog = Blog::find($id);

      if(!$blog){
        // dd('Not Found Gan');
        abort(404);
      }

      return view('blog/single', ['blog' => $blog]);
    }


    public function buat()
    {
      return view('blog/buat');
    }

    public function tambah(Request $request)
    {
      $this->validate($request, [
        'judul' => 'required|min:5',
        'deskripsi' => 'required|min:5|max:10'
      ]);


      $buatIsi = new Blog;
      $buatIsi->judul = $request->judul;
      $buatIsi->deskripsi = $request->deskripsi;
      $buatIsi->save();

      return redirect('blog');
    }

    public function ubah($id)
    {
      $ubah = Blog::find($id);

      if(!$ubah){
        abort(404);
      }

      return view('blog/ubah', ['ubah' => $ubah]);
    }

    public function update(Request $request, $id)
    {

      $ubahIsi = Blog::find($id);
      $ubahIsi->judul = $request->judul;
      $ubahIsi->deskripsi = $request->deskripsi;
      $ubahIsi->save();

    //  cek masuk belum nya
    //   if($d & $i){
    //     dd('akbd');
    //   }
    //   else {
    //     dd('error');
    //   }
    //   // dd('sukses');
    // }

    return redirect('blog/' . $id);
  }

  public function hapus($id)
  {
    $hapus = Blog::find($id);
    $hapus->delete();

    return redirect('blog');
  }
}
