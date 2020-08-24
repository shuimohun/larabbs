<?php

namespace App\Http\Requests;

class TopicRequest extends Request
{
    public function rules()
    {
<<<<<<< HEAD
        switch ($this->method()) {
            // CREATE
            case 'POST':
                // UPDATE
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'title' => 'required|min:2',
                        'body' => 'required|min:3',
                        'category_id' => 'required|numeric',
                    ];
                }
            case 'GET':
            case 'DELETE':
            default:
                {
                    return [];
                };
=======
        switch($this->method())
        {
            // CREATE
            case 'POST':
            {
                return [
                    // CREATE ROLES
                ];
            }
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    // UPDATE ROLES
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            }
>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
        }
    }

    public function messages()
    {
        return [
<<<<<<< HEAD
            'title.min' => '标题必须至少两个字符',
            'body.min' => '文章内容必须至少三个字符',
=======
            // Validation messages
>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
        ];
    }
}
