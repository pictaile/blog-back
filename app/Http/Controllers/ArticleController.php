<?php
/**
 * Created by PhpStorm.
 * User: kostantyn
 * Date: 03.04.19
 * Time: 15:03
 */

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController
{

    public function __construct(Request $request)
    {

    }

    /**
     * get articles or by id
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getArticles($id = 0)
    {
        Validator::make(['id' => $id], ['id' => 'integer:id'])->validate();
        $response = $id ? Article::where('id', $id)->first() : Article::get(['id','title', 'likes', 'path']);

        return response()->json($response );
    }

    /**
     * update article
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function save(Request $request)
    {
        Validator::make($request->all(), ['id' => 'required:id', 'title' => 'required|max:255', 'content' => 'required'])->validate();

        Article::where('id', $request->id)
            ->update([
                'content' => $request->get('content'),
                'title' => $request->get('title'),
                ]);


        return response()->json([]);
    }
    /**
     * update article
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function savelikes(Request $request)
    {
        Validator::make($request->all(), ['id' => 'required:id', 'likes' => 'required'])->validate();

        Article::where('id', $request->id)
            ->update([
                'likes' => $request->get('likes')
                ]);


        return response()->json([]);
    }

}