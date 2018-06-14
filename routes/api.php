<?php

Route::get('/', function (\Illuminate\Http\Request $request) {
    $ARRAY = ['Ok', 'Noted', 'Sounds good'];
$size = count($ARRAY);
$size--;
$rand = rand(0, $size);
$randomElem = $ARRAY[$rand];
$comment = new \App\Comment();
$comment->user_id = $request->input('userid');
$comment->comment = $request->input('comment');
$comment->project_id = $request->input('projectId');
$comment->save();
return $randomElem;
});