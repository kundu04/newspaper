<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Add;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index(){
       $data['title']= 'Newspaper | PNT';
       $data['categories']=Category::select(['id','name','slug'])->where('status','Active')->get();
       $data['ads_master']=Add::where('status','Active')
           ->where('id',4)
           ->limit(1)
           ->get();
       $data['ads_footer']=Add::where('status','Active')
          ->where('id',5)
           ->limit(1)
           ->get();

       $data['sports']=Post::where('status','published')
           ->where('category_id','6')
           ->orderby('id','Asc')
           ->limit(4)
           ->get();
       $data['health_news']=Post::where('status','published')
           ->where('category_id','4')
           ->orderby('id','Asc')
           ->limit(4)
           ->get();
       $data['travels']=Post::where('status','published')
           ->where('category_id','5')
           ->orderby('id','Asc')
           ->get();
       $data['business_news']=Post::where('status','published')
           ->where('category_id','2')
           ->orderby('id','Desc')
           ->get();
       $data['politics_news']=Post::where('status','published')
           ->where('category_id','8')
           ->orderby('id','Desc')
           ->get();
       $data['international_news']=Post::where('status','published')
           ->where('category_id','7')
           ->orderby('id','Desc')
           ->limit(4)
           ->get();
       $data['recent_posts']=Post::where('status','published')
           -> limit(6)
           ->orderby('id','Desc')
           ->get();
       $data['popular_post']=Post::where('status','published')
           -> limit(4)
           ->orderby('total_hit','Desc')
           ->get();

       $data['breaking_news']=Post::select(['id','slug','title'])
           ->where('breaking_news','yes')
           ->where('status','published')
           ->get();
       $data['International']=Post::select(['id','slug','title'])
           ->where('category_id','7')
           ->where('status','published')
           ->get();
       $data['last_one_features'] = Post::with(['relCategory','relAuthor'])
           ->where('status','Published')
           ->where('is_featured','Yes')
           ->orderBy('id','Desc')
           ->limit(1)
           ->get();
       $data['first_two_features'] = Post::with(['relCategory','relAuthor'])
           ->where('status','Published')
           ->where('is_featured','Yes')
           ->orderBy('id','Asc')
           ->limit(2)
           ->get();
       return view('frontend/home',$data);

   }


    public function category_post($slug){
        $data['categories']=Category::select(['id','name','slug'])->where('status','Active')->get();
        $data['ads_master']=Add::where('status','Active')
            ->where('id',4)
            ->limit(1)
            ->get();
        $data['category_slug']= Category::select(['id','slug'])->where('slug',$slug)->First();
        $data['posts']=Post::with('relCategory','relAuthor')
            ->where('category_id', $data['category_slug']->id)
            ->where('status','published')
            ->orderby('id','desc')
            ->get();

        $data['ads_footer']=Add::where('status','Active')
            ->where('id',5)
            ->limit(1)
            ->get();
        $data['breaking_news']=Post::select(['id','slug','title'])
            ->where('breaking_news','yes')
            ->where('status','published')
            ->get();
        $data['International']=Post::select(['id','slug','title'])
            ->where('category_id','7')
            ->where('status','published')
            ->get();
        $data['title']= $slug;

        return view('frontend.category_post',$data);
    }

    public function details($slug){
       Post::where('slug',$slug)->increment('total_hit');
       $data['popular_post']=Post::where('status','published')
       -> limit(4)
       ->orderby('total_hit','Desc')
       ->get();
       $data['details']=Post::with('relCategory','relAuthor')->where('slug',$slug)->First();
        $data['ads_footer']=Add::where('status','Active')
            ->where('id',5)
            ->limit(1)
            ->get();
        $data['categories']=Category::select(['id','name','slug'])->where('status','Active')->get();
        $data['ads_master']=Add::where('status','Active')
            ->where('id',4)
            ->limit(1)
            ->get();
        $data['recent_posts']=Post::where('status','published')
            -> limit(6)
            ->orderby('id','Desc')
            ->get();

         $data['related_posts']=Post::where('category_id',$data['details']->category_id)
            ->where('status','published')
            ->where('id','!=', $data['details']->id)
            ->limit(2)
            ->get();
        $data['breaking_news']=Post::select(['id','slug','title'])
            ->where('breaking_news','yes')
            ->where('status','published')
            ->get();
        $data['International']=Post::select(['id','slug','title'])
            ->where('category_id','7')
            ->where('status','published')
            ->get();
        $data['title']=  $data['details']->title;

        return view('frontend.details_post',$data);

    }
    public function search(Request $request){
        $data['categories']=Category::select(['id','name','slug'])->where('status','Active')->get();
        $data['ads_master']=Add::where('status','Active')
            ->where('id',4)
            ->limit(1)
            ->get();
        $data['breaking_news']=Post::select(['id','slug','title'])
            ->where('breaking_news','yes')
            ->where('status','published')
            ->get();
        $data['International']=Post::select(['id','slug','title'])
            ->where('category_id','7')
            ->where('status','published')
            ->get();
        $data['ads_footer']=Add::where('status','Active')
            ->where('id',5)
            ->limit(1)
            ->get();
        $data['posts']=Post::with('relCategory','relAuthor')

            ->where('title','like','%'.$request->search.'%')
            ->orWhere('description','like','%'.$request->search.'%')
            ->where('status','published')
            ->orderby('id','desc')
          ->get();
        $data['title']=$request->search.' | '.'search | PNT';

        return view('frontend.search',$data);
    }

}
