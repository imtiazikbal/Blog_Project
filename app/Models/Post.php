<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected $fillable =[
        'title','slug','image','post_date','description','tag','status','category_id','subcategory_id','user_id'

    ];
    protected $table = 'posts';


    //__Join with sub category__//
    function category(){

        return $this->belongsTo(Category::class, 'category_id'); //category_id
        
       }
       //JOin with Subcategory tabe__//
       function subcategory(){

        return $this->belongsTo(Subcategory::class, 'subcategory_id'); //subcategory_id
        
       }  

       //__join with user__//
       function user(){

        return $this->belongsTo(Subcategory::class, 'user_id'); //user_id
        
       }  
}
