<?php

class ArticleController extends \BaseController
    {

    protected $layout = 'layouts.master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
        {
        return Response::json(Article::get());
        }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
        {
        Article::create(array(
            'post_autor' => Input::get('post_autor'),
            'thema' => Input::get('thema'),
            'text' => Input::get('text')
        ));
        return Response::json(array('success' => true));
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
        {
        Article::destroy($id);

        return Response::json(array('success' => true));
        }

    }
