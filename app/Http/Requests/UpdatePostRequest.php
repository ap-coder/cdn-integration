<?php

namespace App\Http\Requests;

use App\Models\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('post_edit');
    }

    public function rules()
    {
        return [
            'title'                    => [
                'string',
                'required',
            ],
            'meta_title'               => [
                'string',
                'nullable',
            ],
            'meta_description'         => [
                'string',
                'nullable',
            ],
            'facebook_title'           => [
                'string',
                'nullable',
            ],
            'facebook_desc'            => [
                'string',
                'nullable',
            ],
            'twitter_post_description' => [
                'string',
                'nullable',
            ],
            'twitter_post_title'       => [
                'string',
                'nullable',
            ],
            'slug'                     => [
                'string',
                'nullable',
            ],
            'contributor'              => [
                'string',
                'nullable',
            ],
            'contributor_link'         => [
                'string',
                'nullable',
            ],
            'contributor_2'            => [
                'string',
                'nullable',
            ],
            'contributor_2_link'       => [
                'string',
                'nullable',
            ],
        ];
    }
}
