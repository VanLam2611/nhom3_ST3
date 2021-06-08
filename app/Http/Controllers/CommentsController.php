<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use SweetAlert;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        alert()->message('You are working!');
        $comment = new Comment(array(
            'article_id' => $request->get('article_id'),
            'content' => $request->get('content'),
            'article_type' => $request->get('article_type')
        ));

        $comment->save();

        return redirect()->back()->with('status', 'Your comment has been created!');
    }
}
