<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        $comment = new Comment(array(
            'article_id' => $request->get('article_id'),
            'user_id' => $request->get('user_id'),
            'content' => $request->get('content'),
            'article_type' => $request->get('article_type')
        ));

        $comment->save();

        return redirect()->back()->with('status', 'Your comment has been created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $comment = Comment::whereSlug($slug)->firstOrFail();
        $comment->delete();
        return redirect('/comments')->with('status', 'The comment '.$slug.' has been deleted!');
    }
}
