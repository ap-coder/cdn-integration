@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.post.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.posts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.id') }}
                        </th>
                        <td>
                            {{ $post->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.title') }}
                        </th>
                        <td>
                            {{ $post->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.page_text') }}
                        </th>
                        <td>
                            {!! $post->page_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.excerpt') }}
                        </th>
                        <td>
                            {{ $post->excerpt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.featured_image') }}
                        </th>
                        <td>
                            @if($post->featured_image)
                                <a href="{{ $post->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $post->featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $post->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $post->meta_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.facebook_title') }}
                        </th>
                        <td>
                            {{ $post->facebook_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.facebook_desc') }}
                        </th>
                        <td>
                            {{ $post->facebook_desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.twitter_post_description') }}
                        </th>
                        <td>
                            {{ $post->twitter_post_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.twitter_post_title') }}
                        </th>
                        <td>
                            {{ $post->twitter_post_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $post->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.slug') }}
                        </th>
                        <td>
                            {{ $post->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.contributor') }}
                        </th>
                        <td>
                            {{ $post->contributor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.contributor_link') }}
                        </th>
                        <td>
                            {{ $post->contributor_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.contributor_2') }}
                        </th>
                        <td>
                            {{ $post->contributor_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.contributor_2_link') }}
                        </th>
                        <td>
                            {{ $post->contributor_2_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.post.fields.attachments') }}
                        </th>
                        <td>
                            @foreach($post->attachments as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.posts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection