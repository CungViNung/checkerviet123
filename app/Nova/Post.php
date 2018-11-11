<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsToMany;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Illuminate\Http\Request;
use Inspheric\Fields\Indicator;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\\Post';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            TextWithSlug::make('Title')
                ->slug('Slug')
                ->sortable()
                ->rules('required', 'max:225')
                ->creationRules('unique:posts,title')
                ->updateRules('unique:posts,title,{{resourceId}}'),

            Slug::make('Slug'),

            Textarea::make('Description')
                ->rules('max:225'),

            Textarea::make('Content'),

            Image::make('Image')
                ->disk('public')
                ->path('post')
                ->rules('required')
                ->storeOriginalName('image')
                ->prunable(),

            BelongsTo::make('Category', 'category', 'App\Nova\Categories'),

            BelongsToMany::make('Tag'),

            Select::make('Status')
                ->options([
                    '1' => 'Chờ phê duyệt',
                    '2' => 'Đã phê duyệt',
                    '3' => 'Không phê duyệt',
                ])
                ->hideFromIndex()
                ->hideWhenCreating()
                ->hideFromDetail(),

            Indicator::make('Status')
                ->labels([
                    '1' => 'Chờ phê duyệt',
                    '2' => 'Đã phê duyệt',
                    '3' => 'Không phê duyệt',
                ])
                ->colors([
                    '1' => 'yellow',
                    '2' => 'green',
                    '3' => 'red',
                ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [new Metrics\NewPosts];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [new Filters\PostStatus,];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new Actions\NotApproved, 
            new Actions\Approved,
        ];
    }
}
